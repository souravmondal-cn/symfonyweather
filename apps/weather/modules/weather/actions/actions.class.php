<?php

class weatherActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        
    }

    public function executeGetWeather(sfWebRequest $request) {

        $this->getResponse()->setContentType('application/json');

        $city = $request->getParameter('city');

        if (empty($city)) {
            return $this->renderText(json_encode('false'));
        }

        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Accept-language: en\r\n" .
                "Cookie: foo=bar\r\n"
            )
        );
        $context = stream_context_create($opts);
        $weatherApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric";
        $weatherApiResponse = json_decode(file_get_contents($weatherApiUrl, false, $context));
        //print_r($weatherApiResponse);

        if ($weatherApiResponse->cod == 404) {
            return $this->renderText(json_encode('not_found'));
        }

        $weatherInfo = array(
            "humidity" => $weatherApiResponse->main->humidity,
            "temp" => $weatherApiResponse->main->temp,
            "temp_min" => $weatherApiResponse->main->temp_min,
            "temp_max" => $weatherApiResponse->main->temp_max,
            "main" => $weatherApiResponse->weather[0]->main,
            "description" => $weatherApiResponse->weather[0]->description
        );

        return $this->renderText(json_encode($weatherInfo));
    }

}

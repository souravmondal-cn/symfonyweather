$('.getWeather').click(function (event) {
    $("#result").html("");
    $(".progress").removeClass("hidden");
    event.preventDefault();
    var city = $("#city").val();
    if (city === "") {
        $(".progress").addClass("hidden");
        alert("Enter a valid city name");
        return;
    }

    $.ajax({
        url: '/weather/GetWeather',
        type: 'GET',
        dataType: 'json',
        data: {
            city: city
        },
        success: function (data) {
            $(".progress").addClass("hidden");
            if (data === "not_found") {
                alert("City Not Found");
                return;
            } else {
                var weatherResult = '<div class="alert alert-info spacer" role="alert">';
                weatherResult += '<br/><strong>Humidity</strong>: ' + data.humidity + ' %';
                weatherResult += '<br/><strong>Current Temprature</strong>: ' + data.temp + ' °C';
                weatherResult += '<br/><strong>Max temp</strong>: ' + data.temp_max + ' °C';
                weatherResult += '<br/><strong>Min temp</strong>: ' + data.temp_min + ' °C';
                weatherResult += '<br/><strong>Weather Condition</strong>: ' + data.main;
                weatherResult += '<br/><strong>Detail</strong>: ' + data.description;
                weatherResult += '</div>';
                $("#result").html(weatherResult);
                return;
            }
        },
        error: function () {
            $(".progress").addClass("hidden");
            alert("Server Error, Contact Admin");
        }
    });

});



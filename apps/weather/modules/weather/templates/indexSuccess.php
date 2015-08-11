<div class="row">
    <div class="col-xs-6 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Weather Today</div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                        <div class="input-group-addon">Location City</div>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City (ie: London)">
                    </div>
                </div>
                <button class="btn btn-primary getWeather">Get Weather</button>
                <div class="progress spacer hidden">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="105" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">Getting Weather....Please Wait</span>
                    </div>
                </div>
                <div id="result"></div>
            </div>
        </div>
    </div>
</div>




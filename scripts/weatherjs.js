// Open Weather API call
$(document).ready(function () {


    const todayWeatherCtn = document.querySelector('#todayWeatherCtn');
    const checkWeatherBtn = document.querySelector('#checkWeatherBtn');

    let zipCode = '35244';
    let tempUnit = 'F';
    let tempType = 'imperial';

    $('.tempUnit').click(changeUnits);

    checkWeatherBtn.onclick = function () {
        let zipInput = document.querySelector('#zipInput').value;

        if (!$.isNumeric(zipInput)) {
            alert('Please enter a valid zip code into the input field.')
            return
        }

        zipCode = zipInput;
        zipWeather();
    }

    $('.raceWeatherBtn').click(function () {
        let lat = $(this).data('latitude');
        let long = $(this).data('longitude');
        latLongWeather(lat, long);
    });

    function changeUnits() {
        switch (tempUnit) {
            case 'F':
                tempType = 'metric';
                tempUnit = 'C';
                break;
            case 'C':
                tempType = 'imperial';
                tempUnit = 'F';
                break;
        }

        $('.tempUnit').toggleClass('bg-dark text-light');
    }


    function zipWeather() {
        let url = `https://api.openweathermap.org/data/2.5/weather?zip=${zipCode}&appid=5a046e91d1b54a6d7690f83d9ba1cfa4&units=${tempType}`;
        callApi(url);
    }

    function latLongWeather(lat, long) {
        let url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${long}&appid=5a046e91d1b54a6d7690f83d9ba1cfa4&units=${tempType}`;
        callApi(url);
    }

    function callApi(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function (res) {
                let name = res.name;
                if (res.sys.country) name += ', ' + res.sys.country

                let output = (`
                    <div class="text-center">
                        <h3> Today's Weather in ${name}</h3>
                        <div class="row">
                            <div class="col-12"><span class="fs-4 fw-bold">${res.main.temp} ${tempUnit}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-12"><span class="text-capitalize">${res.weather[0].description}</span></div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-bold">High:</span><span> ${res.main.temp_max} ${tempUnit}</span>
                            </div>
                            <div class="col-6">
                            <span class="fw-bold">Low:</span><span> ${res.main.temp_min} ${tempUnit}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><span class="fw-bold">Humidity:</span><span> ${res.main.humidity}%</span></div>
                        </div>
                    </div>`)
                console.log(res)
                todayWeatherCtn.innerHTML = output;
            }
        })
    }

    // url for lat and long https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={API key}
    // url for zip  https://api.openweathermap.org/data/2.5/weather?zip={zip code},{country code}&appid={API key}   
    //https://openweathermap.org/current#current_JSON

    zipWeather()
});
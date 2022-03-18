// Open Weather API call

const todayWeatherCtn = document.querySelector('#todayWeatherCtn')

$(document).ready(zipWeather("35244"))


let tempUnit = 'F'



function zipWeather(zipCode) {
    let url = `https://api.openweathermap.org/data/2.5/weather?zip=${zipCode}&appid=5a046e91d1b54a6d7690f83d9ba1cfa4&units=imperial`;
    console.log(url)
    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            let res = response;
            let output = (`
                    <div class="col-6 text-center">
                        <h3> Today's Weather in ${res.name} </h3>
                        <div class="row">
                            <div class="col-12"><span>${res.main.temp} ${tempUnit}</span></div>
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




// url for lat and long http://api.openweathermap.org/geo/1.0/reverse?lat={lat}&lon={lon}&limit={limit}&appid={API key}

// url for zip  https://api.openweathermap.org/data/2.5/weather?zip={zip code},{country code}&appid={API key}   


//https://openweathermap.org/current#current_JSON
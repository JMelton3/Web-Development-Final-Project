<?php

        
    include('scripts/dbconnection.php');

    $dbh = new Dbconnection();
    $conn = $dbh->getConnection();

    $sql = 'SELECT * FROM `f1_calendar`' ;

    $stmnt = $conn->prepare($sql); //Prepare our query for submission
    $stmnt->execute(); // Query is executed 
    $results = $stmnt->fetchAll(); // Our query results are stored in the "$results" variable now





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/mycss.css">

</head>

<body>
    <div id="bg-imagenextrace"></div>
    <div id="pagewrapper">
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">F1 Fan Project</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Drivers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Next Race</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div id="maincontent">
                <div id="weatherBox">
                    <div id="weatherCtn" class="my-5">
                        <div class="row">
                            <div class="col-12 col-xl-6 col-lg-4 col-md-12 col-sm-12 p-4 bg-info">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <div class="d-flex justify-content-center">
                                            <input type="text" name="zipInput" id="zipInput"
                                                placeholder="Zip code" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 fs-4 text-center mb-2">
                                        <div id="tempTypeF" class="tempUnit d-inline-block w-25 bg-dark text-light">
                                            <span>F</span></div>
                                        <div id="tempTypeC" class="tempUnit d-inline-block w-25"><span>C</span></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center">
                                            <input type="button" value="Check Weather" name="checkWeatherBtn"
                                                id="checkWeatherBtn" class="p-2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="todayWeatherCtn" class="col-12 col-xl-6 col-lg-8 col-md-12 col-sm-12 text-center">
                                <div>
                                    <h3>Today's Weather</h3>
                                    <div class="row">
                                        <div class="col-12"><span>88 F</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><span>Light Rain</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <span>High: 95 F</span>
                                        </div>
                                        <div class="col-6">
                                            <span>Low: 74 F</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><span>Humidity: 10%</span></div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>


                    <div id="raceWeather">
                        <div class="row">
                        <?php
                            foreach($results as $result){
                                echo '
                                <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-1">
                                    <div class="raceWeatherCtn">
                                        <div class="text-center"><span>Round ' . $result->round . '</span></div>
                                        <div class="text-center"><span>' . $result->raceName . '</span></div>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="raceWeatherBtn" data-latitude="' . $result->latitude .'" data-longitude="' . $result->longitude .'">Check Weather</button>
                                        </div>
                                    </div>
                                </div>
                                
                                ';
                            };
                        ?>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="raceWeatherCtn">
                                    <div class="row text-center"><span>Round 1</span></div>
                                    <div class="row text-center my-1"><span>Bahrain GP</span></div>
                                    <div class="d-flex justify-content-center mt-1"><input type="button"
                                            value="Check Weather" name="raceWeather"></div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="raceWeatherCtn">
                                    <div class="row text-center"><span>Round 1</span></div>
                                    <div class="row text-center"><span>Bahrain GP</span></div>
                                    <div class="d-flex justify-content-center"><input type="button"
                                            value="Check Weather" name="raceWeather"></div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="raceWeatherCtn">
                                    <div class="row text-center"><span>Round 1</span></div>
                                    <div class="row text-center"><span>Bahrain GP</span></div>
                                    <div class="d-flex justify-content-center"><input type="button"
                                            value="Check Weather" name="raceWeather"></div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="raceWeatherCtn">
                                    <div class="row text-center"><span>Round 1</span></div>
                                    <div class="row text-center"><span>Bahrain GP</span></div>
                                    <div class="d-flex justify-content-center"><input type="button"
                                            value="Check Weather" name="raceWeather"></div>
                                </div>
                            </div> 
                        </div>
                        -->



                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts/jsFunctions.js"></script>

</body>

</html>
<?php
    include('scripts/dbconnection.php');
    $dbh = new Dbconnection();
    $conn = $dbh->getConnection();
    $sql = 'SELECT * FROM `f1_calendar`' ;
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();
    $results = $stmnt->fetchAll();
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
    <?php
        include('components/header.php');
    ?>
        <div class="container">
            <div id="maincontent">
                <div id="weatherBox">
                    <div id="weatherCtn" class="my-5">
                        <div class="row">
                            <div id="weatherForm" class="col-12 col-lg-4 col-md-4 col-sm-12 p-4">
                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <div class="d-flex justify-content-center">
                                            <input type="text" name="zipInput" id="zipInput"
                                                placeholder="Zip code" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 fs-4 text-center mb-2">
                                        <div id="tempTypeF" class="tempUnit d-inline-block w-25 activeTemp text-light">
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
                            <div id="todayWeatherCtn" class="col-12 col-lg-8 col-md-8 col-sm-12 text-center">
                            </div>
                        </div>
                    </div>
                    <div id="raceWeather">
                        <div class="row">
                        <?php
                            // This does a pull from an external database and displays the weather for each race based on 
                                // the longitude and latitude of where the race is located
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('components/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts/jsFunctions.js"></script>
    <!--This is the js to call the openwether api call -->
    <script src="scripts/weatherApiCall.js"></script>    
</body>
</html>
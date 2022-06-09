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
    <div id="bg-image"></div>
    <div id="pagewrapper">
        <?php
        include('components/header.php');
    ?>
        <div class="container">
            <div id="maincontent" class="comparePage">
                <div class="row">
                    <div id="introstats" class="row mt-2">
                        <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <div id="driverphoto">
                                <img class="img-fluid"
                                    src="https://celebs.infoseemedia.com/wp-content/uploads/2020/12/Max-Verstappen.png"
                                    alt="Max Verstappen">
                            </div>
                        </div>
                        <div class="col-12 col-xl-8 col-lg-8 col-md-6 sm-col-6">
                            <div class="row">
                                <div id="rbteamlogo" class="col-12 col-xl-2 col-lg-4 col-md-6 col-sm-12">
                                    <img src="img/redbulllogo.png" alt="red bull team logo" class="img-fluid ps-3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-12 col-md-4 col-sm-12 mb-2"><span class="h2">Max</span></div>
                                <div class="col-12 col-xl-12 col-md-8 col-sm-12"><span
                                        class="fw-bold h1">Verstappen</span></div>
                            </div>
                            <div class="statBox">
                                <div class="row mt-4 px-3 pt-2 fs-6">
                                    <div class="col-12 col-md-6 col-sm-12 p-2">
                                        <div class="row">
                                            <div class="col-6">
                                                <span>Nationality</span>
                                            </div>
                                            <div class="col-6">
                                                <span>Born</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span>Dutch</span>
                                            </div>
                                            <div class="col-6">
                                                <span>9-30-1997</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-sm-12 p-2">
                                        <div class="row">
                                            <div class="col-6 col-md-5 col-lg-6">
                                                <span>Podiums</span>
                                            </div>
                                            <div class="col-6 col-md-7 col-lg-6">
                                                <span>Years active</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-6 col-md-5 col-lg-6 fs-5">
                                                <span>60</span>
                                            </div>
                                            <div class="col-6 col-md-7 col-lg-6 fs-5">
                                                <span>7</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="2021Finish">
                                <div class="row mt-3 ms-2">
                                    <div class="co-12">
                                        <span id="Champion2021">2021 Champion of the World</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="stats" class="mt-2">
                    <div class="row">
                        <div id="driverrecord2021" class="col-12 col-sm-6 col-lg-4 col-xl-4 py-4 px-3">
                            <div class="mx-2 p-3 border statBox">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <span class="ps-2 pt-1">2021 F1 Season Record</span>
                                    </div>
                                </div>
                                <div class="quickStats">
                                    <div class="row mx-1 statBar">
                                        <div class="col-9">
                                            <span>Championship finish</span>
                                        </div>
                                        <div class="col-3">
                                            <span>1st</span>
                                        </div>
                                    </div>
                                    <div class="row m-1 statBar">
                                        <div class="col-9 ">
                                            <span>Race Wins</span>
                                        </div>
                                        <div class="col-3">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="row m-1 statBar">
                                        <div class="col-9">
                                            <span>Points scored</span>
                                        </div>
                                        <div class="col-3">
                                            <span>395</span>
                                        </div>
                                    </div>
                                    <div class="row m-1 statBar">
                                        <div class="col-9">
                                            <span>Pole positions</span>
                                        </div>
                                        <div class="col-3">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="row m-1 statBar">
                                        <div class="col-9">
                                            <span>Avg points</span>
                                        </div>
                                        <div class="col-3">
                                            <span>18</span>
                                        </div>
                                    </div>
                                    <div class="row m-1 statBar">
                                        <div class="col-9">
                                            <span>Podiums</span>
                                        </div>
                                        <div class="col-3">
                                            <span>18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="driverrecordtodate" class="quickStats col-12 col-sm-6 col-lg-4 col-xl-4 py-4 px-3">
                            <div class="mx-2 border statBox p-3">
                                <div class="row mb-3">
                                    <div class="col-12 ">
                                        <span class="ps-2 pt-1">F1 Career Record</span>
                                    </div>
                                </div>
                                <div class="row mx-1 statBar">
                                    <div class="col-9 col-xl-9 col-lg-10 col-md-10 col-sm-11">
                                        <span>Driver championships won</span>
                                    </div>
                                    <div class="col-3 col-xl-3 col-lg-2 col-md-2 col-sm-1">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="row m-1 statBar">
                                    <div class="col-9">
                                        <span>Pole positions</span>
                                    </div>
                                    <div class="col-3">
                                        <span>20</span>
                                    </div>
                                </div>
                                <div class="row m-1 statBar">
                                    <div class="col-9">
                                        <span>Points scored</span>
                                    </div>
                                    <div class="col-3">
                                        <span>1557</span>
                                    </div>
                                </div>
                                <div class="row m-1 statBar">
                                    <div class="col-9 col-xl-9 col-lg-9 col-md-9 col-sm-10">
                                        <span>Grands Prix entered</span>
                                    </div>
                                    <div class="col-3 col-xl-3 col-lg-3 col-md-3 col-sm-2">
                                        <span>141</span>
                                    </div>
                                </div>
                                <div class="row m-1 statBar">
                                    <div class="col-9">
                                        <span>Total Laps</span>
                                    </div>
                                    <div class="col-3">
                                        <span> 7,333</span>
                                    </div>
                                </div>
                                <div class="row m-1 statBar">
                                    <div class="col-9">
                                        <span>Podiums</span>
                                    </div>
                                    <div class="col-3">
                                        <span>60</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="compare" class="quickStats col-12 col-sm-6 col-lg-4 col-xl-4 py-4 px-3">
                            <div class="mx-2 ps-2 border statBox">
                                <div class="p-2">
                                    <div id="comparelink" class="row ">
                                        <div class="col-12">
                                            <span class="ps-2 pt-1">Compare To 2021 Rival</span>
                                            <span><a href="#" class="text-decoration-none text-muted">
                                                    &#8594;</a></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 ps-1">
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <span class="fs-5">Lewis</span>
                                                    <span class="fw-bold d-block fs-5">Hamilton</span>
                                                </div>
                                            </div>
                                            <div class="statBar fs-6">
                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <span>Points</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>Avg Points</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-6">
                                                        <span>387.5</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>17.6</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="statBar">
                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <span>Quali</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>Race</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-6">
                                                        <span>9-13</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span>11-10</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <span class="fw-bold">Championship place</span>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-12">
                                                    <span>2nd</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 align-bottom">
                                            <div class="rivalimg">
                                                <img class="mt-4 rivalimg"
                                                    src="https://www.pngplay.com/wp-content/uploads/13/Lewis-Hamilton-Background-PNG-Image.png"
                                                    alt="Lewis Hamilton">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</body>
</html>
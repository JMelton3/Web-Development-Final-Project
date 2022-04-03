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

<body class="d-flex flex-column">
    <?php
        include('components/header.php');
    ?>

    <div id="pagewrapper">
        <div class="container">
            <div id="maincontent">
                <div class="p-5 mt-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <h4>Welcome To My Page</h4>
                        <p>Hello my name is John Melton and thank you for visiting my page. Click on my links to explore the page.
                        </p>


                        <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='maxverstappen.php' ">F1 Stats</button>
                        <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='weatherforraces.php' ">Weather</button>
                        <button class="btn btn-primary btn-lg" type="button" onclick="window.location.href='contactme.php' ">About Me</button>
                        
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
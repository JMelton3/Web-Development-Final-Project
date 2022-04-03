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
                <div class="imgContainer">
                    <img src="img/family.jpg" alt="My family">
                    <img src="img/harper.jpg" alt="My daughter">
                </div>            
                <h3 id="aboutMeHeader" class="mt-3 mb-4 text-center">About Me</h3>
                <div id="aboutMeCtn" class="mb-4 mx-2">
                    <img src="https://www.fillmurray.com/250/250" alt="random image" id="aboutMePhoto"
                        class="float-start pe-3">
                    <div class="p-4">
                        <p class="indented mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta
                            consequatur, commodi
                            explicabo cupiditate molestias nemo ducimus accusantium odit exercitationem magni ab
                            architecto
                            ratione hic iusto et deserunt, molestiae fugiat corporis eum blanditiis quasi! Vel quis,
                            possimus sequi est tempore incidunt maiores quisquam fugiat odio amet a nemo illum ratione
                            repellendus, mollitia facilis quidem necessitatibus ad, accusantium dolor similique maxime
                            quae!
                            Magnam dignissimos quos minima quasi impedit ea, natus in sunt debitis, dolores, veritatis
                            quidem?</p>
                        <p class="indented">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis soluta
                            consequatur, commodi
                            explicabo cupiditate molestias nemo ducimus accusantium odit exercitationem magni ab
                            architecto
                            ratione hic iusto et deserunt, molestiae fugiat corporis eum blanditiis quasi! Vel quis,
                            possimus sequi est tempore incidunt maiores quisquam fugiat odio amet a nemo illum ratione
                            repellendus, mollitia facilis quidem necessitatibus ad, accusantium dolor similique maxime
                            quae!
                            Magnam dignissimos quos minima quasi impedit ea, natus in sunt debitis, dolores, veritatis
                            quidem?</p>
                    </div>
                </div>
                <div class="my-5">
                </div>

                <h2 id="contactMe" class="text-center mt-5">Contact Me</h2>
                <div id="formWrapper" class="mb-5 mx-2">
                    <form method="POST" action="scripts/success.php">
                        <!--add a new action page -->
                        <div class="mt-5 mb-4">
                            <div class="contactFormInput">
                                <input type="text" placeholder="Your Name" name="visitor_name" id="visitor_name" class="d-block " />
                            </div>
                            <div class="contactFormInput mt-3">
                                <input type="text" placeholder="Your Email" name="visitor_email" id="visitor_email" class="d-block" />
                            </div>
                        </div>
                        <div>
                            <textarea class="form-control" name="contact_message" id="contact_message" rows="3"
                                placeholder="Enter your message here" maxlength="255"></textarea>
                            <!-- <div id="contactFormAlertBox">
                                <span id="contactFormAlert"></span>
                            </div> -->
                            <input id="submitcontactform" type="submit" class="d-block mt-4"
                                value="Send Your Feedback" />
                        </div>
                    </form>
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
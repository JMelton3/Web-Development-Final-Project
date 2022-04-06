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
                        <p class="indented mb-3">
                            Hello my name is John Melton and thank you for visiting my site. I am 26 years old and I am married to my beautiful wife Kristin. My wife and I have one daughter together name Harper. My daughter is very important to my life and it has been so amazing to see how she has changed my life for the better. Kristin and I meet 8 years ago and we have been in love ever since. We were so happy when 2 years ago we were blessed with our beautiful daughter Harper. She has been an amazing addition to our lives adn we thank god for her every day.</p>
                        <p class="indented mb-3">
                            After finishing high school I immediatly fell in love with cooking and was able to take that passion for cooking and start a career as a chef. I loved being able to create something amazing from basic ingrediates and I loved the freedom of being able to develop recipes. While I love being a chef I was worried about how much time I was about to spend with my family. I decided to go train as a paramedic so that I could help the community I grew up in. I loved being able to constantly meet new people and being able to help people in a time of need was something that I felt called to do. I had learned first aid as a boy scout and I was able to put those skills and more to good use as a paramedic. </p>
                        <p class="indented mb-3">
                            Unfortunatly the day my paramedic liscense came in the mail I was involved in a car accident that resulted in me breaking my hip and arm as well as some burns to my legs. It has been a long road but after 3 years of recovery I am doing better and I am able to live a normal life. I am able to mostly do my job as a paramedic but I am not sure about how long I will be able to be a paramedic.</p>
                        <p class="indented">
                            Honestly at first I was timid about starting a third career in web development. After all the schooling I had done I would basically be starting over with web development; however, once I started learning I could start to see how similar it was to my previous careers. I was able to create something from nothing and I can help people in my communinty by creating websites for them. Learning to code and program has been an amazing experiance and I am excited for my future career. Being able to start with no true experiance with computers to being able to create this website and understand code has me excited for the future. I am also encouraged by how much more I have to learn and I am motivated to continue my edjucation. Again thank you for taking the time to read about me and If you would like to get in contact with me please message me below.
                        </p>
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
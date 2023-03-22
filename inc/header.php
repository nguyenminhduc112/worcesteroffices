<?php $page = !empty($_GET['page'])?$_GET['page']:"home"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Noew</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div id="header__info">
                    <div class="img__logo">
                        <img src="public/images/logo.gif" alt="">
                    </div>
                    <div class="info__contact">
                        <p class="info__contact__phone"><span><i class="fa-solid fa-phone"></i></span> 24-HOURS for
                            Existing
                            Tenants (508) 791-9258</p>
                        <p class="info__contact__phone"><span><i class="fa-solid fa-phone"></i></span> Need an Office or
                            Parking? Call or Text (508) 356-5569
                        </p>
                        <div class="text-center">
                            <a href="#" class="btn__wordOrder">Worl Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Info -->
            <div class="container-fluid" style="background-color: #000000;">
                <div class="container">
                    <nav id="header__menu">
                        <ul class="mainMenu">
                            <li class="mainMenu__item"><a href="?page=home" class="mainMenu__link active">Home</a>
                            </li>
                            <li class="mainMenu__item"><a href="?page=about" class="mainMenu__link">About US</a></li>
                            <li class="mainMenu__item"><a href="?page=ourProperties" class="mainMenu__link">Our
                                    Properties</a>
                            </li>
                            <li class="mainMenu__item"><a href="?page=parking" class="mainMenu__link">Parking</a></li>
                            <li class="mainMenu__item"><a href="?page=avalableNow" class="mainMenu__link">Avalable
                                    Now</a></li>
                            <li class="mainMenu__item"><a href="?page=contact" class="mainMenu__link">Contact</a></li>
                            <li class="mainMenu__item"><a href="?page=scheduleVisit" class="mainMenu__link">Schedule
                                    Visit</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->
            <nav id="header__menu_responsive" class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand w-75" href="#"><img class="w-100" src="public/images/logo.gif" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mainMenu">
                        <li class="mainMenu__item "><a href="?page=home" class="mainMenu__link active ">Home</a>
                        </li>
                        <li class="mainMenu__item"><a href="?page=about" class="mainMenu__link">About US</a></li>
                        <li class="mainMenu__item"><a href="?page=ourProperties" class="mainMenu__link">Our
                                Properties</a>
                        </li>
                        <li class="mainMenu__item"><a href="?page=parking" class="mainMenu__link">Parking</a></li>
                        <li class="mainMenu__item"><a href="?page=avalableNow" class="mainMenu__link">Avalable
                                Now</a></li>
                        <li class="mainMenu__item"><a href="?page=contact" class="mainMenu__link">Contact</a></li>
                        <li class="mainMenu__item"><a href="?page=scheduleVisit" class="mainMenu__link">Schedule
                                Visit</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Header Menu Responsive -->
        </div>

        <!-- end header  -->
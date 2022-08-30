<?php

    require "../classes/Hotel.php";

    session_start();
    session_cache_expire();

    /* 
        Array inside of the SESSION Superglobal to hold hotel objects that
        are inside the system
    */

    $_SESSION['hotelList'] = [
        
        new Hotel(
            1, 
            "Grand Hotel", 
            500, 
            20, 
            false, 
            "Hotel & Spa is a family-friendly hotel that offers a wide range of accommodation types, from rooms to suites. All this in the peaceful surroundings of our beautiful gardens, will make your time at (CN) an unforgettable holiday.",
            "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
        ),
        new Hotel(
            2, 
            "Palms Resort", 
            600, 
            30, 
            false, 
            "In a small (CN) traditional village called ___, which is one of the most beautiful and picturesque places in (CN), we chose to build a lovely high quality hotel which will give our guests the opportunity to experience a holiday with wonderful surroundings of nature and at the same time luxury and coziness.",
            "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
        ),
        new Hotel(
            3, 
            "Protea Hotel", 
            500, 
            0, 
            true, 
            "offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
            "protea-hotel.avif"
        ),
        new Hotel(
            4, 
            "Bellville Lodge", 
            800, 
            10, 
            false, 
            "hotel offers a complete experience with common areas that allow you to meet new people in a unique atmosphere. Lounge area, Ping Pong table, table soccer, darts & Boiler room: we told you, it’s not a hotel like the others, it’s a sharing hotel.",
            "https://images.unsplash.com/photo-1519449556851-5720b33024e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
        )
    ];

    /* 
        If user submitted data through the form
        we want to save their data to local variables
    */
    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $inDate = $_POST['checkInDate'];
        $outDate = $_POST['checkoutDate'];

        $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

        // saving user data to SESSION superglobal
        $_SESSION['customer'] = [
            'name' => $name,
            'email' => $email,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'userNumDays' => $userNumDays,
        ];

        // var_dump($_SESSION['customer']);

    }
?>


<!DOCTYPE html>
<html lang="en">
<div style="background-image: url(https://wallpaperaccess.com/full/2690549.jpg); background-position: full; background-size: cover; background-repeat: no-repeat;" class=" container-fluid">
    <div class="container py-3">
    <div class="row py-5">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    </head>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <style>
      html,
      body {
        position: center;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 30px;
        color: #00FFFF;
        margin: 200;
        padding: 200;
      }


    </style>

    <body>

        <h1 class="title">
        Hotel List:
        </h1>

            <ul class="grid">
            <?php
            foreach ($_SESSION['hotelList'] as $hotel) {
                echo "
                <div class='box m-2'>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                        } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                        }
                echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <div class='is-flex'>
                        <form class='m-1' action='confirm-booking.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-danger' name='book'>Book</button>
                        </form>

                        <form class='m-1' action='hotel-details.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-info' name='book'>Details</button>
                        </form>
                    </div>

                </div>
            ";
         }
            ?>
            </ul>
        </div>
        </div>
      </div>

</body>

</html>

<?php

require "../classes/Hotel.php";

session_start();
session_cache_expire();

$_SESSION['hotelList'] = [
        
    new Hotel(
        1, 
        "Motel 6", 
        500, 
        20, 
        false, 
        "Hotel & Spa is a family-friendly hotel that offers a wide range of accommodation types, from rooms to suites. All this in the peaceful surroundings of our beautiful gardens, will make your time at (CN) an unforgettable holiday.",
        "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
    ),
    new Hotel(
        2, 
        "Historic Chinatown Hotel", 
        600, 
        30, 
        false, 
        "In a small (CN) traditional village called ___, which is one of the most beautiful and picturesque places in (CN), we chose to build a lovely high quality hotel which will give our guests the opportunity to experience a holiday with wonderful surroundings of nature and at the same time luxury and coziness.",
        "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
    ),
    new Hotel(
        3, 
        "Commondore Hotel", 
        500, 
        0, 
        true, 
        "offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
        "https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
    ),
    new Hotel(
        4, 
        "Muizenberg Motel", 
        800, 
        10, 
        false, 
        "hotel offers a complete experience with common areas that allow you to meet new people in a unique atmosphere. Lounge area, Ping Pong table, table soccer, darts & Boiler room: we told you, it’s not a hotel like the others, it’s a sharing hotel.",
        "https://images.unsplash.com/photo-1519449556851-5720b33024e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
    )
];

// retrieve id variable from GET superglobal
$selectedHotelId = $_GET['hotelId'];

// empty variable to hold value of selected hotel object
$selectedHotel;

/* --- Filtering ---
        1. loop over entire list of hotels

        2. take id that passed through GET request and 
           compares it to the id's of all hotels in array

        3. if the id of any hotel in array is the same as
           the id given from the previous page, we pull that Hotel
           object out of the array, and assign it to the $selectedHotel variable
    */
foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}

// print out variable $selectedHotel to test
// var_dump($selectedHotel);

echo "customer data:";

echo ($_SESSION['customer']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>

    <h1 class="title">
        Confirm Booking
    </h1>

    <hr>

    <div  class='box'>
        <h2 class="subtitle">
            Customer Information:
        </h2>
        <?php
            foreach ($_SESSION['customer'] as $detail) {
                echo "
                    <li>
                        $detail
                    </li>
                ";   
            };
        ?>
    </div>


    <h2 class="subtitle">
        Hotel Information:
    </h2>
    <?php
        echo "
            <div class='box'>
                <li> Hotel Id: ". $selectedHotel->getId() ." </li>
                <li> Name: ". $selectedHotel->getName() ." </li>
                <li> Cost per night: R". $selectedHotel->getCostPerNight() ." </li>
                <li> Total cost for stay: R". $selectedHotel->calculateCostOfStay($_GET->$) ."</li>
                <li>";
                    if( !$selectedHotel->getFullyBooked() ) {
                    echo "<span class='has-text-success'> Rooms Available </span>";
                    } else {
                    echo "<span class='has-text-danger'> No rooms available </span>";
                    }
        echo    "</li>             
            </div>
        ";
    ?>


    <form action="./hotels.php" method='post'>  
    <button type="submit" name="submit" class="button is-danger">Return to Hotels</button>
    </form>
    

</body>

</html>
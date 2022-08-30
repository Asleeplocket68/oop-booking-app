<!-- ===============================================PHP==================================================== -->


<form action="logout.php" method="post">
<button type="submit" name="submit" class="button is-danger">logout</button>
</form>
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

foreach ($_SESSION['hotelList'] as $hotel) {

    if ($hotel->getId() == $selectedHotelId) {

        $selectedHotel = $hotel;
    }
}



?>

<!-- ===============================================PAGE==================================================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Details</title>
</head>



<body>
    
    <div class="container">

        <h1><?php echo $selectedHotel->getName(); ?></h1>
        <div class="pull-right"> 
            <p> <?php echo $selectedHotel->getDescription(); ?> </p>
        </div>
     
        <img 
            class="img-circle" 
            src="<?php echo $selectedHotel->getImg(); ?>"
            alt="hotel"
            width="350" 
            height="200"
        >

        <?php
        echo "
            <div class='box'>
                <li> Hotel Id: ". $selectedHotel->getId() ." </li>
                <li> Name: ". $selectedHotel->getName() ." </li>
                <li> Cost per night: R". $selectedHotel->getCostPerNight() ." </li>
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

    <form action="hotels.php" method="post">
        <button type="submit" name="submit" class="button is-danger">Back</button>
    </form>
    


    </div>

   

</body>
</html>
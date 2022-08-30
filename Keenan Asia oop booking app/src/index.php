
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>

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

</head>

<body>

  

    <div style="background-image: url(https://www.readersdigest.ca/wp-content/uploads/2015/10/emirates-palace-luxurious-hotels.jpg?w=1000); background-position: fill; background-size: cover; background-repeat: no-repeat;" class=" container-fluid">
    <div class="container py-3">
    <div class="row py-5">
      
        <div data-aos="fade-in" data-aos-duration="1300" data-aos-delay="400" class="col-md-6 pl-0 pl-md-4 mb-0 my-md-0 text-white text-center text-md-left aos-init aos-animate">
    
            
       
          <p class=" text-blue mb-3">

                    <h1 class="title">
                        Welcome to EasyBook
                        <h5>Booking hotels has never been so easy</h5>
                    </h1><br><br>

              <div id="app">
                <h2 class="subtitle">
                    Please enter your details in the form below to book a hotel..
                </h2>
                <form action="./pages/hotels.php" method="post">
                    <label for="name" name="customerName">Full name:</label>
                    <input type="text" name="customerName" placeholder="First name" required><br><br>
                    <label for="lastName" name="lastname">Last name:</label>
                    <input type="text" name="lastName" placeholder="Last name" required><br><br>
                    <label for="email" name="customerEmail">Email Address:</label>
                    <input type="email" name="customerEmail" placeholder="Email" required><br><br>
                    <label for="checkInDate">Check In Date:</label>
                    <input type="date" name="checkInDate" required><br><br>
                    <label for="checkInDate">Check Out Date:</label>
                    <input type="date" name="checkoutDate" required><br><br>
                    <button type="submit" name="submit" class="button is-danger">View Hotels</button>
                </form>

          </p>
        
        
         
                 
            </div>
          </div>
        </div>
      </div>
          
      </div>

    <!-- <div id="app">
        <h2 class="subtitle">
            Please enter your details in the form below to book a hotel..
        </h2>
        <form action="./pages/hotels.php" method="post">
            <label for="name" name="customerName">Full name:</label>
            <input type="text" name="customerName" placeholder="First name" required><br><br>
            <label for="lastName" name="lastname">Last name:</label>
            <input type="text" name="lastName" placeholder="Last name" required><br><br>
            <label for="email" name="customerEmail">Email Address:</label>
            <input type="email" name="customerEmail" placeholder="Email" required><br><br>
            <label for="checkInDate">Check In Date:</label>
            <input type="date" name="checkInDate" required><br><br>
            <label for="checkInDate">Check Out Date:</label>
            <input type="date" name="checkoutDate" required><br><br>
            <button type="submit" name="submit" class="button is-danger">View Hotels</button>
        </form>
         -->

    </div>

    <!-- <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper2"
    >
       <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/189296/pexels-photo-189296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div> -->
        <!-- <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/338504/pexels-photo-338504.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/2034335/pexels-photo-2034335.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/70441/pexels-photo-70441.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/161758/governor-s-mansion-montgomery-alabama-grand-staircase-161758.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/1134176/pexels-photo-1134176.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/1838554/pexels-photo-1838554.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.pexels.com/photos/5751697/pexels-photo-5751697.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
        </div> -->

    <!-- <div thumbsSlider="" class="swiper mySwiper"> -->
      

    

   

</body>

</html>


<!-- <div style="background-image: https://media.istockphoto.com/id/1183891002/photo/cropped-shot-of-tourist-woman-pulling-her-luggage-to-her-hotel-bedroom-after-check-in.webp?s=612x612&w=is&k=20&c=zNdHzH8QFvQlI7Q_qvBR4Gh0n6idR31dN_flfqAmDUQ= ; background-position: center; background-size: cover; background-repeat: no-repeat;" class=" container-fluid">
    <div class="container py-3">
    <div class="row py-5">
      <div class="col-md-6 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-in" data-aos-duration="1300">
        <img style="border-radius: 20px;" class="img-fluid mb-2 card" src="https://media.istockphoto.com/id/1183891002/photo/cropped-shot-of-tourist-woman-pulling-her-luggage-to-her-hotel-bedroom-after-check-in.webp?s=612x612&w=is&k=20&c=zNdHzH8QFvQlI7Q_qvBR4Gh0n6idR31dN_flfqAmDUQ=" alt="AMARYLLIS_HOTEL">
      </div>
        <div data-aos="fade-in" data-aos-duration="1300" data-aos-delay="400" class="col-md-6 pl-0 pl-md-4 mb-0 my-md-0 text-white text-center text-md-left aos-init aos-animate">
    
            
          <h5 class=" text-white mt-3 font-weight-bold">WHY CHOOSE US?
              </h5>
              <hr style="background-color: #ffffff; height: 1px;" class="col-1 mb-4 d-inline-block">
          <p class=" text-white mb-3">We are the leading hotel in Malawi, known for pushing the boundaries of luxurious accommodation and friendly service. We are the venue where local or international guests prefer to meet.  <br class="d-none d-md-block"> <br class="d-none d-md-block">You will discover our unmatched service excellence, tantalizing ambiance complemented by friendly staff, and a range of gourmet experiences. Come to the hotel where the promise of taking home luxurious memories that last a lifetime are guaranteed. </p>
          <div class="main-button1 pt-4">
            <div><a href="https://amaryllishotels.com/about">DISCOVER MORE</a></div>
        </div>
        
         
          
          </div>
        </div>
      </div>
          
      </div> -->
<!-- <php
      url(assets/images/AMARYLLIS_background.jpg)
> -->
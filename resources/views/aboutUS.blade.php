<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Easy RentAL - About Us</title>
  <link rel="stylesheet" href="styles.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

  @include('header');


  <section class="about">
    <h2 class="section-heading">Know More <span>About Us</span></h2>
    <div class="about-content container">
      <img src="motorbike.jpg" alt="Motorbike" class="about-image" />
      <div class="about-text">
        <h3>Who We Are in the <span class="highlight">Industry</span> We Show You</h3>
        <p>
          Our mission is to promote eco-friendly and convenient transportation by providing a seamless rental experience through our user-friendly platform. From hourly rentals to daily plans, we offer flexible options to suit every need. With well-maintained bikes, multiple pickup locations, and 24/7 customer support, we're here to help you ride better, faster, and greener. Come join us and make your journey memorable!
        </p>
      </div>
    </div>
  </section>

@include('footer');

</body>
</html>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  font-family: 'Segoe UI', sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f9f9f9 ;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}


.about {
  background: #f9f9f9;
  padding: 4rem 0;
  text-align: center;
}

.section-heading {
  font-size: 1.8rem;
  margin-bottom: 2rem;
  font-weight: bold;
}

.section-heading span {
  color: #025CA3;
}

.about-content {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 2rem;
}

.about-image {
  flex: 1;
  max-width: 400px;
  border-radius: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.about-text {
  flex: 2;
  text-align: left;
}

.about-text h3 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.about-text .highlight {
  color: #025CA3;
}

.about-text p {
  color: #666;
  font-size: 1rem;
}




</style>
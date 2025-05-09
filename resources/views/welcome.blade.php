<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Easy RentAL</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

  <header class="header">
    <div class="container header-content">
      <div class="logo">Easy RentAL</div>
      <nav class="nav">
      <a href="#">HOME</a>
        <a href="#">BIKES FOR RENT</a>
        <a href="#">OUR SERVICES</a>
        <a href="#">ABOUT US</a>
        <a href="#">FAQS</a>
      </nav>
    </div>
  </header>

<section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <h1>We Provide Bikes<br>and Scooter for Rent</h1>
      <p>Find the best rides for your journey!</p>
      <div class="hero-buttons">
        <a href="#" class="btn primary">Bike for Rent</a>
        <a href="#" class="btn secondary">Scooter for Rent</a>
      </div>
    </div>
    <div class="hero-images">
      <img src="{{asset('storage/frontend_images/Bike 1.jpg')}}" alt="Bike 1">
      <img src= alt="Bike 2">
      <img src= alt="Bike 3">
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Get Your <span class="highlight">Bike</span> For Rent</h2>
    <div class="card-grid">
      <div class="card">
        <img src="{{asset('storage/frontend_images/cool-motorcycle-outdoors.jpg')}}" alt="Bike 1">
        <h3>YAMAHA <span class="highlight">MT 15 V2</span> </h3>
        <p>Start prices from Rs1500 per day</p>
      </div>
      <div class="card">
        <img src= alt="Bike 2">
        <h3>KTM <span class="highlight">200 DUKE</span></h3>
        <p>Start prices from Rs2000 per day</p>
      </div>
      <div class="card">
        <img src="" alt="Bike 3">
        <h3>ROYAL ENFIELD <span class="highlight">HUNTER 350</span></h3>
        <p>Start prices from Rs2500 per day</p>
      </div>
      <div class="card">
        <img src="" alt="Bike 4">
        <h3>HONDA <span class="highlight">SP 125</span></h3>
        <p>Start prices from Rs1000 per day</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Get Your <span class="highlight">Scooter</span> For Rent</h2>
    <div class="card-grid">
      <div class="card">
        <img src="" alt="Scooter 1">
        <h3>HONDA <span class="highlight">DIO 125</span></h3>
        <p>Start prices from Rs1000 per day</p>
      </div>
      <div class="card">
        <img src="" alt="Scooter 2">
        <h3>TVS <span class="highlight">JUPITER 125</span></h3>
        <p>Start prices from Rs1000 per day</p>
      </div>
      <div class="card">
        <img src="" alt="Scooter 3">
        <h3>APRILLA<span class="highlight">SR 160</span></h3>
        <p>Start prices from Rs1500 per day</p>
      </div>
      <div class="card">
        <img src="" alt="Scooter 4">
        <h3>HONDA <span class="highlight">ACTIVA</span></h3>
        <p>Start prices from Rs1000 per day</p>
      </div>
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

body {
  font-family: 'Poppins', 'Poppins';
  background: #fff;
  color: #333;
}
.header {
  background: #fffafa;
  padding: 20px 0;
  box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  font:bold;
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.8rem;
  font-weight: bold;
  color: #025CA3;
}
.nav a {
  margin-left: 20px;
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.nav a:hover {
  color: #025CA3;
}

nav a {
  margin: 0 10px;
  text-decoration: none;
  color: #000;
}
.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}



.hero {
  background: #f8f9fa;
  padding: 80px 0;
}

.hero-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.hero-text {
  max-width: 50%;
}

.hero-text h1 {
  font-size: 2.8rem;
  margin-bottom: 20px;
}

.hero-text p {
  font-size: 1.1rem;
  margin-bottom: 30px;
}

.hero-buttons {
  display: flex;
  gap: 15px;
}

.btn {
  padding: 10px 25px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: bold;
}

.primary {
  background: #025CA3;
  color: #fff;
}

.secondary {
  background: #fff;
  color: #025CA3;
  border: 2px solid #025CA3;
}

.hero-images img {

  width: 100px;
  Height: 100px;
  margin-left: 10px;
}


.section {
  padding: 60px 0;
}

.section h2 {
  font-size: 2rem;
  margin-bottom: 40px;
  text-align: center;
}

.highlight {
  color: #025CA3;
}


.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  margin-top: 20px;
}

.card {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.card img {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 15px;
}

.card h3 {
  font-size: 1.2rem;
  margin-bottom: 10px;
}

.card p {
  font-family:'Poppins';
  color: #000000;
  font-weight: bold;
}


.industry-tabs {
  text-align: center;
  margin-bottom: 30px;
}

.tab {
  background: #fff;
  border: 2px solid #025CA3;
  color: #025CA3;
  padding: 8px 20px;
  margin: 0 10px;
  border-radius: 30px;
  cursor: pointer;
}

.tab.active, .tab:hover {
  background: #025CA3;
  color: #fff;
}



</style>


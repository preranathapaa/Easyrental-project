
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Easy RentAL</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
</head>
<body>

  
 @include('header');


  <main>
    <section class="booking">
      <div class="form-section">
        <h4>Please Fill Up The Form In Detail For The Rental Inquiry:</h4>
        <form>
          <label>Name</label>
          <input type="text" placeholder="Enter your name" />
          <label>Phone Number</label>
          <input type="text" placeholder="Enter your number" />
          <label>Email</label>
          <input type="email" placeholder="Enter your email" />
          <label>Hire Date</label>
          <input type="date" />
          <label>Drop Off</label>
          <input type="date" />
          <label>Bike</label>
          <select>
            <option>Select Bike</option>
          </select>
          <button type="submit" class="book-btn">BOOK</button>
        </form>
      </div>

      <div class="info-section">
        <h2>BOOK NOW</h2>
        <h4>Booking Procedure:</h4>
        <p>We have simple form and terms and conditions, which you need to fill up before hiring the bikes.</p>
        <ul>
          <li>Original Passport with Nepalese visa or refundable cash deposit.</li>
          <li>ID card or Citizenship card original.</li>
          <li>Valid driving license from your country or International Driving license.</li>
          <li>Or Someone from Nepal who can stay as a Guarantor for the security deposit.</li>
        </ul>
        <p>If you have any questions, please write us at <strong>citymotorbike.com@gmail.com</strong>.</p>
      </div>
    </section>
  </main>

  @include('footer');

</body>
</html>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {

 font-family: 'Poppins', 'Poppins';
 font-family: "Roboto", sans-serif;
  background: #fff;
  color: #333;
}


.auth-buttons button {
  margin-left: 10px;
  padding: 5px 10px;
  border: none;
  background: #eee;
  cursor: pointer;
}

.auth-buttons .register {
  background:#007bff ;
  color: white;
}

.booking {
  display: flex;
  justify-content: space-between;
  padding: 2em;
}

.form-section, .info-section {
  width: 48%;
}

form {
  display: flex;
  flex-direction: column;
}

form label {
  margin: 10px 0 5px;
  font-weight: bold;
}

form input, form select {
  padding: 10px;
  margin-bottom: 10px;
}

.book-btn {
  background: #025CA3;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.info-section h2 {
  color: #025CA3;
  margin-bottom: 10px;
}

.info-section ul {
  margin-left: 20px;
  list-style: disc;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Entry-Exit Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background: url('') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
 header {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1);
    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
  }
  nav {
    background-color: black;
   
    padding: 10px 0px;
    text-align: center;
  }
  nav a{
    color:orange;
    padding:10px;
    text-decoration: none;
  }
  nav a:hover
  {
    color:ghostwhite;
  }

  h2 {
    color: white;
    margin-bottom: 20px;
    font-size: 24px;
  }

  p {
    color: white;
    margin-bottom: 20px;
    line-height: 1.6;
  }

  .buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .button {
    margin: 0 10px;
    padding: 12px 30px;
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
  }

  footer {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 5px;
    text-align: center;
    font-size:90%;
  }
  .main_bg
    {
      background:url("bg1.jpg");
      background-repeat: no-repeat;
      width: 100%;
      height: calc(100% - 100px);
      filter: blur(2px);
        -webkit-filter: blur(2px);
        background-position: center;
      background-size: cover;
    }
.main_content
    {
  color: white;
/*  font-weight: bold;*/
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 20px;
  text-align: center;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);/*Black w/opacity/see-through */
      
    }

</style>
  </head>
<body>
  <header>
    <h1>Entry-Exit Management System</h1>
  </header>

  <nav>
    <a href="main.php">HOME</a> |
    <a href="about.php">ABOUT</a> |
    <a href="login.php">ADMIN</a> |
    <a href="appointment.php">APPOINTMENT</a>
  </nav>
  
  <div class="main_bg"></div>
  <div class="main_content">
    
    <h2>Welcome to Our Facility</h2>
    <p>We are dedicated to ensuring a secure and efficient entry and exit process for both our valued visitors and dedicated employees. With our state-of-the-art Entry-Exit Management System, we prioritize your safety and convenience.</p>
    
    <p>Our comprehensive system allows you to pre-register your visit, making your arrival a breeze. Additionally, our streamlined check-in and check-out procedures provide a seamless experience, enabling you to focus on what matters most during your time with us.</p>
    
    <p>Whether you're here for a business meeting, an event, or simply to connect with our team, we're committed to providing you with the highest level of service and security.</p>
    
    <div class="cta-buttons">
      <a href="entry.php"><button class="button"><b>Entry</b></button></a>
      <a href="exit.php"><button class="button"><b>Exit</b></button></a>
      <!-- <button class="cta-button">Pre-Register</button>
      <button class="cta-button">Check-In</button>
      <button class="cta-button">Check-Out</button> -->
    </div>
  </div>
  
  <footer>
    <p>&copy; 2023 Entry-Exit Management System. All rights reserved.<br>Designed by:- Nishant Khanna, Milandeep Kaur</p>
  </footer>
</body>
</html>
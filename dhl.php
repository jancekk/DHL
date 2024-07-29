<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Human Resources and Training</title>

    <!--Pozivanje CSS-a-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="dhl.css">
    

    <!--Pozivanje JavaScript-a-->
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
</head>

  <body style="background-image: url('DHL-B777F.jpg\ \(1\).jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100%">
     <!--Navigacioni bar *Početak* -->
     <div class="full-width">
      <nav class="navbar navbar-default navbar-fixed-top">
          <div class="header_line"></div>
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://www.rs.dhl.com:81/"> <img src="DHL_logo_rgb.png" alt="" class="logo-naslovna" href="http://www.rs.dhl.com:81/"> </a>
            </div>
           
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
  </div>

  <!--Pozivanje JQuery-->
  <script src="jquery.min.js"></script>
  <!--Pozivanje JavaScript-a iz Bootstrapa-->
  <script src="bootstrap.min.js"></script>
  <!--Pozivanje submenu skripte za navbar-->
  <script src="submenu.js"></script>
  
    <div class="container">
       <div class="row">
           <div class="col-sm-1 col-md-1 col-lg-1">
               
           </div>
           <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="form-problem">
                   <form method="post" action="#" id="form" enctype="multipart/form-data">
                       <h2>Prijava problema Help desk-u</h2>
                       <br>
                       <div class="row">
                           <div class="col-sm-6 col-md-6 col-lg-6">
                               <label for="ime">Ime:</label>
                               <input type="text" id="ime" name="ime" class="form-control" required>
                           </div>
                           <div class="col-sm-6 col-md-6 col-lg-6">
                               <label for="prezime">Prezime:</label>
                               <input type="text" id="prezime" name="prezime" class="form-control" required>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12"><br></div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                               <label for="departmani">Pretraga po odeljenjima:</label>
                               <br>
                               <select name="departmani" id="departmani" required>
                                   <option value="" selected="" disabled="">Izaberite odeljenje </option>
                                   <option value="36">AS - Area Serbia</option>
                                   <option value="10">COM - Commercial</option>
                                   <option value="6">CCG - Contact Group</option>
                                   <option value="26">Dec - Declarants</option>
                                   <option value="39">DGF APT - DGF - Aerodrom</option>
                                   <option value="38">DGF GTC - DGF - Zgrada GTC</option>
                                   <option value="5">DOM - Domestic</option>
                                   <option value="14">FRT - Freight</option>
                                   <option value="12">FIN - Finance</option>
                                   <option value="23">FRT - BPM - Freight - BPM</option>
                                   <option value="17">FRT - CS - Freight - Customer Service</option>
                                   <option value="19">FRT - CUS - Freight - Customs</option>
                                   <option value="22">FRT - FAX - Freight - Fax</option>
                                   <option value="15">FRT - FIN - Freight - Finance</option>
                                   <option value="21">FRT - HR - Freight - Human Resources</option>
                                   <option value="18">FRT - OPS - Freight - Operations</option>
                                   <option value="16">FRT - SLS - Freight - Sales</option>
                                   <option value="20">FRT - WH - Freight - Warehouse</option>
                                   <option value="15">FRT - FIN - Freight - Finance</option>
                                   <option value="42">GTW OPS - Gateway - Operations</option>
                                   <option value="4">GM - General Manager</option>
                                   <option value="3">GD - Ground Distribution</option>
                                   <option value="41">GTW B - GTW Billing</option>
                                   <option value="9">HRT - Human Resources &amp; Training</option>
                                   <option value="8">IT - Informational technology</option>
                                   <option value="44">INI - INI TEAM</option>
                                   <option value="13">MKT - Marketing</option>
                                   <option value="37">ME - Montenegro</option>
                                   <option value="45">NSD - NSD TEAM</option>
                                   <option value="25">OPS - Operations</option>
                                   <option value="46">PuD - Pick Up and Delivery</option>
                                   <option value="11">SLS - Sales</option>
                                   <option value="1">SEC - Security</option>
                                   <option value="40">BSP - Service Point</option>
                                   <option value="43">SPC - Spare Parts Center</option>
                               </select>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12"><br></div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                           <label for="naslov">Naslov problema:</label>
                           <input type="text" id="naslov" name="naslov" class="form-control" required>
                       </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12"><br></div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                               <label for="opis">Opis problema:</label>
                               <br>
                               <textarea name="opis" id="opis" name="opis" rows="10" class="form-control" required></textarea>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12"><br></div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                           <label for="myfile">Dodajte prilog:</label>
                           <input type="file" id="myfile" name="myfile" class="custom-file-input">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12"><br></div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                           <button type="submit" name="submit" class="button-posalji">
                               Posalji
                           </button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
           <div class="col-sm-1 col-md-1 col-lg-1">
               
           </div>
       </div>
   </div>
   </body>
   
</body>
<footer>
       <div class="header_line"></div>
        <img src="DHL_logo_rgb.png" alt="DHL logo" class="logo-naslovna">
        <p class="foopas">Copyright © 2024, DHL International Beograd. <br> All Rights Reserved.</p>
</footer>
<?php
// Database connection parameters
$servername = "127.0.0.1";  // or your database server address
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "dhl";   // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve and sanitize form data
    $ime = isset($_POST['ime']) ? htmlspecialchars($_POST['ime']) : '';
    $prezime = isset($_POST['prezime']) ? htmlspecialchars($_POST['prezime']) : '';
    $departmani = isset($_POST['departmani']) ? htmlspecialchars($_POST['departmani']) : '';
    $naslov = isset($_POST['naslov']) ? htmlspecialchars($_POST['naslov']) : '';
    $opis = isset($_POST['opis']) ? htmlspecialchars($_POST['opis']) : '';

   /*  // File upload handling
    $file_name = $file_type = $file_size = '';
    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == UPLOAD_ERR_OK) {
        $file_name = $_FILES['myfile']['name'];
        $file_type = $_FILES['myfile']['type'];
        $file_size = $_FILES['myfile']['size'];
        // Move file to a designated directory (optional)
        // move_uploaded_file($_FILES['myfile']['tmp_name'], 'uploads/' . $file_name);
    } */

    // Prepare SQL query to insert data
    $stmt = $conn->prepare("INSERT INTO problemi (ime, prezime, odeljenja, naziv, opis) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param ('sssss', $ime, $prezime, $departmani, $naslov, $opis);

    // Execute the query
    if ($stmt->execute()) {
        echo "<p>Data successfully inserted.</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>


</html>
<?php




?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="VizaBridge Admin Portal">
  <meta name="author" content="VizaBridge">
  <meta name="keyword" content="VizaBridge, South Korea Visa, visa, VizaBridge, visa consultancy, VizaBridge, South Korea, portal">
  <title>Dashboard</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../VizaBridge/css/footer.css" rel="stylesheet">
  <link href="../VizaBridge/css/dashboard.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="images/favcon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>

<div class="top-bar">
    <a href="dashboard.php" class="company-name"><img src="../VizaBridge/images/logo2.png" class="company-name"></a>
</div>

    <div class="container">
    <div class="side-bar">
            <ul class="nav-heading">
                <a href="dashboard.php" class="nav-link">Statistic</a>
                <a href="reservation.php" class="nav-link">Reservation</a>
                <a href="payment.php" class="nav-link">Payment</a><br>
                <a href="user.php" class="nav-link">User</a>
                <a href="visa.php" class="nav-link">Visa Consultant</a>
                <a href="inquiry.php" class="nav-link">Inquiry</a><br>
                <a href="faq.php" class="nav-link">Faq</a><br>
                <a href="posting.php" class="nav-link">Posting</a>
            </ul>
        </div>

        <!-- ************ MAIN CONTENT ************** -->
        <div class="search-bar">

        </div>
        <input class="search-btn" type="button" value="Search"></input>
        
        <div class="table-title">
            <a href="visa.php" class="stat-summary"><p>Consultant List</p></a>
        </div>
        <div class="table-content">
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Consultant No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Languague</th>
            <th scope="col">Phone</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Name Here</td>
            <td>mail@gmail.com</td>
            <td>Eng</td>
            <td>010-0000-0000</td>
            <td>mail@gmail.com</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Name Here</td>
            <td>mail@gmail.com</td>
            <td>Eng</td>
            <td>010-0000-0000</td>
            <td>mail@gmail.com</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Name Here</td>
            <td>mail@gmail.com</td>
            <td>Eng</td>
            <td>010-0000-0000</td>
            <td>mail@gmail.com</td>
            </tr>
    </tbody>
</table>

        </div>
    </div>
</div>
    
    <!--**************** FOOTER SECTON **************************-->
    <div class="footer-bar">
        <div class="address">
        <h2>VizaBridge</h2>
        <p class="address-content">
            Veeb Inc | CEO TOM | Vice CEO LUCAS
            Floor 9, Hansan Building, 999, Gwangjin-gu, Gwanaru-ro, Seoul, South Korea 
            Business Registration Number 555-333-22333
            Contact : veeb@jobbridge.com
        </p>
        </div>
        <div class="address1">
        <h2>App</h2>
        <p class="address-content">
            IOS<br>
            Android<br>
            APK<br>
        </p>
        </div>
        <div class="address">
        <h2 >Lorem</h2>
            <p class="address-content">
            Term & Service<br>
            Customer Services<br>
            Refund Policy</p>
        </p>
        </div>
        <div class="footer-content">
            <p class="copyright">&copy 2022 JobBridge. All Right Reserved</p>
            <p class="copyright1">Connect with Us:</p>
        </div>
        
    </div>
</html>
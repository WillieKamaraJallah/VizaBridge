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
                <a href="dashboard.php" class="nav-link">Statistic</a><br>
                <a href="reservation.php" class="nav-link">Reservation</a><br>
                <a href="payment.php" class="nav-link">Payment</a><br>
                <a href="user.php" class="nav-link">User</a><br>
                <a href="visa.php" class="nav-link">Visa Consultant</a><br>
                <a href="inquiry.php" class="nav-link">Inquiry</a><br>
                <a href="faq.php" class="nav-link">Faq</a><br>
                <a href="posting.php" class="nav-link">Posting</a>
            </ul>
        </div>

        <!-- ************ MAIN CONTENT ************** Remote Unmoderated Usability Test? -->
        <div class="head-div">
            <a href="dashboard.php" class="stat-summary"><p>Reservation Detail</p></a>
        </div>
        <div class="stat-box">
            <div class="content-dtl">
                <form action="" name="">
                <div class="content-controller">
                    <p class="content-ttl">Reservation Number</p>
                    <input type="text" class="content-body" name="" value="123456789">
                </div>
                <div class="content-controller1">
                    <p class="content-ttl">Application Time</p>
                    <input type="text" class="content-body" name="" value="13:00 - 15:00">
                </div>
                <div class="content-controller2">
                    <p class="content-ttl">Consultation Method</p>
                    <input type="text" class="content-body" name="" value="SMS">
                </div>
                <div class="content-controller3">
                    <p class="content-ttl">Price</p>
                    <input type="text" class="content-body" name="" value="20.000 KRW">
                </div> 
            </div>
            <div class="content-dtl">
            <div class="content2-controller">
                    <p class="content-ttl">Appointment Day</p>
                    <input type="text" class="content-body" name="" value="2022.07.02">
                </div>
                <div class="content2-controller1">
                    <p class="content-ttl">Member Email</p>
                    <input type="text" class="content-body" name="" value="olga@gmail.com">
                </div>
                <div class="content2-controller2">
                    <p class="content-ttl">Consultation Status</p>
                    <input type="text" class="content-body" name="" value="Status">
                </div>
            </div>

        </div>
       
        <div class="stat-graph">
            <a href="reservation_detail.php" class="stat-summary"><p>Consultation Detail</p></a>
        </div>
        <div class="graph-box">
        <p class="rev-detail-ttl">Reservation Number</p>
        <p class="rev-detail-ttl1">Reservation Number</p>
            <div class="rev-detail-controller">
                
                <input type="text" class="detail-body" name="" value="123456789">
            </div>
            <div class="rev-detail-controller1">
                
                <input type="text" class="detail-body" name="" value="123456789">
            </div>
        </div>
        <input type="button" class="update-btn" name="" value="Update">
        <input type="button" class="delete-btn" name="" value="Delete">
    </div>
    </form>
    
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
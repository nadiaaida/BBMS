<?php



require 'functions.php';
$donor = query("select * from donor");
$bloodstock = query("SELECT bloodType ,sum(amount) as amount from bloodstock GROUP BY bloodType");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
           
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                    <a class="sidebar-brand-text mx-3"  ><b>SFSH Blood Bank Management System</b></a>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       <!-- Home - Alerts -->
                       <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="home.php" >
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Home</span>
                                    
                                </a>
                            
                            </li>

                        <!-- Donation - Alerts -->
                        <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="loginDonor.php" >
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                                    
                                </a>
                            
                            </li>
                                
                            <!-- Profile - Alerts -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="register.php" >
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Register</span>
                                    
                                </a>
                            
                            </li>
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Blood Bank Unit</h1>
      <h2>Sultanah Fatimah Specialist Hospital</h2>
      <h2></h2>
  
    </div> 
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>BLOOD DONATION SAVE LIVES</h3>
              <p>
                Donating blood can save at least 3 lives. 
                This is because whole blood that is donated can be processed and produce red blood cells, platelets and plasma. 
                From a health point of view, donating blood can stimulate the body to produce new blood cells. 
                These new blood cells have more ability to carry oxygen throughout the body. 
                Therefore blood donors will feel healthier and fresher after donating. 
                Be a hero, give blood.
              </p>
              
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Blood Bank</h4>
                    <p>A facility that collects, tests, processes, stores, and distributes blood. Blood banks play a crucial role in providing safe and adequate blood supply for patients who require blood transfusions.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Blood Donation</h4>
                    <p>Donating blood can save at least 3 lives. This is because donated whole blood can be processed and produce red blood cells, platelets and plasma.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Blood Donor</h4>
                    <p>A person who voluntarily donates blood, which is used to help save the lives of others who may need a blood transfusion.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Campaign Section ======= -->

    <section id="about" class="about">
      <div class="container-fluid">

      <div class="faq-list">

                        <div class="my-2"></div>
                        <!-- Staff List -->
                        <div class="card shadow mb-4">

                            <div class="row">
                                <?php foreach($bloodstock as $row){?>
                                <div class="card" style="width: 15rem;">
                                    <img class="card-img-top" src="../image/<?=strtolower($row['bloodType'])?>.png"
                                        width="50px" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=($row['bloodType'])?></h5>
                                        <p class="card-text" <?php 
                                if($row['amount']<10000){
                                    echo "style='color:red'";
                                }elseif($row['amount']>10000 && $row['amount']<50000){
                                    echo "style='color:yellow'";
                                }else{
                                    echo "style='color:green'";
                                }
                                ?>>

                                            <?php 
                                    if($row['amount']<10000){
                                    echo "Low";
                                }elseif($row['amount']>10000 && $row['amount']<50000){
                                    echo "Medium";
                                }else{
                                    echo "High";
                                }
                                    ?>
                                        </p>

                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>



      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN LIST</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        
                                            $conn = mysqli_connect('localhost', 'root', '', 'bbms');
                                            $sql = "SELECT * FROM campaign";
                                            $result = mysqli_query($conn, $sql);
                                            $std = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            if (isset($_SESSION) && isset($_SESSION['cmpID'])) {
                                                $cmpID = $_SESSION['cmpID'];
                                            } else {
                                                $cmpID = null;
                                            }
                                            ?>
                                            <?php $i = 1; ?>
                                            <?php foreach ($std as $row) { ?>
                                                
                                            <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?php echo $row['cmpName']; ?></td>
                                                    <td><?php echo $row['cmpDate']; ?></td>
                                                    <td><?php echo $row['cmpTime']; ?></td>
                                                    <td><?php echo $row['cmpLocation']; ?></td>     
                                                    <td><?php echo $row['cmpDesc']; ?></td>                           
                                                    <?php $i++; ?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

      </div>
    </section><!-- End About Section -->

    


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <br>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Blood Donation Criteria<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>

                    <b>You are eligible to donate if:</b><br><br>
                    1. Good health<br><br>
                    2. You are 17 to 70 years old:<br>
                    - 61 - 70 years old: requires a yearly health screening<br>
                    - 17 years old: require <br><br>

                    3. Weight at least 45kg.<br><br>
                      
                    4. Minimum 5 hours of sleep.<br><br>
                      
                    5. Free from any medical illness.<br><br>
                      
                    6. Not taking any medication.<br><br>
                      
                    7. Not involve in any of the following high risk activities:<br>
                    - Homosexual relationship<br>
                    - Bisexual relationship<br>
                    - Commercial sex relationship<br>
                    - Multiple sexual partners<br>
                    - Drug abuse (intravenous)<br>
                    - Sexual contact with those mentioned above<br><br>

                    8. Interval of at least 3 months from your last donation (whole blood).<br><br>
                    
                    9. Female donors: Not pregnant, not breastfeeding and not having menstruation (If you are menstruation, you can only donate after your third day menses).<br><br>
                    
                    10. Foreigners : must have lived in Malaysia for more than 1 year and has a permanent address.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Before Blood Donation<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    1. Drink plenty of fluids.<br><br>
                    2. Get a good night's sleep at least 5 hours.<br><br>
                    3. Check for blood donation eligibility criteria.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">During Blood Donation<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    1. Healthy.<br><br>
                    2. Weight 45kg and above.<br><br>
                    3. Have an adequate balanced meal within 4 hours prior to donation.<br><br>     
                    4. Drink plenty of fluids.<br><br>
                    5. Wear comfortable clothing. If wearing long-sleeved clothing, ensure that the sleeves can be folded. <br><br>
                    6. Bring along identity card/driving license/passport.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">After Blood Donation<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                    1. Rest on the bed and apply pressure on the needle site for 10 minutes.<br><br>
                    2. MANDATORY to have prepared light refreshments.<br><br>
                    3. Drink plenty of fluids.<br><br>     
                    4. Avoid alcoholic beverages in next 24 hours.<br><br>
                    5. Temporarily reduce exposure to sunlight to avoid dehydration. <br><br>
                    6. Avoid lifting heavy objects or getting involved in heavy exercises within 6 - 8 hours after donation to avoid swelling/bruising at the blood donation site.
                    7. If swelling/bruising occurs: <br>
                    - For the next 24 hours, place an icepack at the donation area for 10 minutes or more at preferred intervals.<br>
                    - Do not lift heavy objects or involve yourself in heavy exercises within 6-8 hours after donation.<br>
                    - Do not rub or massage the affected area in the next 48 hours.<br>
                    - If pain persist, please contact the National Blood Centre for further clarification.<br>
                    - Rest, ice, pressure and limiting your movement helps with the recovery process.<br>
                    - If swelling/bruising persist or if you experience pain, weakness or numbness at the affected arm, kindly contact the National Blood Centre immediately.<br><br>

                    8. If you experience dizziness, lie down for a few minutes, prop your feet up above head level and drink plenty of fluids.<br>
                </p>
              </div>
            </li>


          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>Hospital Pakar Sultanah Fatimah</h3>
            <p>
              Jalan Salleh,<br>
              84000 Muar,<br>
              Johor. <br><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><strong>Phone:</strong>06-9564000<br></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><strong>Fax:</strong>06-9526003<br></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"><strong>Email:</strong>hpsf_webmaster@moh.gov.my<br></a></li>
              
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Sultanah Fatimah Specialist Hospital 2023</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

    <style>
    .navbar-toggler {
        z-index: 1;
    }
    .card{
        margin:20px;
    }
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item{
        height:95vh;
        object-fit: cover;
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    
    </style>

</head>

<body class="bodyb">

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 align=center class="my-4">Welcome to BloodBank Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The Need for Blood</h4>
                   
                        <p class="card-text" style="padding-left:2%">Blood is composed of the following living cells which support and maintain our body tissues: Red blood cells, which are filled with hemoglobin and carry oxygen from our lungs to the rest of our bodies. White blood cells, which defend against infection. Platelets, which help blood to clot when injuries occur.Blood is essential to help patients survive surgeries, cancer treatment, chronic illnesses, and traumatic injuries. This lifesaving care starts with one person making a generous donation. The need for blood is constant. But only about 3% of age-eligible people donate blood yearly.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Instructions for Blood Donation</h4>
                   
                        <p class="card-text" style="padding-left:2%"><ul><li>Drink lots of water. ...</li>
<li>Eat something light before donating blood and hydrate yourself as it helps you to avoid weakness.</li>
<li> Avoid drinking alcohol the day prior to blood donation.</li>
<li> Do not smoke for at least 2 hours before blood donation.
</li>
<li>Carry at least two IDs before going for blood donation.</li></ul></p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Donation Eligibility</h4>
                   
                        <p class="card-text" style="padding-left:2%"><b>Weight:</b> The donor should not weigh less than 45 kgs<br/>

<b>Pulse:</b> The pulse rate of the donor should be normal (60 to 100 beats per minute)<br/>

<b>Body temperature:</b> Normal body temperature is  98.6°F (37°C)<br/>

<b>Hemoglobin:</b> It should not be less than 12.5 grams per deciliter<br/>

<b>Blood pressure:</b> Systolic and diastolic blood pressure should be within normal range (120/80 mm Hg)<br/>

<b>Age:</b> Donors should be in the age group of 18 – 65 years</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donar</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 8";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <center><a href="search-donor.php"><img  style="margin:5%;" class="card-img-top img-fluid" src="images/profile_logo.png" width="100px" height="100px" alt="" ></a></center>
                    <div style="margin-left:5%;" class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <center><img class="img-fluid rounded" width="300px" height="450px" src="images/image13.jpg" alt=""></center>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row">
            <div class="col-md-6">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
           <div  class="col-md-6">
                 <center><a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a></center>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

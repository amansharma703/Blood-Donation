<?php
error_reporting(0);
include 'includes/config.php';
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobileno'];
    $email = $_POST['emailid'];
    $bloodgroup = $_POST['bloodgroup'];
    $status = 0;

    $sql = "INSERT INTO  tblbloodreq(FullName,MobileNumber,EmailId,BloodGroup, status) VALUES (:fullname,:mobile,:email,:bloodgroup,:status)";

    $query = $dbh->prepare($sql);
    $query->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':bloodgroup', $bloodgroup, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {
        $msg = "Your Request has been Submitted, you will be contacted soon.";
    } else {
        $error = "Something went wrong. Please try again";
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System | Become A Donar</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav>.container {
            width: 100%;
        }
    }
    </style>
    <style>
    .errorWrap {
        padding: 10px;
        color: #000000;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        color: #000000;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }
    </style>


</head>

<body>

    <?php include 'includes/header.php';?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Request for <i>Blood</i></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Request for Blood</li>
        </ol>
        <?php if ($error) {?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
        <?php } else if ($msg) {?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div>
        <?php }?>
        <!-- Content Row -->
        <form name="donar" method="post">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h6 class="font-italic">Full Name<span style="color:red">*</span></h6>
                    <div><input type="text" name="fullname" class="form-control" required></div>
                </div>
                <div class="col-lg-6 mb-4">
                    <h6 class="font-italic">Mobile Number<span style="color:red">*</span></h6>
                    <div><input type="text" name="mobileno" class="form-control" required></div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h6 class="font-italic">Blood Group<span style="color:red">*</span> </h6>
                    <div><select name="bloodgroup" class="form-control" required>
                            <option value="">--Please choose an option--</option>

                            <?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    foreach ($results as $result) {?>
                            <option value="<?php echo htmlentities($result->BloodGroup); ?>">
                                <?php echo htmlentities($result->BloodGroup); ?></option>
                            <?php }}?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <h6 class="font-italic">Email Id</h6>
                    <div><input type="email" name="emailid" class="form-control"></div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div><input type="submit" name="submit" class="btn btn-primary" value="Request Blood"
                            style="cursor:pointer"></div>
                </div>



            </div>



            <!-- /.row -->
        </form>
        <!-- /.row -->
    </div>
    <?php include 'includes/footer.php';?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
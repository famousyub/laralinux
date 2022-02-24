<?php



//include("coonection1.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>FamousME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
.fakeimg {
  height: 200px;
  background: #aaa;
}
</style>
  <link rel="StyleSheet" href="style.css" type="text/css" title="8-bit Color Style">
  <link rel="Shortcut icon" href="images/favicon.ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>

<body>



  <nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">info</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost:8082/famousme//<?php echo  $_GET["username"] ?>">your profile profiles  <?php $_GET["username"] ?> </a>
    </li>
    <li class="nav-item">
    <a href="#" onclick="javascript:window.location.back();" class="nav-link">  back </a>
    </li>
  </ul>

</nav>

<?php   echo "this  is  page was  the  old   version of   famousme  0.1 Version     go   to  newer  version ";   ?>
<?php
//if($id==null)
/*if(!empty($_SESSION['user_id'])){

  $id  =  $_SESSION["user_id"];
}
*/
if(!empty($_GET['user_id'])  &&  !empty($_GET['username'])){

  $_id = $_GET['user_id'];

  //echo $_id;
}



else

{
  echo "error";
  header("Location:index.php");
}
 ?>



 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "famousme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//user_id,username, first_name, last_name,email
$sql = "SELECT user_id,username, first_name, joined,last_name,email  FROM wo_users WHERE user_id=$_id";
$result = $conn->query($sql);




  if ($result->num_rows > 0) {   ?>
 <!--output data of each row  -- >
   <!-- while($row = $result->fetch_assoc()) {  -->
  <?php   //echo "id: " .$result->fetch_assoc()['username']. " - Name: " . $result->fetch_assoc()['username']. " " . $result->fetch_assoc()['email']. "<br>";
















?>



<table cellspacing=0 cellpadding=2 border=0 width="100%" class="table table-dark">





    <tr>
      <td class='white' bgcolor=#3B5998 colspan=2>
        Information
      </td>

      <td align=right class='white' bgcolor=#3B5998>
        [ <a href='#' class=menu>   <?php echo $result->fetch_assoc()["email"]    ?>  </a> ]
      </td>

    </tr>
  </table>

  <table class='bordertable' cellspacing=0 cellpadding=2 border=0 width=100%>
    <tr>
      <td>
        <table cellspacing=0 cellpadding=0 border=0>
          <tr>
            <td>
              <table cellspacing=0 cellpadding=2 border=0>
                <tr>
                  <td colspan=2>
                    <b>Account Info:</b>
                  </td>

                </tr>
                <tr>
                  <td style="width:104px">
                    Name:
                  </td>
                  <td style="width:187px">
                    <?php //echo $result->fetch_assoc()["email"] ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Member&nbsp;Since:
                  </td>
                  <td>
                    <?php //echo date('F j, Y', strtotime($result->fetch_assoc()["joined"])); ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Last&nbsp;Update:
                  </td>
                  <td>
                    <?php //echo date('F j, Y', strtotime($profile->last_update)); ?>
                  </td>
                <tr>
                <tr>

                  <td>
                    <b>Basic Info:</b>
                  </td>
                  <td align=right style="color:#538ae2">
                    [ <a href="">loop_in</a> ]
                  </td>
                </tr>
                <tr>
                  <td>
                    School:
                  </td>
                  <td>
                    <?php //echo "<a href='search.php?school=".$profile->school."'>".$profile->school."</a>"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Status:
                  </td>
                  <td>
                    <?php //echo "$profile->status"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Sex:
                  </td>
                  <td>
                    <?php //echo "$profile->sex"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Birthday:
                  </td>
                  <td>
                    <?php //echo date('F j, Y', strtotime($profile->birthday)); ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Home&nbsp;Town:
                  </td>
                  <td>
                    <?php //echo "$profile->home_town"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Highschool:
                  </td>
                  <td>
                    <?php //echo "$profile->high_school"; ?>
                  </td>
                <tr>
                <tr>

                  <td>
                    <b>Contact Info:</b>
                  </td>
                  <td align=right style="color:#538ae2">
                    [ <a href="edit_profile.php?s=contact">edit</a> ]
                  </td>

                </tr>
                <tr>
                  <td>
                    Email:
                  </td>
                  <td>
                    <?php //echo $result->fetch_assoc()["email"]; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Screenname:
                  </td>
                  <td>
                    <?php //echo $result->fetch_assoc()["email"] ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Mobile:
                  </td>
                  <td>
                    <?php //echo "$profile->mobile"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    <b>Personal Info:</b>
                  </td>
                  <td align=right style="color:#538ae2">
                    [ <a href="#">edit</a> ]
                  </td>
                </tr>
                <tr>
                  <td>
                    Looking&nbsp;For:
                  </td>
                  <td>
                    <?php //echo "$profile->looking_for"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Interested&nbsp;In:
                  </td>
                  <td>
                    <?php // echo "$profile->interested_in"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Relationship&nbsp;Status:
                  </td>
                  <td>
                    <?php //echo "$profile->relationship";	?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Political&nbsp;Views:
                  </td>
                  <td>
                    <?php //echo "$profile->political_view"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Interests:
                  </td>
                  <td>
                    <?php //echo "$profile->interests"; ?>
                  </td>
                <tr>
                <tr>
                  <td>
                    Music:
                  </td>
                  <td>
                    <?php //echo '$profile->favourite_music';	?>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>





<?php }else { ?>
  <?php echo "0 results";} ?>
 <?php //}?>

<?php //} ?>














<!--  //}  -->





<?php
$conn->close();
?>

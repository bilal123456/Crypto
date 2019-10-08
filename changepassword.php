<!DOCTYPE html>
<html>
<?php session_start();
include('Admin/Database/Connection.php');
$email = $_SESSION['email'];

 ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Crypto Stock</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<style type="text/css">
    #sidebar
    {
        border: 5px solid #34c4d2;
    }
</style>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color: #225269;">
            

             <ul class="list-unstyled components" style="color: white;position: relative;top: 50px;">
                
               
                <li class="active" class="arrow-down">
                    <a href="home.php">Dashboard</a>
                </li>
                
                
                  <li>
                    <a href="rafferal.php?rafferalid=<?php echo $id; ?>">My Refferal</a>
                </li>
                <li>
                    <a href="history.php">Saving Record
</a>
                </li>
                 
               
                 <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Packages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="depositamount.php">Buy Packages</a>
                    </li>
                   
                  
                   
                   
                </ul>
            </li>
            <li>
                    <a href="withdraw.php">Withdraw</a>
                </li>
               
                
                 <li>
                <a href="#pageSubmenut" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Setting</a>
                <ul class="collapse list-unstyled" id="pageSubmenut">
                    <li>
                        <a href="changepassword.php">Change Password</a>
                    </li>
                    <li>
                        <a href="changepassword.php">Change Pin</a>
                    </li>
                    <li>
                        <a href="changepassword.php">Profile Information</a>
                    </li>
                   
                   
                </ul>
            </li>
                <?php if($email !=""){
                ?>
                 <li>
                    <a href="logout.php">logout
</a>
                </li>
                <?php
                }else
                {
                    header("Location:login.html");
                }
                 ?>
                
            </ul>
           
        </nav>

        <!-- Page Content  -->
        <div id="content" style="background: #4C2EA2; color: black;">

<nav class="navbar navbar-expand-md   fixed-top" style="background-color: #225269;color: white;">
     <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        </button>
</nav>
           
              
	<div class="container" style="position: relative;top: 10px;">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Change Password</h5>
            <form method="post" class="form-signin">
              <div class="form-label-group">
                 <label for="inputEmail">old password</label>
                <input name="oldpassword" type="text" id="inputEmail" class="form-control form-input" placeholder="old password" required autofocus>
               
              </div>
<label for="inputPassword">New Password</label>
              <div class="form-label-group">
                <input type="password" name="npassword" id="inputPassword" class="form-control form-input" placeholder="new password" required>
                
              </div>

              <div class="form-label-group">
                 <label for="inputEmail">Comfirm password</label>
                <input name="cpassword" type="password" id="inputEmail" class="form-control form-input" placeholder="Comfirm password" required autofocus>
               
              </div>
              <button name="changepassword" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" style="background-color: #bacb2f;
    border: 1px solid #bacb2f;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: .5px;
    padding: 10px 30px;
    text-transform: uppercase;
    -webkit-transition: all .4s;
    transition: all .4s;
    z-index: 9999!important;">Change Password</button>
              <hr class="my-4">
           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
          

          <?php 

          if(isset($_POST['changepassword']))
          {
          	$sql = "select * from customer where email='".$email."'";
          	$run = mysqli_query($link,$sql);
          	$oldpassword = $_POST['oldpassword'];
          	$npassword = $_POST['npassword'];
          	$cpassword = $_POST['cpassword'];
          	if(mysqli_num_rows($run)>0)
          	{
          		while($row = mysqli_fetch_assoc($run))
          		{
          			$password = $row['Password'];
          			if($password == $oldpassword)
          			{
          				if($npassword == $cpassword)
          				{
          					$updatequery = "update customer set Password='".$npassword."' where email='".$email."' ";
          					$runquery = mysqli_query($link,$updatequery);
          					echo "<script>alert('Successfully Changed')</script>";
          				}
          				else
          				{
          					echo "<script>alert('please enter same password')</script>";
          				}
          			}
          			else
          			{
          				echo "<script>alert('wrong password')</script>";
          			}
          		}
          	}

          }


          ?>    
           


           
        </div>
    </div>
    <style type="text/css">
        /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
   
    
    color: #fff;
    transition: all 0.3s;


  position: fixed;
  z-index: 1;
  
  background: #eee;
  overflow-x: hidden;
 
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
    </style>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
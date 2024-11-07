<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>


<style>
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
    
    i,
    span {
        display: inline-block;
    }
    
    .wrapper {
        display: flex;
        align-items: stretch;
    }
    
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #7386D5;
        color: #fff;
        transition: all 0.3s;
    }
    
    #sidebar.active {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
    }
    
    #sidebar.active .sidebar-header h3,
    #sidebar.active .CTAs {
        display: none;
    }
    
    #sidebar.active .sidebar-header strong {
        display: block;
    }
    
    #sidebar ul li a {
        text-align: left;
    }
    
    #sidebar.active ul li a {
        padding: 20px 10px;
        text-align: center;
        font-size: 0.85em;
    }
    
    #sidebar.active ul li a i {
        margin-right: 0;
        display: block;
        font-size: 1.8em;
        margin-bottom: 5px;
    }
    
    #sidebar.active ul ul a {
        padding: 10px !important;
    }
    
    #sidebar.active .dropdown-toggle::after {
        top: auto;
        bottom: 10px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    
    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7fcc;
    }
    
    #sidebar .sidebar-header strong {
        display: none;
        font-size: 1.8em;
    }
    
    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
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
    
    #sidebar ul li a i {
        margin-right: 10px;
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
    
    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }
    
    @media (max-width: 768px) {
        #sidebar {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
            margin-left: -80px !important;
        }
        .dropdown-toggle::after {
            top: auto;
            bottom: 10px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
        }
        #sidebar.active {
            margin-left: 0 !important;
        }
        #sidebar .sidebar-header h3,
        #sidebar .CTAs {
            display: none;
        }
        #sidebar .sidebar-header strong {
            display: block;
        }
        #sidebar ul li a {
            padding: 20px 10px;
        }
        #sidebar ul li a span {
            font-size: 0.85em;
        }
        #sidebar ul li a i {
            margin-right: 0;
            display: block;
        }
        #sidebar ul ul a {
            padding: 10px !important;
        }
        #sidebar ul li a i {
            font-size: 1.3em;
        }
        #sidebar {
            margin-left: 0;
        }
        #sidebarCollapse span {
            display: none;
        }
    }
    
    .btn {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 10rem;
    }
    
    .btn {
        background-color: white;
        color: black;
        /* border: 2px solid red; */
    }
    
    .btn:hover {
        background: #6d7fcc !important;
        color: white;
    }
    
    #ten {
        margin-top: 20px;
        margin-left: 100px;
    }
    
    .card {
        display: inline-block;
        overflow-x: scroll;
        margin-left:200px;
    }
    
    #abc1 {
        margin-left: 10px;
    }
    
    .cardsH {
        margin-top: 40px;
        margin-left: 30px;
    }
    
    .cardsH #btn2,
    #btn3 {
        margin-left: 20px;
    }
    
    #btn1 {
        margin-left: 350px;
    }
    .card-body{
        margin-left:100px;
    }
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contribute";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
  die("Connection failed: " . mysqli_connect_error());
  
  $query = "select * from card";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $title = $row['title'];
  $details = $row['details'];
  $reference = $row['reference'];
  $link = $row['link'];
  echo "<br />";
  

mysqli_close($conn);
?>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Contribute.io</h3>
                <!-- <strong>Contribute.io</strong> -->
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="" aria-expanded="" class="">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <!-- <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="NoData.html">
                        <i class="fas fa-briefcase"></i> About
                    </a>
                    <a href="NoData.html" data-toggle="" aria-expanded="" class="">
                        <!-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> -->
                        <i class="fas fa-copy"></i> Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <!-- <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="NoData.html">
                        <i class="fas fa-image"></i> Portfolio
                    </a>
                </li>
                <li>
                    <a href="NoData.html">
                        <i class="fas fa-question"></i> FAQ
                    </a>
                </li>
                <li>
                    <a href="NoData.html">
                        <i class="fas fa-paper-plane"></i> Contact
                    </a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span> </span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="#">Page</a> -->
                                <button class="btn"><i class="fa fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <button class="btn" id="btn1" onclick="window.open('pcard.html','_self');">+ Create Post</button>
            <div class="cardsH" id=""> 
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contribute";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
  die("Connection failed: " . mysqli_connect_error());
  
  $query = "select * from card";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) {
  $title = $row['title'];
  $details = $row['details'];
  $reference = $row['reference'];
  $link = $row['link'];
  echo "<br />";
  echo "<br />";
  



?>

                <div class="card" style="width:450px">
                    <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%"> -->
                    <!-- <button class="btn" onclick="window.open('post.html','_self');">+ Create Post</button> -->
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $title ?></h4><hr>
                        <p class="card-text"><?php echo $details ?></p> 
                        <p class="card-text"><?php echo $reference ?></p> 
                        <p class="card-text"><?php echo $link ?></p> 
                        <a href="#" class="btn btn-primary stretched-link">See Profile</a>
                    </div></div>
    
<?php
  }
 mysqli_close($conn);
?>
</div>

                <!-- <div class="card" style="width:250px" id="btn2"> -->
                    <!-- <img class=" card-img-top " src="img_avatar1.png " alt="Card image " style="width:100% "> -->
                    <!-- <button class="btn " onclick="window.open( 'post.html', '_self'); ">+ Create Post</button> -->
                    <!-- <div class="card-body" id="abc1">
                        <h4 class="card-title ">Developer</h4> <hr></hr>
                        <p class="card-text ">Some example text some example text. Shaaz Mukadam is an Computer engineer.</p> -->
                        <!-- <a href="# " class="btn btn-primary stretched-link ">See Profile</a> -->
                        <!-- <p id="rest ">Upload Resume <span id="arrow ">↓</span></p>
                        <input type="file " name=" " id="res " placeholder="Upload resume ">
                    </div>
                </div> -->

                <!-- <div class="card " style="width:250px" id="btn3"> -->
                    <!-- <img class="card-img-top " src="img_avatar1.png " alt="Card image " style="width:100% "> -->
                    <!-- <button class="btn " onclick="window.open( 'post.html', '_self'); ">+ Create Post</button> -->
                    <!-- <div class="card-body ">
                        <h4 class="card-title ">Company</h4><hr>
                        <p class="card-text ">Some example text some example text. Shaaz Mukadam is an Computer engineer.</p> -->
                        <!-- <a href="# " class="btn btn-primary stretched-link ">See Profile</a> -->
                        <!-- <p id="rest ">Upload Resume <span id="arrow ">↓</span></p>
                        <input type="file " name=" " id="res " placeholder="Upload resume ">
                    </div>
                </div> -->

            <!-- </div> -->





            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js " integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ " crossorigin="anonymous "></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js " integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm " crossorigin="anonymous "></script>

            <!--Renaamed file-->
            <script type="text/javascript ">
                $(document).ready(function() {
                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').toggleClass('active');
                    });
                });
            </script>
</body>

</html>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
include ('about.php');

if(isset($_POST['submit'])){
  $itemArr=$_POST['name'];
  foreach($itemArr as $list){
    if($list!=''){
      $sql="insert into parameters(name) values('$list')";
      $stmt=$con->prepare($sql);
      $stmt->execute();
    }
  

  }
}


if(isset($_POST['submit'])){
  $itemArrss=$_POST['pscore'];
  foreach($itemArrss as $list){
    if($list!=''){
      $sql="insert into parameter score(pscore) values('$list')";
      $stmt=$con->prepare($sql);
      $stmt->execute();
    }
  

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
<style>
   #wrap{width:30% ;}
   .my_box{width:100%; padding-bottom:36px;}
   .field_box{float:left; width:80%;}
   .button_box{float:left; width:20%;}

   #crap{width:30% ;}
   .mi_box{width:100%; padding-bottom:36px;}
   .fields_box{float:left; width:80%;}
   .buttons_box{float:left; width:20%;}
  </style>
  <script src="jquery-1.4.1.min.js"> 
    </script>
  <script>
    function add_more(){
      var box_count=jQuery("#box_count").val();
      box_count++;
      jQuery("#box_count").val(box_count);
      jQuery("#wrap").append('<div class="my_box" id="box_loop_'+box_count+'"><div class="field_box"><input type="textbox" name="name[]" id="name"></div><div class="button_box"><input type="button" name="submit" id="submit" value="Remove" onclick=remove_more("'+box_count+'")></div></div>');
   
      }
     function remove_more(box_count){
       jQuery("#box_loop_"+box_count).remove();
       var box_count=jQuery("#box_count").val();
       box_count--;
       jQuery("#box_count").val(box_count);
     }
     
     function adds_more(){
      var boxs_count=jQuery("#boxs_count").val();
      boxs_count++;
      jQuery("#boxs_count").val(boxs_count);
      jQuery("#crap").append('<div class="mi_box" id="boxs_loop_'+boxs_count+'"><div class="fields_box"><input type="textbox" name="pscore[]" id="pscore"></div><div class="buttons_box"><input type="button" name="submit" id="submit" value="Remove" onclick=removes_more("'+boxs_count+'")></div></div>');
   
      }
     function removes_more(boxs_count){
       jQuery("#boxs_loop_"+boxs_count).remove();
       var boxs_count=jQuery("#boxs_count").val();
       boxs_count--;
       jQuery("#boxs_count").val(boxs_count);
     }

   </script>
    <title>Welcome to DFYNE Trainer.<?php $_SESSION['username']?></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<body>

Welcome to DFYNE TRAINER- <?php echo $_SESSION['username']?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DFYNE Trainer's Login Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="/website/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/website/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/website/signup.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/website/logout.php">Logout</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/931858-indian-food-1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/adhd-foods-to-avoid_thumb-732x549.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/maxresdefault.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section  class="my-5">
     
    <div class="py-5">
        <h2 class="text-center">About Us </h2>
</div>    

  <div class="container-fluid">
  <div class="row">
        <div class="col-lg-6 col-md-6 col-12" >
            <img src="Images/12.jpeg" class="img-fluid aboutimg" >
        </div>
        <div class="col-lg-6 col-md-6 col-12" >
            <h2>Welcome to Tj Tech.</h2>
            <p>Hello this is tj tech where you can learn a lot of new things.Stay in touch with this channel to get latest updates</p>
             <a href="about.php">Check More</a>    

        </div>
   </div>   
</div>
</section>

<section  class="my-5">
     
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
</div>  

<div class="container-fluid">
<div class="row">
        <div class="col-lg-4 col-md-4 col-12" >
        <div class="card" >
      <img class="card-img-top" src="Images/ed10c68d-a74b-40e2-aaaf-9f00ef8b4842_750x422.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="card-title">Good Food :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
      </div>
     </div>
     </div>

     <div class="col-lg-4 col-md-4 col-12" >
        <div class="card" >
      <img class="card-img-top" src="Images/ed10c68d-a74b-40e2-aaaf-9f00ef8b4842_750x422.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="card-title">Good Food :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
      </div>
     </div>
     </div>


    <div class="col-lg-4 col-md-4 col-12" >
        <div class="card" >
      <img class="card-img-top" src="Images/ed10c68d-a74b-40e2-aaaf-9f00ef8b4842_750x422.jpg" alt="Card image">
     <div class="card-body">
    <h4 class="card-title">Good Food :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
      </div>
     </div>
     </div>
 
</div>
</div>
</section>


<section  class="my-5">
     
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
</div>  
 <div class="container-fluid"> 
 <div class="row">
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-3" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
        <div class="col-lg-4 col-md-4 col-12" >
        <img src="Images/ice.jpg" class="img-fluid pb-4" >   

        </div>
</div>

</div>

</section>



<section  class="my-5">
     
    <div class="py-5">
        <h2 class="text-center">DFYNE'S USER DETAILS</h2>
    </div>  
<form action="" method="POST">
  <table>
    <tr>
      <td>Name : </td>
      <td><input type="text" name="username" required></td>
</tr>
<tr>
      <td>Trainings: </td>
      <td>
      <select name="training" required>
      <option selected hidden value="">Trainings</option>
      <option>DIELTS</option>
      <option>DOETN</option>
      <option>DSPO</option>
      <option>DELPT</option>
      <option>DELP</option>
</select>
</td>    
</tr>
<tr>
      <td>Excersices/Activity Id's : </td>
      <td>
      <select name="activity" required>
      <option selected hidden value="">Select Excersices</option>
      <option>Reading</option>
      <option>Writing</option>
      <option>Listening</option>
      <option>Speaking</option>
      <option>Elementory</option>
</select>
</td>  
</tr>
<tr>
  <td>Gender :</td>
  <td>
  <input type="text" name="gender" value="m" required>Male
  <input type="text" name="gender" value="f" required>Female 
</td>
</tr>
<tr>
  <td>Email : </td>    
  <td><input type="email" name="email" required></td>
</tr>
<tr>
  <td>Phone no. ::</td>
  <td>
    <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option>91+</option>
      <option>64+</option>
</select>
<input type="phone" name="phone" required>
</td>

</tr> 
<tr>
  <td>Total Marks: </td>    
  <td><input type="number" name="total" required></td>
</tr>

   <button type="submit" name="insert" class="btn btn-default">Insert</button>
   <button type="submit" name="update" class="btn btn-default">Update</button>
   <button type="submit" name="delete" class="btn btn-default">Delete</button>


</table>
</form>
</section>
<form method="post">
  <div id="wrap">
    <div class="my_box">
    <div class="field_box"><input type="textbox" name="name[]" id="name"></div>
  <div class="button_box"><input type="button" name="add_btn"  value="Add More" onclick="add_more()"></div>
</div>
  </div>
  <input type="submit" value="Submit Parameter" name="submit">
  <input type="hidden" id="box_count" value="1">
    </form>

    <form method="post">
  <div id="crap">
    <div class="mi_box">
    <div class="fields_box"><input type="textbox" name="pscore[]" id="pscore"></div>
  <div class="buttons_box"><input type="button" name="add_btn"  value="Add More" onclick="adds_more()"></div>
</div>
  </div>
  <input type="submit" value="Submit Score" name="submit">
  <input type="hidden" id="boxs_count" value="1">
    </form>


<div class="col-lg-12">
<table class="table table-bordered">
   <thead>
       <tr>
         <th>#</th>
         <th>Username</th>
         <th>Trainings</th>
         <th>Excersices/Activity Id's</th>
         <th>Gender</th>
         <th>Email</th>
         <th>phoneCode</th>
         <th>Phone</th>
         <th>Total Marks</th>         
</tr>
</thead>
<tbody>
  
<?php
$res=mysqli_query($link,"select * from table2");
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
  echo "<td>"; echo $row["id"]; echo"</td>";
  echo "<td>"; echo $row["username"]; echo"</td>";
  echo "<td>"; echo $row["training"]; echo"</td>";
  echo "<td>"; echo $row["activity"]; echo"</td>";
  echo "<td>"; echo $row["gender"]; echo"</td>";
  echo "<td>"; echo $row["email"]; echo"</td>";
  echo "<td>"; echo $row["phoneCode"]; echo"</td>";
  echo "<td>"; echo $row["phone"]; echo"</td>";
  echo "<td>"; echo $row["total"]; echo"</td>";
  echo "</tr>";

}

?>

</tbody>
</table>

</div>

<div class="col-lg-12">
<table class="table table-bordered">
   <thead>
       <tr>
         <th>#</th>
         <th>Parameter Names</th>
        
           
</tr>
</thead>
<tbody>
  
<?php
$res=mysqli_query($link,"select * from parameters");
while($row=mysqli_fetch_array($res))
{
  echo "<tr>";
  echo "<td>"; echo $row["id"]; echo"</td>";
  echo "<td>"; echo $row["name"]; echo"</td>";
  echo "</tr>";

}

?>

</tbody>
</table>

</div>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into table2 values(NULL, '$_POST[username]',' $_POST[training]', '$_POST[activity]', '$_POST[gender]', '$_POST[email]' , '$_POST[phoneCode]' , '$_POST[phone]','$_POST[total]')"); 
}
if(isset($_POST["delete"]))
{
  
}

?>


<footer>
  <p class="p-3 bg-dark text-white text-center">@tjtechs</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  
  <title>Frontend Mentor | Shortly URL shortening API Challenge</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
<style>
  .computerimage{
  height:300px;
  width:600px;
  }
  @media(max-width:769px){
    .computerimage{
    height:300px;
    width:700px;
  }
  }
  @media(max-width:426px){
    .computerimage{
    height:300px;
    width:350px;
  }
  }
  @media(max-width:376px){
    .computerimage{
    height:300px;
    width:300px;
  }
  }
  @media(max-width:320px){
    .computerimage{
    height:300px;
    width:280px;
  }
  }
</style>
</head>
<body >


  

<div class="container-fluid">


  <div class="container-fluid">

    <div class="row">
      <div class="col-2" style="margin-top: 22px;text-align: center;">
        <h3>Shortly</h3>
  
      </div>
  
      <div class="col-10 ">
        <nav class="navbar navbar-expand-lg  d-flex justify-content-end">
        
           
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse justify-content-start mx-5 navbarscustom" id="navbarNav">
          
            <ul class="navbar-nav" >
              <li class="nav-item">
                <a class="nav-link" style="text-align: center;"  href="#" id="feat">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="text-align: center;"  href="#" id="price">Pricing</a>
              </li>
              <li>
              <a class="nav-link" style="text-align: center;" href="#" id="res">Resource</a>
            </li>
              
            </ul>
            <hr>
          </div>
          <div class="collapse navbar-collapse justify-content-end mx-5  navbarscustom " id="navbarNav">
            <ul class="navbar-nav">
              <?php
if(isset($_SESSION['userid']) && $_SESSION['userid'] !=''){?>
<li class="nav-item">
                <a class="nav-link" style="text-align: center;" href="Logout.php" >
                  <p class="btn" id="log">Logout</p>
                </a>
              </li>
<?php
}
else{?>
 <li class="nav-item">
                <a class="nav-link" style="text-align: center;" href="login.php" >
                  <p class="btn" id="log">Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="text-align: center;" href="signup.php">
                  <p class="btn" style=" background-color:hsl(180, 66%, 49%);" id="sign">Sign up</p>
                </a>
              </li>
<?php
}
              ?>
             
             
              
            </ul>
            </div>
          
      
      </nav>
      </div>
    </div>
    



<div class="row">

  <div class="col-lg-6 mt-4" >
    <h1 >More than just <br>
       shorter links</h1>
     <p > Build your brand's recognition and get detailed insights <br>
     on how your links are performing.
    </p>
     <br>
    <a href="#" class="btn btn-round" style=" background-color:hsl(180, 66%, 49%);">Get started</a>
  </div>

  <div class="col-lg-6 d-flex justify-content-end">
<img src="images/illustration-working.png" alt="" class="computerimage" >
  </div>
</div>


  <div class="row ">
   
    <div  class="imageback d-flex justify-content-center align-items-center" style="background-image:url(bg-shorten-desktop.png); ">
      <div class="row ">
        <div class="col-md-8">
          <input class="form-control searchbar " type="search" placeholder="Shorten your link..." aria-label="Search" ">

        </div>
        <div class="col-md-4">
          <button class="btn "  id="button" type="submit"  style=" background-color:hsl(180, 66%, 49%);">Shorten it!</button>
        </div>
      </div>
        
   </div>
    </div>
        
  </div>

    


 
    
 


<div class="container-fluid" style="background-color: lightgray;">

<div class="row">
  <div class="col" style="margin-top: 65px;">
    <div>
      <h1 class="d-flex justify-content-center">Advanced Statistics</h1>
      <div>
        <p class="d-flex justify-content-center">Track how your links are performing across the web with <br>
          our advanced statistics dashboard.</p>
      </div>
    </div>
   
    
  </div>
</div>


  <div class="row mb-4">

    <div class="borderline">

    </div>
    <div class="col-lg-4" style="margin-top: 66px;text-align: center;">
        <div class="card" style="position: relative;" >

       
          <img src="images/icon-brand-recognition.png" alt="" height="80" width="80"  class="bg-dark p-3 icon1">

           <h4>Brand recoginition</h4>
  

            <div class="card-body">
                  Boost your brand recoginition with <br>
                  each link.Generic link don't mean a <br>
                  thing. Branded links help instil <br>
                  confidence in your content.
            </div>
        </div>
    </div>
    
    <div class="col-lg-4" style="text-align: center;">
      <div class="card " style="margin-top: 132px;">

        <img src="images/icon-detailed-records.png" alt="" height="80" width="80" class="bg-dark p-3 icon2" >
  
          <h4>Detailed records</h4>

  <div class="card-body">
    Gain insights into who is clicking your <br>
     links. Knowing when and where <br>
     people engage with your content <br>
      helps inform better decisions.
  </div>
    </div>
    </div>

    <div class="col-lg-4" style="text-align: center;">
      <div class="card" style="margin-top: 198px;">

        <img src="images/icon-fully-customizable.png" alt="" height="80" width="80" class="bg-dark p-3 icon3" >
  
     <h4>Fully customizable</h4> 
      
        <div class="card-body">
          Improve brand awareness and <br>
           content discoverability through <br>
            customizable links, supercharging <br>
             audience engagement.
        </div>
    </div>
  </div>
</div>


  <div class="row">
    <div style="background-image:url(bg-boost-desktop.png); height: 200px; text-align: center;background-color:hsl(257, 27%, 26%);" >
      <h3 class="d-flex justify-content-center text-white" style="position: relative;top: 50px; ">Boost your links today</h3>
     
      <div>
       <button class="btn"  style="position: relative;top: 65px; background-color:hsl(180, 66%, 49%); ">get started</button>
      </div>
       
    </div>
    
  </div>
  
    
  
  


<div class="row bg-dark text-white">
  <div class="col-sm-12 col-lg-3" style="text-align: center;">
   <h1>shortly</h1> 
  </div>
  <div class="col-sm-12 col-lg-2" style="text-align: center;">
    <h4>Features</h4>
    <p>Link Shortening</p>
    <p>Branded Links</p>
    <p>Analytics</p>
  </div>
  <div class="col-sm-12 col-lg-2" style="text-align: center;">
    <h4>Resources</h4>
    <p>Blog</p>
    <p>Developers</p>
    <p>Support</p>
    
  </div>
  <div class="col-sm-12 col-lg-2" style="text-align: center;">
    <h4>Company</h4>
    <p>About</p>
    <p>Our team</p>
    <p>Careers</p>
    <p>Contact</p>
  </div>
  <div class="col-sm-12 col-lg-3" style="text-align: center;">
<img src="images/icon-facebook.png" alt="" class="me-3">
<img src="images/icon-twitter.png" alt="" class="me-3">
<img src="images/icon-pinterest.png" alt="" class="me-3">
<img src="images/icon-instagram.png" alt="" class="me-3">
  </div>
</div>


</div>
</div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</html>



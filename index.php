<!DOCTYPE html>
<html lang="en">
<head>
   <title>Basic banking website</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<style>
#foot{
    color:white;
    text-align:center;
    margin-top: 100px;
	 
    }

    #footer{
    
        background-color:#1f1e1e;
        width: 100%;
        padding: 10px;
        margin-bottom: 0px;
        height: fit-content;
		
		
    }
	#bodyhead{
height: fit-content;
width:100%px;
background-color:#b6afc4;
font-style: italic;
padding: 5px;
color: white;
}

</style>

<body>

<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sparks Bank </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
	 

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="createuser.php">Create Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>
         
        
    </div>


      </ul>
      
    </div>
  </div>
</nav>

<div id="bodyhead">
            <marquee  scrollamount="15px" behaviour="alternate" >
                <h4> Your Perfect Banking Partner</h4></marquee>
            </div>

<!-- Caraousel-->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	 <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banking.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Easy Banking</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/bank2.jpg" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption  d-none d-md-block">
    <h3>Financial Freedom</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/bank1.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Customer Satisfaction</h3>
    </div>
    </div>
	<div class="carousel-item">
      <img src="images/bank3.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Easy Money Transfer</h3>
    </div>
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About us-->
<section class= "my-5">
<div class="py-5" style="background-color:lavenderblush;" >
 <h3 class="text-center" >About Us</h3>
 </div>
<div class="container-fluid">
 <div class ="row">
<div  class="col-lg-6 col-md-6 col-12">
      <img src="images/Bank.jpg" class="img-fluid">
      </div>
      <div  class="col-lg-6 col-md-6 col-12" style="background-color:lavender;">
      <h1>Sparks Bank</h1>
      <p1> Sparks Bank is a nationalised bank under the ownership of Ministry of Finance , 
	  Government of India. The bank had million customers across the country with 1,900 branches .
	  It has the largest network of branches of any nationalised bank in the state 
	  of Maharashtra.</p1>
        
        </div>  
         

 </div>
 </div>


</section>




<footer id="foot">
                 <div id = "footer">
                <p>@2021 Mrunal Shende<br>
                 "GRIP Internship"</p>
             </div>
  
   </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
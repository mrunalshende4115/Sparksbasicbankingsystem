<?php

                if($_SERVER['REQUEST_METHOD']=='POST'){
					#$id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $balance = $_POST['balance'];
                        
                    $severname = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "sparkbank";
                    //connecting to database
                    $conn = mysqli_connect($severname, $username, $password, $database);
        
                    if(!$conn){
                        die("Sorry, Failed to connect due to some technical issue.");
                    }else
                        {
                            //submit data to the database. 
                        
        
        
                        //insert a sql query to be executed.. 
                        $sql = "INSERT INTO `users` (`name`, `email`, `balance`) 
                        VALUES ( '$name', '$email', '$balance')";
                          $result = mysqli_query($conn, $sql);
                     
                       // $result = mysqli_query($conn, $sql);
                        //add a new row in roli database.... 
        
                     
        
                        }
                        }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="createuser.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Basic banking website</title>
  </head>
  <style>
  
  .useraccount{
    align-content: center;
    background-color: #b6afc4;
    margin-left: 200px;
    margin-right: 200px;
    margin-top: 50px;
    border: 5px solid white;
    border-radius: 10px;
    padding: 15px;
	height: auto; 
  width: auto;
}

  #foot{
    color:white;
    text-align:center;
    margin-top: 100px;
    }

    #footer{
    
        background-color:#1f1e1e;
        width: 100%;
        padding: 10px;
       
    }
	
	


</style>
  <body style="background-color : #4B0082;" >

 
			 
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

             <?php 
            if(isset($result)){
                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulation!</strong> New user created successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }else { 
                  //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  //   <strong>Sorry!</strong> New user not created , due to some technical issue.
                  //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  // </div>';
                }
             ?>

                  
<div class="heading">
    <strong>   <p>Create New User Account</p>
</strong>
</div>

<!-- -->

<div class="useraccount">
  
      <form action = "createuser.php" method = "post" >
        <div class="mb-3">
          <label for="name" class="form-label"> <strong>Name</strong> </label>
          <!-- <input type="te" class="form-control" id="name" aria-describedby="emailHelp"> -->
          <input type="text" name="name" id="name"  class="form-control">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"> <strong>Email-id</strong> </label>
          <input type="email" class="form-control" id="email" name = "email">
          
        </div>
        <div class="mb-3">
          <label for="balance" class="form-label"> <strong>Balance</strong> </label>
          <input type="number" class="form-control" id="balance" name = "balance">
        </div>

        <button type="submit" class="btn btn-primary">CREATE</button>
      </form>


</div>








<footer id="foot">
                 <div id = "footer">
                <p>@2021 Mrunal Shende<br>
                 "GRIP Internship"</p>
             </div>
  
   </footer>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inlogpagina</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body  {
          font-family: Arial, Helvetica, sans-serif;
          background-color: #FFB567;
          }

* {box-sizing: border-box;}





.navbar {
width: 100%;
background-color:inherit;
overflow: auto;
}

.navbar a {
float: left;
padding: 12px;
color: white;
text-decoration: none;
font-size: 17px;
}

.navbar a:hover {
background-color: #FFEED8;
color:#555;
}

.active {
background-color:inherit;
}

@media screen and (max-width: 500px) {
.navbar a {
  float: none;
  display: block;
}
}



</style>


<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#"><i class="fa fa-fw fa-search"></i> Zoek</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
</div>


</head>
<body>



<div class="container">
    <form action="dataform1.php" method="post"> 
      <div class="row">
        <h2 style="text-align:center">Login met uw Social Media account of Persoonlijke gegevens</h2>
        <div class="vl">
          <span class="vl-innertext">Of</span>
        </div>
  
        <div class="col">
          <a href="#" class="fb btn">
            <i class="fa fa-facebook fa-fw"></i> Login met Facebook
          </a>
          <a href="#" class="twitter btn">
            <i class="fa fa-twitter fa-fw"></i> Login met Twitter
          </a>
          <a href="#" class="google btn">
            <i class="fa fa-google fa-fw"></i> Login met Google+
          </a>
        </div>
  
        <div class="col">
          <div class="hide-md-lg">
            <p>Or sign in manually:</p>
          </div>
          <input type="text" name="username" placeholder="Gebruikersnaam" required>
          <input type="password" name="password" placeholder="Wachtwoord" required>
          <input type="submit" name= "submit" value="Login">
        </div>
  
      </div>
    </form>
  </div>
  
  <div class="bottom-container">
    <div class="row">
      <div class="col">
        <a href="#" style="color:white" class="btn">Accoun aanmaken</a>
      </div>
      <div class="col">
        <a href="#" style="color:white" class="btn">Wachtwoord vergeten?</a>
      </div>
    </div>
  </div>
  


      
</body>
</html>
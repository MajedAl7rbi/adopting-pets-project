<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    
    <!-- Header tab -->
    <header>
        <nav role='navigation'>
            <ul>
                <li><a id="logo1" href="1.home.php"><img src="images\cats\catTransparent.png" alt="Logo" height="50px" width="50px"></a></li>
                <li><a href="1.home.php">Home</a></li>
                <li><a href="2.pets.php">Pets</a></li>
                <li><a href="3.adopt.php">adopt</a></li>
                <li><a href="4.addpet.php">Add new pet</a></li>
            </ul>
        </nav>
    </header>

    <!-- the slider -->
    <div id="slides" class="carousel" data-ride="carousel" data-interval="3000">
        <!-- to control the slider -->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <!-- slider content -->
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="images/nala1.png" class="crop"></div>
            <div class="carousel-item"><img src="images/dog2.png" class="crop"></div>
            <div class="carousel-item"><img src="images/nala2.png" class="crop"></div>
        </div>
    </div>
    <!-- the text bellow -->
    <div class="container-fluid">
        <div class="row background">
    
            <div class="col-12" align="center">
                <h1>Adopt or Put Up for Adoption</h1>
            </div>
    
            <div class="col-12 col-sm" align="center">
                <p class="size">Pets deserve a good life,</p>
            </div>
    
            <div class="col-12" align="center">
                <p class="size">help save a pet today!</p>
                <p class="size">And join our Community</p>
                
            </div>
            
            <div>.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            </div>
    
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="project.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

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

    <div class="background">
       <section>
           <ul>
               <li class="list active" data-filter="all">Show all</li>
               <li class="list" data-filter="cat">Cats</li>
               <li class="list" data-filter="kitten">Kittens</li>
               <li class="list" data-filter="dog">Dogs</li>
               <li class="list" data-filter="puppy">Puppies</li>
           </ul>
        <div class="grid-container">
            <?php 


            // includes the connections for database
            include_once 'configs/connection.php';
            $q = "SELECT * FROM `pets` WHERE 1";
            foreach ($conn->query($q) as $row) {
            echo " <div class=\"card {$row['pet_kind']}\">
            <img class=\"card-img-top crop2\" src=\"{$row['pet_image']}\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{$row['pet_name']}</h5>
                <p class=\"card-text\">{$row['physical_address']}</p>
                <a href=\"3.adopt.php\" class=\"btn btn-outline-primary\">Adopt</a>
            </div>
        </div>";
            
            }
            
            ?>
           
        </div>
    </section>
    </div>
</body>

</html>
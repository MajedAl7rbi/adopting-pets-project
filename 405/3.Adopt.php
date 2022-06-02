<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="project.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <header>
        <nav role='navigation' id="mynavigation">
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
        <div class="appBackground">
        <div class="listpostion">
            <h1 class="formtitle">Adopt</h1>
                <h3 class="apptitle">Adoption application</h3>
                <p class="listTitle">To adopt you must:</p>
                <ul class="list">
                    
                    <li>
                        Be prepared for ongoing expenses and veterinary care
                    </li>
                    <li>
                        Agree that if for any reason the adoption does not work out then <br>
                        the animal will be returned to Animals Lebanon
                    </li>
                    <li>
                        Complete the adoption application, providing contact details <br>
                        and information about the home you can provide
                    </li>
                    <li>
                        If everything seems great the adoption will be complete and you will <br>
                        sign an adoption agreement and can welcome the animal into your home
                    </li>
                    <li>
                        We will be available to help with any advice you need or answer any questions <br>
                        to make sure the adoption is rewarding and fun for you and the animal
                    </li>
                </ul>
        </div>

        
        <form id="myForm" class="form">
        <div class="row">
            <div class="col-6">
                <div class="form-control">
                    <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
            </div>
            <div class="col-6">
                <div class="form-control">
                    <label for="firstname">Last name</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-control">
                    <label for="firstname">City</label>
                    <input type="text" name="city" id="city">
        
                </div>
            </div>
            <div class="col">
                <div class="form-control">
                    <label for="firstname">Physical address</label>
                    <input type="text" name="physical_address" id="physical adress">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-control">
                    <label for="firstname">Date Of Birth</label>
                    <input type="date" name="age" id="age" >
                </div>
            </div>
            <div class="col">
                <div class="form-control">
                    <label for="firstname">Phone number</label>
                    <input type="text" name="phone" id="phone" >
                </div>
            </div>
        </div>
            <div class="form-control">
                <label for="firstname">Email</label>
                <input type="email" name="email" id="email" >
            </div>
        <div class="form-group">
            <label for="firstname">Do you currently have any cats, dogs or other animals?&nbsp;&nbsp;
                <input type="radio" name="owning_pets" id="owning_pets" value="yes">Yes&nbsp;
            </label>
            <label for="firstname">
                <input type="radio" name="owning_pets" id="owning_pets" value="no">No
            </label>
        </div>
        <div class="form-check">
            <input type="checkbox" id="accept-terms" class="form-check-input ">
            <label for="firstname" class="form-check-label">Accept Terms &amp; Conditions</label>
        </div>
        <button onclick="send()" type="button" class="btn btn-outline-primary submitposition">Submit</button>
    </form>
    </div></div>
    <script src="js/addadopt.js" ></script> 
</body>
</html>
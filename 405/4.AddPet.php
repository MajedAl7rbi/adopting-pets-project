<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <h1 class="formtitle">Add new pet</h1>
                <h3 class="apptitle">Fill the form</h3>

                
        </div>

        
        <form id="myForm" class="form" method="post" action="/api/addpet.php">
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
            
            <div class="row">
                <div class="col-6">
                    <div class="form-control">
                        <label for="firstname">Pet Name</label>
                        <input type="text" name="petname" id="firstname">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-control">
                        <label for="petage">Pet Age</label>
                        <input type="text" name="petage" id="petage">
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="form-control">
                    <label for="petkind">Pet kind: </label>
                        <div  >
                            <select name="petkind" class="form-control custom-select-2" id="petkind" ">
                                <option value="petkind">Select pet kind:</option>
                                <option value="cat">cat</option>
                                <option value="kitten">kitten</option>
                                <option value="dog">dog</option>
                                <option value="puppy">puppy</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-control">
                        <label for="img">Select image:</label>
                        <input type="file" id="img" name="img" accept="image/*">
                    </div>
                </div>
            </div>
            
            <br>
            
        
        <button onclick="send()" type="button" class="btn btn-outline-primary submitposition">Submit</button>
    </form>
    </div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/select.js"></script>
<script src="js/addpet.js"></script>

</body>
</html>
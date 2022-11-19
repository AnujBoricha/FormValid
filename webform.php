<?php
// echo "<pre>";
//     print_r($_POST);
// echo "</pre>";
    $message_sent = false;
    $form_filled = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            
            //submit the form
            $username = $_POST['name'];
            $userEmail = $_POST['email'];
            $location = $_POST['location'];
            $University = $_POST['university'];
            $message_sent = true;
            $form_filled = true;
        }
        else{
            $invalid_class = "form-invalid";
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormValid</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
<?php
if($message_sent):
    echo "<h1><i> Thank you for filling the form $username </i></h1>";
?>
    

<?php
else:
?>
     <div class="container">
        <p class = "nametag">Anuj Boricha @2022</p>
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control   id="name" name="name" placeholder="Username" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="phoneno" class="form-label">Phone Number</label>
                <input type="number" class="form-control   id="number" name="phonenumber" placeholder="Phone No." tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input  type="email" class="form-control <?= $invalid_class ?? "" ?> " id="email" name="email" placeholder="xyz.@xyz.com" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="address" tabindex="4" required>
            </div>
            <div class="form-group">
                <label for="university" class="form-label">University</label>
                <textarea class="form-control" rows="5" cols="50" id="university" name="university" placeholder="University Name" tabindex="5"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
<?php
endif;
?>
</body>

</html>
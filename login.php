<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <form id="form1" action="" method="post">
                    <div>
                        <h1>Login</h1>
                        <hr>
                        
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <br>
            
                    <div>
                        <label for="pass">Password:</label>
                        <input type="password" id="pass" name="pass" placeholder="Password" required>
                    </div>
                    <br>
            
                    <input  class="btn  btn-primary" type="submit" id="submit" name="submit" value="Login">
            
                </form>
            
            </div>
        </div>
        
    </div>  


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault(); // Prevent the default form submission
        
        $.ajax({
            url: "check.php",  // The URL to send the data to
            type: "POST",
            data: $("#form1").serialize(), // Serialize the form data
            success: function(res){
                if (res === 'success') {
                    // Redirect on success
                    window.location.href = 'index.php';
                } else {
                    // Show error message on failure
                    window.location.href = 'index.php';
                }
            },
            error: function(xhr, status, error){
                console.error("AJAX Error: ", error);  // Handle server or network errors
                alert("An error occurred. Please try again later.");
            }
        });
    });
});
</script>

</html>
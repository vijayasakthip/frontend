<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="sign.css">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <form id="form" action="" method="post">
                    <div>
                        <h1>Sign up</h1>
                        <hr>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Name" required>
                    </div>
                    <br>
            
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
            
                    <div>
                        <label for="repass">Repeat password:</label>
                        <input type="password" id="repass" name="repass" placeholder="Repeat Password" required>
                    </div>
                    <br>
                    <input  class="btn  btn-primary" type="submit" id="submit" name="submit" value="Submit" >
            
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
        event.preventDefault(); // Prevent default form submission
        var pass=$("#pass").val();
        var repass=$("#repass").val();
        
        if( pass != repass){
            alert("password and repeat password are not match");
            return;
        }
        
    else{

    
        $.ajax({
            url: "insert.php",
            type: "post",
            data: $("#form").serialize(), // Serialize form data correctly
            success: function(){
                alert("Form submitted successfully.");
                $("#form")[0].reset(); // Reset form fields
                window.location.href = "index.php"; // Redirect to index.html
            },
            error: function(xhr, status, error){
                alert("Error submitting form: ", error);
                // Handle errors if needed
            }
        
        })
    }
    
        });
    
    
    });



</script>


</html>
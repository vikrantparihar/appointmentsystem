<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


    <header>
        <h1>Resume Shortlisting</h1>
    </header>

<nav>
        <a href="home.php">Home</a>
        <a href="./login.php">Login</a>
        <a href="./signup.php">Signup</a>
</nav>

    <section>
        <div class="col-sm-12">
            <div class="contain">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="contain-form">
                        <form id="user">
                        <div class="form-group">
                            <label name="Name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" name="Password" id="Password" class="form-control" required>
                        </div>
                        <div class="contain-button">
                                <button id="Submit" class="btn btn-primary" onclick="signup()">Submit</button>
                        </div>
                        <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.<p>
                        </form><br>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>

    </section>

    <script type="text/javascript">          //default value url ma jata h usko off karna ka liya
    $('#user').submit(function(e){
        e.preventDefault();
    }); 


    function signup() {
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var Password=document.getElementById('Password').value;
        var token='<?php echo password_hash("signup",PASSWORD_DEFAULT)?>';
        if (name!="" && email!="" &&  Password!="") 
        {
            $.ajax({                        
                type:'POST',
                url:"ajax/signup.php",                  
                data:{name:name,email:email,Password:Password,token:token},   
                success:function(data)                          
                {
                    alert(data); 
                    window.location.reload();
                }
            });
        }
           else
           {
            alert('Please fill all the field');
          }
    }
    </script>
</body>

</html>
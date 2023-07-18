<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
        <a href="./home.php">Home</a>
        <a href="./login.php">Login</a>
        <a href="./signup.php">Signup</a>
    </nav>

    <section>
        <div class="col-sm-12">
            <div class="contain">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="contain-form">
                        <form id="users">
                            <div class="form group">
                                <label name="Email">Email</label>
                                <input type="email" name="useremail" id="useremail" class="form-control" required>
                            </div>
                            <div class="form group">
                                <label name="Password">Password</label>
                                <input type="password" name="password1" id="password1" class="form-control" required>
                            </div><br>
                            <div class="contain-button">
                                <button id="submit" class="btn btn-success" onclick="getdata();">Submit</button>
                            </div><br>
                            <p class="login-register-text">Don't have an account? <a href="signup.php">Register Here</a>.<p>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </section>

    <script type="text/javascript">          
    $('#users').submit(function(e){
        e.preventDefault();
    }); 

    function getdata() {
        var useremail=document.getElementById('useremail').value;
        var password1=document.getElementById('password1').value;
        var token='<?php echo password_hash("getdata",PASSWORD_DEFAULT)?>';

        $.ajax({                        
                type:'POST',
                url:"ajax/getuser.php",                         
                data:{useremail:useremail,password1:password1,token:token},    
                success:function(data)                          
                {
                    alert(data);
                    if(data==0){
                        window.location.href="studentpannel.php";
                    }
                    else{
                        alert("invalid data");
                    }
                }
            });
    }
    </script>
</body>
</html>
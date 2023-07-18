<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    

</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    <nav>
        <a href="../home.php">Home</a>
        <a href="./login.php"> Login </a>
        <a href="./signup.php"> Signup </a>
    </nav>


<section>
    <div class="col-sm-12">
        <div class="contains">
            <div class="col-sm-4">
            <div class="contain-forms">
                        <form id="user">
                            <div class="form group">
                                <label name="Name">Name K</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form group">
                                <label name="Email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form group">
                                <label name="Department name">Department Name</label>
                                <input type="text" name="dpn" id="dpn" class="form-control" required>
                            </div>
                            <div class="form group">
                                <label name="Password">Password</label>
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div><br>
                            <div class="contain-button"></div>
                            <button id="Submit" class="btn btn-primary" onclick="signup()">Register</button>
                            <p class="login-register-text">Have an account? <a href="./login.php">Login Here</a>.<p>
                        </form>
                    </div>
                </div>
        


            </div>
                <div class="col-sm-4"></div>
                    
             <div class="col-sm-4"></div>
        </div>
    
 </section>

    <script type="text/javascript">          
    $('#user').submit(function(a){
        a.preventDefault();
    }); 

    function signup() {
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var dpn=document.getElementById('dpn').value;
        var password=document.getElementById('password').value;
        if (name!="" && email!="" && dpn!="" && password!="") 
        {
            $.ajax({                        
                type:'POST',
                url:"../ajaxteac/signup.php",                  
                data:{name:name,email:email,dpn:dpn,password:password,},   
                success:function(data)                          
                {
                    alert(data); 
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
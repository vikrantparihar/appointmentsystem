<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lOGIN</title>
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
        <a href="./signup.php">LogOut</a>
    </nav>


<section>
    <div class="col-sm-12">
        <div class="contains">
            <div class="col-sm-4">
            <div class="contain-forms">
                        <form id="users">
                            <div class="form group">
                                <label name="Email">Email</label>
                                <input type="text" name="email1" id="email1" class="form-control" required>
                            </div>
                            <div class="form group">
                                <label name="Password">Password</label>
                                <input type="text" name="password1" id="password1" class="form-control" required>
                            </div><br>
                            <div class="contain-button"></div>
                            <button id="submit" class="btn btn-success" onclick="getdata();">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
                <div class="col-sm-4"></div>
                   
            <div class="col-sm-4"></div>
        </div>
    
</section>


    <script type="text/javascript">          
    $('#users').submit(function(e){
        e.preventDefault();
    }); 



    function getdata() {
        var email1=document.getElementById('email1').value;
        var password1=document.getElementById('password1').value;
    

        $.ajax({                        
                type:'POST',
                url:"../ajaxteac/getuser.php",                         
                data:{email1:email1,password1:password1},    
                success:function(data)                          
                {
                    alert(data);
                    if(data==0){
                        window.location.href="teacherpanel.php";
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
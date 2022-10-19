<?php include('connection.php'); ?>

<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>

    <nav class="navbar">
        <div class="logo">  <h1><span class = "nft"> Coffee </span> hub</h1> </div>
        <ul class="menu">
            <li><a href="index.html">HOME</a> </li>
            <li><a href="AllP.html">PRODUCT</a> </li>
            <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a> </li>
            <li><a class ="login-btn" href="login.html">Login</a> </li>
        </ul>
    </nav>

    <!-- content -->

    <div class = "whole" >
        <img class = "sign" src="pic/sign.png">
        
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form</p>

           

                <div class="col">
                    <div class="row">

                       <form action="login.php" method = "POST">

                    <label for="Firstname"></label>
                    <input type="text" name = "Firstname" required placeholder="FirstName">

                    <label for="MiddleName"></label>
                    <input type="text" name = "MiddleName" required placeholder="MiddleName">
                    
                    <label for="lastname"></label>
                    <input type="text" name = "lastname" required placeholder="LastName">
                    
                    <label for="gender"></label>
                        <select name="gender" placeholder="gender">
                            <option value="1" selected>Male</option>
                            <option value="2">Female</option>
                            <option value="3">other</option>
                        </select>

                    <label for="username"></label>
                    <input type="email" name = "username" required placeholder="Email">

                    <label for="Password"></label>
                    <input type="password" name = "Password" required placeholder="Password">

                    <label for="conpassword"></label>
                    <input type="password" name = "conpassword" required placeholder="ConfirmPassword">
                    
                    <div class="btn">
                        <input class = "btn" type="submit" name = "SUBMIT" value="submit">
                        <input class = "btn" type="RESET" name = "RESET">
                    </div>
            </form>
                </div>
            
        </div>
    </div>

</body>
</html>



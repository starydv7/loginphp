<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <style type="text/css">
        #text{
            height:25px;
            border-radius:5px;
            padding:4px;
            border:solid thin #aaa;
        }
        #button{
            padding:10px;
            width:100px;
            color:white;
            background-color:lightblue;
            border:none;
        }
        #box{
            background-color:grey;
            margin:auto;
            width:300px;
            padding:20px;
        }
    </style>
    <div id="box">
    <form method="post">
        <div style="font-size:20px;margin:10px;">Login</div>
        <input type="text" name="user_name"><br><br>
        <input type="password" name ="password"><br><br>
        <input type="submit" value="Login"><br><br>

        <a href="signup.php">Signup</a>
    </form>
</body>
</html>
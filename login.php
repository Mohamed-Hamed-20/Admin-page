<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<link rel="stylesheet" href="css/login.css" >
</head>
<body>
    <div class="center">
       <h1>login to admin padge</h1> 
       <form action="chk.php" method="post">
        <div class="txt_field">
            <input name = "email" type="Email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input name="pass" type="password" required>
            <span></span>
            <label>password</label>
        </div>
        <input name="sub" type="submit" value="login">
        <br><br><br><br>
       </form>
    </div>
</body>


</html>
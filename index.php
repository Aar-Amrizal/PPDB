<html>
    <title>
        login
    </title>
    <body>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div>username dan password tidak sesuai !</div>";

            }
        }
        ?>
        <center>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
  <form action="cek_login.php" method="post">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" name="username" placeholder="username"/><br>
    <h3>Password:</h3>
    <input type="password" name="password" placeholder="password"/>
    <br>
    <input type="submit" value="Login" class="login-button"/>
    <br>
    <a class="sign-up">Sign Up!</a>
    <br>
    <h6 class="no-access">Can't access your account?</h6>
  </div>
</div>
<div class="error-page">
  <div class="try-again">Error: Try again?</div>
</div>
       
    </form>
    </div>
        </center>
    </body>
    <style>
       
        body {
  background:url('http://cdn.wallpapersafari.com/13/6/Mpsg2b.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
  background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0;
}
.login {
  margin:0 auto;
  max-width:500px;
}
.login-header {
  color:WHITE;
  text-align:center;
  font-size:300%;
}
/* .login-header h1 {
   text-shadow: 0px 5px 15px #000; */

.login-form {
  border:.5px solid #FFFAF0;
  background:#6495ED;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:40px;
  color: white;
}
.login-form {
  box-sizing:border-box;
  padding-top:15px;
  padding-bottom:10%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
  width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid black;
  outline:none;
  padding-left:10px;
}
.login-form input[type="button"] {
  height:30px;
  width:100px;
  background: white;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
.sign-up{
  color: white;
  margin-left:-70%;
  cursor:pointer;
  text-decoration:underline;
}
.no-access {
  color:red;
  margin:20px 0px 20px -57%;
  text-decoration:underline;
  cursor:pointer;
}
.try-again {
  color:white;
  text-decoration:underline;
  cursor:pointer;
}

/*Media Querie*/
@media only screen and (min-width : 150px) and (max-width : 530px){
  .login-form h3 {
    text-align:center;
    margin:0;
  }
  .sign-up, .no-access {
    margin:10px 0;
  }
  .login-button {
    margin-bottom:10px;
  }
}

    </style>
</html>
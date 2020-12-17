<!DOCTYPE html>
<html>
    <head>
        <title>Form Login Admin</title>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="sign.css">
        <style>
            #wrapper{
                width: 330px;
                margin-left: auto;
                margin-right: auto;
                background-color: rgb(165, 195, 205);
            }
        </style>
    </head>

    <body>
        <div id="wrapper">
        <form class= "formLogIn" action="login.php" method="POST" onSubmit="return validate(this)">
            <center><img src="profil2.png" alt="profil2" width="140px"></center>
            </br>
            <input class="form-control" type="text" name="username" size="20"placeholder="username">
            <input class="form-control" type="password" name="password" size="20"placeholder="password">
            </br>
            <center><input class="btn btn-primary btn-lg" type="submit" name="Login" value="Log in"><center>
        </form>
        </div>
    </body>

    <script type="text/javascript">
	function validate(form)
  {
      var minchar = 5;
      var minpass = 6;
        pola_username= /^[a-zA-Z0-9_-]+$/
        pola_password= /^[a-zA-Z0-9]+$/
        if (form.username.value=="") {
            alert("No Username was entered.\n");
            form.username.focus();
            return (false);
        }
        else if (form.username.value.length < minchar) {
            alert("Usernames must be at least 5 characters");
            form.username.focus();
            return (false);
        }
        else if (form.password.value==""){
            alert("No Password was entered.\n");
            form.password.focus();
            return (false);
        }
         else if (form.password.value.length < minpass) {
            alert("Passwords must be at least 6 characters.");
            form.password.focus();
            return (false);
        }
        else if (!pola_username.test(form.username.value)){
            alert ('Only a-z, A-Z, 0-9, - and _ allowed in Usernames');
            form.username.focus();
            return (false);
        }
        else if (!pola_password.test(form.password.value)){
            alert ('Passwords require one each of a-z, A-Z and 0-9.\n');
            form.password.focus();
            return (false);
        }
     else { alert(fail); return false }
  }

</script>
</html>
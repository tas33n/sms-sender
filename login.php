<?php session_start();
include 'users.php';

/* Check Login form submitted */
if (isset($_POST['Submit'])) {

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password) {
        /* Success: Set session variables and redirect to Protected page  */
        $_SESSION['UserData']['Username'] = $logins[$Username];
        header("location:index.php");
        exit;
    } else {
        /*Unsuccessful attempt: Set error message */
        $msg = "<span style='color:red'>Invalid Login Details</span>";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>sms sender - misfitsdev</title>
    <link href="./boo.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

</head>

<body>

    <div class="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center ">
                <div id="login-column" class="col-md-4">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" action="" method="post" name="Login_Form">
                            <h3 class="text-center text-info">Login</h3>
                            <?php if (isset($msg)) { ?>
                                <tr>
                                    <span align="center" valign="top"><?php echo $msg; ?></span>
                                </tr>
                            <?php } ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input name="Username" type="text" id="username" class="form-control pad z">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input name="Password" type="password" id="password" class="form-control pad z">
                            </div>
                            <div class="form-group" style="text-align: center; margin-top: 30px;">
                                <input name="Submit" type="submit" class="btn btn-info btn-md pad z" value="Signin" style="max-width:70px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <form action="" method="post" name="Login_Form" class="login">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
      <?php if (isset($msg)) { ?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg; ?></td>
        </tr>
      <?php } ?>
      <tr>
        <td colspan="2" align="left" valign="top">
          <h3>Login</h3>
        </td>
      </tr>
      <tr>
        <td align="right" valign="top">Username</td>
        <td><input name="Username" type="text" class="Input"></td>
      </tr>
      <tr>
        <td align="right">Password</td>
        <td><input name="Password" type="password" class="Input"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
      </tr>
    </table>
  </form> -->


    <div class="login-box">
        <h2>MisfitsDEV</h2>
        <form>
            <div class="user-box">
                <input class="input" id="PHONE" type="text" name="" required="" maxlength="11" minlength="11-">
                <label>Number</label>
            </div>
            <div class="user-box">
                <textarea class="input" id="MESSAGE" type="text" name="" required=""></textarea>
                <label>Message</label>
            </div>
            <a href="#" id="send">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                send
            </a>
        </form>
    </div>
</body>

</html>
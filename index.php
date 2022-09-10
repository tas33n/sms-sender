
<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>sms sender - misfitsdev</title>
  <link href="./style.css" rel="stylesheet">

</head>

<body>
  <div class="login-box">
    <h2>MisfitsDEV</h2>
    <form>
      <div class="user-box">
        <input class="input" id="num" type="text" name="" required="" maxlength="11" minlength="11-" >
        <label>Number</label>
      </div>
      <div class="user-box">
        <textarea class="input" id="txt" type="text" name="" required=""></textarea>
        <label>Message</label>
      </div>
      <a href="#" onclick="myFunction()" id="send">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        send
      </a>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
    function myFunction() {
      var num = $('#num').val();
      var txt = $('#txt').val();
      // var msg = txt.slice(1, 11);
      var url = "/api.php?number=" + num + "&message=" + txt;

      var xhr = new XMLHttpRequest();
      xhr.open("GET", url);

      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          console.log(xhr.status);
          alert(xhr.responseText);
        }
      };

      xhr.send();
    }


  </script>

</body>

</html>

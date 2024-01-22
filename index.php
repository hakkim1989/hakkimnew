<!DOCTYPE html>
<html>

<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	
</head>
<body>
  <form id="user" class="mt-5">
    <label for="firstname">First name: </label>
    <input type="text" name="firstname"  required>
    <br>
    <label for="lastname">Last name: </label>
    <input type="text" name="lastname"  required>
    <br>
    <label for="email">email: </label>
    <input type="email" name="email"  required>
    <br>
    <label for="password">password: </label>
    <input type="password" name="password"  required>
    <br>
    <input type="button" id="save" value="Login!">
</form>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){

$("#save").on('click',function(){

alert();

$.ajax({

 type:'post',
 url:'insert.php',
 data:$("#user").serialize(),
 success:function(res){





 }




});


});



});	
	





</script>
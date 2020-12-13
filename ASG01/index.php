<html>
<head>
<link rel="stylesheet" href="login.css">
<script>

function myFunction() {
  location.replace("https://www.w3schools.com")
}
function validateUname() {
  var x = document.forms["myForm"]["Uname"].value;
  if (x == "") {
    alert("Name and password must be filled out");
  }else if(Uname.value == "Quentin" && Pass.value == "admin") {
    document.forms['myForm'].action="StaffPage_Quentin.php";
    alert("Welcome");
  }else if(Uname.value == "Scott" && Pass.value == "admin") {
    document.forms['myForm'].action="StaffPage_Scott.php";
    alert("Welcome");
  }else if(Uname.value == "Siri" && Pass.value == "admin") {
    document.forms['myForm'].action="StaffPage_Siri.php";
    alert("Welcome");
  }else if(Uname.value == "Chloe" && Pass.value == "student") {
    document.forms['myForm'].action="StudentPage_Chloe.php";
    alert("Welcome");
  }else if(Uname.value == "Jovan" && Pass.value == "student") {
    document.forms['myForm'].action="StudentPage_Jovan.php";
    alert("Welcome");
  }else if(Uname.value == "Justin" && Pass.value == "student") {
    document.forms['myForm'].action="StudentPage_Justin.php";
    alert("Welcome");
  }else if(Uname.value == "Germaine" && Pass.value == "principal") {
    document.forms['myForm'].action="Principal.php";
    alert("Welcome");
  }else{
      alert("Invalid login")
  }

}

</script>
</head>
<body>


<div class="login-page">
<div class="form">
    <form class="login-form" name="myForm" onsubmit="validateUname()" action="">
    Username: <input type="text" id="Uname" name="Uname">
    Password: <input type="text" id="Pass" name="Pass">
  <input class="submit" type="submit" value="Submit">
    </form>
    
</div>
</div>




</body>
</html>
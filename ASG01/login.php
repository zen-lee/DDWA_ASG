<html>
<head>
<script>

function myFunction() {
  location.replace("https://www.w3schools.com")
}
function validateUname() {
  var x = document.forms["myForm"]["Uname"].value;
  if (x == "") {
    alert("Name and password must be filled out");
  }else if(Uname.value == "Admin" && Pass.value == "admin") {
    window.location.href = "AdminPage.php";
    alert("Welcome");
  }else{
      alert("Invalid login")
  }

}


</script>
</head>
<body>

<form name="myForm" onsubmit="return validateUname()">
  Username: <input type="text" id="Uname" name="Uname">
  Password: <input type="text" id="Pass" name="Pass">
  <input type="submit" value="Submit">
</form>

</body>
</html>
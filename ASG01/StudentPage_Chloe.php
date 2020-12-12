<!DOCTYPE html>
<?php 
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "school";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  ?>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

  


  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="user.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php
	            $sql = "SELECT Student_name "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM student "; //Reading from "Mutant" table
            	$sql .= "WHERE Student_id = 3"; //Alphabetical order
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
		             echo $row["Student_name"]."<br/>";
                  }}	else {
                  echo "No results!";
                  }
            ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-id-badge fa-fw w3-margin-right w3-large w3-text-teal"></i> Student id: 
          <?php
	            $sql = "SELECT Student_id "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM student "; //Reading from "Mutant" table
            	$sql .= "WHERE Student_name = 'Chloe'"; //Alphabetical order
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
		             echo $row["Student_id"]."<br/>";
                  }}	else {
                  echo "No results!";
                  }
        ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Student Phone Number:  
          <?php
	            $sql = "SELECT Student_contact "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM student "; //Reading from "Mutant" table
            	$sql .= "WHERE Student_id = 3"; //Alphabetical order
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
		             echo $row["Student_contact"]."<br/>";
                  }}	else {
                  echo "No results!";
                  }
        ?></p>
          

          


          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Student page</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Class infos</b></h5>
          <h6 class="w3-text-teal"><i class="fa"></i>Today</h6>
          <p><?php
	            $sql = "SELECT Student_class "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM student "; //Reading from "Mutant" table
            	$sql .= "WHERE Student_id = 3"; //Alphabetical order
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
		             echo $row["Student_class"]."<br/>";
                  }}	else {
                  echo "No results!";
                  }
        ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Clasmates info</b></h5>
          <h6 class="w3-text-teal"><i class="fa"></i>Students in class</h6>
          <p><?php
	            $sql = "SELECT Student_name, Student_contact "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM student "; //Reading from "Mutant" table
              $sql .= "WHERE Student_class = '3A' && Student_id != 3"; //Alphabetical order
              
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                 echo $row["Student_name"]."<br>";
                 echo $row["Student_contact"]."<br><br>";
                  }}	else {
                  echo "No results!";
                  }
        ?></p>
          <hr>

          <h7 class="w3-text-teal"><i class="fa"></i>Teacher of class</h7>
          <p><?php
	            $sql = "SELECT Teacher_name, Teacher_number "; //Remember spacing! If not SQL string will be stuck tog.
	            $sql .= "FROM staff "; //Reading from "Mutant" table
              $sql .= "WHERE Teacher_class = '3A'"; //Alphabetical order
              
	            $result = $connection->query($sql);
	
	            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                 echo $row["Teacher_name"]."<br>";
                 echo $row["Teacher_number"]."<br><br>";
                  }}	else {
                  echo "No results!";
                  }
        ?></p>
        </div>
        
      </div>

      

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>



</body>
</html>
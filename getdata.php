<?php
$con = mysqli_connect("localhost","root","","signup");
if(mysqli_connect_errno())
	{
		echo "Failed to connect:".mysqli_connect_errno();
	}
?>
<?php

if (!empty($_GET["cid"]))
  {
	  
    $cid = $_GET["cid"];

    $query = "SELECT * FROM costing WHERE cid=$cid";
    $results = mysqli_query($con, $query);

      while($costing=mysqli_fetch_array($results))
      {
        
		echo '<option value="'.$costing['cityId'].'">'.$costing['city']."</option>";
        
        
      }
  }


?>﻿
<!-- database can be selected using the function 
mysql_select_db("mydb")-->
<html>

<head>
<title>database</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","");
		
		{
			if(!$con)
			{
				die("error in connection");
				
			}
			else
			{
				echo"successful";
				
			}
			echo"<br>";
			
			$sql="create database student";
			if(mysqli_query($con,$sql))
			{
				echo"database created";
			}
			else
			{
				echo"error:";
				
			}
			mysqli_select_db($con,"student");
			$query="create table student_info(enroll_no int(10),name varchar(20),semester int(5),percentage float(20))";
			if(mysqli_query($con,$query))
			{
				echo"table created";
				
			}
			else
			{
				echo"error";
				
			}
		 $query1="insert into student(id,name) values(1,'rut')";
			if(mysqli_query($con,$query1))
			{
				echo"query executed";
				
			}
			else
			{
				echo"error";
			}
			$query2="select * from student";
			$result=mysqli_query($con,$query2);
			
			echo"<br>";
			if($row=mysqli_fetch_array($result))
			{
				echo $row['id']." ".$row['name'];
				echo "<br>";
				
			}
			else
			{
				echo"select cannot be executed";
				
			}
			
			mysqli_close($con);
			
		}
	?>
</body>

</html>
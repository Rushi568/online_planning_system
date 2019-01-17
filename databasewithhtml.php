<!-- database can be selected using the function 
mysql_select_db("mydb")-->
<html>

<head>
<title>database</title>
</head>
<body>
	<?php
	$name=$_POST['name'];
	$eno=$_POST['eno'];
	$sem=$_POST['sem'];
	$percentage=$_POST['percentage'];
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
			$query1="insert into student_info values('$eno','$name','$sem','$percentage')";
			if(mysqli_query($con,$query1))
			{
				echo"query executed";
				
			}
			else
			{
				echo"error";
			}
			$query2="select * from student_info";
			$result=mysqli_query($con,$query2);
			
			echo"<br>";
			while($row=mysqli_fetch_array($result))
			{
				echo $row['name']." ".$row['enroll_no']." ".$row['semester']." ".$row['percentage'];
				echo "<br>";
				
			}
			$delete="delete from student_info where semester=12";
			
			mysqli_query($con,$delete)	;	
			echo mysqli_affected_rows();
			$update="update student_info set name='rutansh' where name='rr' ";
			if(mysqli_query($con,$update))
			{
				echo"update executed";
				
			}
			else
			{
				echo"error";
			}
			
			
			
			mysqli_close($con);
		}
			?>
</body>
</html>
<html>
<head>
<title>Uplodimage</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="img1" required="required"/>
<input type="submit" name="submit" value="Upload"/>
</form>
</body>
</html>

<?php

   if(isset($_POST['submit'])){
	   
	   $imagename=$_FILES['img1']['name'];
	   $tempimgname=$_FILES['img1']['tmp_name'];
	   $conn=mysqli_connect('localhost','root','','storeimg') or die(mysqli_error());
	   move_uploaded_file($tempimgname,"images/$imagename");
	   $sql="INSERT INTO `uplodimg`(`image`) VALUES ('$imagename')";
	   $run=mysqli_query($conn,$sql);
	   echo "Upload success";
   }
?>
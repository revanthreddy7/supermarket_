<?php
  $company=$_POST['company'];
  //echo $num;
  $servername="localhost";
  $username="root";
  $password="";
  $database="trinetra";
  //Create a connection
  $conn=mysqli_connect($servername,$username,$password,$database);
  if (!$conn)
  {
    die("Sorry , failed to connect: ".mysqli_connect_error());
  }
  else
  {
    $sql="SELECT * FROM suppliers WHERE suppliers.Company = '$company'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($result)
    {
      echo "<p>Supplier Details</p><hr class='hrnew'><p style='display: inline;'>Name: </p><p style='display: inline;'>".$row['Name']."</p><p style='display: inline;margin-left:300px;'>Company: </p><p style='display: inline;'>".$row['Company']."</p><hr><p style='display: inline;'>Email: </p><p style='display: inline;'>".$row['Email']."</p><p style='display: inline;margin-left:250px;'>Mobile: </p><p style='display: inline;'>".$row['MobileNumber']."</p><hr><p style='display: inline;'>GST No: </p><p style='display: inline;'>".$row['GstNo']."</p><hr><p style='display: inline;'>Address: </p><p style='display: inline;'>".$row['Address']."</p><hr><p style='display: inline;'>State: </p><p style='display: inline;'>".$row['State']."</p><p style='display: inline;margin-left:300px;'>City: </p><p style='display: inline;'>".$row['City']."</p>";
    }
    else {
      echo mysqli_error($conn);
    }
  }


 ?>

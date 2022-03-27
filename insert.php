<?php
 
  $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    //create connection
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    //Create variables
    $address = $_POST['address'];
    $country = $_POST['country'];
    $pincode=$_POST['pincode'];
    $tippercen=$_POST['tippercen'];
    $nop=$_POST['nop'];
  if((($address)&&($country)&&($pincode)&&($tippercen)&&($nop))=='')
  {
//    echo "enter all the neeeded values";
     die();
  }

else{
    if($nop<=0)
{
   $nop=1;
   $nop1=$nop;
 //  echo $nop1;
}
else{
  $nop1=$nop;
 // echo $nop1;
}

    $sql = "INSERT INTO test (address,country,pincode,tippercen,nop) VALUES ('$address', '$country','$pincode','$tippercen','$nop1')";
 
    if(!mysqli_query($con, $sql)) {
        echo 'Could not insert';
    }
   /* else{
     echo 'insert sucessfully';
    } */
    //Close connection
    mysqli_close($con);
  }
}
?>
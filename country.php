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
 
    $country = $_POST['country'];
        $tippercen=$_POST['tippercen'];
  //  echo $pincode;


  //  $sql = "INSERT INTO test (address, pincode,country) VALUES ('$address', '$pincode','$country')";

 /*   $sql="SELECT * FROM test where  pincode= '<?php $pincode ?>'"; */


$sql = "SELECT * FROM test";
$noofper=0;
$tipper=0;
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) >= 0){
        while($row = mysqli_fetch_array($result)){
                if($row['country']==$country) {
                //echo $row['nop'];
                echo "\n";// till now we find a total inputs accrding to insertion
                //echo $x;
                $noofper=$noofper+$row['nop'];
                $tipper=$tipper+($row['tippercen']*$row['nop']);
            }    
        }
           // echo $noofper;
           // echo $tipper;
          if($noofper==0||$tipper==0)
          {
echo "AVG. TIP FOR THIS COUNTRY IS"." ".$tippercen;
echo '%';

            die();   } 
          }
            $output=$tipper/$noofper;
            echo "AVG. TIP FOR THIS COUNTRY IS"." ";
            echo number_format((float)$output, 2, '.', '');
            echo '%';

                       die();

        }
       

  

    //Close connection
    mysqli_close($con);
    }

?>

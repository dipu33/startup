<script type="text/javascript">
    function fun()
    {
        alert("email send successfully");
        window.location="index.php";
    }
    function fun2()
    {
        alert("your email adddress is already register with us so please try with different one");
        window.location="index.php";      
    }
</script>

    <?php
  $host="localhost";
  $username="root";
  $pass="";
  $database="dealbox";
  $con= mysqli_connect($host, $username, $pass, $database);
  
    
$email_id=$_REQUEST["subemail"];

$to = "$email_id";
$subject = "subscription";
$frm="info@epictechnolabs.com";
$txt = "10x fro subscribed\r\n";
$txt.="click here on activation link\r\n";
$txt.="http://yourname.com/activate.php?email='$to'";
$headers = "From: $frm" . "\r\n" ;
$query_showid="select S_Email from Subscribers where S_Email='$email_id'";
$res= mysqli_query($con,$query_showid);
$count=0;
while($row=mysql_fetch_row($res))
{
    $count++;
}
if($count>=1)
{
echo "<script type='text/javascript'>fun2();</script>";   
}
else{
mail($to,$subject,$txt,$headers);
echo "<script type='text/javascript'>fun();</script>";
    
}

?>
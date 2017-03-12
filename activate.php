
<script type="text/javascript">
    function fun()
    {
        alert("You are now subscribed now user's of epic technolabs");
        windows.redirect="index.php";

    }
    function fun2()
    {
        alert("You are already a member of epic technolabs no need to subscribed again");
        windows.redirect="index.php";

    }
    
</script>

<?php
$email_id=$_REQUEST["email"];
$count=0;
$query_check="select S_Email from S_Email";
$res=  mysql_query($query_check);
while($row=  mysql_fetch_row($res))
{
    if($row==$email_id)
    {
        $count++;
    }
}
    if($count>0)
    {
     
$query_insetdata="Insert into Subscribers Values('','$email_id')";
mysql_query($query_insetdata);
echo "<script type='text/javascript'>fun();</script>";
   
    }
        else if($count==0)
        {
            
echo "<script type='text/javascript'>fun2();</script>";
   
        }
    ?>


<script type="text/javascript">
    function fun()
    {
        alert("Massage send successfully");
      history.go(-1);

    }
</script>
<?php
$to = "epictechnolab@gmail.com";
$subject = "My subject";
$name=$_REQUEST["name"];
$frm=$_REQUEST["email"];
$txt = $name."<br>".$_REQUEST["message"];
$headers = "From: $frm" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
echo "<script type='text/javascript'>fun();</script>";

//header('Location: index.html');

?>
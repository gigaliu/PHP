<?php
include("setting.inc");
?>

<?php
$sId="chair";
$sPWD="123";

$uId=$_POST["uId"];
$uPWD=$_POST["uPWD"];

if($sId==$uId && $sPWD==$uPWD){
    $_SESSION["check"]="Yes";
    setcookie("username",$uId,$date);
    header("Location:chair.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

$sId="reviewer";
$sPWD="234";

$uId=$_POST["uId"];
$uPWD=$_POST["uPWD"];

if($sId==$uId && $sPWD==$uPWD){
    $_SESSION["check"]="Yes";
    setcookie("reviewer",$uId,$date);
    header("reviewer.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

$sId="author";
$sPWD="345";

$uId=$_POST["uId"];
$uPWD=$_POST["uPWD"];

if($sId==$uId && $sPWD==$uPWD){
    $_SESSION["check"]="Yes";
    setcookie("username",$uId,$date);
    header("Location:author.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}


?>

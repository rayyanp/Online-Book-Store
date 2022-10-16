<?php

 

$x = $_POST['hidden'];
//echo $x;
if($x == 1)
{
$conn = new mysqli('localhost','root','','creditcard');
if(!$conn) die('failed');
//echo 'success';
$ccnum = $_POST['ccnum'];
$m = $_POST['month'];
$y = $_POST['year'];
$cvv = $_POST['cvv'];

/*
$sql = "SELECT COUNT(*) as total FROM card WHERE 1 ";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$v1 = $data['total']+1;
*/

$v2 = md5($ccnum);

$date = new DateTime();
$date->setDate($y, $m, 1);
$date->modify('+1 month -1 day');
$v3 = $date->format('Y-m-d');

 

$v4 = $cvv;

//echo $v1 + ',' + $v2 + ',' + $v3, + ',' + '$v4';

$sql="INSERT INTO `card`(`ccnum`, `expdate`, `seccode`) VALUES ('$v2','$v3','$v4')";
if(!$conn->query($sql)) { echo 'wrong';}
$conn->close();

//show ************ 7788
$masked = str_pad(substr($ccnum, -4), strlen($ccnum), '*', STR_PAD_LEFT);
echo "<h5> Your card ".$masked. " has been saved </h5>";
}
else {
header('Location: pay.php');
}
?>

<head>
    <meta charset="UTF-8">
    <!-- makes website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Books</title>

    <!-- Links CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<br>
<section class="text-center">
<br>
<figure class="success-img">
        <img src="images/success.png" alt="successimg">
</figure>
<br>
<h3>Payment Successful<h3>
</section>
<script src="payment.js"></script>
</body>
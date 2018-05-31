<?php 

$name = $_POST["name"];
$mail = $_POST["mail"];
$dot = ", ";
$br = "\n";
$str2 = $name.$dot.$mail;

?>


<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
</body>
<?php
$str = $br.date("Y-m-d H:i:s").$dot.$str2;
$file = fopen("./data/data.csv","a");	// ファイルよみ込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str);       // ファイルかき込み
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<ul>
<li><a href="read.php">read.php</a></li>
</ul>
</body>
</html>
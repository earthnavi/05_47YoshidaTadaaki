<?php
function h($value){
    return htmlspecialcahrs($value,ENT_QUOTES);
}
$name = $_GET["name"];
$mail = $_GET["mail"];

?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前：<?php echo h($name);?>
Mail：<?=h($mail)?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>
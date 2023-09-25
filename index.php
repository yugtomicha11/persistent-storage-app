<html>
<head>
<title>PHP Test</title>
</head>
<body>
<?php
echo '<p>Hello World</p>';
$filepath= '/var/lib/data/Hello.jpeg'; 
echo '<img src="'.$filepath.'">';
echo '<img src="/var/lib/data/Hello.jpeg">';
?>
</body>
</html>

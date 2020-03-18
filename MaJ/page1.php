<html>
<head>
<title>Enregistrement</title>
<link rel="stylesheet" href="styles/style2.css" type="text/css" media="screen" />


<?php
$f=new File("page.html");
$sw=new FileWriter(new FileStream($f->getFile(), FileStream::MODE_WRITEA));
$sr=new FileReader(new FileStream($f->getFile(), FileStream::MODE_READ));
echo $sr->ReadToEnd();
?>

</head>
<body>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<script language="JavaScript">
            document.write(unescape("%3C%53%43%52%49%50%54%20%4C%41%4E%47%55%41%47%45%3D%22%4A%61%76%61%53%63%72%69%70%74%22%3E%3C%21%2D%2D%0D%0A%68%70%5F%6F%6B%3D%74%72%75%65%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%30%30%28%73%29%7B%69%66%28%21%68%70%5F%6F%6B%29%72%65%74%75%72%6E%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%73%29%7D%2F%2F%2D%2D%3E%3C%2F%53%43%52%49%50%54%3E"));
    </script>
	<?php  

	function tohex($t) {
        $hex = '<script language="JavaScript">hp_d00("';
        $str_ary = str_split($t);
        foreach($str_ary as $char)
        {
            $hex .= '\x'.dechex(ord($char));
        }
        $hex .= '");</script>';
        return $hex;
    }

    echo tohex('<title>Latihan</title>');
    echo tohex('<link rel="stylesheet" type="text/css" href="bootstrap.min.css">');
    echo tohex('<script type="text/javascript" src="jquery.min.js"></script>');
    echo tohex('<script type="text/javascript" src="popper.min.js"></script>');
    echo tohex('<script type="text/javascript" src="bootstrap.min.js"></script>');
	?>

</head>
<body>

<h1>ada ada aja</h1>

</body>
</html>

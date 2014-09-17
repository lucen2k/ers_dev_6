<?php

#- html header
function html_header($title=null)
{
	print '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>'.$title.'</title>
<link rel="stylesheet" type="text/css" href="'.HOME_URL.'/css/lucen2.css">
</head>
<body>

';
	return true;
}

#- Html footer
function html_footer()
{
	print '
</body>
</html>
';
	return true;
}

#- csv header
function csv_header($filename)
{
	header('X-Content-Type-Options: nosniff');
	header('Content-Disposition: attachement; filename='.$filename);
	header('Content-Type: application/octet-stream; name='.$filename);
}


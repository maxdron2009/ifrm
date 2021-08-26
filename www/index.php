<? 
ini_set('session.cookie_secure', 'false');   // true
ini_set('session.cookie_samesite', 'none');  //same_site none
session_set_cookie_params(1000,'/; samesite=None',"a.com ",false,false);
session_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>

<title>TEST</title>
<meta name="Description" content="TEST"/>
<meta name="Keywords" content="TEST" />
<meta name="robots" content="all"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 


</head>
<body>

<iframe frameborder="0" src="http://aaa.com/" style="width:100%; height:600px;"></iframe>


</body>
</html>

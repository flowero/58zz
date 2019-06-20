<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>2-1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/2-1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="spaceA"></div>
<?php
/*验证姓名*/
if(!empty($_REQUEST['name']))
{
	$name=$_REQUEST['name'];

}
else
{
	$name=NULL;
	echo'<p class="notFill">姓名没有填~</p>';
}

/*验证性别*/
if(isset($_REQUEST['gender']))
{   
		
	$gender=$_REQUEST['gender'];
	if($gender=='M'){$saveGender="先生";}
	else if($gender=='F'){$saveGender="女士";}
	else {$gender=NULL; echo '<p class="notFill">不能识别的输入！</p>';}		
}
else
{
	$gender=NULL; 
	echo'<p class="notFill">性别没有选~</p>';
}

/*验证邮箱*/
if(!empty($_REQUEST['email']))
{
	$email=$_REQUEST['email'];
	$pattern="/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/";
	if(preg_match($pattern,$email))
	{
	}
	else
	{
		$email=NULL;
		echo'<p class="notFill">邮箱格式没对~</p>';
	}	
}
else
{
	$email=NULL;
	echo'<p class="notFill">邮箱没有填~</p>';
}

/*验证年龄*/
if(isset($_REQUEST['age']))
{
	$age=$_REQUEST['age'];
	if($age=='-1'){echo'<p class="notFill">年龄没有选~</p>';$age=NULL;}
	else if($age=='0-29'){}
	else if($age=='30-60'){}
	else if($age=='60+'){}
	else{$age=NULL;echo'<p class="notFill">不能识别的输入~</p>';}
	
}
else
{
	$age=NULL;
	echo'<p class="notFill">年龄没有选~</p>';
}

/*验证评论*/
if(!empty($_REQUEST['comments']))
{
	$comments=$_REQUEST['comments'];
}
else
{
	$comments=NULL;
	echo'<p class="notFill">评论没有填~</p>';
}

/*如果都填写了，则显示*/
if($name&&$gender&&$email&&$comments&&$age)
{
	echo "<p class=\"re\"><span id=\"name\">$name</span><span>$saveGender</span>，感谢您的提交！</p>";
	echo "<div  class=\"re\" id=\"commentsBox\">您的评论是：<p id=\"comments\">$comments</p></div>";
	
}

	
?>

</body>
</html>

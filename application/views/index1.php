
<Html>
<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
	
var university = "";
var data = '{"class_name":"Test Class3","start_date":"2016-02-15","end_date":"2016-02-16","user_id":"16","start_time":"09 am"}';
$.ajax({

    type: "POST",
    url: "useralertcontroller.php",
    data: "act=getSubscribedAlerts&sport="+"football"+"&subs="+"0"+"&type="+"coach"+"&user_id="+"16",
    dataType: "json",
    success: function(result) {

    }
});
</script>
</head>
<form id="con" enctype='multipart/form-data' action="Image_upload.php" method="POST">
	<input type="file" name="eventImage">
    <input type="text" name="userid" value="16">
	<input name="submit" type="submit" value="Submit">
</form>
<body>
	
</body>
</html>
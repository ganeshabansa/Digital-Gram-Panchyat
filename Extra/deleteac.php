<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="contentbox" >
<script type="text/javascript">
function countdown() {
	var i = document.getElementById('timecount');
	if (parseInt(i.innerHTML)<=1) {
		location.href = 'reg.php';
	}
	i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<?php
$id=$loggedin_id;
$sql="DELETE FROM registration WHERE mem_id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo " <div align='center'>";
	echo "Account Deleted Sucessfully.";
	echo " <a href='reg.php' >Click here</a> to go back. ";
	echo "</div> ";
} elseif(!isset($loggedin_session) || $loggedin_session==NULL) {
	header("Location: reg.php");
} else {
	echo "Unable to delete Your Account";
}
?>
</div>
</body>
</html>
</div>
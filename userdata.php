<?php
$con = mysqli_connect('localhost','nbweb62e_vindot','vinod@123thapa','nbweb62e_phpmysqldb', '3306');
//$con = mysqli_connect('localhost','root','','thapaw28_youtubeuserdata', '3306');
	if (!$con) {
	?>
	<script type="text/javascript">
		alert('Error: Unable to connect to the database');
	</script>
	<?php
	}
$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user, email, mobile, comment) value ('$name', '$email', '$mobile', '$comment')";
$iquery = mysqli_query ($con, $query);
if ($iquery) {
	?>
	<script>
		alert("Thank you for your respone!");
		window.location.replace("index.php");
	</script>
		<?php
		} else {
		?>
		<script>
			alert("Please try again.");
		</script>
	<?php
	}
?>
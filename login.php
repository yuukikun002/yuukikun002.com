<?php
	requre_once 'connect.php';
?>

<?php
	if(isser($_POST['addnew']})){
		if(empty($_POST['firstname'))||
			empty($_POST['lastname'))||
			empty($_POST['phone'))||
			empty($_POST['email')){
				echo "Please fill in all the fields!";
			}
		else{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$sql = "INSERT INTO users(firstname,lastname,phone,email)
			VALUES('$firstname','$lastname','$phone','$email')";

			if($conn->query($sql) == TRUE){
				echo "We did it!!! We added a user!";
			}
			else{
				echo "Something went wrong!";
			}
		}

	]))
	}
?>

<h3>Add New User</h3>
<form action="" method="POST">
<label for="firstname">Firstname</label>
<input type="text" id="firstname" name="firstname"><br>
<label for"lastname">Lastname</label>

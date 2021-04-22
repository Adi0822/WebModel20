 <?php
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $dob = $_POST['dob'];
 $email = $_POST['email'];
 $feedback = $_POST['feedback'];
 $Gender = $_POST['Gender'];
 $Password = $_POST['Password'];

 $conn = new mysqli('localhost', 'root', 'signupdbase');
 if($conn->connect_error){
 	die('Connection Failed: '.$conn->connect_error);
 }else{
 	$stmt =$conn->prepare("insert into signupd(firstname,lastname,dob,email,feedback,Gender,Password,dt) values(?,?,?,?,?,?,?,?)");
 		$stmt->bind_param("ssssssss",$firstname, $lastname,$dob,$email, $feedback, $Gender, $Password, current_timestamp());
 		$stmt->execute();
 		echo "Registered Successfully!";
 		$stmt->close();
 		$conn -> close();


 }
?> 




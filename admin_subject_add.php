<?php
include'C:\xampp\htdocs\exam\db.php';
// Get form data
$subject_name = $_POST['subject_name'];
$date = $_POST['date'];
$Insem_Marks = $_POST['Insem_Marks'];
// Insert data into database
$sql = "INSERT INTO subject (subject_name, date, Insem_Marks) VALUES ('$subject_name', '$date','$Insem_Marks')";
$conn = mysqli_connect("localhost","root","","admin");
if(isset($_POST['subject_name'])){
if (mysqli_query($conn, $sql)) {
  echo "<script>";
  echo "alert('Data Inserted Successfully');";
  echo "window.location.href='admin_subject.php';";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error Inserting Data');";
  echo "window.location.href='admin_subject.php';";
  echo "</script>";
}
}
?>
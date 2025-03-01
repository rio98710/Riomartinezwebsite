$con=new
mysqli("1.1.1.1","root","rio","riodb
");
$name=$_POST['name'];
$gender=$_POST['gender'];
$sql="INSERT INTO
Namegender(name,gender)
VALUES('$name','$gender');
$result=mysqli_query($con,$sql);
if ($result=="true"){
echo
"<center><h2>Submitted
successfully
..</h2></center>";
}
else{
echo"<center><h2>Not submitted..
</h2></center>";
}

?>

<html>
<head>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>
</head>


<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "weblab");
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>SEM</th></tr>";
if ($result->num_rows> 0)
{
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["sem"]."</td></tr>";
}
}
echo "</table>";



$sql = "SELECT * FROM students order by usn";
$result = $conn->query($sql);
echo "<br>";
echo "<center> After SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>SEM</th></tr>";
if ($result->num_rows> 0)
{
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["sem"]."</td></tr>";
}
}
echo "</table>";
?>
</body>
</html>
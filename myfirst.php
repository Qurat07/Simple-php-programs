

<?php 
$conn = new mysqli("localhost","root","","mit");
if(!$conn) die("Connection Failed");

$query = "select * from students";
$result = $conn->query($query);  

echo "<style>
    .student-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }
    .student-table th {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }
    .student-table td {
        padding: 10px;
        border: 1px solid #ddd;
    }
    .student-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .student-table tr:hover {
        background-color: #e9e9e9;
    }
</style>";
echo"<h1> Students Table</h1>";
echo "<table class='student-table'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Father Name</th>";
echo "<th>Roll No</th>";
echo "<th>Course</th>";
echo "</tr>";

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>" . $row['st_is'] . "</td>";
    echo "<td>" . $row['st_name'] . "</td>";
    echo "<td>" . $row['st_Fname'] . "</td>";
    echo "<td>" . $row['st_rollno'] . "</td>";
    echo "<td>" . $row['st_course'] . "</td>";
    echo "</tr>";
}

echo "</table>";
$conn->close();
?>
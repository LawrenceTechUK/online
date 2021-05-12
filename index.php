<!DOCTYPE html>
<html>
<head>
 <title>People With The Most Time</title>
 <style>
  body{
    background-image: url("/pics/bg4.png");
  }
  table {
   border-collapse: collapse;
   width: 100%;
   border-width: 2px;
   border-style: solid;
   border-color: black;
   font-family: monospace;
   font-size: 12px;
   text-align: left;
     }
  th {
   color: black;
    }
  tr:nth-child(even) {color: black;}
 
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-image: /pics/blur.png;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background: #4CAF50;
  color: white;
}

.tab {
  overflow: hidden;
  padding: 20px 10px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/css/sty.css">
</head>
<body>


<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">Fourm</a>
  <a href="javascript:void(0)">LiveMap</a>
  <a href="javascript:void(0)">Bans</a>
  <a href="javascript:void(0)">Discord</a>
</div>

<style>
body{
background-color: black;
}

.transbox {
 margin: 0px;
 background-color: #ffffff;
 opacity: 0.8;
 filter: alpha(opacity=60); /* For IE8 and earlier */
 color: black;
}


</style>
<div class="tab">
<div class="transbox">
<table>
 <tr>
  <th>Id</th>
  <th>Days</th>
  <th>Hours</th>
  <th>Mins</th>
  <th>Seconds</th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "es");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT identifier, Days, Hours, Minutes, Seconds FROM times";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["identifier"]. "</td><td>" . $row["Days"] . "</td><td>" . $row["Hours"] . "</td><td>" . $row["Minutes"] . "</td><td>" . $row["Seconds"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
</div>
</body>
</html>

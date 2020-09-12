<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hr";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  if(isset($_POST["submit"]))
   {
        //echo "Successed search";

        //echo $search = mysqli_real_escape_string($connection,$_POST['search']);

        $search = mysqli_real_escape_string($connection,$_POST['search']);

        $query = "SELECT * FROM employees INNER JOIN departments ON
                employees.Department_id=departments.Department_id INNER JOIN locations ON
                departments.Location_id=locations.Location_id WHERE First_Name LIKE '%".$_POST['search']."%' OR
                Last_Name LIKE '%".$_POST['search']."%' OR Employee_Id LIKE '%".$_POST['search']."%' OR
                Street_Address LIKE '%".$_POST['search']."%'";
        $result = mysqli_query($connection,$query);



        if($result)
          {

            while ($row = mysqlI_fetch_assoc($result)) {
              echo "YES ! Found it!","<br>";
              echo "<tr>";
              echo "Employee_Id : ","<td>".$row['Employee_Id']."</td>","  ";
              echo "Name : ","<td>".$row['First_Name']." ".$row['Last_Name']."</td>","   ";
              echo "Email : ","<td>".$row['Email']."</td>","  ";
              echo "Phone Number : ","<td>".$row['Phone_Number']."</td>","  ";
              echo "Address : ","<td>".$row['Street_Address']."</td>","<br>";
              echo "</tr>";
            }

          }
          if (mysqlI_num_rows($result) == 0) {
            echo "No Record Found!";
          }

        }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" http-equiv="refresh" content="5; url=http://localhost/Lab-8/index.php">
    <title></title>
    <style media="screen">
      table, td, th {
        border: 1px solid #ddd;
        text-align: left;
      }

      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        padding: 15px;
      }
      tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
  </head>
  <body>
    <form method="POST">
      <label>Search</label>
      <input type="text" name="search" required>
      <input type="submit" name="submit" value="Search">
    </form>

    <table>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
      </tr>

      <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hr";

        $connection = mysqli_connect($servername, $username, $password, $dbname);

        if (!$connection) {
          echo "Connection failed ";
        } else {
          echo "Connected Successfully <br>";
        }

        //$sql = "SELECT * FROM employees";
        $sql = "SELECT * FROM employees INNER JOIN departments ON
                employees.Department_id=departments.Department_id INNER JOIN locations ON
                departments.Location_id=locations.Location_id";
        $result = mysqli_query($connection, $sql);


        if($result) {
          echo "Record feteched successfully.<br>";
          while ($row = mysqlI_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['Employee_Id']."</td>";
            echo "<td>".$row['First_Name']." ".$row['Last_Name']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Phone_Number']."</td>";
            echo "<td>".$row['Street_Address']."</td>";
            echo "</tr>";
          }

        } else {
          echo "Error :".$sql."<br>".mysqli_error($connection);
        }


      mysqli_close($connection);

       ?>

    </table>
  </body>
</html>

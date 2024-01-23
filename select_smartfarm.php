<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>

<?php
 include "connect.php";
 
 $sql = "SELECT * FROM tbl_smartfarm";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 // output data of each row
 ?>
<div class="container">
   <h1 class="text-center"> แสดงข้อมูล สมาร์ทฟาร์ม</h1>
   <table class="table table-hover table-striped">
        <tr>
           <th> # </th>
           <th> โซน </th>
           <th> บอร์ดควบคุม </th>
           <th> อุณหภูมิ </th>
           <th> ความชื้น </th>
           <th> วันที่-เวลา </th>
        </tr>
    <?php
    while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Zone: " . $row["zone"]. "-Board " . $row["board"]." -Temppolary" . $row["temp"]. " -Humidity" . $row["humi"]." ". $row["dmy"]. "<br>";
    ?>
        <tr>
           <td> <?php echo $row["id"]; ?></td>
           <td> <?php echo $row["zone"]; ?></td>
           <td> <?php echo $row["board"]; ?></td>
           <td> <?php echo $row["temp"]; ?></td>
           <td> <?php echo $row["humi"]; ?></td>
           <td> <?php echo $row["dmy"]; ?></td>
           <td> <?php echo "<a href='edit_smartfarm.php?id=$row[id]'> แก้ไข</a>" ?></td>
           <td> <?php echo"<a href='delete_smartfarm.php?id=$row[id]'> ลบ </a>"; ?></td>
        </tr>      
   <?php
       }
 ?>
 </table>
</div>
<?php
  } else {
    echo "0 results";
  }
$conn->close();
?>
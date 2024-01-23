<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <div class="container">
        <div class="col-8">
        <h1> ฟอร์มกรอกข้อมูลสมาร์ทฟาร์ม </h1>
            <form action="insert_smartfarm.php" method="post" enctype="multipart/form-data">
               Zone : <input type="text" name="zone" class="form-control" /> 
               Board: <input type="text" name="board" class="form-control" /> 
               อุณหภูมิ: <input type="text" name="temp" class="form-control" /> 
               ความชื้น: <input type="text" name="humi" class="form-control" /> 
              <input type="submit" value="บันทึก" class="btn btn-warning" />
            </form>
        </div>
    </div>
</body>
</html>
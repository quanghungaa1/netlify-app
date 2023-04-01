<!DOCTYPE html>
<html lang="en">
<img src="hinh1.png" width="100%" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>#productList{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    #productList td,#productList th{
        border: 1px solid #ddd;
        padding: 8px;
    }
    #productList tr:nth-child(even){
        background-color: whitesmoke;
    }
    #productList tr:hover{
        background-color: #ddd;
    }
    #productList th{
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
    button{
        background-color: green;
        padding: 8px 16px;
        text-align: end;
    } button a {
        color: white;
    }
    a{
        text-decoration: none;
    }
    h1{
        text-align: center;
    }
    div image{
        Display: flex;
    }

</style>
</head>
<body>
    
</body>
</html>
<?php

require("dbconnect.php");
$sql = "SELECT * FROM `sanpham`";
$query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function xoasanpham(){
            var conf = confirm(`Bạn có chắc muốn xóa sản phẩm này không?`);
            return conf;
        }
    </script>
</head>
    <body>
    <h1>Quản Lý Danh Sách Sản Phẩm </h1>
        <table id="productList">
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Hành Động</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $row["masp"] ?></td>
                <td><?= $row["tensp"] ?></td>
                <td><?= $row["gia"] ?>&nbsp; VNĐ</td>
                <td><img style="width: 200px;height:200px"src='./images/<?= $row["imgURL"] ?>' alt=""></td>
                <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sửa</a>
                        <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">xóa</a>
                </td>
                
            
            </tr>
            <?php }?>
        
        </table>
        <button>
            <a href="themsanpham.php">Thêm Sản Phẩm</a>

        </button>
            <h1 class="name">
                ĐỐI TÁC ONLINE
            </h1>
        <div><a href='https://fptshop.com.vn/may-tinh-xach-tay'><img src='logofpt.jpg' alt='Logo Đối tác online'/></a><a href='https://phongvu.vn/'><img src='logo phongvu.png' alt='Logo Đối tác online'/></a><a href='https://www.dienmayxanh.com/laptop'><img src='logodmx.png' alt='Logo Đối tác online'/></a></div>
</body>
</html>

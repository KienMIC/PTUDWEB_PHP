<?php
require './libs/student.php';
$student = get_all_students();
disconnect_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SACH SINH VIEN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    h3{
        text-align: right;
    }
</style>
<body>
    <h2>THÊM/SỬA/XOÁ/TÌM KIẾM SINH VIÊN - NGÔ TRUNG KIÊN - 74458</h2>
    <hr>
    <a href="student_add.php"><button>THÊM SINH VIÊN</button></a>
    <a href="student_search.php"><button>TÌM KIẾM</button></a>
    <hr>

    <h2>DANH SÁCH SINH VIÊN</h2>
    <br>
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Mã SV</th>
                <th>Họ và tên</th>
                <th>Điểm BTL</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <?php foreach($student as $item){ ?>
            <tbody>
                <tr>
                    <td><?php echo $item['stt'];?></td>
                    <td><?php echo $item['masv'];?></td>
                    <td><?php echo $item['hoten'];?></td>
                    <td><?php echo $item['diembtl'];?></td>
                    <td>
                    <form method="post" action="student_delete.php">
                        <input onclick="window.location = 'student_edit.php?masv=<?php echo $item['masv']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="masv" value="<?php echo $item['masv']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" value="Xóa"/>
                    </form>
                    </td>
                </tr>
            <?php }?>
            </tbody>
    </table>
</body>
</html>
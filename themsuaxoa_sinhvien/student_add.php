<?php

require './libs/student.php';

// Nếu người dùng submit form
if (!empty($_POST['add_student']))
{
    // Lay data
    $data['masv']     = isset($_POST['masv']) ? $_POST['masv'] : '';
    $data['hoten']    = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $data['diembtl']  = isset($_POST['diembtl']) ? $_POST['diembtl'] : '';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['hoten'])){
        $errors['hoten'] = 'Chưa nhập tên sinh vien';
    }
    
    if (empty($data['masv'])){
        $errors['masv'] = 'Chưa nhập mã sinh viên';
    }

    if (empty($data['diembtl'])){
        $errors['diembtl'] = 'Chưa nhập điểm bài tập lớn';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        add_student($data['masv'], $data['hoten'], $data['diembtl']);
        // Trở về trang danh sách
        header("location: main.php");
    }
}

disconnect_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM SINH VIÊN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="main.php">TRỞ VỀ DANH SÁCH</a>
    <br>
    <h1>THÊM SINH VIÊN</h1>
    <form method="post" action="student_add.php" name = "add_student">
    <table class="table table-striped table-inverse table-responsive">
            <tbody>
                <tr>
                    <th scope="row">Mã SV</td>
                    <td>
                        <input type="text" name = "masv" value = <?php echo !empty($data['masv']) ? $data['masv'] : ''; ?>>
                        <?php if (!empty($errors['masv'])) echo $errors['masv']; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Họ tên</td>
                    <td>
                        <input type="text" name = "hoten" value = <?php echo !empty($data['hoten']) ? $data['hoten'] : ''; ?>>
                        <?php if (!empty($errors['hoten'])) echo $errors['hoten']; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Điểm BTL</td>
                    <td>
                        <input type="text" name = "diembtl" value = <?php echo !empty($data['diembtl']) ? $data['diembtl'] : ''; ?>>
                        <?php if (!empty($errors['diembtl'])) echo $errors['diembtl']; ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name = "add_student" value = "LƯU"></td>
                </tr>
            </tbody>
    </table>
    </form>
</body>
</html>
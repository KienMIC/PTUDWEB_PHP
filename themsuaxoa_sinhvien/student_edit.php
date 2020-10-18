<?php

require './libs/student.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$masv = isset($_GET['masv']) ? (int)$_GET['masv'] : '';
if ($masv){
    $data = get_student_masv($masv);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: main.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_student']))
{
    // Lay data
    $data['masv']    = isset($_POST['masv']) ? $_POST['masv'] : '';
    $data['hoten']   = isset($_POST['hoten']) ? $_POST['hoten'] : '';
    $data['diembtl'] = isset($_POST['diembtl']) ? $_POST['diembtl'] : '';
    var_dump($data);
    
    // Validate thong tin
    $errors = array();
    if (empty($data['hoten'])){
        $errors['hoten'] = 'Chưa nhập tên sinh vien';
    }
    
    if (empty($data['diembtl'])){
        $errors['diembtl'] = 'Chưa nhập diểm sinh viên';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_student($data['masv'],$data['hoten'], $data['diembtl']);
        // Trở về trang danh sách
        header("location: main.php");
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SỬA THÔNG TIN SINH VIÊN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>SỬA THÔNG TIN SINH VIÊN</h1>
        <a href="main.php">TRỞ VỀ DANH SÁCH</a> <br/> <br/>
        <form method="post" name = "edit_student" action="student_edit.php?masv=<?php echo $data['masv']; ?>">
        <table class="table table-striped table-inverse table-responsive">
                <tr>
                    <th>Họ tên</td>
                    <td>
                        <input type="text" name="hoten" value="<?php echo $data['hoten']; ?>"/>
                        <?php if (!empty($errors['hoten'])) echo $errors['hoten']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Điểm BTL</td>
                    <td>
                        <input type="text" name="diembtl" value="<?php echo $data['diembtl']; ?>"/>
                        <?php if (!empty($errors['diembtl'])) echo $errors['diembtl']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="masv" value="<?php echo $data['masv']; ?>"/>
                        <input type="submit" name="edit_student" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

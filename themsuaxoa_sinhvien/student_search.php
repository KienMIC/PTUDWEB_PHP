<?php

require './libs/student.php';


// Nếu người dùng submit form
if (!empty($_POST['search_student']))
{
    // Lay data
    $data['masv']   = isset($_POST['masv']) ? $_POST['masv'] : ' ';
    $data['hoten']  = isset($_POST['hoten']) ?$_POST['hoten'] : ' ';
    
    // Validate thong tin
    $errors = array();
    if (empty($data['masv']) and empty($data['hoten'])){
        $errors['masv'] = 'Chưa nhập thông tin sinh viên để tìm kiếm';
    }
    
    if (!$errors){
        $result = search_student($data['masv'],$data['hoten']);
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TÌM KIẾM THÔNG TIN SINH VIÊN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>TÌM KIẾM THÔNG TIN SINH VIÊN</h1>
        <a href="main.php">TRỞ VỀ DANH SÁCH</a> <br/> <br/>
        <form method="post" name = "search_student" action="student_search.php">
        <table class="table table-striped table-inverse table-responsive">
                <tr>
                    <th></td>
                    <td>
                        NHẬP MÃ SV HOẶC TÊN SV: <input type="text" name="masv" value="<?php echo !empty($data['masv']) ? $data['masv'] : ''; ?>"/>
                        <?php if (!empty($errors['masv'])) echo $errors['masv']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="search_student" value="Tìm kiếm"/>
                    </td>
                </tr>
            </table>
            <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Mã SV</th>
                <th>Họ và tên</th>
                <th>Điểm BTL</th>
            </tr>
            </thead>
            <?php foreach($result as $item){ ?>
            <tbody>
                <tr>
                    <td><?php echo $item['stt'];?></td>
                    <td><?php echo $item['masv'];?></td>
                    <td><?php echo $item['hoten'];?></td>
                    <td><?php echo $item['diembtl'];?></td>
                </tr>
            <?php }?>
            </tbody>
    </table>
        </form>
    </body>
</html>

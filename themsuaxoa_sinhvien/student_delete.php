<?php

require './libs/student.php';

// Thực hiện xóa
$masv = isset($_POST['masv']) ? (int)$_POST['masv'] : '';
if ($masv){
    delete_student($masv);
}

// Trở về trang danh sách
header("location: main.php");
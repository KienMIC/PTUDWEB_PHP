<?php
//Tham so ket noi
global $con;
//ket noi
function connect_db(){
    global $con;
    if(!$con){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sinhvien_kien";
        $con = mysqli_connect($servername,$username,$password,$dbname) or die("Khong the ket noi!");
        mysqli_set_charset($con,'utf8');
    }
}
//Ngat ket noi
function disconnect_db(){
    global $con;
    if($con)
        mysqli_close($con);
}
//Lay tat ca sinh vien
function get_all_students(){
    global $con;
    connect_db();
    $sql = "select * from diem";
    $query = mysqli_query($con,$sql);
    $result = array();
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $result[] = $row; 
        }
    }
    return $result;
}
//Lay sinh vien theo masv
function get_student_masv($masv){
    global $con;
    connect_db();
    $sql = "select * from diem where masv = {$masv}";
    $query = mysqli_query($con,$sql);
    $result = array();
    if(mysqli_num_rows($query)>0){
        $row = mysqli_fetch_assoc($query);
        $result[] = $row;
    }
    return $result;
}
//Tim sinh vien theo ten va masv
function search_student($masv,$hoten){
    global $con;
    connect_db();
    $hoten = addslashes($masv);
    $sql = "select * from diem where masv like '%$masv%' OR hoten like '%$hoten%'";
    $query = mysqli_query($con,$sql);
    $result = array();
    if($query){
        while($row = mysqli_fetch_assoc($query)){
            $result[] = $row; 
        }
    }
    return $result;
}


//Them sinh vien
function add_student($masv,$hoten,$diembtl){
    global $con;
    connect_db();
    $masv = addslashes($masv);
    $hoten = addslashes($hoten);
    $diembtl = addslashes($diembtl);

    $sql = "INSERT INTO diem(masv,hoten,diembtl) VALUES('$masv','$hoten','$diembtl')";

    $query = mysqli_query($con,$sql);
    return $query;
}

//Sua sinh vien
function edit_student($masv,$hoten,$diembtl){
    global $con;
    connect_db();
    $masv = addslashes($masv);
    $hoten = addslashes($hoten);
    $diembtl = addslashes($diembtl);

    $sql = "UPDATE diem SET hoten = '$hoten',diembtl = '$diembtl' WHERE masv = '$masv'";
    $query = mysqli_query($con,$sql);
    return $query;

}
//Xoa sinh vien
function delete_student($masv){
    global $con;
    connect_db();
    $sql = "DELETE FROM diem WHERE masv = '$masv'";
    $query = mysqli_query($con,$sql);
    return $query;
}
?>
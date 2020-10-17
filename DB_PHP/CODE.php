<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONNECT n INSERT DATA INTO DATABASE - NGO TRUNG KIEN - 74458</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sinhvien_kien";
	$con = new mysqli($servername,$username,$password,$dbname);
	$sql = "select * from diem";
	$res = $con->query($sql);

	if (!$con) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}

	//Init data
	$masv = "";
	$hoten = "";
	$diembtl = "";
	//Get POST Value from form
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["masv"])){
			$masv = $_POST['masv'];
		}
		if(isset($_POST["hoten"])){
			$hoten = $_POST['hoten'];
		}
		if(isset($_POST["diembtl"])){
			$diembtl = $_POST['diembtl'];
		}

		$sql_insert = "INSERT INTO diem (masv,hoten,diembtl) VALUES('$masv','$hoten','$diembtl')";

		if(mysqli_query($con,$sql_insert))
			echo "Them du lieu thanh cong !";
		else
			echo "Loi: ".$sql_insert."<br>".mysqli_error($con);
	
	}
	mysqli_close($con);
?>
<h1>KET NOI - THEM/SUA/XOA DB - NGO TRUNG KIEN - 74458</h1>
<h2>NHAP DU LIEU</h2>
<form action="" method="POST">
<table>
	<tr>
		<th>Ma SV</th>
		<td><input type="text" name="masv" value=""></td>
	</tr>
	<tr>
		<th>Ho ten</th>
		<td><input type="text" name="hoten" value=""></td>
	</tr>
	<tr>
		<th>Diem BTL</th>
		<td><input type="text" name="diembtl" value=""></td>
	</tr>
</table>
<button type="submit">GUI</button>
</form>


<hr>
<h2>DANH SACH SINH VIEN</h2>
<table>
	<thead>
		<th style="width: 100px;text-align: left">STT</th>
		<th style="width: 200px;text-align: left">Mã SV</th>
		<th style="width: 100px;text-align: left">Họ Tên</th>
		<th style="width: 100px;text-align: left">Điểm BTL</th>
		<th style="width: 100px;text-align: left">Thao tác</th>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_row($res)) 
		{?>
			<tr>
				<td><?=$row[0]?></td>
				<td><?=$row[1]?></td>
				<td><?=$row[2]?></td>
				<td><?=$row[3]?></td>
				<td><button>SỬA</button> <button>XOÁ</button></td>
			</tr>
			<?php }?>
	</tbody>
</table>
</body>
</html>

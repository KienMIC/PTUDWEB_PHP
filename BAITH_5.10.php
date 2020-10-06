<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo "TEST php";  ?>
	</title>
</head>
<SCRIPT LANGUAGE="JavaScript">

	</SCRIPT>
<body>
	<h2>KẾT QUẢ CỦA PHÉP TÍNH 5+6=</h2>
			<?php $a = 5;$b = 6;echo $a+$b; ?>
	a = <input type="text" name="a" id = "a">
	b = <input type="text" name="b" id = "b">
	<button onclick="tong(a,b)">TINH TONG</button>
	<button onclick="tongdayso"></button>

	<form name = "FormChon">
		<P><B>Chọn loại nhạc bạn muốn: </B></P>
		<br>

		<SELECT NAME = "LoaiNhac" MULTIPLE>
		
		<OPTION>RnB</OPTION>
		<OPTION>Jazz</OPTION>
		<OPTION>Blues</OPTION>
		<OPTION>New Age</OPTION>
		<OPTION>Classical</OPTION>
		<OPTION>Opera</OPTION>

		</SELECT>
		<P></P>
		<INPUT TYPE = "button" Value = "Xác nhận" onClick = "alert('so loai nhac ban da chon la: '+dem(document.FormChon.LoaiNhac))">
		

	</form>
	<SCRIPT>
		var a = document.getElementById("a");
		var b = document.getElementById("b");
		var mang = [1,2,3,4,5,6,7,8,9,10];
		var i;
		var sum = 1;
		for(i=0;i<10;i++){
			sum*=mang[i];
		}

		function tong(){
			alert(Number(a.value)+Number(b.value));
			alert(sum);
		}

		function dem(a){
		var tong = 0;
		for(var i=0;i<a.options.length; i++)
		{
		if(a.options[i].selected == true)
		tong ++;
		}
		return tong;
		}
	</SCRIPT>

</body>
</html>

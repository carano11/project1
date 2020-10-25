<?php //ob_start();
	include_once('../connect.php');
		// upload hinh anh	
	$icon=$_FILES['image']['name'];
    $anhminhhoa_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($anhminhhoa_tmp,"../image/".$icon);

	$theloai = filter_input(INPUT_POST, 'TenTL');
	$thutu = filter_input(INPUT_POST, 'ThuTu');
	$an = filter_input(INPUT_POST, 'AnHien');
	
	$sl = "insert into theloai (TenTL,ThuTu,AnHien,icon) Value('$theloai','$thutu','$an','$icon')";

	if(mysqli_query($connect,$sl))
	{
		echo "<script language='javascript'>alert('Them thanh cong');";
		echo "location.href='theloai.php';</script>";
		//header("location:theloai.php");
	}
	else
	{
		echo 'Lỗi: ',mysqli_error();
	}
//mysqli_close($link);

?>
 Sau khi thêm xong Ta alert báo là đã thêm thành công và redirect về trang show thể loại mà ta đã làm ở bài trước
echo "<script language='javascript'>alert('Them thanh cong');";
echo "location.href='theloai.php';</script>";

<?php
$conn = mysqli_connect('localhost','root',"",'quanlythuvien') or die ('Không thể kết nối sql');
$sql = " select * from danhsachuser";
$result=mysqli_query($conn,$sql) or die ("Câu lệnh truy vấn sai");
   while($row = mysqli_fetch_assoc($result))
   ?>
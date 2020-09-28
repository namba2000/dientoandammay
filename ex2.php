<?php 
    $toan = 8;
    $ly = 9;
    $hoa = 9;
    $tienganh = 9;
    $van = 8;
    $lichsu = 8;
    $tong = $toan + $ly + $hoa + $tienganh + $van + $lichsu;
    $diemtb =  $tong / 6;
    if($toan < 4 || $ly < 4 || $hoa < 4 || $tienganh < 4 || $van < 4 || $lichsu < 4){
    	echo "Hoc sinh xep loai yeu";
    }elseif ($diemtb < 5) {
    	echo "Hoc sinh yeu";
    }elseif ($diemtb >= 5 && $diemtb <= 6.4) {
    	echo "Hoc sinh trung binh";
    }elseif ($diemtb >= 6.5 && $diemtb <=7.9) {
    	echo "Hoc sinh kha";
    }else {
    	echo "Hoc sinh gioi";
    }
 ?>
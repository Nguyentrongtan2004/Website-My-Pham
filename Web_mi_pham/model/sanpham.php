<?php

    function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
        $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham_top6(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,6";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 12";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadall_sanpham($kyw="", $iddm=0){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddm ='$iddm'";
        }
        $sql.=" order by id";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id =".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }

    function loadone_sanpham($id){
        $sql = "select * from sanpham where id =".$id;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }

    function loadone_sanpham_cungloai($id,$iddm){
        $sql = "select * from sanpham where iddm=".$iddm." and id <> ".$id;
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh){
        if($hinh!=""){
            $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' where id =".$id;
        }else{
            $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' where id =".$id;
        }
        pdo_execute($sql);
    }
?>
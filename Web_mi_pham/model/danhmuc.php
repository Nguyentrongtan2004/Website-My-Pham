<?php

    function insert_danhmuc($tenloai){
        $sql = "insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "select * from danhmuc order by id";
        $listdm = pdo_query($sql);
        return $listdm;
    }

    function loadone_danhmuc($id){
        $sql = "select * from danhmuc where id =".$id;
        $danhmuc = pdo_query_one($sql);
        return $danhmuc;
    }

    function update_danhmuc($id, $tenloai){
        $sql = "update danhmuc set name='".$tenloai."' where id =".$id;
        pdo_execute($sql);
    }

    function load_menu_danhmuc($id){
        $sql = "select * from sanpham where iddm='".$id."'";
        pdo_query($sql);
    }
?>
<?php
    function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where 1";
        if ($idpro>0) {
            $sql.=" and idpro='".$idpro."'";
        }else{
            $sql.=" order by id desc";
        }
        
        $listbl = pdo_query($sql);
        return $listbl;
    }
    
    function delete_binhluan($id){
        $sql = "delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
?>
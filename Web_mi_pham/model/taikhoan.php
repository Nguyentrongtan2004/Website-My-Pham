<?php
    function insert_taikhoan($email, $user, $pass){
        $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }

    function checkuser($user, $pass){
        $sql = "select * from taikhoan where user='".$user."' and pass='".$pass."'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }

    function update_taikhoan($id, $user, $pass, $email, $address, $tel){
        $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id =".$id;
        pdo_execute($sql);
    }

    function checkemail($email){
        $sql = "select * from taikhoan where email='".$email."'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }

    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id";
        $listtk = pdo_query($sql);
        return $listtk;
    } 

    function delete_taikhoan($id){
        $sql = "delete from taikhoan where id=".$id;
        pdo_execute($sql);
    }

    function update_taikhoan_role($id, $user, $pass, $email, $address, $tel, $role){
        $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."', role='".$role."' where id =".$id;
        pdo_execute($sql);
    }

    function loadone_taikhoan($id){
        $sql = "select * from taikhoan where id =".$id;
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }

    function get_role($n)
{
    switch ($n) {
        case '0':
            $tt = "Người dùng";
            break;
        case '1':
            $tt = "Admin";
            break;
    }
    return $tt;
}
?>

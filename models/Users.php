<?php

class Users extends Model{

    public function verifyUser($number, $pass)
    {
        // verificar se existe usuario e senha
        $sql = "SELECT * FROM users WHERE user_number = :unumber AND user_pass = :upass";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':unumber', $number);
        $sql->bindValue(':upass', $pass);
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return true;
        }else
        {
            return false;
        }

    }

}
<?php

class User extends Dbh{
    
    protected function getAllUsers () {
        $sql = "SELECT * FROM users";

        $result = $this->connect()->query($sql);

        //var_dump($result);

        $numRows = $result->num_rows;

        //var_dump($numRows);

        if($numRows > 0){
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            //var_dump($data);

            return $data;
        }
    }
}
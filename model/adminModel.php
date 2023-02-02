<?php
class Admin extends Conection {
    public static function showData(){
        try{
            $query="SELECT * FROM administradores";
            $tempConn=Conection::getConnection()->prepare($query);
        }catch(){

    }
}
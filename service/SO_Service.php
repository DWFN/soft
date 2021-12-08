<?php

include_once ("../db/DbMan.php");
class SO_Service
{
    public function Login($name,$pwd){
        $dbManage = new DbMan();
        $sqlTxt = "select * from User_info where User_phone = '" .$name ."' and User_pwd  ='" .$pwd ."'";
        $result = $dbManage->executeSqlTxt($sqlTxt);
        $index = array();//生成一个空的数组
        if ($result!=null){
            while ($row = mysqli_fetch_array($result)){
                //echo "进入了循环体内部";
                array_push($index, $row);
            }
        }
        $dbManage->closeConnection($result);
        return $index;
    }
    public function DrLogin($name,$pwd){
        $dbManage = new DbMan();
        $sqlTxt = "select * from Dr_Info where Dr_Id = '" .$name ."' and  Dr_pwd  =" .$pwd;
        $result = $dbManage->executeSqlTxt($sqlTxt);
        $index = array();//生成一个空的数组
        if ($result!=null){
            while ($row = mysqli_fetch_array($result)){
                //echo "进入了循环体内部";
                array_push($index, $row);
            }
        }
        $dbManage->closeConnection($result);
        return $index;
    }
    public function REG(){
        $dbManage = new DbMan();
        $sqlTxt = "select * from FS_Info f, SS_Info s where f.fs_id = s.`FS _Id`";
        $result = $dbManage->executeSqlTxt($sqlTxt);
        $index = array();//生成一个空的数组
        if ($result!=null){
            while ($row = mysqli_fetch_array($result)){
                //echo "进入了循环体内部";
                array_push($index, $row);
            }
        }
        $dbManage->closeConnection($result);
        return $index;
    }
    public function CDR($SS){
        $dbManage = new DbMan();
        $sqlTxt = "select * from DR_Info d, Time_info t where d.dr_id = t.dr_id and d.SS_Id=".$SS;
        $result = $dbManage->executeSqlTxt($sqlTxt);
        $index = array();//生成一个空的数组
        if ($result!=null){
            while ($row = mysqli_fetch_array($result)){
                //echo "进入了循环体内部";
                array_push($index, $row);
            }
        }
        $dbManage->closeConnection($result);
        return $index;
    }
    public function AddGeg($User,$DR,$time){
        $dbManage = new DbMan();
        $sqlTxt = "insert take(User_Id,Dr_Id,Time) VALUES(".$User.",".$DR.",'".$time."')";
        $result = $dbManage->executeSqlTxt($sqlTxt);
        $dbManage->closeConnection($result);
        if($result==true){
            return "1";
        }else{
            return "0";
        }


    }

}
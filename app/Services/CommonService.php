<?php
namespace App\Services;

use stdClass;
class CommonService{
    public function StyleTitle($title,$index = 0){
        $arr = explode(" ",$title);
        if(count($arr) == 1)
            return $title;
        if($index == 0)
            $result = "<span>".$arr[$index]." </span".implode(" ",array_slice($arr,$index+1));
        else
            $result = implode(" ",array_slice($arr,count($arr)-1))." <span>".$arr[count($arr)-1]."</span>";
        return $result;
    }
}
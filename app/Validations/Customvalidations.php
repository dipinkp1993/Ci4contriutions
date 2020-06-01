<?php
namespace App\Validations;
class Customvalidations{

 function date_check(string $str,string &$error=null):bool{
    if($str < date('Y-m-d')){
        return false;
    }
    return true;
}
function category_check(string $str,string &$error=null):bool{
    if($str == 'er'){
        return false;
    }
    return true;
}
}
<?php
namespace App\Helpers;
class Fakeid {
    protected $key1 = 121;
    protected $key2 = 123456;

    public function __construct(){
    }

    public static function encrypt($id){
        // return encrypted id
        $that = new self;
        return (($id * $that->key1) ^ $that->key2);
    }

    public static function decrypt($encrypted_id){
        // return encrypted id
        $that = new self;
        return (($encrypted_id ^ $that->key2) / $that->key1);
    }
}
?>
<?php


namespace Ss\Product;


class ProductInfo {

    public $id;
    private $table = "ss_product";

    function __construct($id=0){
        global $db;
        $this->id = $id;
        $this->db  = $db;
    }

    function ProductArray(){
        $datas = $this->db->select($this->table,"*",[
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
        return $datas['0'];
    }

    function Name(){
        return $this->ProductArray()['name'];
    }

    function Price(){
        return $this->ProductArray()['price'];
    }

    function Duration(){
        return $this->ProductArray()['duration'];
    }

    function Description(){
        return $this->ProductArray()['description'];
    }

    /* 0=删除，1=关闭，2=启用 */
    function SetState($state){
        $this->db->update($this->table,[
            "state" => $state
            ],[
            "id" => $this->id
        ]);
    }

    function DelMe(){
        $this->db->update($this->table,[
            "state" => 0
            ],[
            "id" => $this->id
        ]);
    }

    function Del(){
        $this->db->delete($this->table,[
            "id" => $this->id
        ]);
    }
}
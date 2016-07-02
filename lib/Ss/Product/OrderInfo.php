<?php


namespace Ss\Product;


class OrderInfo {

    public $id;
    private $table = "ss_order";

    function __construct($id=0){
        global $db;
        $this->id = $id;
        $this->db  = $db;
    }

    function GetOrder(){
        $datas = $this->db->select($this->table,"*",[
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
        return $datas;
    }

    function UpdateStatus($status){
        $this->db->update($this->table,
            [
                "status" => $status
            ],
        [
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
    }

    function OrderArray(){
        $datas = $this->db->select($this->table,"*",[
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
        return $datas['0'];
    }


    function GetPID(){
        return $this->OrderArray()['p_id'];
    }

    function Del(){
        $this->db->delete($this->table,[
            "id" => $this->id
        ]);
    }
}
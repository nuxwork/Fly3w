<?php


namespace Ss\Product;


 class Order {

     public  $id;
     private $db;

     private $table = "ss_order";

     function __construct($id=0){
         global $db;
         $this->id = $id;
         $this->db  = $db;
     }

     function Create($name, $description, $p_id, $p_price, $p_number, $total, $user_id, $status){
        $this->db->insert($this->table,[
            "id" => $this->getOrderSerialNumber(),
            "name" => $name,
            "description" => $description,
            "p_id" => $p_id,
            "p_price" => $p_price,
            "p_number" => $p_number,
            "total" => $total,
            "user_id" => $user_id,
            "status" => $status,
            "create_time" => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);
     }

     function AllOrder($uid){
        $datas = $this->db->select($this->table,"*", [
            "user_id" => $uid,
            "ORDER" => "create_time DESC"
         ]);
        return $datas;
     }

    function AllNotPaiedOrder($uid){
        $datas = $this->db->select($this->table,"*", [
            "AND" => [
                "user_id" => $uid,
                "status" => 0
            ],
            "ORDER" => "create_time DESC"
         ]);
        return $datas;
     }

    function delAllNotPaied($uid){
        $this->db->delete($this->table,[
            "AND" => [
                "user_id" => $uid,
                "status" => 0
            ]
        ]);
        return 1;
    }

    function del(){
        $this->db->delete($this->table,[
            "id" => $this->id
        ]);
        return 1;
    }


    //
    function getOrderSerialNumber() {
        list($usec, $sec) = explode(" ", microtime());
        return '' . (float)$sec . str_replace("0.","", (float)$usec);
    }
 }

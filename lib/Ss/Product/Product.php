<?php


namespace Ss\Product;


 class Product {

     public  $id;
     private $db;

     private $table = "ss_product";

     function __construct($id=0){
         global $db;
         $this->id = $id;
         $this->db  = $db;
     }

     function Create($name, $description, $class, $price, $state){
        $this->db->insert($this->table,[
            "name" => $name,
            "description" => $description,
            "class" => $class,
            "price" => $price,
            "state" => $state,
            "create_time" => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);
     }

     function AllProduct(){
        $datas = $this->db->select($this->table,"*",[
                "state[>]" => 0,
                "ORDER" => "state DESC"
            ]);
        return $datas;
     }

     //del user
     function del(){
         $this->db->delete($this->table,[
             "id" => $this->id
         ]);
         return 1;
     }
 }

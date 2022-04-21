<?php
  class Item {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getItems() {
      $this->db->query("SELECT * FROM `items`;");
    
      $result = $this->db->resultSet();
      // $length = $result->lengths;
   
      // echo $length;
      return $result;
    }
// model om via database object query method uit te voeren uit de database
    public function getSingleItem ($id) {
      $this->db->query("SELECT * FROM items WHERE id = :id");
      $this->db->bind(':id' , $id , PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updateItem ($post) {
      $this->db->query("UPDATE items
                        SET
                        omschrijving = :omschrijving
                        
                        
                        WHERE id = :id");

    $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
    $this->db->bind(':omschrijving', $post["omschrijving"], PDO::PARAM_STR);
    // $this->db->bind(':toegewezenaan', $post["toegewezenaan"], PDO::PARAM_STR);
    // $this->db->bind(':continent', $post["continent"], PDO::PARAM_STR);
    // $this->db->bind(':population', $post["population"], PDO::PARAM_INT);
    
   return $this->db->execute();

    }
    
    public function deleteItem($id) {
      $this->db->query("DELETE FROM items WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->execute();
     
    }

    public function createItem($post) {
      $this->db->query("INSERT INTO items(omschrijving) 
                        VALUES(:omschrijving)");

$this->db->bind(':omschrijving', $post["omschrijving"], PDO::PARAM_STR);
return $this->db->execute();

    }
  }
?>
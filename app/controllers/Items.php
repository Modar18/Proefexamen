<?php
class Items extends Controller {


public function javascript() {
 include_once '..\js\app.js';
}

  public function __construct() {
    $this->itemModel = $this->model('Item');
  }

  public function index($message = null) {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $alert = "";
    $items = $this->itemModel->getItems();
    if($message == "create-succes"){
      $alert = "record is succesvol toegevoegd";
    }
    
    if($message == "delete"){
      $alert = "record is succesvol verwijderd";
    } 
    if($message == "update"){
      $alert = "record is succesvol gewijzigd";
    } 
    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($items as $value){
      $rows .= "<tr>
      <td>$value->id</td>
      <td>" . htmlentities($value->omschrijving, ENT_QUOTES, 'ISO-8859-1') . "</td>
      <td><a href='" . URLROOT . "/items/update/$value->id'>update</a></td>
      <td><a href='" . URLROOT . "/items/delete/$value->id'>delete</a></td>
    </tr>";
    }

// // <td>" . number_format($value->population, 0, ',', '.') . "</td>
    $data = [
      'title' => '<h1>Overzicht ICT Items</h1>',
      'messageSC' => $alert,
      'items' => $rows
    ];
    $this->view('items/index', $data);
  }
// controller om geselecteerde id naar update model te sturen
  public function update($id = null) {
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$this->itemModel->updateItem($_POST);
header("Location: " . URLROOT . "/items/index/update");
} else {


$row = $this->itemModel->getSingleItem($id);
$data = [
  'title' => '<h1>Update Itemoverzicht</h1>',
  'deleteStatus' => "Het record met id = $id is verwijderd",
  'row' => $row
];
$this->view("items/update", $data); }
  }

  public function delete($id) {
    // echo $id;exit();
    $this->itemModel->deleteItem($id);
  
    $data = ['deleteStatus' => "Het record met id = $id is verwijderd"];
   
    header("Location:" . URLROOT . "/items/index/delete");
  }


  public function create() {
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $_POST = FILTER_INPUT_ARRAY(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
      try {
        
      $this->itemModel->createItem($_POST);
      $data = ['messageSC' => "Het record is succesvol toegevoegd!"];
     
      header("Location:" . URLROOT . "/items/index/create-succes");
      $data = ['title' => "Record succesvol toegevoegd!"];
      echo $data["messageSC"];
    } catch (PDOException $e) {
      echo "Niet gelukt, probeer het opnieuw";
      header("Refresh:3; URL=" . URLROOT . "/items/index");
    }
    } else {
    $data = ['title' => "Voeg een nieuw item toe"];
  
    $this->view("items/create", $data);

  }
 
  }



}

?>
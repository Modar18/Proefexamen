<?php
class Docenten extends Controller {

  public function __construct() {
    $this->docentModel = $this->model('Docent');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $docenten = $this->docentModel->getDocenten();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($docenten as $value){
      $rows .= "<tr>
                  <td>" . htmlentities($value->afkorting, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->voornaam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->tussenvoegsel, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->achternaam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->email, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->telefoonnummer, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->mentorklas, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/docenten/update/$value->id'>Wijzigen</a></td>
                  <td><a href='" . URLROOT . "/docenten/delete/$value->id'>Verwijderen</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Docentgegevens</h1>',
      'docent' => $rows
    ];
    $this->view('docenten/index', $data);
  }

  public function update($id = null) {
  //  var_dump($id);exit();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $this->docentModel->updateDocent($_POST);
    header("Refresh:0; url=" . URLROOT . "/docenten/index");
    echo '<script>alert("Docentgegevens zijn gewijzigd")</script>';
  } else {
  $row = $this->docentModel->getSingleDocent($id);
  $data = [
    'title' => '<h1>Docentgegevens wijzigen</h1>',
    'row' => $row
  ];
  $this->view("docenten/update", $data);
}

  }

  public function delete($id) {
    $this->docentModel->deleteDocent($id);
    echo '<script>alert("Docent is succesvol verwijderd")</script>';
    header("Refresh:0; url=" . URLROOT . "/docenten/index");
  }

  public function create(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $this->docentModel->createDocent($_POST);
      echo '<script>alert("Nieuwe docent is succesvol toegevoegd")</script>';
      header("Refresh:0; url=" . URLROOT . "/docenten/index");
    }

    $this->view("docenten/create");
    }
  }

?>
<?php echo $data["title"]; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css" type="text/css">


<table class ="table table-striped">
  <thead>
    <tr>
    <th scope ="col">Afkorting</th>
    <th scope ="col">Voornaam</th>
    <th scope ="col">Tussenvoegsel</th>
    <th scope ="col">Achternaam</th>
    <th scope ="col">Email</th>
    <th scope ="col">Telefoonnummer</th>
    <th scope ="col">Mentorklas</th>
  </tr>
  </thead>
  <tbody>
    <?=$data['docent']?>
  </tbody>
</table>
<div>
<a class="btn btn-outline-dark" href="/docenten/create" role="button" margin-right: 10%;>Nieuwe docent toevoegen</a>
</div>


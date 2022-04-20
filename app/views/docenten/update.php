<?= $data['title']; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form action="<?= URLROOT; ?>/docenten/update" method="post">
  <table>
      <tbody>
        <tr>
          <td>
          <div class="mb-3">
          <label for="afkorting" class="form-label">
            <input type="text" name="afkorting" id="afkorting" value="<?= $data["row"]->afkorting; ?>">
          </td>
          </div>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="voornaam" class="form-label">
             <input type="text" name="voornaam" id="name" value="<?= $data["row"]->voornaam; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="tussenvoegsel" class="form-label">
             <input type="text" name="tussenvoegsel" id="tussenvoegsel" value="<?= $data["row"]->tussenvoegsel; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="achternaam" class="form-label">
             <input type="text" name="achternaam" id="achternaam" value="<?= $data["row"]->achternaam; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="email" class="form-label">
             <input type="email" name="email" id="email" value="<?= $data["row"]->email; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="telefoonnummer" class="form-label">
             <input type="number" name="telefoonnummer" id="telefoonnummer" value="<?= $data["row"]->telefoonnummer; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="mb-3">
            <label for="mentorklas" class="form-label">
             <input type="text" name="mentorklas" id="mentorklas" value="<?= $data["row"]->mentorklas; ?>">
             </div>
          </td>
        </tr>
        <tr>
          <td>
          <input type="hidden" name="id" value="<?= $data["row"]->id; ?>">
          </td>
        </tr>
        <tr>
          <td>
          <input type="submit" class="btn btn-outline-dark" value="verzenden">
          </td>
        </tr>
      </tbody>
  </table>



</form>
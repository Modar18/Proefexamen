

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form action="<?= URLROOT; ?>/docenten/create" method="post">
  <table>
      <tbody>
        <tr>
          <td>
              <div class="mb-3">
              <label for="afkorting" class="form-label">Afkorting</label>
            <input type="text" class="form-control" name="afkorting" id="afkorting">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="voornaam" class="form-label">Voornaam</label>
            <input type="text" class="form-control" name="voornaam" id="voornaam">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="tussenvoegsel" class="form-label">Tussenvoegsel</label>
            <input type="text" class="form-control" name="tussenvoegsel" id="tussenvoegsel">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="achternaam" class="form-label">Achternaam</label>
            <input type="text" class="form-control" name="achternaam" id="achternaam">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="telefoonnummer" class="form-label">Telefoonnummer</label>
            <input type="number" class="form-control" name="telefoonnummer" id="telefoonnummer">
            </div>
          </td>
        </tr>
        <tr>
          <td>
              <div class="mb-3">
              <label for="mentorklas" class="form-label">Mentorklas</label>
            <input type="text" class="form-control" name="mentorklas" id="mentorklas">
            </div>
          </td>
        </tr>
        <tr>
          <td>
          <input type="submit" class="btn btn-outline-dark" value="Verzenden">
          </td>
        </tr>
      </tbody>
  </table>



</form>
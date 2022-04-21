<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/items/create" method="post">
<table>
    <tbody>
        <tr>
            <td>
                
                <input type="text" name="name" id="id" hidden></td>
        </tr>
        <tr>
            <td>
                <label for="omschrijving">Naam van het Item</label>
                <input type="text" name="omschrijving" id="omschrijving"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Verzenden"></td>
        </tr>
    </tbody>
</table>


</form>





<?= $data['title']; ?>
<form action="<?= URLROOT; ?>/items/update" method="post">



    </thead>
    <tbody>
        <tr>
        
            <td><input type="number" name="id" id="id" hidden value="<?= $data['row']->id;?>"></td>
        </tr>
        <tr>
            <td><input type="text" name="omschrijving" id="omschrijving" value="<?= $data['row']->omschrijving;?>"></td>
        </tr>
        <!-- <tr>
            <td><input type="text" name="continent" id="continent" value="<?= $data['row']->continent;?>"></td>
        </tr>
        <tr>
            <td><input type="number" name="population" id="population" value="<?= $data['row']->population;?>"></td>
        </tr>
        <tr>
           <td><input type="hidden" name="id" value="<?= $data['row']->id;?>"></td>
        </tr> -->
        <tr>
            <td><input type="submit" value="Verzenden"></td>
        </tr>
    </tbody>
</table>


</form>


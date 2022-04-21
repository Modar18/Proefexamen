Welkom, Admin.
<?php echo $data["title"];?>
<?php echo $data["messageSC"];?>




<h1></h1>

<button class="btn btn-primary" type="submit"><a href="<?=URLROOT;?>/items/create">Nieuw Record</a></button>
<h5></h5>

<table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">product (ict-item)</th>
      <th scope="col">status</th>
      <th scope="col">gereserveerd door</th>
      <th scope="col">datum</th>
    </tr>
  <thead>
    <!-- <th>id</th>
    <th>ItemID</th>
    <th>toegewezenaan</th> -->
  
  </thead>
  <tbody>
    <?php
  echo  $data['items'];
    ?>
  </tbody>
</table>


<!-- <script src="<?= URLROOT . './public/js/app.js' ?>"></script> -->

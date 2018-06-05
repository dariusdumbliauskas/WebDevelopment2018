<?php 
require 'db.php';
$message = '';
//if var is set or null 
if (isset ($_POST['date'])  && isset($_POST['number']) && isset($_POST['distance']) && isset($_POST['time']) ) {
  $date = $_POST['date'];
  $number = $_POST['number'];

  $distance = $_POST['distance'];
  $time = $_POST['time'];
  //insertinam i sql
  $sql = 'INSERT INTO radars(date, number, distance, time) VALUES(:date, :number, :distance, :time)';
  $statement = $connection->prepare($sql);
  //jei programa vaziuoja ismetam data inserted
  if ($statement->execute([':date' => $date, ':number' => $number, ':distance' => $distance, ':time' => $time])) {
    $message = 'data inserted successfully';
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Insert car date and number</h2>
    </div>
    <!-- isokantis alertas -->
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="date">Data</label>
          <input type="text" name="date" id="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="number">Number</label>
          <input type="text" name="number" id="number" class="form-control">
        </div>

        <div class="form-group">
          <label for="distance">Distance</label>
          <input type="text" name="distance" id="distance" class="form-control">
        </div>


        <div class="form-group">
          <label for="time">Time</label>
          <input type="text" name="time" id="time" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Insert car details</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
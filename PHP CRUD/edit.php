<?php 
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM radars WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);


if (isset ($_POST['date'])  && isset($_POST['number']) && isset($_POST['distance']) && isset($_POST['time']) ) {
  $date = $_POST['date'];
  $number = $_POST['number'];

  $distance = $_POST['distance'];
  $time = $_POST['time'];

  $sql = 'UPDATE radars SET date=:date, number=:number, distance=:distance, time=:time WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':date' => $date, ':number' => $number, ':distance' => $distance, ':time' => $time ,':id' => $id])) {
   header("location: index.php");
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update car details</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="date">date</label>
          <input value="<?= $person->date; ?>"type="text" name="date" id="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="number">number</label>
          <input value="<?= $person->number; ?>"type="text" name="number" id="number" class="form-control">
        </div>
        <div class="form-group">
          <label for="distance">distance</label>
          <input value="<?= $person->distance; ?>"type="text" name="distance" id="distance" class="form-control">
        </div>
        <div class="form-group">
          <label for="time">time</label>
          <input value="<?= $person->time; ?>"type="text" name="time" id="time" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update car info</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
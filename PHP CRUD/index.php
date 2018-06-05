<?php include('db.php'); 
$sql = 'SELECT * FROM radars';
$statement = $connection->prepare($sql);
$statement->execute();
$info = $statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php include('header.php'); ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
        <h2>All cars</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>number</th>
                    <th>distance</th>
                    <th>time</th>
                    <th>action</th>
                </tr>
                <?php foreach($info as $cars): ?>
                <tr>
                    <td><?= $cars->id;?></td>    
                    <td><?= $cars->date;?></td>    
                    <td><?= $cars->number;?></td>   
                    <td><?= $cars->distance;?></td>    
                    <td><?= $cars->time;?></td>  
                    <td>
                        <a href="edit.php?id=<?=$cars->id?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?=$cars->id?>" class="btn btn-danger">Delete</a>
                    </td>    
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>
<?php 
  include './config/app.php';
  include './connexion.php';
  include './html/header.php';
  include './fct/item.php';
  include './fct/request.php';

?>

  <div class="card col-md-12">
    <div class="card-body">
      <form action="addIthem.php" method="POST">
      <div class="input-group input-group-sm">
        <input type="text" class="form-control" name="intitule">
        <span class="input-group-append">
          <button type="submit" class="btn btn-info btn-flat">+</button>
        </span>
      </div>
      </form>
      <!-- Afficher les liste des taches -->
      <ul class="todo-list ui-sortable" data-widget="todo-list">
        <?php
            //  
            $query = 'SELECT * FROM  todo';
            $stmt = $pdo->query($query);
            while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
              echo displayItem($item);
            }
        ?>
      </ul>
    </div>
    </div>
  </div>

<?php 
  include './html/footer.php';
?>
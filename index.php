<?php 
  include './Confing/app.php';
  include './html/header.php';
  include './fct/item.php';
  include './fct/ruquest.php';


// Verification si le fichier est déjat créé si non il crée un nouveau
  if (!file_exists(List_name)) {
    file_put_contents(List_name, serialize([]));
  }

?>

  <div class="card col-md-12">
    <div class="card-body">
      <form action="addIthem.php" method="POST">
      <div class="input-group input-group-sm">
        <input type="text" class="form-control" name="intitule">
        <span class="input-group-append">
          <button type="submit" class="btn btn-info btn-flat">Ajouter</button>
        </span>
      </div>
      </form>
      <!-- Afficher les liste des taches -->
      <ul class="todo-list ui-sortable" data-widget="todo-list">
        <?php
          $items = getItems();
          foreach($items as $key => $item){
            echo displayItem($key, $item);
          }
        ?>
      </ul>
    </div>
    </div>
  </div>

<?php 
  include './html/footer.php';
?>
<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
      <div class="col-md-4">

        <?php if(isset($_SESSION['message'])) { ?>
          <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php  session_unset(); } ?>


        <style>
        ::placeholder {
          color: #ffffff;
          opacity: 1;
        }
        .bg-dark ::placeholder {
          color: rgba(255, 255, 255, 0.5);
        }
        </style>

        <div class="card card-body bg-dark text-light mb-3 border border-warning">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control bg-dark text-light" placeholder="Nueva tarea" autofocus>
                </div>
                <div class="form-group mt-2">
                 <textarea name="description" id="" rows="2" class="form-control bg-dark text-light" placeholder="Descripción"></textarea>
                </div>  
                <input type="submit" class="btn btn-secondary  w-100 mt-2" name="save_task" value="Guardar">
            </form>
        </div>
      </div> 
      
      <div class="col-md-8 mb-5">
          <table class="table table-dark table-bordered custom-table">
            <thead>
              <tr>
                <th class="bg-success">Titulo</th>
                <th class="bg-success">Descripción</th>
                <th class="bg-success">Creado</th>
                <th class="bg-success">Acciones</th>
              </tr>
              <tbody>               
                <?php
                  $query = "SELECT * FROM task";
                  $result_tasks = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_array($result_tasks)) { ?>

                      <tr>
                        <td class="text-waro"><?php echo $row['title'] ?></td>
                        <td class="text-war"><?php echo $row['description'] ?></td>
                        <td class="text-war"><?php echo $row['created_at'] ?></td>
                        <td class="d-flex flex-column">
                          <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary mb-1">
                          <i class="fas fa-marker text-white"></i>
                        </a>
                          <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                          <i class="far fa-trash-alt"></i>
                        </a>
                        </td>  
                      </tr>
                  <?php } ?>
              </tbody>
            </thead>
          </table>
    </div>
</div>
<?php include("includes/footer.php") ?>




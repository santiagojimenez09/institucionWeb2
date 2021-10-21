<?php 
  if (isset($_POST['document']))
  {
    $document =  $_POST['document'];
  }
  else
  {
    $document = "";
  }
  if (isset($_POST['name']))
  {
    $name =  $_POST['name'];
  }
  else
  {
    $name = "";
  }
  if (isset($_POST['email']))
  {
    $email =  $_POST['email'];
  }
  else
  {
    $email = "";
  }
  if (isset($_POST['password']))
  {
    $password =  $_POST['password'];
  }
  else
  {
    $password = "";
  }
   
?>
<!DOCTYPE html>
<html>
<head>
  <title>Estudiantes</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <h1>Agregar Estudiante</h1>
    <br>
    <span style="color:red;">
        <!--La siguiente línea permite capturar en una variables los posibles errores de la
        de las validaciones que devuelve el controlador-->
        <?php $validation = \Config\Services::validation(); ?>
    </span>
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo site_url('StudentController/create') ?>" method="post" accept-charset="utf-8">
          <div class="form-group">
            <label for="document">Identificacion</label>
            <input type="text" name="document" class="form-control" id="document" placeholder="Ingrese el documento de identidad"
              value="<?= $document ?>">
            <!-- Error -->
            <?php if($validation->getError('document')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('document'); ?>
                  </div>
              <?php }?>
          </div>
        
            <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese nombre"
              value="<?= $name ?>">
            <!-- Error -->
            <?php if($validation->getError('name')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('name'); ?>
                  </div>
              <?php }?>
          </div> 
 
          <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="ingrese el correo electronico"
            value="<?= $email ?>">
            <!-- Error --> 
            <?php if($validation->getError('email')) {?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('email'); ?>
                </div>
            <?php }?>
          </div>   
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese la contraseña"
            value="<?= $password ?>">
            <!-- Error --> 
            <?php if($validation->getError('password')) {?>
                <div class='alert alert-danger mt-2'>
                  <?= $error = $validation->getError('password'); ?>
                </div>
            <?php }?>
          </div>  
           <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Enviar</button>
          </div>
        </form>
      </div>
 
    </div>
  
</div>
</body>
</html>
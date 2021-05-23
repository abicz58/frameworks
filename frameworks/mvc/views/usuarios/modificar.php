<div class="panel panel-primary col-md-8 col-md-offset-2">
  <div class="panel-heading">
    Modificar Usuario
  </div>

  <div class="panel-body">
    <?php
       while($user = $resultUser->fetch_object()): ?>
    <form action="index.php?controller=UsuarioController&action=modificar&id=<?=$user->id?>" method="post"
      class="form-horizontal">
      <label class="control-label" for="txNombre">Nombre</label>
      <input class="form-control" type="text" name="txNombre" id="txNombre" value=<?=$user->nombre?>>
      <label class="control-label" for="txApellido">Apellido</label>
      <input class="form-control" type="text" name="txApellido" id="txApellido" value=<?=$user->apellido?>>
      <label class="control-label" for="txEmail">Email</label>
      <input class="form-control" type="text" name="txEmail" id="txEmail" value=<?=$user->email?>>
      <br>
      <button class="btn btn-warning" type="submit">Modificar</button>
    </form>
    <?php
          endwhile;
    ?>
  </div>
</div>
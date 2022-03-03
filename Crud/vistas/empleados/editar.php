<div class="card">
    <div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
        
        <form action="" method="post">
            <div class="mb-3">
              <label for="id" class="form-label">Id: </label>
              <input readonly type="text" value="<?php echo $empleado->id; ?>" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Id del empleado">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input required type="text" value="<?php echo $empleado->nombre; ?>" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo: </label>
              <input required type="email" value="<?php echo $empleado->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">

            <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>
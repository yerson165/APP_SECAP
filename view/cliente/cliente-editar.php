<h1 class="page-header">
    <?php echo $cliente->id != null ? $cliente->carpeta : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Expediente</a></li>
  <li class="active"><?php echo $cliente->id != null ? $cliente->carpeta : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
      <div class="form-group">
        <label>Numero</label>
        <input type="text" name="numero" value="<?php echo $cliente->numero; ?>" class="form-control" placeholder="Ingrese el numero de carpeta" required>
    </div>
    
    <div class="form-group">
        <label>Carpeta</label>
        <input type="text" name="carpeta" value="<?php echo $cliente->carpeta; ?>" class="form-control" placeholder="Ingrese el nombre de la carpeta" required>
    </div>
    
    <div class="form-group">
        <label>Año</label>
        <input type="text" name="anio" value="<?php echo $cliente->anio; ?>" class="form-control" placeholder="Ingrese el Año de la Carpeta" required>
    </div>
    
    <div class="form-group">

        <label>Estado</label>

        <select name="estado" class="form-control">
            <option value="Completa">Completa</option>
            <option value="Incompleta">Incompleta</option>
        </select>


    </div>
     
        
    
    <hr />
    
    <div class="text-right">
        <button name="guardar"  class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>


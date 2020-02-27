<br>
<br>

        <div class="container-fluid">
            <img src="plugins/datatables/images/logo_secap.jpg"/>
            <h1 class="page-header" align="center" style="color: #4682B4 ">EXPEDIENTES </h1>
        </div>



<a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar nuevo Registro</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #4682B4; color:#fff">Numero</th>
            <th style="width:180px; background-color: #4682B4; color:#fff">Carpeta</th>
            <th style=" background-color: #4682B4; color:#fff">Año</th>
            <th style=" background-color: #4682B4; color:#fff">Estado</th>           
            <th style="width:60px; background-color: #4682B4; color:#fff"></th>
            <th style="width:60px; background-color: #4682B4; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->numero; ?></td>
            <td><?php echo $r->carpeta; ?></td>
            <td><?php echo $r->anio; ?></td>
            <td><?php echo $r->estado; ?></td>
       
            <td>
                <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>

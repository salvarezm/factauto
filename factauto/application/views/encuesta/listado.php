<div class="card">
    <div class="card-header">
    <h3 class="card-title">Respuestas enviadas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered">
        <thead>                  
        <tr>
            <th style="width: 10px">#</th>
            <th>username</th>
            <th>fecha respuesta</th>
            <th>¿Que le gustaria que agregaramos al informe?</th>
            <th>La información es correcta?</th>
            <th>es rápido nuestro sitio ?</th>            
        </tr>
        </thead>
        <tbody>
            <?php for($x=0;$x<count($respuestas);$x++){?>
                <td><?= $x+1; ?></td>
                <td><?= $respuestas[$x]->username; ?></td>
                <td><?= $respuestas[$x]->fecha_respuesta;?></td>
                <td><?= $respuestas[$x]->resp1;?></td>
                <td><?= $respuestas[$x]->resp2;?></td>
                <td><?= $respuestas[$x]->resp3;?></td>
                
            <?php } ?>
        </tbody>
    </table>
    </div>
    
</div>
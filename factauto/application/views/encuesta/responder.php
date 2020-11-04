<div class="card card-primary">

        <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger" role="alert">
            <?= $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>

        <?php if($this->session->flashdata('exito')){ ?>
            <div class="alert alert-success" >
            <?= $this->session->flashdata('exito'); ?>
            </div>
        <?php } ?>


    <div class="card-header">
    <h3 class="card-title">Responder Encuesta</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open('Encuesta/responder'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Pregunta 1: ¿Que le gustaria que agregaramos al informe?</label>
            <textarea class="form-control" rows="5" name="resp1" placeholder="Su respuesta ..."></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pregunta 2: ¿La información es correcta? </label>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp2" value="Si">
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp2" value="No" >
                    <label class="form-check-label">No</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp2" value="Mas o menos">
                    <label class="form-check-label">Mas o menos</label>
                </div>                
            </div>
        </div>
       
        <div class="form-group">
            <label for="exampleInputPassword1">Pregunta 3: ¿De 1 a 5, es rápido nuestro sitio ?</label>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp3" value="1">
                    <label class="form-check-label">1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp3" value="2">
                    <label class="form-check-label">2</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp3" value="3">
                    <label class="form-check-label">3</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp3" value="4">
                    <label class="form-check-label">4</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resp3" value="5">
                    <label class="form-check-label">5</label>
                </div>                
            </div>
        </div>
    </div>
    

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Responder</button>
    </div>
    </form>
</div>
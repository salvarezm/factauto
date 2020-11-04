<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Login</h3>
    </div>
    <?= form_open('login/index'); ?>
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="username" placeholder="Enter email">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger" role="alert">
            <?= $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
    </form>

    
</div>


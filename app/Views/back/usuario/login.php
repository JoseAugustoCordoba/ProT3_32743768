  <!--msj de error-->
    <?php if(session()->getFlashdata('msg')):?>
           <div class="alert alert-warning">
              <?= session()->getFlashdata('msg')?>
           </div>
    <?php endif;?>
 <div class="container my-5">    
      <h2 class="text-center">Iniciar Sesión</h2>


      <!--Inicio del formulario-->
      <form method="post" action="<?php echo base_url('/enviarlogin') ?>" class="row g-3">
        <div class="col-md-6 offset-md-3">
          <label for="emailLogin" class="form-label">Correo electrónico</label>
          <input name="email" type="email" class="form-control" id="emailLogin" />
        </div>
        <div class="col-md-6 offset-md-3">
          <label for="contrasenaLogin" class="form-label">Contraseña</label>
          <input name="pass" type="password" class="form-control" id="contrasenaLogin" />
        </div>
        <div class="col-md-6 offset-md-3 text-center">
          <button type="submit" class="btn btn-success">Entrar</button>
          <p>
  ¿Aún no estás registrado? <a href="<?php echo base_url('registrarse')?>">REGÍSTRATE AQUÍ</a>
</p>
        </div>
      </form>
    </div>
    <div style="height: 200px"></div>
    
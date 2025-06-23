<div class="container my-5">
    <h2 class="text-center">Crear una Cuenta</h2>
    <?php $validation = \config\services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>" class="row g-3">
      <?=csrf_field();?>
        <?=csrf_field();?>
        <?php if(!empty(session()->getFlashdata('fail'))):?>
        <div class="alert alert-danger"><?=session()->getFlashdata('fail');?> </div>
      <?php endif?>
      <?php if(!empty(session()->getFlashdata('success'))):?>
        <div class="alert alert-danger"><?=session()->getFlashdata('success');?> </div>
      <?php endif?>
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre">
        <!--error-->
        <?php if($validation->getError('nombre')) {?>
          <div class="alert alert-danger mt-2">
            <?=$error= $validation->getError('nombre');?>
             </div>
           <?php }?>
      </div>
      <div class="col-md-6">
        <label for="apellido" class="form-label">Apellido</label>
        <input name="apellido" type="text" class="form-control" id="apellido">
         <!--error-->
        <?php if($validation->getError('apellido')) {?>
          <div class="alert alert-danger mt-2">
            <?=$error= $validation->getError('apellido');?>
             </div>
           <?php }?>
      </div>

      <div class="col-12">
        <label for="email" class="form-label">Correo electrónico</label>
        <input name="email" type="email" class="form-control" id="email">
         <!--error-->
        <?php if($validation->getError('email')) {?>
          <div class="alert alert-danger mt-2">
            <?=$error= $validation->getError('email');?>
             </div>
           <?php }?>
      </div>
    
      <div class="col-12">
        <label for="usuario" class="form-label">usuario</label>
        <input name="usuario" type="usuario" class="form-control" id="usuario">
         <!--error-->
        <?php if($validation->getError('usuario')) {?>
          <div class="alert alert-danger mt-2">
            <?=$error= $validation->getError('usuario');?>
             </div>
           <?php }?>
      </div>
    
      <div class="col-12">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input name="pass" type="password" class="form-control" id="contrasena">
         <!--error-->
        <?php if($validation->getError('pass')) {?>
          <div class="alert alert-danger mt-2">
            <?=$error= $validation->getError('pass');?>
             </div>
           <?php }?>
      </div>
      
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrarse</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </div>
    </form>
  </div>
    <div style="height: 50px;"></div>
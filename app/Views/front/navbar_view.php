  <!--Barra de navegacion-->
<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('principal')?>">
          <img
            src="<?php echo base_url('assets/img/logo1.png') ?>"
            alt="Logo"
            width="60"
            height="48"
            class="d-inline-block align-text-top"
          />
          Alquila Tu Auto
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(session()->perfil_id ==1): ?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
          </div>

      <!-- Barra para Admin logueados-->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
    
            <li class="nav-item">
              <a class="nav-link" href="registrarse">Registrarse</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout');?>"tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Buscar autos..."
              aria-label="Buscar"
            />
            <button class="btn btn-outline-success" type="submit">
              Buscar
            </button>
          </form>
      

  
   

        <?php elseif (session()->perfil_id ==2): ?>
        <div class="btn btn-info active btnUser btn-sm">
          <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
        </div> {
         <!-- Barra para usuarios no logueados-->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="principal">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acerca_de">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout');?>"tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Buscar autos..."
              aria-label="Buscar"
            />
            <button class="btn btn-outline-success" type="submit">
              Buscar
            </button>
          </form>



    
     
        }
      <?php else:?>
          <!-- Barra para usuarios no logueados-->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="principal">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acerca_de">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarse">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Buscar autos..."
              aria-label="Buscar"
            />
            <button class="btn btn-outline-success" type="submit">
              Buscar
            </button>
          </form>
        <?php endif;?>
        </div>
    </div>    
</nav>
    
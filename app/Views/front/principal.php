    <!-- Carrusel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="assets/img/auto-premiun.webp"
            class="d-block w-50"
            alt="Auto de lujo"
          />
         Autos de Lujo
        </div>
        <div class="carousel-item">
          <img
            src="assets/img/auto-economico.webp"
            class="d-block w-50"
            alt="Auto económico"
          />
         Autos Economicos
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- Destacados -->
    <section class="container my-5">
      <h2 class="text-center mb-4">Autos Destacados</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/corolla.webp" class="card-img-top" alt="Auto 1" />
            <div class="card-body">
              <h5 class="card-title">Toyota Corolla</h5>
              <p class="card-text">
                Confort y economía para viajes urbanos y largos.
              </p>
              <a href="#" class="btn btn-primary">Reservar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/ecosport.webp" class="card-img-top" alt="Auto 2" />
            <div class="card-body">
              <h5 class="card-title">Ford EcoSport</h5>
              <p class="card-text">
                Versátil, ideal para la ciudad y caminos rurales.
              </p>
              <a href="#" class="btn btn-primary">Reservar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img
              src="assets/img/chevrolet-cruze.jpg"
              class="card-img-top"
              alt="Auto 3"
            />
            <div class="card-body">
              <h5 class="card-title">Chevrolet Cruze</h5>
              <p class="card-text">
                Elegante y potente para un manejo superior.
              </p>
              <a href="#" class="btn btn-primary">Reservar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
   
@extends('cabecera')
@section('contenido_especifico')
<!DOCTYPE html>
<html>
<body class="header3">

    <div class="container">
      <!--Section: Content-->
      <section class="text-center"><br> <br> <br> <br> <br> <br>
        <h4 class="mb-5"><strong>ALGUNAS DE NUESTRAS BEBIDAS</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/mojito.jpg" class="img-fluid" />
                <a href="/1">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Mojito</h5>
                <p class="card-text">
                 Este trago es una de las bebidas preparadas con ron de origen cubano. <br> Para prepararse, exprime suavemente jugo de limón, azúcar y hojas de menta.
                </p>
                <a href="/1" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/Cosmopolitan.jpg" class="img-fluid" />
                <a href="/2">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Cosmopolitan</h5>
                <p class="card-text">
                 Los «cosmopolitan» son una bebida preparada con vodka, además contiene Triple Sec (un licor con sabor a naranja), jugo de arándano y jugo de limón.
                </p>
                <a href="/2" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/Margarita.jpg" class="img-fluid" />
                <a href="/3">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Margatita</h5>
                <p class="card-text">
                  Existen muchas variaciones, pero es una de las bebidas preparadas con tequila que prefieren los clientes.  Además, contiene Triple Sec y jugo de lima o limón.
                </p>
                <a href="/3" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/Martini.png" class="img-fluid" />
                <a href="/4">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Martini</h5>
                <p class="card-text">
                  Un martini original es una bebida preparada con ginebra y vermut seco. Los puristas creen que el vidrio sólo debe enjuagarse con vermut antes de verter la ginebra helada.
                </p>
                <a href="/4" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/Mai Tai.jpg" class="img-fluid" />
                <a href="/5">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Mai Tai</h5>
                <p class="card-text">
                  Es una de las bebidas preparadas con ron blanco. Además lleva ron oscuro, naranja «curaçao», jugo de piña, jarabe de azúcar y jugo de limón.
                </p>
                <a href="/5" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="img/Daiquiri.jpg" class="img-fluid" />
                <a href="/6">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Dairiquiri</h5>
                <p class="card-text">
                  Son una bebida preparada con ron. Los daiquiris de fresa, plátano y melón son muy populares, así como los daiquiris congelados donde se llena el vaso con hielo picado.
                </p>
                <a href="/6" class="btn btn-warning">Mas</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="/blog">1 <span class="sr-only">(current)</span></a>
          </li>        
        </ul>
      </nav>
    </div>


</body>
</html>
@endsection 
@section('pie')
     <div>
      <footer class="bg-light text-center">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">LBartender.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
@endsection 
 
@extends('app')

@section('content')
    <!-- Main -->
    <main id="main">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/img2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h1>TecnoEduca</h1>
                            <p class="d-none d-md-block">
                                Por fin disponible en línea, un evento que vale la pena compartir, la primera experiencia online con profesionales que llevan el aprendizaje a otro nivel.
                            </p>
                            <a href="{{route('registro')}}" class="btn btn-outline-light">Quiero ser alumno</a>
                            <button class="btn btn-tecnoeduca">Más información</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </main>
    <!-- End main -->
    <!-- Cursos -->
    <section class="mt-4" id="cursos">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>conoce nuestros</small> <h2>cursos</h2>
                </div>
            </div>
            <div class="row">
            <div class = "col-4">
                <div class="card">
                    <img src="images/html.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text">
                            HTML es un leguaje de narcado que se utiliza para el desarrollo de páginas de internet.
                        </p>
                        <a href="#" class="btn btn-tecnoeduca " data-toggle="modal" data-target="#modal-html">Ver curso</a>
                    </div>
                </div>
            </div>
                <div class = "col-4">
                    <div class="card">
                        <img src="images/css.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CSS</h5>
                            <p class="card-text">
                                Hojas de estilo en cascada, es el lenguaje de estilos utilizados la presentaicón de documentos html.
                                </p>
                            <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                    </div>
                </div>
                <div class = "col-4">
                    <div class="card">
                        <img src="images/javascript.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">
                                Es un lenguaje de programación ligero, interpretado o compilado con funciones de primera clase.
                            </p>
                            <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End cursos -->
    <!-- Online class -->
    <section id="class-online">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl-0 pr-0">
                    <img src="images/joven.jpg" alt="">
                </div>
                <div class="col-lg-6" pt-4 pb-4><br>
                    <h2>Clase de prueba online Agosto 2021</h2> <br>
                    <p>
                        Registrate a la clase online llenando el formulario de contacto, así tendremos más informacion para contactarte y puedas concretar una clase gratuita de 30 minutos con el profesor que mejor se adapte a tus necesidades.
                    </p>
                    <a href="#" class="btn btn-outline-light">Registrarme</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End online class -->
    <!-- Be professor -->
    <section class="pt-4 pb-4" id="se-maestro">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <small class="text-uppercase">Conviertete en un</small>
              <h2>MAESTRO</h2>
            </div>
            
          </div>
          <div class="row">
            <div class="col text-center">
              Participa en el proceso de seleccion y forma parte del equipo <abbr title="Es el nombre de tu nueva familia">TecnoEduca.</abbr>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">
              <form>
                <div class="row">
                    <div class="col-12 col-md-6">
                      <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-12 col-md-6">
                      <input type="text" class="form-control" placeholder="Apellidos">
                    </div><br>
                    <div class="col">
                      <textarea name="descripcion" class="form-control"></textarea>
                      <small>Incluye un titulo en tu descripcion</small>
                    </div>
                  </div>
                <div class="">
                  <div class="col form-group">
                    <button type="button" class="btn btn-tecnoeduca w-100">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    <!-- End be -->
@endsection

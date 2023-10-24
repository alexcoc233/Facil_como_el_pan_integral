
<?php include("../template/menu.php");

?>

<style>
 a{
  text-decoration: none;
 }
 img{
  border-radius: 100px;
 }
</style>

    
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Integrales</h1>
      <p class="fs-5 text-body-secondary">Este es un sitio donde agrupamos todos los metodos vistos en este parcial con sus respectivas formulas. ademas de algunos ejemplos por cada metodo y ejercisios de practica.</p>
      <img src="../imagenes/logo.png" alt="">
      
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Principiante</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Integracion<small class="text-body-secondary fw-light"> por partes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Reescribir la Integral</li>
              <li>una integral mas sencilla</li>
              <li>Usas "ILATE"</li>
              <li>Ejemplos y Ejercisios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary" ><a href="ejemplos.php" >Saber mas</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Intermedio</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Sustitucion <small class="text-body-secondary fw-light">Trigonometrica</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>3 Fomulas</li>
              <li>Uso de raizes</li>
              <li>Radicales</li>
              <li>Ejemplos y Ejersicios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary"><a href="ejemplos.php">Ir</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Avanzado</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Todos los<small class="text-body-secondary fw-light"> metodos</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>abarca todos los campos</li>
              <li>Desarrollo de ina integral</li>
              <li>Temas de Algebra</li>
              <li>Ejemplos y Ejesicios</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary"> <a href="ejemplos.php" >Ir</a></button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Metodos y Contenido</h2>

    <div class="table-responsive">

    </div>
  </main>

<?php include("../template/footer.php");

?>
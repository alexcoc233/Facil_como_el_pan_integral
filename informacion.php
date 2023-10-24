<?php include("../template/menu.php");

?>
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">First</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Second</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1">Equipo</h4>
  <p>Jose Luis Arellano Lopez <br> Alejandro Hernandez Hernandez <br> 5to A. Programacion. T.M.</p>
  <h4 id="scrollspyHeading2">Contacto</h4>
  <p>Tel. Jose Luias A.L.: 322 305 3100 <br> Tel. Alejandro Hernandez: 322 3201 8899</p>
  <h4 id="scrollspyHeading3">¿Quienes somos?</h4>
  <p>Somos un equipo de 2 personas, que estamos creando esta agina como un proyecto escolar de la materia de "Calculo Integral" les proporcionamos formulas y metodos para las integrales indefinidas.</p>
  <h4 id="scrollspyHeading4">Datos Sobre la materia</h4>
  <p>Maestro: Jose Lirroy Perez Isordia <br> 2do parcial y 3ero.</p>
  <h4 id="scrollspyHeading5">Otros datos</h4>
  <p>Escuela: Centro De Bachiberato Indutrial y De Servicios #68. </p>
</div>

<?php include("../template/footer.php");

?>
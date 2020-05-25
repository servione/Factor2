<!-- menu sticky  -->
<div id="app">


  <nav class="navbar navbar-expand-lg navbar-dark z-depth-2">
    <a class="navbar-brand" href="#">FS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- main menu -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a  class="nav-link" @click="utilidades">UTILIDADES</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="rrhh" >RR-HH</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="juridico">JURIDICO</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="clientes">CLIENTES</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="terceros">TERCEROS</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="solicitud">SOLICITUD</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="operaciones">OPERACIONES</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="contabilidad">CONTABILIDAD</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="tesoreria">TESORERIA</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="uaf">UAF</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" @click="admin">ADMIN</a>
        </li>
      </ul>
      <!-- end main menu -->
      <!-- salir -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">SALIR</a>
        </li>
      </ul>
      <!-- end salir -->
    </div>
  </nav>
</div>
<!-- end menu -->

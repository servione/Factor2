@extends('layouts.app')

@section('content')

<!-- menu sticky  -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">FACTORSYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- main menu -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a  class="nav-link" href="#">UTILIDADES</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">RR-HH</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">JURIDICO</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">CLIENTES</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">TERCEROS</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">SOLICITUD</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">OPERACIONES</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">CONTABILIDAD</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">TESORERIA</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">UAF</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="#">ADMIN</a>
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
<!-- end menu -->

<div class="container-fluid">
  <div class="row">
    <!-- menu lateral -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end menu lateral -->

    <!-- menu principal -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- cabcera principal -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Tareas</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Notificaciones</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            semanal
          </button>
        </div>
      </div>
      <!-- end cabcera -->
    </main>
    <!-- end menu principal -->

  </div>
</div>
@endsection

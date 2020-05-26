<!-- aqui se establecen los titulos de cada componente seleccionado -->

<!-- cabcera principal -->
<div id="app">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">@{{ TituloMenu }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{ route('home') }}" class="btn btn-sm btn-warning"><i class="fas fa-home"></i> Inicio</a>
      </div>
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-warning">Tareas</button>
      </div>
      <button type="button" class="btn btn-sm btn-warning dropdown-toggle">
        <span data-feather="calendar"></span>
        semanal
      </button>
    </div>
  </div>
</div>

<!-- end cabcera -->

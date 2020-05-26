@extends('home')

@section('mainContent')



  @section('navbar')
    <!-- manteien el menu seleccionado al redrescar la pagina no se me ocurrio otra forma de hacerlo
    cambiarlo si en el futuro se me ocurre otra idea-->
    @{{utilidades()}}

  @endsection


  <h3>Listado incidentes</h3>
  <br>
  <!-- boton de insercion  -->
  <div class="d-flex justify-content-start">
    <a href="#" class="btn btn-default btn-large btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm" title="Agregar">
      <i class="fas fa-plus"></i>
    </a>
    <a href="#"  class="btn btn-success btn-large btn-rounded mb-4"><i class="fas fa-chart-bar"></i></a>
  </div>

  <!-- contenido de la pagina -->
  <table id="TableDef" class="table table-hover text-center">
    <thead class="black white-text ">
      <tr>
        <th scope="col">Fecha</th>
        <th scope="col">Sucursal</th>
        <th scope="col">Evento</th>
        <th scope="col">Observacion</th>
        <th scope="col">Responsable</th>
        <th scope="col">Prioridad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>$9999</td>
        <td>
          <button type="button" name="button" class="btn btn-sm btn-info" title="Imprimir"><i class="fas fa-print"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-pen"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-danger" title="Cancelar"><i class="fas fa-ban"></i></button>
        </td>
      </tr>

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>$9999</td>
        <td>
          <button type="button" name="button" class="btn btn-sm btn-info" title="Imprimir"><i class="fas fa-print"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-pen"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-danger" title="Cancelar"><i class="fas fa-ban"></i></button>
        </td>
      </tr>

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>$9999</td>
        <td>
          <button type="button" name="button" class="btn btn-sm btn-info" title="Imprimir"><i class="fas fa-print"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-pen"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-danger" title="Cancelar"><i class="fas fa-ban"></i></button>
        </td>
      </tr>

      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>$9999</td>
        <td>
          <button type="button" name="button" class="btn btn-sm btn-info" title="Imprimir"><i class="fas fa-print"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-pen"></i></button>
          <button type="button" name="button" class="btn btn-sm btn-danger" title="Cancelar"><i class="fas fa-ban"></i></button>
        </td>
      </tr>
    </tbody>
  </table>


  <!-- modal de registro -->
  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h6 class="modal-title w-100 font-weight-bold">Nuevo Recibo valores</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">

          <div class="row">
            <div class="col-md-6">

              <div class="md-form">
                <input type="date" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Fecha</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Rut Cliente</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Recibo de</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Concepto de</label>
              </div>

            </div>
            <div class="col-md-6">

              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Numero Operacion</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Monto</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Forma de pago</label>
              </div>
              <div class="md-form">
                <input type="text" id="form34" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Sucursal</label>
              </div>

            </div>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
        </div>

      </div>
    </div>
  </div>


<!-- end contenido -->
@endsection

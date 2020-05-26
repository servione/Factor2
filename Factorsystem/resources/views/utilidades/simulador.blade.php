@extends('home')

@section('mainContent')
<!-- boton de insercion  -->
<div class="container">
  <!-- Material form register -->

  @section('navbar')
  <!-- manteien el menu seleccionado al redrescar la pagina no se me ocurrio otra forma de hacerlo
  cambiarlo si en el futuro se me ocurre otra idea-->
  @{{utilidades()}}
  @endsection

  <div class="row">
    <!-- form -->
    <div class="col-md-7">
      <h3>simulador de credito</h3>
      <br>
      <!-- Form -->
      <form>
        <div class="mt-2 mb-2 py-2">

          <div class="form-row">
            <div class="col">
              <!-- Fecha -->
              <div class="md-form">
                <input type="date" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Fecha</label>
              </div>
            </div>
            <div class="col">
              <!-- Financiamiento -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Financiamiento</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <!-- Tipo operacion -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Tipo Operacion</label>
              </div>
            </div>
            <div class="col">
              <!-- tipo documento -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Tipo Documento</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <!-- Tipo operacion -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Monto</label>
              </div>
            </div>
            <div class="col">
              <!-- tipo documento -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Tasa</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <!-- Gastos operacion -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Gastos operacionales</label>
              </div>
            </div>
            <div class="col">
              <!-- tipo capital -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Tipo campital</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <!-- cuota -->
              <div class="md-form">
                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Cuotras</label>
              </div>
            </div>
            <div class="col">
              <!-- Fecha vencimineto -->
              <div class="md-form">
                <input type="date" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">Fecha de vencmineto</label>
              </div>
            </div>
          </div>
          <!-- btn -->
          <br>
          <button class="btn btn-info" type="submit">Calculadora</button>
        </div>
      </form>
      <!-- Form -->
    </div>
  </div>
  <!-- espacio en blanco quiza ponga una imagen quiza no  -->
  <div class="col-md-5">

  </div>
</div>
</div>
<!-- Material form register -->


<!-- end contenido -->
@endsection

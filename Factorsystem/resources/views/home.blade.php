@extends('layouts.app')

@section('content')

<!-- navbar -->
<x-navbar></x-navbar>

<!-- end navbar -->

<div class="container-fluid">
  <div class="row">
    <!-- componente sidebar -->
    <!-- invocar el menu segun la seleccion del navbar termminar de hacer xD -->
    <x-utilidades></x-utilidades>


    <!-- end componente sidebar -->

    <!-- menu principal -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

      <!-- titulo de la pestaña seleccionada -->
      <x-cabecera></x-cabecera>
      <!-- end titulo -->

      <!-- tabs segun menu seleccionado -->

      <!-- end tabs -->

    </main>
    <!-- end menu principal -->

  </div>
</div>
@endsection

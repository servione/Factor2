@extends('layouts.app')

@section('content')

<!-- navbar -->
<x-navbar></x-navbar>

<!-- end navbar -->
  <div class="container-fluid">
    <div class="row">

    <!-- menu utilidades -->
    <div v-if="flagutilidades == true" style="display: block">
      <!-- componente sidebar -->
      <x-utilidades></x-utilidades>
    </div>
    <!-- uaf -->
    <div v-else-if="flagUAf == true">
      <x-uaf></x-uaf>
    </div>
    <!-- menu recursos humanos -->
    <div v-else-if="flagRRHH == true">
      <x-rrhh></x-rrhh>
    </div>
    <!-- menu admin -->
    <div v-else-if="flagAdmin == true">
      <x-admin></x-admin>
    </div>
    <!-- menu clientes -->
    <div  v-else-if="flagClientes == true">
      <x-clientes></x-clientes>
    </div>
    <!-- menu juridico -->
    <div v-else-if="flagJuridico == true">
      <x-juridico></x-juridico>
    </div>
    <!-- menu terceros -->
    <div v-else-if="flagTerceros == true">
      <x-terceros></x-terceros>
    </div>
    <!-- menu solicitud -->
    <div v-else-if="flagSolicitud == true">
      <x-solicitud></x-solicitud>
    </div>
    <!-- menu tesoreria -->
    <div v-else-if="flagTesoreria == true">
      <x-tesoreria></x-tesoreria>
    </div>
    <!-- menu utilidades -->
    <div v-else-if="flagutilidades == true">
      <x-utilidades></x-utilidades>
    </div>
    <!-- menu operaciones -->
    <div v-else-if="flagOperaciones == true">
      <x-operaciones></x-operaciones>
    </div>
    <!-- despliega el menu por defecto -->
    <div v-else>
      <x-default></x-default>
    </div>


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

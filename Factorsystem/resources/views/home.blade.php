@extends('layouts.app')

@section('content')

<!-- navbar -->
<x-navbar></x-navbar>
<!-- end navbar -->
<div class="container-fluid">

  <div class="row"><!--sidebar-->

    <!-- menu utilidades -->

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">

        <!-- INVOCACION DE BARRAS DE NAVEGACION -->
        <div v-if="flagutilidades == true">
          <x-utilidades></x-utilidades>
        </div>
        <!-- uaf -->
        <div v-if="flagUAf == true">
          <x-uaf></x-uaf>
        </div>
        <!-- menu recursos humanos -->
        <div v-if="flagRRHH == true">
          <x-rrhh></x-rrhh>
        </div>
        <!-- menu admin -->
        <div v-if="flagAdmin == true">
          <x-admin></x-admin>
        </div>
        <!-- menu clientes -->
        <div  v-if="flagClientes == true">
          <x-clientes></x-clientes>
        </div>
        <!-- menu juridico -->
        <div v-if="flagJuridico == true">
          <x-juridico></x-juridico>
        </div>
        <!-- menu terceros -->
        <div v-if="flagTerceros == true">
          <x-terceros></x-terceros>
        </div>
        <!-- menu solicitud -->
        <div v-if="flagSolicitud == true">
          <x-solicitud></x-solicitud>
        </div>
        <!-- menu tesoreria -->
        <div v-if="flagTesoreria == true">
          <x-tesoreria></x-tesoreria>
        </div>
        <!-- menu utilidades -->
        <div v-if="flagutilidades == true">
          <x-utilidades></x-utilidades>
        </div>
        <!-- menu operaciones -->
        <div v-if="flagOperaciones == true">
          <x-operaciones></x-operaciones>
        </div>
        <!-- despliega el menu por defecto -->
        <div v-if="flagDefault == true">
          <x-default></x-default>
        </div>
        <!-- contabilidad -->
        <div v-if="flagContabilidad == true">
          <x-contabilidad></x-contabilidad>
        </div>
        <!-- INVOCACION DE BARRAS DE NAVEGACION -->


      </div>
    </nav>
    <!-- end componente sidebar -->

    <!-- menu principal -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- titulo de la pestaña seleccionada -->
      <x-cabecera></x-cabecera>
      <!-- end titulo -->
      <div id="app">
        @yield('navbar')
      </div>
      @yield('mainContent')



    </main>
    <!-- end menu principal -->


  </div>
</div>
@endsection

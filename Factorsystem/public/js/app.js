
const app = new Vue({
  el: '#app',
  data: {

    flagDefault: true,
    flagutilidades: false,
    flagRRHH: false,
    flagJuridico: false,
    flagClientes: false,
    flagTerceros: false,
    flagSolicitud: false,
    flagOperaciones: false,
    flagContabilidad: false,
    flagTesoreria: false,
    flagUAf: false,
    flagAdmin: false,

    // tabs funciones -- segun el menu seleccionado y la opcion de sespliega el tab
    tabsUtilidades: false,
    // otorga el titulo al dash principal segun la seleccion del navbar
    TituloMenu: 'Dashboard',

  },

  mounted: function(){
    this.dataTables();
  },




  methods: {

    // despliega el menu de utilidades
    utilidades: function() {
      // tabs
      this.tabsUtilidades = true;
      // menus
      this.flagDefault = false;
      this.flagRRHH = false;
      this.flagutilidades = true;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
      this.TituloMenu = "Utilidades";
      console.log(this.flagutilidades);
    },

    // despliega el menu de recursos humanos
    rrhh: function(){

      this.TituloMenu = 'Recursos Humano';

      this.flagDefault = false;
      this.flagRRHH = true;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    // despliega el menu de juridico
    juridico: function(){

      this.TituloMenu = 'Juridico';

      this.flagDefault = false;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = true;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    // despliega el menu de clientes
    clientes: function(){
      this.TituloMenu = 'Clientes';

      this.flagDefault = false;
      this.flagClientes = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    // despliega
    terceros: function(){
      this.TituloMenu = 'Terceros';

      this.flagDefault = false;
      this.flagTerceros = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    solicitud: function(){
      this.TituloMenu = 'Solicitudes';

      this.flagDefault = false;
      this.flagSolicitud = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    operaciones: function(){
      this.TituloMenu = 'Operaciones';

      this.flagDefault = false;
      this.flagOperaciones = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    contabilidad: function(){
      this.TituloMenu = 'Terceros';

      this.flagDefault = false;
      this.flagContabilidad = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    tesoreria: function(){
      this.TituloMenu = 'Tesoreria';

      this.flagDefault = false;
      this.flagTesoreria= true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagUAf = false;
      this.flagAdmin = false;
    },

    uaf: function(){
      this.TituloMenu = 'UAF';

      this.flagDefault = false;
      this.flagUAf = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagAdmin = false;
    },

    admin: function(){
      this.TituloMenu = 'Administradr';

      this.flagDefault = false;
      this.flagAdmin = true;
      this.flagRRHH = false;
      this.flagutilidades = false;
      this.flagJuridico = false;
      this.flagClientes = false;
      this.flagTerceros = false;
      this.flagSolicitud = false;
      this.flagOperaciones = false;
      this.flagContabilidad = false;
      this.flagTesoreria = false;
      this.flagUAf = false;
    },
    //************************************************************************
    // extensiones y funciones complementarias
    //************************************************************************


    // datatables
    dataTables: function(){
      $(document).ready(function() {
        $('#TableDef').DataTable();
      } );

      var objetoDataTables_personal = $('#TableDef').DataTable({
        "language": {
          "emptyTable":			"No hay datos disponibles en la tabla.",
          "info":		   			"Del _START_ al _END_ de _TOTAL_ ",
          "infoEmpty":			"Mostrando 0 registros de un total de 0.",
          "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
          "infoPostFix":			"(actualizados)",
          "lengthMenu":			"Mostrar _MENU_ registros",
          "loadingRecords":		"Cargando...",
          "processing":			"Procesando...",
          "search":				"Buscar:",
          "searchPlaceholder":	"Dato para buscar",
          "zeroRecords":			"No se han encontrado coincidencias.",
          "paginate": {
            "first":			"Primera",
            "last":				"Última",
            "next":				"Siguiente",
            "previous":			"Anterior"
          },
          "aria": {
            "sortAscending":	"Ordenación ascendente",
            "sortDescending":	"Ordenación descendente"
          }
        },
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
        "iDisplayLength":			5,
        "responsive":				false,
        "bServerSide":				true,
        "sAjaxSource":				"datos_externos_11.php",
        "columns" : [
          {"data": 0},
          {"data": 1},
          {"data": 2},
          {"data": 3},
          {"data": 4},
          {"data": 5}
        ],
      });
    }

  }
});

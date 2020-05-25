
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

    // otorga el titulo al dash principal segun la seleccion del navbar
    TituloMenu: 'Dashboard',

  },


  methods: {


    // despliega el menu de utilidades
    utilidades: function() {
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

  }
});

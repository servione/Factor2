
const app = new Vue({
  el: '#app',
  data: {

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
      this.flagutilidades = true;
      this.TituloMenu = "Utilidades";
      console.log(this.flagutilidades);
    },

    // despliega el menu de recursos humanos
    rrhh: function(){
      this.TituloMenu = 'Recursos Humano';
      this.flagRRHH = true;
    },

    // despliega el menu de juridico
    juridico: function(){
      this.TituloMenu = 'Juridico';
      this.flagJuridico = true;
    },

    // despliega el menu de clientes
    clientes: function(){
      this.TituloMenu = 'Clientes';
      this.flagClientes = true;
    },

    // despliega
    terceros: function(){
      this.TituloMenu = 'Terceros';
      this.flagTerceros = true;
    },

    solicitud: function(){
      this.TituloMenu = 'Solicitudes';
      this.flagSolicitud = true;
    },

    operaciones: function(){
      this.TituloMenu = 'Operaciones';
      this.flagOperaciones = true;
    },

    contabilidad: function(){
      this.TituloMenu = 'Terceros';
      this.flagContabilidad = true;
    },

    tesoreria: function(){
      this.TituloMenu = 'Tesoreria';
      this.flagTesoreria= true;
    },

    uaf: function(){
      this.TituloMenu = 'UAF';
      this.flagUAf = true;
    },

    admin: function(){
      this.TituloMenu = 'Administradr';
      this.flagAdmin = true;

    }

  }
});

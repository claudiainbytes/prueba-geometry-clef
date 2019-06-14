<template>
  <form class="my-5" id="registration-form" method="POST" @submit.prevent="validateBeforeSubmit">
    <input type="hidden" name="_method" value="POST"> 
    <input type="hidden" name="_token" :value="csrfToken"> 
    <div class="form-row justify-content-end">
        <div class="form-group col-sm-4">
            <input
                v-model="nombres"
                name="nombres"
                class="form-control"
                id="nombres"
                placeholder="Nombres."
                v-validate="'required'"
                :class="{'has-errors': errors.has('nombres')}"
            >
            <FormError :attribute_name="'nombres'" :errors_form="errors"> </FormError>
        </div>
        <div class="form-group col-sm-4">
            <input
                v-model="apellidos"
                name="apellidos"
                class="form-control"
                id="apellidos"
                placeholder="Apellidos."
                v-validate="'required'"
                :class="{'has-errors': errors.has('apellidos')}"
            >
            <FormError :attribute_name="'apellidos'" :errors_form="errors"> </FormError>
        </div>
    </div>
    <div class="form-row justify-content-end">
        <div class="form-group col-sm-4">
             <input
                v-model="empresa"
                name="empresa"
                class="form-control"
                id="empresa"
                placeholder="Empresa."
                v-validate="'required'"
                :class="{'has-errors': errors.has('empresa')}"
            >
            <FormError :attribute_name="'empresa'" :errors_form="errors"> </FormError>
        </div>
        <div class="form-group col-sm-4">
            <input
                v-model="email"
                name="email"
                class="form-control"
                id="email"
                placeholder="Email."
                v-validate="'required|email'"
                :class="{'has-errors': errors.has('email')}"
            >
            <FormError :attribute_name="'email'" :errors_form="errors"> </FormError>
        </div>
    </div>
    <div class="form-row justify-content-end">
        <div class="form-group col-sm-4">
             <input
                v-model="cargo"
                name="cargo"
                class="form-control"
                id="cargo"
                placeholder="Cargo."
                v-validate="'required'"
                :class="{'has-errors': errors.has('cargo')}"
            >
            <FormError :attribute_name="'cargo'" :errors_form="errors"> </FormError>
        </div>
        <div class="form-group col-sm-4">
            <input
                v-model="direccion"
                name="direccion"
                class="form-control"
                id="direccion"
                placeholder="Dirección."
                v-validate="'required'"
                :class="{'has-errors': errors.has('direccion')}"
            >
            <FormError :attribute_name="'direccion'" :errors_form="errors"> </FormError>
        </div>
    </div>
    <div class="form-row justify-content-end">
        <div class="form-group col-sm-4">
            <input
                v-model="ciudad"
                name="ciudad"
                class="form-control"
                id="ciudad"
                placeholder="Ciudad."
                v-validate="'required'"
                :class="{'has-errors': errors.has('ciudad')}"
            >
            <FormError :attribute_name="'ciudad'" :errors_form="errors"> </FormError>
        </div>
        <div class="form-group col-sm-4">
            <input
                v-model="telefono"
                name="telefono"
                class="form-control"
                id="telefono"
                placeholder="Teléfono."
                v-validate="'required|numeric'"
                :class="{'has-errors': errors.has('telefono')}"
            >
            <FormError :attribute_name="'telefono'" :errors_form="errors"> </FormError>
        </div>
    </div>
    <div class="form-row justify-content-end">
        <div class="form-group col-sm-4">
            <button type="button" name="login" class="btn btn-general w-100" data-toggle="modal" data-target="#login">Ingresa</button>
        </div>
        <div class="form-group col-sm-4">
            <button type="submit" name="register" class="btn btn-general w-100">Regístrate</button>
        </div>
    </div>
    <div class="form-row justify-content-end">
        <div class="col-sm-4 my-3">
            <a href="/" class="btn btn-general w-100">Regresar al menú</a>
        </div>    
    </div>
    <login-modal></login-modal>  
    <message-modal :mensaje="mensaje"></message-modal>            
  </form>
</template>

<script>
    import FormError from './FormError.vue';
    import LoginModal from './LoginModal.vue';
    import MessageModal from './MessageModal.vue';
    export default {
        name: "form-component",
        components: {
            FormError,
            LoginModal,
            MessageModal
        },
        data () {
            this.mensaje = ''
            return {
                csrfToken: window.Laravel.csrfToken,
                mensaje: this.mensaje,
                nombres: '',
                apellidos: '',
                empresa: '',
                email: '',
                direccion: '',
                cargo: '',
                ciudad: '',
                telefono: ''
            }
        },
        methods: {
            validateBeforeSubmit: function() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.storeUsuario();
                        $('#message').modal('show');
                        return;
                    }
                    //errores
                });
            },
            storeUsuario: function(){
                var self = this;
                axios.post('/usuarios/guardar',
                            {nombres: this.nombres, 
                             apellidos: this.apellidos,
                             email: this.email,
                             cargo: this.cargo,
                             empresa: this.empresa,
                             direccion: this.direccion,
                             ciudad: this.ciudad,
                             telefono: this.telefono }
                          ).then(response => {
                   if(response.data.success == "OK"){
                        self.mensaje = "El usuario ha sido registrado.";
                        self.nombres = '';
                        self.apellidos = '';
                        self.empresa = '';
                        self.email = '';
                        self.direccion = '';
                        self.cargo = '';
                        self.ciudad = '';
                        self.telefono = '';
                   }
                });
            }
        }
    }
</script>
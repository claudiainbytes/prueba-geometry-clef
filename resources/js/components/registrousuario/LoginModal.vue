<template>
    <div>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" @submit.prevent="validateLoginSubmit">
            <input type="hidden" name="_method" value="POST"> 
            <input type="hidden" name="_token" :value="csrfToken">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Escribe tu correo electrónico para poder ingresar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
            <button type="submit" class="btn btn-general btn-sm">Ingresa</button>
            </div>
            </form> 
        </div>
        </div>
    </div>
    <message-modal :mensaje="mensaje"></message-modal>  
    </div>
</template>

<script>
    import FormError from './FormError.vue';
    import MessageModal from './MessageModal.vue';
    export default {
        name: "form-component",
        components: {
            FormError,
            MessageModal
        },
        data () {
            return {
                csrfToken: window.Laravel.csrfToken,
                mensaje: '',
                email: ''
            }
        },
        methods: {
            validateLoginSubmit: function() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        $('#login').modal('hide');
                        axios.post('/usuarios/login',
                            {email: this.email}
                            ).then(response => {
                                if(!response.data.error){
                                    if(response.data.isValid == true){
                                        this.mensaje = "El usuario es válido.";
                                        window.location.pathname = response.data.pathname;
                                        return;
                                    }else{
                                        this.mensaje = "El usuario no existe.";
                                        $('#message').modal('show');
                                    }
                                }    
                        });
                        this.email = '';
                        return;
                    }
                    //errores
                });
            }
        }
    }
</script>
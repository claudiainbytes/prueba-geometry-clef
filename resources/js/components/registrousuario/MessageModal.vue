<template>
    <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messageLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <p>{{mensaje}}</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-general btn-sm" data-dismiss="modal">Aceptar</button>
        </div>
        </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['mensaje']
    }
</script>
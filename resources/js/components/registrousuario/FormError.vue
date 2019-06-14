<template>
    <div v-show="errors_form.has(attribute_name)" class="invalid-feedback">
        {{ errors_form.first(attribute_name) }}
    </div>
</template>

<script>
    export default {
        props: ['attribute_name', 'errors_form']
    }
</script>
<template>
    <div :class="alertClasses" v-show="show">
        <slot></slot>
        <span class="Alert__Close" @click="show = false">X</span>
    </div>
</template>

<style lang="stylus">
    body {
        background: #fff;
    }

    .Alert
        position: relative
        background: #ddd
        border: 1px solid darken(#ddd, 10%)
        padding: 1em
        margin: 5px 0

    .Alert__Success
        background: lighten(green, 70%)
        border: 1px solid lighten(green, 30%)

    .Alert__Error
        background: lighten(red, 70%)
        border: 1px solid lighten(red, 30%)

    .Alert__Close
        position: absolute
        top: 1em
        right: 1em
        font-weight: bold
        cursor: pointer
</style>

<script type="text/babel">
    export default {
        props: ['type'],
        data() {
            return {
                show: true
            };
        },
        computed: {
            alertClasses() {
                var type = this.type;

                return {
                    'Alert': true,
                    'Alert__Success': type == 'success',
                    'Alert__Error': type == 'error'
                };
            }
        }
    };
</script>
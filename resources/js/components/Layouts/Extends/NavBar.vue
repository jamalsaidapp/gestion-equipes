<template>
    <!--     HEADER    -->
    <a-layout-header style="background: #fff; padding: 0 ; height: 55px;">
        <a-icon  class="trigger" :type="collapsed ? 'menu-unfold' : 'menu-fold'" @click="handleCollapsed"/>

        <div class="float-right pr-2">
            <a-avatar class="mb-3" size="small" icon="user" />
            <span class="mb-3">{{$user.name}}</span>
        </div>
    </a-layout-header>
    <!--     HEADER      -->
</template>

<script>
export default {
name: "NavBar",
    props:{
        collapsed :{
            type: Boolean,
            default : false
        }
    },
    methods:{
         handleCollapsed(){
             this.$root.$emit("collapse-handle");
        }
    },
    mounted(){
    }

}
</script>

<style scoped>

</style>

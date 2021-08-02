<template>
    <!--     HEADER    -->
    <a-layout-header style="background: #fff; padding: 0 ; height: 55px;">
        <a-icon :type="collapsed ? 'menu-unfold' : 'menu-fold'" class="trigger" @click="handleCollapsed"/>

        <div class="auth-user h-100 float-right pr-2" style="line-height: 30px">
            <a-avatar icon="user" size="large"/>
            <a-dropdown :trigger="['click']">
                <a class="text-dark ant-dropdown-link" @click="e => e.preventDefault()" style="line-height: 50px;">
<!--                    {{user[1].name}}-->
                    <a-icon type="down" />
                </a>
                <a-menu slot="overlay" class="FixDrop" >
                    <a-menu-item>
                        <a href="#">1st menu item</a>
                    </a-menu-item>
                    <a-menu-item>
                        <a href="#">2nd menu item</a>
                    </a-menu-item>
                    <a-menu-item>
                        <a href="#">3rd menu item</a>
                    </a-menu-item>
                </a-menu>
            </a-dropdown>
        </div>
    </a-layout-header>
    <!--     HEADER      -->
</template>

<script>
export default {
    name: "NavBar",
    data() {
        return {
        }
    },
    computed:{
        user(){
            let name = 0
            return this.$store.state.user[name];
        }
    },
    props: {
        collapsed: {
            type: Boolean,
            default: false
        }
    },
    methods: {
        handleCollapsed() {
            this.$root.$emit("collapse-handle");
        },

    },
    beforeMount() {
        let name = 0
        console.log('From Nav', this.user)
    }

}
</script>

<style scoped>
.FixDrop{
    top: 20px !important;
}
</style>

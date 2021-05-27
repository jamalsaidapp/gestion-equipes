<template>
    <a-layout-sider v-model="collapsed" collapsible style="min-height: 100vh">
        <div class="logo" style="height: 20px;"/>
        <a-menu theme="dark" :default-selected-keys="['1']" mode="inline">
            <a-menu-item key="1">
                <a-icon type="pie-chart" />
                <span>Dashboard</span>
            </a-menu-item>
            <a-sub-menu key="sub1">
                <span slot="title"><a-icon type="setting" theme="filled" /><span>Setting</span></span>
                <a-menu-item key="2">
                    Users
                </a-menu-item>
                <a-menu-item key="3">
                    Roles/Permissions
                </a-menu-item>
            </a-sub-menu>
            <a-menu-item key="4">
                <a-icon type="team" />
                <span>Employers</span>
            </a-menu-item>
            <a-menu-item key="5">
                <a-icon type="logout" />
                <span @click="logout">Logout</span>
            </a-menu-item>
        </a-menu>
    </a-layout-sider>
</template>

<script>
export default {
    name: "SideBar",
    data() {
        return {
        };
    },
    props:{
        collapsed :{
            type: Boolean,
            default : false
        }
    },
    methods :{
        logout(){
            axios.post('logout').then(()=> {
                location.replace('/login');
            })
        },
        handelMenus(){
            // this.collapsed != this.collapsed;
            console.log(this.collapsed)
        }

}
}
</script>

<style scoped>

</style>

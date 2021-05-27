<template>
    <a-layout id="components-layout-demo-custom-trigger">
        <Sidebar :collapsed="collapsed"/>
        <a-layout>
           <Navbar :collapsed="collapsed"/>
           <Content/>
           <Footer/>
        </a-layout>
    </a-layout>
</template>
<script>
export default {
    data() {
        return {
            collapsed: false,
        };
    },
    created() {
        this.$root.$on('collapse-handle',()=>{
            this.collapsed = !this.collapsed
        })
    }
};
</script>
<style>
#components-layout-demo-custom-trigger .trigger {
    font-size: 18px;
    line-height: 64px;
    padding: 0 24px;
    cursor: pointer;
    transition: color 0.3s;
}

#components-layout-demo-custom-trigger .trigger:hover {
    color: #1890ff;
}

#components-layout-demo-custom-trigger .logo {
    height: 32px;
    background: rgba(255, 255, 255, 0.2);
    margin: 16px;
}
</style>

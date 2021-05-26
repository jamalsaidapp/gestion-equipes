<template>
    <a-layout id="components-layout-demo-custom-trigger">
        <a-layout-sider v-model="collapsed"  collapsible style="min-height: 100vh">
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
                    <span>Logout</span>
                </a-menu-item>
            </a-menu>
        </a-layout-sider>
        <a-layout>
            <!--     HEADER    -->
            <a-layout-header style="background: #fff; padding: 0 ; height: 55px;">
                <a-icon class="trigger" :type="collapsed ? 'menu-unfold' : 'menu-fold'" @click="() => (collapsed = !collapsed)"/>

            </a-layout-header>
            <!--     HEADER      -->

            <!--     CONTENT      -->
            <a-layout-content :style="{ margin: '24px 16px', padding: '24px', background: '#fff', minHeight: '280px' }">
                Content
            </a-layout-content>
            <!--     CONTENT      -->

            <!--     FOOTER      -->
            <a-layout-footer style="textAlign: center">
                Copyright © JAMAL SAID DEV, Inc. 2018-2021. All Rights Reserved.
            </a-layout-footer>
            <!--     FOOTER      -->

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

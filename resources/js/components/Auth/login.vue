<template>
    <div class="m-auto w-25 fix-height">
        <a-form-model layout="block" :model="formInline" @submit="handleSubmit" @submit.native.prevent>
            <a-form-model-item>
                <a-input v-model="formInline.user" placeholder="Username">
                    <a-icon slot="prefix" type="user" style="color:rgba(0,0,0,.25)" />
                </a-input>
            </a-form-model-item>
            <a-form-model-item>
                <a-input v-model="formInline.password" type="password" placeholder="Password">
                    <a-icon slot="prefix" type="lock" style="color:rgba(0,0,0,.25)" />
                </a-input>
            </a-form-model-item>
            <a-form-model-item class="d-flex">
                <a-button
                    class="m-auto"
                    type="primary"
                    html-type="submit"
                    :disabled="formInline.user === '' || formInline.password === ''"
                >
                    Log in
                </a-button>
            </a-form-model-item>
        </a-form-model>
    </div>
</template>
<script>
export default {
    data() {
        return {
            formInline: {
                user: '',
                password: '',
            },
        };
    },
    methods: {
        handleSubmit(e) {
            console.log(this.formInline);
        },
    },
};
</script>

<style >
.ant-col {
    margin: auto !important;
}
</style>

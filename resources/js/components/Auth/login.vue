<template>
    <div class="">
        <div class="login-box m-auto col-md-4 col-sm-3">
            <div class="logo">
                <h1 class="text-center">Welcome To GEN</h1>
            </div>
            <div class="card p-2 pb-0">
                <span class="text-center mb-2">Connectez-vous pour démarrer votre Session </span>
                <a-form-model ref="loginForm" :model="form" :rules="rules">
                    <a-form-model-item prop="email" :class="error.email ? 'ant-form-item-with-help' : ''">
                        <a-input v-model="form.email" type="email"  placeholder="Email">
                            <a-icon slot="prefix" type="user" style="color:rgba(0,0,0,.25)" />
                        </a-input>
                        <div v-if="error.email" class="text-danger ant-form-explain">{{error.email}}</div>
                    </a-form-model-item>
                    <a-form-model-item prop="password" :class="error.password ? 'ant-form-item-with-help' : ''">
                        <a-input v-model="form.password" type="password" placeholder="Password">
                            <a-icon slot="prefix" type="lock" style="color:rgba(0,0,0,.25)" />
                        </a-input>
                        <div v-if="error.password" class="text-danger ant-form-explain">{{error.password}}</div>
                    </a-form-model-item>
                    <a-form-model-item class="d-flex mb-0">
                        <a-button class="m-auto" type="primary" html-type="submit" @click="submit">Log in</a-button>
                    </a-form-model-item>
                </a-form-model>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return {
            form: new Form({
                password : '',
                email : ''
            }),
            error: new Form ({
                email : '',
                password : ''
            }),
            rules:{
                email:[ { required: true, message: 'Champ Email Obligatoire', trigger: 'change' }],
                password:[ { required: true, message: 'Champ Password Obligatoire !', trigger: 'change' }]
            }
        }
    },
    methods:{
        submit(){
            this.$refs.loginForm.validate(valid => {
                if (valid) {
                    this.form.post('/login').then((res)=>{
                        res.data.error !=null ? this.error.fill(res.data.error) : location.replace('/');
                    }).catch((err)=>{
                        console.log(err)
                    })
                } else {
                    return false;
                }
            });

        }
    },
    mounted() {

    }
};

</script>

<style >
.ant-col {
    margin: auto !important;
}
</style>

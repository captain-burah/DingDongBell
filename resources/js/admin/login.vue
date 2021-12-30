<template>
    <div class="container vh-100 w-100 mx-auto d-flex">
        <div class="col-md-12 login-box vh-100 d-flex mx-auto">
            <div class="col-md-6 my-auto mx-auto">
                <div class="login-logo text-center my-4">
                    <h4><b>IT - Panthiya </b>| Institute for ICT</h4>
                </div>
                <!-- /.login-logo -->
                <div class="card my-auto mx-auto shadow rounded-lg">
                    <div class="card-body mb-5 mx-4 login-card-body text-center">
                        <h2 class="login-box-msg my-4">Administrator Login</h2>

                        <form @submit.prevent="login" v-if="isAuthenticated == false">
                            <div class="input-group mb-4">
                                <input type="email" class="form-control" placeholder="Email" v-model="form.email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control" placeholder="Password" v-model="form.password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-12 mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                                </div>
                            </div>
                        </form>
                        <div v-else>
                            <h2>You are already logged In</h2>
                            <router-link to="/admin/panel">Go to admin panel</router-link>
                            <router-view>

                            </router-view>
                            <button type="button" class="btn btn-dark" @click="logout">Logout</button>
                        </div>
                    </div>
                    <!-- /.login-card-body -->
                </div>
                <div class="mx-auto my-3 text-secondary text-center">
                    <h5 style="font-family: 'Caveat', cursive; fon-wight: 400;">
                        a work of 
                        <a href="https://www.upwritsolutions.com" class="text-center text-decoration-none text-dark">
                            UpWrit
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { reactive, inject, ref, onMounted } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    import axios from 'axios';
    export default{
        name: 'admin-login',
        setup(){
            const router = useRouter();
            let cookies = inject('cookies');
            let isAuthenticated = ref(false);
            const form = reactive({
                email: '',
                password: ''
            });

            const login = async()=>{
                let timerInterval;
                
                swal.fire({
                title: 'Authenticating',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    swal.showLoading()
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
                });

                let res = await axios.post(`api/login`,form)
                    .catch(function(error) {
                        if (error.response && error.response.status === 401) {
                            Toast.fire({
                                icon: 'error',
                                title: 'Email or Password is incorrect',
                            }); 
                        }
                        else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Email or Password is incorrect',
                            }); 
                        }
                    });
                let token = cookies.get("access_token");
                if(res.data.access_token){
                    cookies.set('access_token', res.data.access_token)
                    isAuthenticated.value = true;
                    Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                    });
                    router.push('/admin/panel');
                    // setTimeout(function() { 
                        
                    // }, 2000);
                    
                }
                else if ( token == "false")  {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }   

                
            };

            const checkLogin = ()=>{
                if (cookies.get('access_token')){
                    isAuthenticated.value = true;
                }
            }

            const logout = ()=>{
                if (cookies.get('access_token')){
                    cookies.set('access_token', '')
                    isAuthenticated.value = false;
                }
            }

            onMounted(checkLogin);

            return {
                form,
                login,
                isAuthenticated,
                logout
            }
        }
    }
</script>
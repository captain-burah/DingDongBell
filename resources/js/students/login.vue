<template>
    <div class="cover-container v-100 w-100 mx-auto d-flex">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-login" id="sideNav">
            <h6 class="navbar-brand text-center mx-auto">
                <span class="d-block d-lg-none text-center mx-auto" style="font-family: 'Raleway', sans-serif;">IT - Panthiya | Institute for ICT</span>
            </h6>
            <div class="collapse navbar-collapse bg-light" id="navbarResponsive" style="opacity: .8;">
                <ul class="navbar-nav py-4">
                    <li class="nav-item">
                        <h4 class="text-dark" style="font-family: 'Raleway', sans-serif;">
                            <a href="/" class="text-decoration-none text-dark" >
                                IT - Panthiya <br> <span class="text-capitalize">Institute for ICT</span>
                            </a>
                        </h4>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-md-12 login-box vh-100 d-flex mx-auto">
            <div class="col-md-6 my-auto mx-auto">

                <!-- /.login-logo -->
                <div class="card my-auto mx-auto shadow rounded-lg">
                    <div class="card-body mb-5 mx-4 login-card-body text-center">
                        
                        <h4 class="login-box-msg my-4">Student Login Form</h4>
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
                            <div class="row mx-auto mb-4">
                                <div class="col-12 mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-12 mx-auto">
                                    <button type="submit" class="btn btn-outline-info btn-block">Create account</button>
                                </div>
                            </div>
                        </form>
                        <div v-else>
                            <h2>You are already logged In</h2>
                            <router-link to="/students/panel" class="mx-4">
                                <button class="btn btn-dark">Go to my dashboard</button>
                            </router-link>
                            <router-view>

                            </router-view>
                            <button type="button" class="btn btn-danger mx-4" @click="logout">Logout</button>
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
        name: 'students',
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

                let res = await axios.post(`api/user_login`,form)
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
                    cookies.set('access_token', res.data.access_token);
                    cookies.set('user_id', res.data.user.id);
                    isAuthenticated.value = true;
                    Toast.fire({
                        icon: 'success',
                        title: 'Signed in successfully'
                    });
                    router.push('/students/panel');
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
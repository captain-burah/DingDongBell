<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Course Management</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Course</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Course Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Course Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Description</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription" placeholder="Description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Status</label>
                                        <select class="custom-select rounded-0" id="exampleSelect">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>                          
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputDescription2">Learning Outcomes</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription2" placeholder="Learning Outcome"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Minimum Recommended: 540p x 480p</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-block">Create</button>
                                    </div>  
                                </div>                               
                                
                            </div>
                            <!-- /.card-body -->
                            
                        </form>
                        </div>
                </div>
            </div>
                <courses></courses>
            <div class="row">

            </div>
        </div>
    </section>
</div>
</template>
<script>
    import { reactive, inject, ref, onMounted } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    import axios from 'axios';
    import courses from './allCourses.vue'

    export default{
        name: 'admin-login',
        setup(){
            const router = useRouter();
            let cookies = inject('cookies');
            let isAuthenticated = ref(false);
            const form = reactive({
                name: '',
                tutor: '',
                description: '',
                status: '',
                learning_outcomes: '',
                image: '',
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
        },
        components: {
            courses,
        },
    }
</script>
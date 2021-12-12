<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student Management</h1>
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
                            <h3 class="card-title">Create Student</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form> 
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Han" v-model="form.fname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Solo" v-model="form.lname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="hans-solo@starwars.com" v-model="form.email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="********" v-model="form.password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputContact">Contact Number</label>
                                        <input type="text" class="form-control" id="exampleInputContact" placeholder="0771234567" v-model="form.contact">
                                    </div>                      
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Message</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription1" placeholder="Message or Additional Notes" v-model="message">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Course</label>
                                        <select class="custom-select rounded-0" id="exampleSelect" v-model="course_id">
                                            <option>Course Name</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Medium</label>
                                        <select class="custom-select rounded-0" id="exampleSelect" v-model="medium">
                                            <option>English</option>
                                            <option>Sinhala</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Status</label>
                                        <select class="custom-select rounded-0" id="exampleSelect" v-model="status">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-block">Create Student</button>
                                    </div>  
                                </div>                               
                                
                            </div>
                            <!-- /.card-body -->
                            
                        </form>
                        </div>
                </div>
            </div>
                
            <div class="row">

            </div>
        </div>
    </section>
</div>
</template>
<script>
    // import courses from './allCourses.vue'
    import axios from 'axios';
    import { reactive, inject, ref, onMounted } from "vue";
    export default {
        setup() {
            const form = reactive({
                fname: '',
                lname: '',
                email: '',
                password: '',
                contact: '',
                medium: '',
                message: '',
                status: '',
                course_id: '',
            });

            const login = async()=>{
                // let res = await axios.post(`api/login`,form);
                // if(res.data.access_token){
                //     cookies.set('access_token', res.data.access_token)
                //     isAuthenticated.value = true;
                //     router.push('/admin/panel');
                // }
            };
        },
        components: {
            // courses,
        },
    }
</script>

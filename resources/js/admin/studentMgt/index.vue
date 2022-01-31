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
                                    <div class="text-sm text-danger" v-if="errors != ''">
                                        <p v-for="error in errors" :key="error"><small>{{ error }}</small></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputame1" placeholder="Han" v-model="form.fname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputame2" placeholder="Solo" v-model="form.lname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="exampleInputmail" placeholder="hans-solo@starwars.com" v-model="form.email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="exampleInputassword" placeholder="********" v-model="form.password">
                                        <span class="small text-secondary">minimum lenght: 08 characters</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputContact">Contact Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="exampleInputontact" placeholder="0771234567" v-model="form.contact">
                                    </div>                      
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Message</label>
                                        <textarea class="form-control" rows="3" id="exampleInputescription1" placeholder="Additional notes if student speciality" v-model="form.message">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <!-- If user clicks edit student -->
                                        <label for="exampleSelect">Course <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0" id="exampleelect" v-model="form.course_id" >
                                            <option v-for="course in courses" :key="course.id" v-bind:value="course.id">{{ course.name }}</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Medium <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0" id="exampleelect" v-model="form.medium">
                                            <option>English</option>
                                            <option>Sinhala</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Status <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0" id="exampleelect" v-model="form.status">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="card-footer bg-white">
                                        <button v-if="student_id == ''" type="button" class="btn btn-success btn-block"  @click="createStudent">
                                            Create
                                        </button>
                                        <button v-else type="button" class="btn btn-warning btn-block"  @click="updateStudent">
                                            Update
                                        </button>
                                        <span class="small text-secondary text-center">make sure all required fields have been filled</span>
                                    </div> 
                                </div>                               
                                
                            </div>
                            <!-- /.card-body -->
                            
                        </form>
                        </div>
                </div>
            </div>
                
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Available Courses</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Medium</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Course Name</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody v-if="student != []">
                            <template v-for="(student,index) in students" :key="index">
                                <tr>
                                    <td>{{ student.id }}</td>
                                    <td>{{ student.fname }} {{ student.lname }}</td>
                                    <td>{{ student.email }}</td>
                                    <td>{{ student.contact }}</td>
                                    <td>{{ student.medium }}</td>
                                    <td>{{ student.message }}</td>
                                    <td>{{ student.status }}</td>
                                    <div v-if="student.course.name != []">
                                        <td>{{ student.course.name }}</td>
                                    </div>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" @click="deleteStudent(student.id)">
                                            Delete
                                        </button>
                                        /
                                        <button type="button" class="btn btn-sm btn-warning" @click="editStudent(student)">
                                            Edit
                                        </button>
                                    </td>
                                </tr>
                            </template>
                            
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
</template>
<script>
    import { reactive, inject, ref, onMounted } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    import axios from 'axios';
    export default {
        name: 'student-index',
        setup() {
            const router = useRouter();
            const courses = ref([]);
            const students = ref([]);
            let cookies = inject('cookies');
            const student_id = ref([]);
            const errors = ref([]);
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

            const getCourses = async() => {
                const tokeNNNN = cookies.get('access_token');
                let res = await axios.get('api/courses', 
                    { 
                        headers: {
                            "Authorization" : `Bearer ${tokeNNNN}`
                        } 
                    }
                );
                courses.value = res.data.data;
            };

            const getStudents = async() => {
                const tokeNN = cookies.get('access_token');
                let res = await axios.get('api/users', 
                    { 
                        headers: {
                            "Authorization" : `Bearer ${tokeNN}`
                        } 
                    }
                );
                students.value = res.data.data;
            };

            const createStudent = async()=>{ 
                errors.value = [];
                let timerInterval;
                swal.fire({
                title: 'Creating',
                timer: 4000,
                timerProgressBar: true,
                didOpen: () => {
                    swal.showLoading()
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
                });

                const tokeN = cookies.get('access_token');
                let res = await axios.post(`api/users`, form, 
                    { 
                        headers: {
                            "Authorization" : `Bearer ${tokeN}`
                        } 
                    }
                )
                .catch(function(error) {
                    if (error.response && error.response.status === 422) {
                        var data = [];
                        for(const key in error.response.data.errors){
                            data.push(error.response.data.errors[key][0])
                        }
                        errors.value = data;
                        swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                    else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Invalid data. Enter correct data.',
                        }); 
                    }
                });
                if(res.data.status === '1'){
                    Toast.fire({
                        icon: 'success',
                        title: 'Student Created'
                    });
                    setTimeout(function() { 
                        window.location.reload(true);
                    }, 3000);
                }
                else if (res.data.status === '0')  {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went zero',
                    });
                }
                else {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            };

            const deleteStudent = (studentId)=>{
                const tokeNNN = cookies.get('access_token');
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(`api/users/${studentId}`, 
                            { 
                                headers: {
                                    "Authorization" : `Bearer ${tokeNNN}`
                                } 
                            }
                        )
                        swal.fire(
                            'Deleted!',
                            'Your student has been deleted.',
                            'success'
                        )
                        
                    };
                });
                //router.push('/admin/panel/course');
                setTimeout(function() { 
                    window.location.reload(true);
                }, 3000);
            };

            const editStudent = (student)=>{
                student_id.value = student.id;
                form.fname = student.fname;
                form.lname = student.lname;
                form.email = student.email;
                form.password = student.password;
                form.contact = student.contact;
                form.medium = student.medium;
                form.message = student.message;
                form.status = student.status;
                form.course_id = student.course_id;
            };

            const updateStudent = async()=>{ 
                errors.value = [];
                let timerInterval;
                swal.fire({
                title: 'Creating',
                timer: 4000,
                timerProgressBar: true,
                didOpen: () => {
                    swal.showLoading()
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
                });

                const tokeN = cookies.get('access_token');
                let res = await axios.patch(`api/users/` + student_id.value, form, 
                    { 
                        headers: {
                            "Authorization" : `Bearer ${tokeN}`
                        } 
                    }
                )
                .catch(function(error) {
                    if (error.response && error.response.status === 422) {
                        var data = [];
                        for(const key in error.response.data.errors){ 
                            data.push(error.response.data.errors[key][0])
                        }
                        errors.value = data;
                        swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                    else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Invalid data. Enter correct data.',
                        }); 
                    }
                });

                if(res.data.status === '1'){
                    Toast.fire({
                        icon: 'success',
                        title: 'Student Created'
                    });
                    setTimeout(function() { 
                        window.location.reload(true);
                    }, 2000);
                }
                else if (res.data.status === '0')  {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went zero',
                    });
                }
                else {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            };

            onMounted(() => {
                getStudents();
                getCourses();
            });

            return {
                form,
                getStudents,
                errors,
                createStudent,
                deleteStudent,
                editStudent,
                updateStudent,
                students,
                student_id,
                getCourses,
                courses
            }

        },

    }
</script>
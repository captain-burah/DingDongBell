<template>
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Link management</h1>
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
                            <h3 class="card-title">Add New Link</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form ref="courseForm">
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <div class="text-sm text-danger" v-if="errors != ''">
                                        <p v-for="error in errors" :key="error"><small>{{ error }}</small></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Grade 06 | O/Level Grade 12 | A/Level" v-model="newcourse.name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Description</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription" placeholder="Description" v-model="newcourse.description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription1">Link</label>
                                        <textarea class="form-control" rows="3" id="exampleInputDescription" placeholder="Description" v-model="newcourse.description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelect">Course <span class="text-danger">*</span></label>
                                        <select class="custom-select rounded-0" id="exampleelect" v-model="newcourse.course_id" >
                                            <option v-for="course in courses" :key="course.id" v-bind:value="course.id">{{ course.name }}</option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button v-if="course_id == ''" type="button" class="btn btn-success btn-block"  @click="createcourse">
                                            Create
                                        </button>
                                        <button v-else type="button" class="btn btn-warning btn-block"  @click="updateCourse">
                                            Update
                                        </button>
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
                        <h3 class="card-title">Available Links</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Link</th>
                            <th>Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody v-if="courses != []">
                            <template v-for="course in courses" :key="course.id">
                                <tr>
                                    <td>{{ course.id }}</td>
                                    <td>{{ course.name }}</td>
                                    <div v-if="student.course.name != []">
                                        <td>{{ student.course.name }}</td>
                                    </div>
                                    <td>{{ course.link }}</td>
                                    <td>{{ course.description }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" @click="deleteCourse(course.id)">
                                            Delete
                                        </button>
                                        /
                                        <button type="button" class="btn btn-sm btn-warning" @click="editCourse(course)">
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
    import axios from 'axios';
    import { useRouter, useRoute } from 'vue-router'
    export default{
        name: 'link-index',
        setup(){
            const router = useRouter();
            const courses = ref([]);
            let cookies = inject('cookies');
            const errors = ref([]);
            const course_id = ref([]);
            const newcourse = reactive({
                name: '',
                description: '',
                link: '',
                course_id: '',
            });

            const getCourses = async() => {
                const tokeNN = cookies.get('access_token');
                let res = await axios.get('api/links', 
                    { 
                        headers: {
                            "Authorization" : `Bearer ${tokeNN}`
                        } 
                    }
                );
                courses.value = res.data.data;
            };

            const storeCourse = async() => {
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
                try {
                    const token = cookies.get('access_token');
                    await axios.post(`api/links`, newcourse, 
                        { 
                            headers: {
                                "Authorization" : `Bearer ${token}`
                            } 
                        }
                    );
                }catch(e) {
                    if (e.response.status === 422){
                        var data = [];
                        for(const key in e.response.data.errors){
                            data.push(e.response.data.errors[key][0])
                        }
                        errors.value = data;
                        swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                }
                
            };

            const createcourse = async()=>{ 
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
                let res = await axios.post(`api/links`, newcourse, 
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
                        title: 'Link Created'
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

            const deleteCourse = (courseId)=>{
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
                        axios.delete(`api/courses/${courseId}`, 
                            { 
                                headers: {
                                    "Authorization" : `Bearer ${tokeNNN}`
                                } 
                            }
                        )
                        swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        
                    };
                });
                //router.push('/admin/panel/course');
                setTimeout(function() { 
                    window.location.reload(true);
                }, 3000);
            };

            const editCourse = (course)=>{
                course_id.value = course.id;
                newcourse.name = course.name;
                newcourse.description = course.description;
                newcourse.link = course.link;
                newcourse.course_id = course.course_id;
            };

            const updateCourse = async()=>{ 
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
                let res = await axios.patch(`api/links/` + course_id.value, newcourse, 
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
                        title: 'Link Created'
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
                courses,
                getCourses,
                createcourse,
                newcourse,
                storeCourse,
                errors,
                deleteCourse,
                editCourse,
                course_id,
                updateCourse
            }
        },
    }
</script>
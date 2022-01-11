<template>
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
                <th>Course Name</th>
                <th>Tutor</th>
                <th>Description</th>
                <th>Learning Outcomes</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <template v-for="course in courses" :key="course.id">

                </template>
                <tr>
                    <td>{{ course.id }}</td>
                    <td>{{ course.name }}</td>
                    <td>{{ course.tutor }}</td>
                    <td>{{ course.description }}</td>
                    <td>{{ course.learning_outcomes }}</td>
                    <td>{{ course.status }}</td>
                    <td>Delete / Update</td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</template>
<script>
import { reactive, inject, ref, onMounted } from "vue";
    // import { useRouter, useRoute } from 'vue-router'
    import axios from 'axios';
    export default{
        name: 'all-courses',
        setup(){

            const courses = ref([]);

            const getCourses = async() => {
                let res = axios.get(`api/courses`);
                courses.res = res.data;
            }

            onMounted(getCourses);

            return {
                createcourse,
                newcourse,
                storeCourse,
                errors
            }
        }
    }
</script>
<template>
<div>
<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">IT Panthiya</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/images/sl/IT පන්තිය logo.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item my-2"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item my-2"><a class="nav-link js-scroll-trigger" href="#mycourses">My Courses</a></li>
                    <button type="button" class="btn btn-danger mx-4 my-5" @click="logout">Logout</button>
                    

                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ user_details.fname }}
                        <span class="text-primary">{{ user_details.lname }}</span>
                    </h1>
                    <div class="subheading mb-5">
                        Contact: {{ user_details.contact }} | 
                         Email: <a href="mailto:name@email.com">{{ user_details.email }} </a>
                    </div>
                    <p class="lead mb-5">You can now view your registered courses below within a click. </p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="mycourses">
                <div class="resume-section-content">
                    <h2 class="mb-5">O/L Grade 10</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="card bg-light">
                            <div class="card-header bg-dark" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h3 class="mb-0 text-light">Lesson 01: Logic Gates</h3>
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis tortor nec elit mattis ultricies. Vivamus pulvinar consectetur mauris, eget viverra lacus laoreet at. Curabitur eu varius nisi, eu eleifend felis. Integer ut auctor purus. Maecenas mollis faucibus tortor, ac ultrices mi ornare quis. Phasellus eget nunc luctus, malesuada enim vel, ultrices felis. Ut placerat felis tempor massa tincidunt tempor. Morbi ut mi ac purus tincidunt euismod malesuada vel orci. 
                                    <button class="btn btn-warning btn-block btn-lg shadow border border-dark">Click here to join zoom</button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-dark" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3 class="mb-0 text-light">Lesson 02: Programming</h3>
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis tortor nec elit mattis ultricies. Vivamus pulvinar consectetur mauris, eget viverra lacus laoreet at. Curabitur eu varius nisi, eu eleifend felis. Integer ut auctor purus. Maecenas mollis faucibus tortor, ac ultrices mi ornare quis. Phasellus eget nunc luctus, malesuada enim vel, ultrices felis. Ut placerat felis tempor massa tincidunt tempor. Morbi ut mi ac purus tincidunt euismod malesuada vel orci. 
                                    <button class="btn btn-warning btn-block btn-lg shadow border border-dark">Click here to join zoom</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">A/L Grade 12</h3>
                            <div class="subheading mb-3">Logic Gates</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">17</span></div>
                    </div> -->
                </div>
            </section>
            <hr class="m-0" />
        </div>
</div>
</template>

<script>
    import { reactive, inject, ref, onMounted } from "vue";
    import { useRouter, useRoute } from 'vue-router'
    import axios from 'axios';
    export default {
        name: 'student-dashboard',
        
        setup(){
            const router = useRouter();
            let cookies = inject('cookies');
            let id = cookies.get('user_id');
            const user_details = ref([]);
            let isAuthenticated = ref(false);
            console.log(id);

            const getUser = async()=>{
                if (cookies.get('user_id')){
                    let res = await axios.get(`api/user_details/${id}`)
                        .then(response => {
                            console.log(response.data);
                            user_details.value = response.data.user;


                        });
                }
                
                //user_details.value = res.data;
            };

            const checkLogin = ()=>{
                if (cookies.get('access_token')){
                    isAuthenticated.value = true;
                }
                else {
                    router.push('/students');
                }
            }

            const logout = ()=>{
                if (cookies.get('access_token')){
                    cookies.delete('access_token');
                    cookies.delete('user_id');
                    isAuthenticated.value = false;
                    router.push('/students');
                }
            }

            onMounted(() => {
                checkLogin();
                getUser();
            })

            return {
                user_details,
                logout
            }
        }
    }
</script>
<template>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <router-link class="navbar-brand" to="/students/panel"><span>Study</span>Lab</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><router-link to="/students/mycourses" class="nav-link">My Courses</router-link></li>
                <li class="nav-item"><a href="/instructor" class="nav-link">Instructors</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item">
                    <a href="/students" class="nav-link">
                        <button type="button" class="btn btn-dark btn-block text-light shadow">Logout</button>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <div class="content-wrapper">
        <router-view name="studentchild">

        </router-view>
    </div>    
    
    
</div>
</template>
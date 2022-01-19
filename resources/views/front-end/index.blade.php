@extends('Layouts.index')

@section('content')
<div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"> <img src="/images/sl/IT පන්තිය logo.png" alt="logo" height="78px" width="78px"><span>IT - Panthiya</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home<br>මුල් පිටුව</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/course" class="nav-link">Course</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Instructor</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            <li class="nav-item">
                <a href="/students" class="nav-link">
                    <button type="button" class="btn btn-primary btn-block text-light shadow">Student Login</button>
                </a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('/images/sl/Home Banner New.png');">
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-dark">
            <span class="subheading  text-dark">Welcome to IT Panthiya - Institute for ICT</span>
            <h1 class="mb-4  text-dark">To conquer the world through ICT<br>තොරතුරු තාක්ෂණයෙන් ලොව ජයගන්නට</h1>
            <p class="caps text-dark">ICT විෂය ප්‍රයෝගිකව මනාව හදාරා, ඔබගේ ජීවිතයේ<br>සාර්ථකම මාවත නිර්මාණය කරගැනීමට ICT විෂය සඳහාම<br>පමණක් වෙන්වූ ලංකාවේ එකම ICT අධ්‍යාපන ආයතනය<br>හා සම්බන්ධ වන්න.</p>
            <p class="mb-0 text-dark"><a href="#" class="btn btn-primary">Tuition Class</a> <a href="#" class="btn btn-white">Course</a></p>
        </div>
    </div>
    </div>
    </div>

   

    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">අදම ICT විෂය ඉගෙනගන්න</span>
                <h2 class="mb-4">ඔබට අවශ්‍ය ශ්‍රේණිය පහතින් තෝරන්න</h2>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/AL%20Tuition.png);">
            <div class="text w-100 text-center">
                <h3>උසස් පෙළ</h3>
                <span>ICT</span>
            </div>
        </a>
    </div>
    <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/OL%20ICT.jpg);">
        <div class="text w-100 text-center">
            <h3>සාමාන්‍ය පෙළ </h3>
            <span>ICT</span>
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/Grade%2009.jpg);">
        <div class="text w-100 text-center">
            <h3>9 ශ්‍රේණිය</h3>
            <!-- <span>100 course</span> -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/Grade%2008%20Tuition.png);">
        <div class="text w-100 text-center">
            <h3>8 ශ්‍රේණිය</h3>
            <!-- <span>100 course</span> -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/Grade%2007.jpg);">
        <div class="text w-100 text-center">
            <h3>7 ශ්‍රේණිය</h3>
            <!-- <span>100 course</span> -->
        </div>
    </a>
    </div>
    <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(/images/sl/Grade%2006.jpg);">
        <span class="text w-100 text-center">
            <h3>6 ශ්‍රේණිය</h3>
            <!-- <span>100 course</span> -->
        </span>
    </a>
    </div>
    <div class="col-md-12 text-center mt-5">
        <a href="#" class="btn btn-secondary" style="font-size: 20px;">උපකාරක පංති සඳහා පිවිසෙන්න</a>
    </div>
    </div>
    </div>
    </section>

    <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">ICT විෂයට විශිෂ්ඨ සාමාර්ථයක් ලබාගන්න</span>
                <h2 class="mb-4">පළපුරුදු සහිත දක්ෂ ගුරු මඩුල්ල</h2>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
                <a href="#" class="img" style="background-image: url(/images/sl/Miss%20Sanjula.png);">
                    <span class="price">A/L & O/L</span>
                </a>
                <div class="text p-4">
                    <h3><a href="#">Miss. P. M. Sanjula Nadeeshani</a></h3>
                    <!-- <p class="advisor">Advisor <span>Tony Garret</span></p>
                    <ul class="d-flex justify-content-between">
                    <li><span class="flaticon-shower"></span>2300</li>
                    <li class="price">$199</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="col-md-4 ftco-animate">
        <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(/images/sl/Miss%20Nethuni.png);">
                <span class="price">Grade 09</span>
            </a>
            <div class="text p-4">
                <h3><a href="#">Miss. Nethuni Mallawaarachchi</a></h3>
                <!-- <p class="advisor">Advisor <span>Tony Garret</span></p>
                <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>2300</li>
                <li class="price">$199</li>
            </ul> -->
        </div>
    </div>
    </div>
    <div class="col-md-4 ftco-animate">
    <div class="project-wrap">
        <a href="#" class="img" style="background-image: url(/images/sl/Miss%20Subha.png);">
            <span class="price">Grade 08</span>
        </a>
        <div class="text p-4">
            <h3><a href="#">Miss. Subhashini Dissanayake</a></h3>
            <!-- <p class="advisor">Advisor <span>Tony Garret</span></p>
            <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul> -->
    </div>
    </div>
    </div>

    <div class="col-md-4 ftco-animate">
    <div class="project-wrap">
        <a href="#" class="img" style="background-image: url(/images/sl/Miss%20Shyami.png);">
            <span class="price">Grade 07 & 06</span>
        </a>
        <div class="text p-4">
            <h3><a href="#">Miss. Shyami Panangala</a></h3>
            <!-- <p class="advisor">Advisor <span>Tony Garret</span></p>
            <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul> -->
    </div>
    </div>
    </div>
    <!-- <div class="col-md-4 ftco-animate">
    <div class="project-wrap">
        <a href="#" class="img" style="background-image: url(images/sl/work-5.jpg);">
            <span class="price">Software</span>
        </a>
        <div class="text p-4">
            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
            <p class="advisor">Advisor <span>Tony Garret</span></p>
            <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
    </div>
    </div> -->
    <!-- <div class="col-md-4 ftco-animate">
    <div class="project-wrap">
        <a href="#" class="img" style="background-image: url(images/sl/work-6.jpg);">
            <span class="price">Software</span>
        </a>
        <div class="text p-4">
            <h3><a href="#">Design for the web with adobe photoshop</a></h3>
            <p class="advisor">Advisor <span>Tony Garret</span></p>
            <ul class="d-flex justify-content-between">
            <li><span class="flaticon-shower"></span>2300</li>
            <li class="price">$199</li>
        </ul>
    </div>
    </div>
    </div> -->
    </div>
    </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/images/sl/Hidden%20Banner.png);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex align-items-center">
                <div class="icon"><span class="flaticon-online"></span></div>
                <div class="text">
                <strong class="number">Theory Class</strong>
                <span>Cover the syllabus 3 months before the examination</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-graduated"></span></div>
            <div class="text">
            <strong class="number">Practical Class</strong>
            <span>Each practical will be covered during the class time</span>
        </div>
    </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-instructor"></span></div>
        <div class="text">
        <strong class="number">Paper Class</strong>
        <span>25 model papers</span>
    </div>
    </div>
    </div>
    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-tools"></span></div>
        <div class="text">
        <strong class="number">Revision Class</strong>
        <span>Revise each unit before the examination</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <!-- <section class="ftco-section ftco-about img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="d-flex about-wrap">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
                        </div>
                        <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Enhanced Your Skills</span>
                        <h2 class="mb-4">Learn Anything You Want Today</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(images/bg_2.jpg);"></div>
    <div class="container">
        <div class="row pb-4">
        <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-4">What Are Students Says</h2>
        </div>
    </div>
    </div>
    <div class="container container-2">
        <div class="row ftco-animate">
        <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
            <div class="item">
                <div class="testimony-wrap py-4">
                <div class="text">
                    <p class="star">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    <div class="pl-3">
                        <p class="name">Roger Scott</p>
                        <span class="position">Marketing Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="testimony-wrap py-4">
        <div class="text">
            <p class="star">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
            <div class="pl-3">
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="item">
        <div class="testimony-wrap py-4">
        <div class="text">
            <p class="star">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
            <div class="pl-3">
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="item">
        <div class="testimony-wrap py-4">
        <div class="text">
            <p class="star">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
            <div class="pl-3">
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="item">
        <div class="testimony-wrap py-4">
        <div class="text">
            <p class="star">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </p>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="d-flex align-items-center">
            <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
            <div class="pl-3">
                <p class="name">Roger Scott</p>
                <span class="position">Marketing Manager</span>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div class="img"  style="background-image: url(images/bg_4.jpg);">
                <div class="overlay"></div>
                <h2>We Are StudyLab An Online Learning Center</h2>
                <p>We can manage your dream building A small river named Duden flows by their place</p>
                <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
            </div>
        </div>
    </div>
    </div>
    </section>

    <section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
        <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
            <div class="w-100 mb-4 mb-md-0">
                <span class="subheading">Welcome to StudyLab</span>
                <h2 class="mb-4">We Are StudyLab An Online Learning Center</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <div class="d-flex video-image align-items-center mt-md-4">
                <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about.jpg);">
                    <span class="fa fa-play-circle"></span>
                </a>
                <h4 class="ml-4">Learn anything from StudyLab, Watch video</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
                <div class="media-body">
                <h3 class="heading mb-3">Top Quality Content</h3>
                <p>A small river named Duden flows by their place and supplies</p>
            </div>
        </div>      
    </div>
    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
        <div class="services">
            <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
            <div class="media-body">
            <h3 class="heading mb-3">Highly Skilled Instructor</h3>
            <p>A small river named Duden flows by their place and supplies</p>
        </div>
    </div>    
    </div>
    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
    <div class="services">
        <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
        <div class="media-body">
        <h3 class="heading mb-3">World Class &amp; Quiz</h3>
        <p>A small river named Duden flows by their place and supplies</p>
    </div>
    </div>      
    </div>
    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
    <div class="services">
        <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
        <div class="media-body">
        <h3 class="heading mb-3">Get Certified</h3>
        <p>A small river named Duden flows by their place and supplies</p>
    </div>
    </div>      
    </div>
    </div>
    </div>
    </div>
    </div>
    </section> -->


    <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">GCE Advanced Level</span>
            <h2 class="mb-4">ICT “A” Project</h2>
        </div>
    </div>
    <div class="row d-flex">
    <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
        <a href="blog-single.html" class="block-20" style="background-image: url('/images/sl/Theory.jpg');">
        </a>
        <div class="text d-block">
            <div class="meta">
            <!-- <p>
                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
            </p> -->
        </div>
        <h3 class="heading"><a href="#">විභාගයට පෙර සිද්ධාන්ත කොටස් ආවරණය කළ යුත්තේ කෙසේද?</a></h3>
        <p style="line-height: 1.6;">ICT විභාගය යනු ප්‍රායෝගික සහ සිද්ධාන්ත ප්‍රශ්නවල එකතුවකි. ප්‍රායෝගික ප්‍රශ්න සම්බන්ධයෙන් ගත් කල, අපට තරමක් සුවපහසු බවක් දැනෙන නමුත් සිද්ධාන්ත කොටස් බොහෝ සිසුන් බිය ගන්වයි. සිසුන්ට, සිද්ධාන්ත පාඩම් වලට වඩා ප්‍රායෝගික පාඩම් වලින් හොඳ ලකුණු ලබා ගැනීම පහසු වේ. නමුත් කෙටි සටහන් සහ ආදර්ශ ප්‍රශ්න පත්‍ර මගින් සිද්ධාන්ත කොටස් ආවරණය කිරීම මගින් ඉතා හොඳ ප්‍රතිඵල ලබාගත හැකිවේ.</p>
        <!-- <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p> -->
    </div>
    </div>
    </div>

    <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
        <a href="blog-single.html" class="block-20" style="background-image: url('/images/sl//Practical.jpg');">
        </a>
        <div class="text d-block">
            <div class="meta">
            <!-- <p>
                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
            </p> -->
        </div>
        <h3 class="heading"><a href="#">විභාගය සඳහා Practical සම්පූර්ණ කළ යුත්තේ කෙසේද?</a></h3>
        <div id="summary"><p class="collapse" id="collapseSummary" style="line-height: 1.6;" >ICT විභාගය වෙබ් අඩවි නිර්මාණය, ක්‍රමලේඛනය සහ දත්ත සමුදා කලමනාකරණය යන ප්‍රායෝගික ක්‍රියාකාරකම් වලින් සමන්විත වේ. විභාගය අතරතුර ඔබට ඇති වටිනාම දෙය කාලය වන බව ඔබ දන්නා කරුණකි. ඔබ සූදානම් වීමේදී මෙන්ම විභාග ශාලාව තුළදීද ඔබ එයින් උපරිම ප්‍රයෝජන ගත යුතු බවට සැකයක් නැත. බොහෝ සිසුන් මැසිවිලි නගන්නේ ප්‍රශ්න සංකීර්ණ නොවූන නමුත් ඔවුන්ට සියලුම ප්‍රශ්න සම්පූර්ණ කිරීමට නොහැකි වූ බව පවසමින් ය. මෙය වඩාත් සුලභ නමුත් අවාසනාවකි. ඒ නිසා බුද්ධිමත්ව එම විනාඩි 30න් උපරිම ප්‍රයෝජනය ගත යුතුය. සෑම ප්‍රායෝගික හා සිද්ධාන්ත ප්‍රශ්න සම්පූර්ණ කිරීමට නොහැකි වුවත්, ඔබට සම්පූර්ණ කළ හැකි ප්‍රශ්න සියල්ල ආවරණය කිරීමෙන් ඉහළම ලකුණු ලබා ගැනීමට උත්සාහ කරන්න. මේ සඳහා ඔබ අනිවාර්යයෙන්ම ප්‍රයෝගික ක්‍රියාකාරකම් සිදු කර තිබීම අත්‍යාවශ්‍ය වේ.</p>
        <p><a class="btn btn-secondary collapsed py-2 px-3" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a></p></div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
        <a href="blog-single.html" class="block-20" style="background-image: url('/images/sl/Model%20Paper.jpg');">
        </a>
        <div class="text d-block">
            <div class="meta">
            <!-- <p>
                <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 17, 2020</a>
                <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
            </p> -->
        </div>
        <h3 class="heading"><a href="#">ඔබ ආදර්ශ ප්‍රශ්න පත්‍ර 25ක් ආවරණ කළ යුත්තේ ඇයි?</a></h3>
        <p style="line-height: 1.6;">පුහුණුව මිනිසා පරිපූර්ණ කරයි! අවධානයෙන් සිටීමට සහ ඔබ ඉලක්ක කරන ප්‍රතිඵල සාක්ෂාත් කර ගැනීමට සූදානම් වීම අත්‍යවශ්‍ය වේ. තරඟකාරිත්වය දරුණු ලෙස වර්ධනය වන අතර ඔබේ සම වයසේ මිතුරන්ට වඩා ඉදිරියෙන් සිටීමට ඔබේ අධ්‍යයන කටයුතු වලදී දක්ෂ ලෙස සැලසුම් කිරීම අවශ්‍ය බව අපි දනිමු. ආදර්ශ ප්‍රශ්න පත්‍ර පෙරහුරුව විභාගවලින් ලකුණු ලබා ගැනීමට වඩාත් සාර්ථක ක්‍රමයකි. අප පංතියේ මාස 12ක් පුරාවට ක්‍රියාත්මක වන ආදර්ශ ප්‍රශ්න පත්‍ර මාලාව මගින් සිසුන් තුල ආත්ම විශ්වාසය ගොඩනගන අතර විශිෂ්ඨ ප්‍රතිඵල සඳහා යොමු කරයි.</p>
        <!-- <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <footer class="ftco-footer ftco-no-pt">
    <div class="container">
        <div class="row mb-5">
        <div class="col-md pt-5">
            <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
        </div>
    </div>
    <!-- <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
        <h2 class="ftco-heading-2">Help Desk</h2>
        <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Customer Care</a></li>
            <li><a href="#" class="py-2 d-block">Legal Help</a></li>
            <li><a href="#" class="py-2 d-block">Services</a></li>
            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
            <li><a href="#" class="py-2 d-block">Call Us</a></li>
        </ul>
    </div>
    </div> -->
    <div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Recent Courses</h2>
        <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
            <li><a href="#" class="py-2 d-block">Web Design</a></li>
            <li><a href="#" class="py-2 d-block">Business Studies</a></li>
            <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
            <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
            <li><a href="#" class="py-2 d-block">Web Developer</a></li>
        </ul>
    </div>
    </div>
    <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
            <ul>
            <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
        </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
        <p style="font-family: 'Caveat', cursive; font-weight: 400;">
            a work of 
            <a href="https://www.upwritsolutions.com" class="text-center text-decoration-none text-light" target="__blank">
                UpWrit Solutions 
            </a>
        </p>
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        All rights reserved &copy;<script>document.write(new Date().getFullYear());</script> | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
    </div>
    </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    </div>
@endsection
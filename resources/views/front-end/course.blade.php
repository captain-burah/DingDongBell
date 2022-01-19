@extends('Layouts.course')

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
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/course" class="nav-link">Tuition<br>උපකාරක පංති</a></li>
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
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('/images/sl/Tuition banner.png');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="about-video">
					<video width="680" height="350" controls preload="none">
						<source src="Tuition Video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					</div>
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tuition Classes<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">උපකාරක පංති</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 sidebar">
					<div class="sidebar-box bg-white ftco-animate">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Search...">
							</div>
						</form>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">GCE A/L ICT Past Papers English Medium</h3>
						<ul class="papers-list">
							<li><a href="#">2020 A/L ICT Paper(I)</a></li>
							<li><a href="#">2020 A/L ICT Paper(II)</a></li>
							<li><a href="#">2019 A/L ICT Paper(I)</a></li>
							<li><a href="#">2019 A/L ICT Paper(II)</a></li>
							<li><a href="#">2018 A/L ICT Paper(I)</a></li>
							<li><a href="#">2018 A/L ICT Paper(II)</a></li>
							<li><a href="#">2017 A/L ICT Paper(I)</a></li>
							<li><a href="#">2017 A/L ICT Paper(II)</a></li>
							<li><a href="#">2016 A/L ICT Paper(I)</a></li>
							<li><a href="#">2016 A/L ICT Paper(II)</a></li>
							<li><a href="#">2015 A/L ICT Paper(I)</a></li>
							<li><a href="#">2015 A/L ICT Paper(II)</a></li>
							<li><a href="#">2014 A/L ICT Paper(I)</a></li>
							<li><a href="#">2014 A/L ICT Paper(II)</a></li>
							<li><a href="#">2013 A/L ICT Paper(I)</a></li>
							<li><a href="#">2013 A/L ICT Paper(II)</a></li>
							<li><a href="#">2012 A/L ICT Paper(I)</a></li>
							<li><a href="#">2012 A/L ICT Paper(II)</a></li>
							<li><a href="#">2011 A/L ICT Paper(I)</a></li>
							<li><a href="#">2011 A/L ICT Paper(II)</a></li>
						</ul>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">GCE A/L ICT Past Papers Sinhala Medium</h3>
						<ul class="papers-list">
							<li><a href="#">2020 A/L ICT Paper(I)</a></li>
							<li><a href="#">2020 A/L ICT Paper(II)</a></li>
							<li><a href="#">2019 A/L ICT Paper(I)</a></li>
							<li><a href="#">2019 A/L ICT Paper(II)</a></li>
							<li><a href="#">2018 A/L ICT Paper(I)</a></li>
							<li><a href="#">2018 A/L ICT Paper(II)</a></li>
							<li><a href="#">2017 A/L ICT Paper(I)</a></li>
							<li><a href="#">2017 A/L ICT Paper(II)</a></li>
							<li><a href="#">2016 A/L ICT Paper(I)</a></li>
							<li><a href="#">2016 A/L ICT Paper(II)</a></li>
							<li><a href="#">2015 A/L ICT Paper(I)</a></li>
							<li><a href="#">2015 A/L ICT Paper(II)</a></li>
							<li><a href="#">2014 A/L ICT Paper(I)</a></li>
							<li><a href="#">2014 A/L ICT Paper(II)</a></li>
							<li><a href="#">2013 A/L ICT Paper(I)</a></li>
							<li><a href="#">2013 A/L ICT Paper(II)</a></li>
							<li><a href="#">2012 A/L ICT Paper(I)</a></li>
							<li><a href="#">2012 A/L ICT Paper(II)</a></li>
							<li><a href="#">2011 A/L ICT Paper(I)</a></li>
							<li><a href="#">2011 A/L ICT Paper(II)</a></li>
						</ul>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">ICT Text Book & Workbook(English)</h3>
						<ul class="papers-list">
							<li><a href="#">Grade 11 ICT Text Book</a></li>
							<li><a href="#">Grade 11 ICT Text Book</a></li>
							<li><a href="#">Grade 10 ICT Text Book</a></li>
							<li><a href="#">Grade 10 ICT Text Book</a></li>
							<li><a href="#">Grade 9 ICT Text Book</a></li>
							<li><a href="#">Grade 9 ICT Text Book</a></li>
							<li><a href="#">Grade 8 ICT Text Book</a></li>
							<li><a href="#">Grade 8 ICT Text Book</a></li>
							<li><a href="#">Grade 7 ICT Text Book</a></li>
							<li><a href="#">Grade 7 ICT Text Book</a></li>
							<li><a href="#">Grade 6 ICT Text Book</a></li>
							<li><a href="#">Grade 6 ICT Text Book</a></li>
						</ul>
					</div>

					<div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">ICT පෙළ පොත සහ වැඩ පොත (සිංහල)</h3>
						<ul class="papers-list">
							<li><a href="#">11 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">10 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">9 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">9 ශ්‍රේණිය ICT වැඩ පොත</a></li>
							<li><a href="#">8 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">8 ශ්‍රේණිය ICT වැඩ පොත</a></li>
							<li><a href="#">7 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">7 ශ්‍රේණිය ICT වැඩ පොත</a></li>
							<li><a href="#">6 ශ්‍රේණිය ICT පෙළ පොත</a></li>
							<li><a href="#">6 ශ්‍රේණිය ICT වැඩ පොත</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/AL%20Tuition.png);">
									<span class="price">GCE A/Level</span>
								</a>
								<div class="text p-4">
									<h3><a href="#">උසස් පෙළ සඳහා ICT පංති</a></h3>
									<p class="advisor">සිද්ධාන්ත සහ ප්‍රයෝගික ක්‍රියාකාරකම් සියල්ල ආවරණය වන පරිදි ඉංග්‍රීසි සහ සිංහල මාධ්‍ය මගින් ICT පංති වෙන වෙනම පැවැත්වේ. අප පංතියේදී සියළුම සිසුන් එක් එක් පාඩම් අවසානයේ දී මාසික පරීක්ෂණ සදහා සහභාගී වන අතර එමගින් පාසැල් වාර විභාග සඳහා ඉහළ ලකුණු ලබා ගැනීමට හැකිවනු ඇත. Practical Class මගින් සියළුම ප්‍රයෝගික ඒකක ආවරණය කරන අතර Paper Class මගින් උසස් පෙළ විභාගය සඳහා ආදර්ශ ප්‍රශ්න පත්‍ර ලිවීම සහ ලකුණු ලබා දීම සිදුකරයි. මෙමගින් සිසුන්ගේ දුර්වලතා අවම කර කාලය කලමනාකරණය සහ ලකුණු මට්ටම් වර්ධනය මගින් උසස් පෙළ විභාගයේදී විශිෂ්ඨ ප්‍රතිඵල ලබාගැනීමට උපකාර වේ.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/OL%20ICT%20Tuition.png);">
									<span class="price">GCE O/Level</span>
								</a>
								<div class="text p-4">
									<h3><a href="#">සාමාන්‍ය පෙළ සඳහා ICT පංති</a></h3>
									<p class="advisor">10 ශ්‍රේණිය සහ 11 ශ්‍රේණිය සඳහා සාමාන්‍ය පෙළ විශිෂ්ඨ ප්‍රතිඵල ඉලක්ක කරගෙන අප ආයතනයේ ICT විෂය සඳහා පංති පවත්වන අතර සිද්ධාන්ත සහ ප්‍රයෝගික කොටස් පංති කාලය තුලදී ආවරණය වේ. එමෙන්ම විශේෂයෙන් සැකසු පුනරීක්ෂණ පොත මගින් බහුවරණ ප්‍රශ්න සහ රචනා ප්‍රශ්න සදහා පිළිතුරු සපයන අතර මාසික පරීක්ෂණ මගින් සිසුන්ගේ ලකුණු මට්ටම් වර්ධනය කරනු ලැබේ. තවද Past Papers පුහුණුව සිසුන්ට විභාගයේ දී ඉහළ ලකුණු ලබාගැනීම ට මහත් රුකුලක් වේ.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/Grade%2009%20Tuition.png);">
									<span class="price">Grade 09</span>
								</a>
								<div class="text p-4">
									<h3><a href="#">09 ශ්‍රේණිය සඳහා ICT පංති</a></h3>
									<p class="advisor">සෑම සිසුවකුටම විශේෂ අවදානය ලබාදෙමින් ICT විෂය සාර්ථකව හැදෑරීම සඳහා IT Panthiya ආයතනය මගින් 9 ශ්‍රේණිය සිසුන් වෙනුවෙන් විශේෂ වැඩපිළිවෙලක් අනුගමය කරනු ලබයි. මෙහි දී විෂය නිර්දේශයට අනුව ඉගැන්වීම සහ ප්‍රයෝගික ක්‍රියාකාරකම් පංති කාමර තුලදීම සිදු කිරීමෙන් සිසුන්ට මෙම විෂය පිළිබඳව මහත් අසාවක් සහ ඇල්මක් ඇති කරයි. තවද සාමාන්‍ය පෙළ සඳහා ද ICT විෂය තෝරාගැනීම සෑම සිසුවකුගේම අනාගතයට මහත් සේ උපකාරී වේ.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/Grade%2008%20Tuition.png);">
									<span class="price">Grade 08</span>
								</a>
								<div class="text p-4">
									<h3><a href="#">08 ශ්‍රේණිය සඳහා ICT පංති</a></h3>
									<p class="advisor">තොරතුරු තාක්ෂණ විෂය අනෙක් විෂයයන්ට වඩා වෙනස් වන අතර ප්‍රයෝගික ක්‍රියාකාරකම් මූලික කරගනිමින් සැකසුනු විෂයකි. මෙහි දී සිසුන්ට මෙම විෂය හැදෑරීමට ලැබෙන අවස්තාව නිසා ඔවුන්ට තාක්ෂණය තුළින් ඉදිරියට යෑමට හැකිවේ. IT Panthiya ආයතනය මගින් සෑම සිසුවකුටම ප්‍රායෝගික හා සිද්ධාන්ත කොටස් හොඳින් ධාරණය කරගැනීමට උපකාර කරන අතර විශේෂයෙන් සැකසුනු පංති වැඩපොත මගින් එක් එක් පාඩම සාර්ථකව ආවරණය කරනු ලබයි.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/Grade%2007%20Tuition.png);">
									<span class="price">Grade 07</span>
								</a>
								<div class="text p-4">
									<h3><a href="#">07 ශ්‍රේණිය සඳහා ICT පංති</a></h3>
									<p class="advisor">පාඩම් හයකින් යුතු විෂය නිර්දේශය හැදෑරීමට සරල ක්‍රම සහ ප්‍රායෝගික කොටස් සාර්ථකව ආවරණය කිරීමට IT Panthiya ආයතනය මගින් විශේෂ වැඩපිළිවෙලක් 7 ශ්‍රේණිය සිසුන් සඳහා අනුගමනය කරනු ලබයි. දරුන්ට ICT විෂය ඉදිරියට හැදෑරීමට ආසාවක් ගොඩනැගීමට නම් ඔවුන්ට පරිගණක ප්‍රායෝගික ක්‍රියාකාරකම් සිදුකිරීමට අවස්තාව ලබාදීම අනිවාර්යය වේ. එබැවින් දක්ෂ ගුරු මඩුල්ලක් මගින් මෙහෙයවන ICT පංතියට ඔබේ දරුවා අදම යොමු කිරීම ආදරණීය දෙමාපියන්ගේ වගකීම වේ.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<a href="#" class="img" style="background-image: url(images/sl/Grade%2006%20Tuition.png);">
									<span class="price">Grade 06</span>
								</a>
								<div class="text p-4">
									<h3><a href="#"> 06 ශ්‍රේණිය සඳහා ICT පංති</a></h3>
									<p class="advisor">කුඩා වයසේ සිටම තොරතුරු තාක්ෂණ (IT) විෂය හැදෑරීමට ලංකාවේ සෑම සිසුවකුම යොමු කිරීම තුළින් ඔවුන්ගේ කුසලතා සහ හැකියාවන් නිසැකවම ඔප්නංවා ගත හැකි වනු ඇත. එමෙන්ම ඔවුන්ගේ මනස තුල නව නිර්මාණ සහ නව අදහස් ගොඩනැගීමද කුඩා කල සිටම සිදුවන බැවින් ඔවුන්ගේ දැනුම වර්ධනය කරගැනීමට IT Panthiya ආයතනය මගින් තොරතුරු තාක්ෂණ විෂය ප්‍රායෝගික කොටස් සමග මනාව හැදෑරීමට අවස්තාව ලබා දේ. ලංකාවේ IT ක්ෂේත්‍රය ගොඩනැංවීම අරමුණු කරගත් අප ආයතනය මගින් දරුවන්ට නොබියව මෙම ක්ෂේත්‍රයේ ඉදිරියට යෑමට අඩිතාලම සාදනු ලැබේ.</p>
									<ul class="d-flex justify-content-between">
										<li>ඇතුලත් වීමේ ගාස්තු සහ විස්තර දැනගැනීමට අමතන්න</li>
										<li class="price">0719896700/0771133205</li>
									</ul>
								</div>
							</div>
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


			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>
			
		</div>
@endsection
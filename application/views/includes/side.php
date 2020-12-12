 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Education </title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>css/green.css" rel="stylesheet">
	<!-- JQVMap -->
    <link href="<?php echo base_url(); ?>css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>css/custom.min.css" rel="stylesheet">

      <link href="<?php echo base_url(); ?>css/ubk_style.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>js/jquery.min.js" rel="stylesheet">
      <link href="<?php echo base_url(); ?>js/office.js" rel="stylesheet">
      <!-- datepicker flatpickr -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="javascript:void(0);" class="site_title"><i class="fa fa-home"></i> <span>DASHBOARD</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                 <ul class="nav side-menu">
                 <li>
					<a href="<?php echo base_url(); ?>go_home">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
					</a>
				 </li>
				 <li>
					<a href="<?php echo base_url(); ?>add_slider_details">
						<i class="fa fa-tachometer" aria-hidden="true"></i> Banner
					</a>
				 </li>
			  <li class="">
					 <a>
					  <i class="fa fa-wrench" aria-hidden="true"></i> Manage class<span class="fa fa-chevron-down"></span>
					 </a>
                    <ul class="nav child_menu" style="display: none;">
						  <li>
						   <a href="<?php echo base_url(); ?>add_class">Add class</a>
						 </li>
						 <li>
						   <a href="<?php echo base_url()?>list_class_details">List Class</a>
						 </li>
             <!-- <li>
               <a href="<?php echo base_url()?>list_subcategory">Fashion Subcategory List</a>
             </li>-->
                    </ul>
                  </li>

          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Subject<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">
              <li>
               <a href="<?php echo base_url(); ?>add_subject">Add Subject</a>
             </li>
             <li>
               <a href="<?php echo base_url()?>list_subject_details">List Subject</a>
             </li>
                </ul>
                  </li>
				 <li class="">
					 <a>
					  <i class="fa fa-wrench" aria-hidden="true"></i> Manage Chapter<span class="fa fa-chevron-down"></span>
					 </a>
                    <ul class="nav child_menu" style="display: none;">
						  <li>
						   <a href="<?php echo base_url(); ?>add_chapter"> Add Chapter  </a>
						 </li>
						  <li>
						   <a href="<?php echo base_url(); ?>add_chapter_video"> Add Chapter video  </a>
						 </li>
						 <li>
						   <a href="<?php echo base_url()?>list_chaptername"> List chapter Name</a>
						 </li>
						 <li>
						   <a href="<?php echo base_url()?>list_chapter_details"> List chapter with video</a>
						 </li>
                    </ul>
                  </li>


				  <li class="">
					 <a>
					  <i class="fa fa-wrench" aria-hidden="true"></i> Manage User<span class="fa fa-chevron-down"></span>
					 </a>
                    <ul class="nav child_menu" style="display: none;">
                       <li>
               <a href="<?php echo base_url(); ?>add_user"> Add User</a>
             </li>

						 <li>
						   <a href="<?php echo base_url()?>list_user_details">User List</a>
						 </li>
                    </ul>
                  </li>

          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Aboutus<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <!--<li>
               <a href="<?php echo base_url()?>add_about">Add Aboutus</a>
             </li>-->

             <li>
               <a href="<?php echo base_url()?>list_about_details">List Aboutus</a>
             </li>
                    </ul>
                  </li>
          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i>Contacts and User Qurey<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <li>
               <a href="<?php echo base_url()?>list_user_qureys">List Qureys</a>
             </li>

             <li>
               <a href="<?php echo base_url()?>list_contact_details">List Cotactus</a>
             </li>
                    </ul>
                  </li>

          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Privacy<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <!--<li>
               <a href="<?php echo base_url()?>add_privacy">Add Privacy</a>
             </li>-->

             <li>
               <a href="<?php echo base_url()?>list_privacy_details">List Privacy</a>
             </li>
                    </ul>
                  </li>

          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Term & Condition<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <!--<li>
               <a href="<?php echo base_url()?>add_term">Add Term</a>
             </li>-->

             <li>
               <a href="<?php echo base_url()?>list_term_details">List Term</a>
             </li>
                    </ul>
                  </li>



                   <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Package<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <li>
               <a href="<?php echo base_url()?>add_package">Add Package</a>
             </li>

             <li>
               <a href="<?php echo base_url()?>list_package_details">List Package</a>
             </li>
                    </ul>
                  </li>
          <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Subcription<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <li>
               <a href="<?php echo base_url()?>list_subscription_details">Add Subcription</a>
             </li>
              <li>
               <a href="<?php echo base_url()?>list_order">List Subscription</a>
             </li>
                    </ul>
                  </li>
				   <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Exam<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <li>
               <a href="<?php echo base_url()?>create_exam">Add Exam</a>
             </li>
              <li>
               <a href="<?php echo base_url()?>list_exam">List Exam</a>
             </li>
                    </ul>
                  </li>
			<li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Question Bank<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">
              <li>
               <a href="<?php echo base_url()?>add_questionbank">Add Question</a>
             </li>
             <li>
               <a href="<?php echo base_url()?>list_questionbank">List Questionbank</a>
             </li>
                    </ul>
      </li>	  
      <li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Manage Exam Subscription<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">
              <li>
               <!-- <a href="<?php echo base_url()?>add_questionbank">Add Question</a> -->
             </li>
             <li>
             <a href="<?php echo base_url()?>list_exam_subscription_details">Add Subcription</a>
               <a href="<?php echo base_url()?>list_exam_subscription">List Subcription</a>
             </li>
                    </ul>
      </li>
      <li class="">
        <a>
          <i class="fa fa-wrench" aria-hidden="true"></i> Manage Plans(Offers) Subscription<span class="fa fa-chevron-down"></span>
        </a>
        <ul class="nav child_menu" style="display: none;">

          <li>
               <a href="<?php echo base_url()?>add_package">Add Plan (Offers) </a>
          </li>

          <li>
            <a href="<?php echo base_url()?>list_package_details">List Plans (Offers)</a>
          </li>
       </ul>
       </li>
      <!--<li class=""><a href="<?php //echo base_url(); ?>alluser_notification"><i class="fa fa-picture-o" aria-hidden="true"></i>oo Notificatrion <span class="fa fa-chevron-down"></span></a>-->
                    <!--<ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php //echo base_url(); ?>alluser_notification">All User</a></li>

                    </ul>-->
                  <!--</li>-->
      <!--<li class=""><a href="<?php echo base_url(); ?>notification"><i class="fa fa-picture-o" aria-hidden="true"></i>Notificatrion <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>alluser_notification">All User</a></li>

                    </ul>
                  </li> -->

		<li class="">
           <a>
            <i class="fa fa-wrench" aria-hidden="true"></i> Notificatrion<span class="fa fa-chevron-down"></span>
           </a>
                    <ul class="nav child_menu" style="display: none;">

             <li>
               <a href="<?php echo base_url()?>notification">Send Notificatrion</a>
             </li>
              <li>
               <a href="<?php echo base_url()?>list_notification">List Notificatrion</a>
             </li>
                    </ul>
        </li>
       <li class=""><a href="<?php echo base_url(); ?>update_refer_amount"><i class="fa fa-picture-o" aria-hidden="true"></i> Refer Amount <span class="fa fa-chevron-down"></span></a>
                    <!--<ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>alluser_notification">All User</a></li>

                    </ul>-->
                  </li>  


				 <!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Change Logo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>logo_change">Site Logo</a></li>

                    </ul>
                  </li>-->

				   <!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Offer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>add_offers">Add Offer</a></li>
					  <li><a href="<?php echo base_url(); ?>offers_list">Offer List</a></li>
					  <li><a href="<?php echo base_url(); ?>update_offer_banner">Update Banner Offer</a></li>
                    </ul>
                  </li>-->

				<!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>banner_change">Add Banner</a></li>
                      <li><a href="<?php echo base_url(); ?>update_banner">Update Site Banner</a></li>

                    </ul>
                  </li>

				  <li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Gallery <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                   <li><a href="<?php echo base_url(); ?>add_gallery">Add Gallery</a></li>
                      <li><a href="<?php echo base_url(); ?>update_gallery">Update Gallery Image</a></li>
                    </ul>
                  </li>-->
				  <!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Feedback <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                   <li><a href="<?php echo base_url(); ?>add_portfolio">Add Feedback</a></li>
                      <li><a href="<?php echo base_url(); ?>update_portfolio">Update Feedback</a></li>
                    </ul>
                  </li>-->


                  <!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Recent News <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                   <li><a href="<?php echo base_url(); ?>add_news">Add News</a></li>
                      <li><a href="<?php echo base_url(); ?>update_news">Update News</a></li>
                    </ul>
                  </li>-->
				   <!--<li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage Career <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>add_career">Add Career</a></li>
                      <li><a href="<?php echo base_url(); ?>update_career">Update Career </a></li>
                      <li><a href="<?php echo base_url(); ?>download_cv">Download CV </a></li>
                    </ul>
                  </li>
				      <li class=""><a><i class="fa fa-picture-o" aria-hidden="true"></i> Manage App Url <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                   <li><a href="<?php echo base_url(); ?>add_mahindra_app">Add App Url</a></li>
                      <li><a href="<?php echo base_url(); ?>update_mahindra_app">Update App Url</a></li>
                    </ul>
                  </li>-->
				 <!-- <li class=""><a><i class="fa fa-pencil-square" aria-hidden="true"></i> Manage Cms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="<?php echo base_url(); ?>home_cms">Home page</a></li>
                      <li><a href="<?php echo base_url(); ?>about_us">About Us</a></li>
					   <li><a href="<?php echo base_url(); ?>contact_us">contact Us</a></li>
					  <li><a href="<?php echo base_url(); ?>social_media">Social Media</a></li>
                       <li><a href="javascript:void(0)">faq</a></li>
                     <li><a href="javascript:void(0)">Contact Us</a></li>
                    </ul>
                  </li>
				    <li>
					<a href="<?php echo base_url(); ?>seo">
						<i class="fa fa-share-alt" aria-hidden="true"></i> SEO
					</a>
				 </li>-->

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

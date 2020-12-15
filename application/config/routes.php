<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'admin_main/index';
$route['404_override'] = '';
$route['main/(:any)'] = "main/$1";
/*admin*/
$route['send_otp'] = 'admin_apps/send_otp';
$route['admin'] = 'user/index';
$route['go_home'] = 'admin_main/go_home';
$route['login'] = 'admin_main/login';
$route['browse_members'] = 'admin_main/browse_members';
$route['add_category/(:any)'] = "product/add_category/$1";
$route['list_category/(:any)'] = "product/list_category/$1";
$route['list_subcategory'] = 'product/list_subcategory';
$route['list_subcategory/(:any)'] = "product/list_subcategory/$1";
$route['edit_member/(:any)'] = 'admin_main/browse_members/$1';
$route['edit_member'] = 'admin_main/edit_member';
$route['edit_member/(:any)'] = "admin_main/edit_member/$1";
$route['upload'] = 'Upload_multiple/upload';
$route['upload/(:any)'] = "Upload_multiple/upload/$1";
$route['update_imagee'] = 'Upload_multiple/update_imagee';
$route['update_imagee/(:any)'] = "Upload_multiple/update_imagee/$1";
$route['forgot_password'] = 'admin_main/forgot_password';
$route['chn_password'] = 'admin_main/chn_password';
$route['profile'] = 'admin_main/profile';
$route['option'] = 'admin_main/option';
$route['menu'] = 'admin_main/menu';
$route['logo_change'] = 'admin_main/logo_change';
$route['edit_banner'] = 'admin_main/edit_banner';
$route['edit_banner/(:any)'] = "admin_main/edit_banner/$1";
$route['update_banner'] = 'admin_main/update_banner';
$route['update_banner/(:any)'] = "admin_main/update_banner/$1";
$route['about_us'] = 'admin_main/about_us';
$route['about_us/(:any)'] = "admin_main/about_us/$1";
$route['edit_about'] = 'admin_main/edit_about';
$route['edit_about/(:any)'] = "admin_main/edit_about/$1";
$route['edit_menu'] = "admin_main/edit_menu";
$route['edit_menu/(:any)'] = "admin_main/edit_menu/$1";
$route['contact_us'] = "admin_main/contact_us";
$route['contact_us/(:any)'] = "admin_main/contact_us/$1";
$route['edit_banner_apps'] = "admin_apps/edit_banner_apps";
$route['edit_banner_apps/(:any)'] = "admin_apps/edit_banner_apps/$1";
$route['update_apps_banner'] = 'admin_apps/update_apps_banner';
$route['logo_apps_change'] = 'admin_apps/logo_apps_change';
$route['delete_banner'] = 'admin_apps/delete_banner';
$route['delete_banner/(:any)'] = "admin_apps/delete_banner/$1";
$route['social_media'] = 'admin_main/social_media';
$route['social_media/(:any)'] = "admin_main/social_media/$1";
$route['add_car'] = 'product/add_car';
$route['add_car/(:any)'] = "product/add_car/$1";
$route['add_product'] = 'product/add_product';
$route['add_product/(:any)'] = "product/add_product/$1";
$route['list_model'] = 'product/list_model';
$route['list_model/(:any)'] = "product/list_model/$1";
$route['list_product'] = 'product/list_product';
$route['list_product/(:any)'] = "product/list_product/$1";
$route['edit_category'] = 'product/edit_category';
$route['edit_category/(:any)'] = "product/edit_category/$1";
$route['delete_category'] = 'product/delete_category';
$route['delete_category'] = 'product/delete_category';
$route['delete_category/(:any)'] = "product/delete_category/$1";
$route['delete_product'] = 'product/delete_product';
$route['delete_product/(:any)'] = "product/delete_product/$1";
$route['edit_product'] = 'product/edit_product';
$route['edit_product/(:any)'] = "product/edit_product/$1";

//class

$route['add_class'] = 'product/add_home';
$route['add_class_details'] = 'product/add_home_details';
$route['list_class_details'] = 'product/list_home';
$route['edit_class/(:any)'] = 'product/edit_home/$1';
$route['update_class/(:any)'] = "product/update_home/$1";
$route['delete_class/(:any)'] = "product/delete_home_details/$1";
$route['add_slider_details'] = 'product/add_slider_details';

//subject
$route['add_subject'] = 'product/add_about';
$route['add_subject_details'] = 'product/add_about_details';
$route['list_subject_details'] = 'product/list_about';
$route['edit_subject/(:any)'] = 'product/edit_about/$1';
$route['update_subject/(:any)'] = "product/update_about/$1";
$route['delete_subject/(:any)'] = "product/delete_about_details/$1";

//subject exam
$route['add_exam_subject'] = 'exam_product/add_exam_subject';
$route['add_exam_subject_details'] = 'exam_product/add_exam_subject_details';
$route['list_exam_subject'] = 'exam_product/list_exam_subject';
$route['edit_exam_subject/(:any)'] = 'exam_product/edit_exam_subject/$1';
$route['update_exam_subject/(:any)'] = "exam_product/update_exam_subject/$1";
$route['delete_exam_subject/(:any)'] = "exam_product/delete_exam_subject_details/$1";

//chapter
$route['add_chapter_video'] = 'product/add_chapter';
$route['add_chapter_details'] = 'product/add_member_details';
$route['list_chapter_details'] = 'product/list_member';
$route['edit_chapter/(:any)'] = 'product/edit_member/$1';
$route['update_chapter/(:any)'] = "product/update_member/$1";
$route['delete_chapter/(:any)'] = "product/delete_member_details/$1";
$route['fetchsubject'] = 'product/fetchsubject';
$route['fetchchapter'] = 'product/fetchchapter';
$route['updatepopular_video1'] = "product/updatepopular_video1";
$route['updatepopular_video2'] = "product/updatepopular_video2";
$route['add_chapter'] = 'product/add_member';
$route['add_chapter_details1'] = 'product/add_chapter_details';
$route['list_chaptername'] = 'product/list_chaptername';
$route['edit_chapter_name/(:any)'] = 'product/edit_chapter_name/$1';
//$route['update_chapter12/(:any)'] = "product/update_chapter/$1";
$route['delete_chapter_name/(:any)'] = "product/delete_chapter_name/$1";

//Exam chapter name
$route['add_exam_chapter'] = 'exam_product/add_exam_chapter';
$route['add_exam_chapter_details'] = 'exam_product/add_exam_chapter_details';
$route['fetch_exam_subject'] = 'exam_product/fetch_exam_subject';

$route['list_exam_chapter_name'] = 'exam_product/list_exam_chapter_name';
$route['edit_exam_chapter_name/(:any)'] = 'exam_product/edit_exam_chapter_name/$1';
$route['delete_exam_chapter_name/(:any)'] = "exam_product/delete_exam_chapter_name/$1";

//Exam Chapter video
$route['add_exam_chapter_video'] = 'exam_product/add_exam_chapter_video';
$route['fetch_exam_chapter'] = 'exam_product/fetch_exam_chapter';

$route['exam_chapter_upload_image'] = 'exam_product/exam_chapter_upload_image';
$route['exam_chapter_upload_video'] = 'exam_product/exam_chapter_upload_video';
$route['add_exam_chapter_details'] = 'exam_product/exam_chapter_details_add_form';
$route['list_exam_chapter_videos'] = 'exam_product/list_exam_chapter_videos';

$route['edit_exam_chapter_video/(:any)'] = 'exam_product/edit_exam_chapter_video/$1';
$route['update_exam_chapter_video/(:any)'] = "exam_product/update_exam_chapter_video/$1";
$route['delete_exam_chapter_video/(:any)'] = "exam_product/delete_exam_chapter_video/$1";

//subsription
$route['add_subscription/(:any)'] = 'product/add_subscription/$1';
//vikash
$route['add_subject_subs/(:any)'] = 'product/add_subject_subs/$1';
//===
$route['add_subscription_details'] = 'product/add_subscription_details';
//vikash
$route['add_subject_subs_details'] = 'product/add_subject_subs_details';
//===
$route['list_subscription_details'] = 'product/list_subscription';
$route['edit_subscription/(:any)'] = 'product/edit_subscription/$1';
$route['update_subscription/(:any)'] = "product/update_subscription/$1";
$route['delete_subscription/(:any)'] = "product/delete_subscription_details/$1";
$route['fetchsubscription'] = 'product/fetchsubscription';
$route['updateuser'] = 'product/updateuser';
$route['fetchsubject_byid'] = 'product/fetchsubject_byid';
$route['fetchamountsubject_byid'] = 'product/fetchamountsubject_byid';
//termcondition
$route['add_term'] = 'product/add_testmonials';
$route['add_term_details'] = 'product/add_testmonials_details';
$route['list_term_details'] = 'product/list_testmonials';
$route['edit_term/(:any)'] = 'product/edit_testmonials/$1';
$route['update_term/(:any)'] = "product/update_testmonials/$1";
$route['delete_term/(:any)'] = "product/delete_testmonials_details/$1";


//about
$route['add_about'] = 'product/add_service';
$route['add_about_details'] = 'product/add_service_details';
$route['list_about_details'] = 'product/list_service';
$route['edit_about/(:any)'] = 'product/edit_service/$1';
$route['update_about/(:any)'] = "product/update_service1/$1";
$route['delete_about/(:any)'] = "product/delete_service_details/$1";
//privacy
$route['add_privacy'] = 'product/add_project';
$route['add_privacy_details'] = 'product/add_project_details';
$route['list_privacy_details'] = 'product/list_project';
$route['edit_privacy/(:any)'] = 'product/edit_project/$1';
$route['update_privacy/(:any)'] = "product/update_project/$1";
$route['delete_privacy/(:any)'] = "product/delete_project_details/$1";
$route['list_contact_details'] = 'product/list_contact_details';
$route['edit_contactus/(:any)'] = 'product/edit_contactus/$1';

//user
$route['add_user'] = 'product/add_user';
$route['add_user_details'] = 'product/add_user_details';
$route['list_user_details'] = 'product/list_user';
$route['edit_user/(:any)'] = 'product/edit_user/$1';
$route['update_user/(:any)'] = "product/update_user/$1";
$route['delete_user/(:any)'] = "product/delete_user_details/$1";
$route['list_order'] = 'product/list_order';
$route['list_user_qureys'] = 'product/list_user_qureys';

//plans
$route['add_plan'] = 'product/add_plan';
$route['add_plan_details'] = 'product/add_plan_details';
$route['list_plan'] = 'product/list_plan';
//package
$route['add_package'] = 'product/add_package';
$route['add_package_details'] = 'product/add_package_details';
$route['list_package_details'] = 'product/list_package';
$route['edit_package/(:any)'] = 'product/edit_package/$1';
$route['update_package/(:any)'] = "product/update_package/$1";
$route['delete_package/(:any)'] = "product/delete_package_details/$1";

$route['edit_app_img'] = 'product/edit_app_img';
$route['edit_app_img/(:any)'] = "product/edit_app_img/$1";
$route['app_img_product'] = 'product/app_img_product';
$route['app_img_product/(:any)'] = "product/app_img_product/$1";
$route['site_img_product'] = 'product/site_img_product';
$route['site_img_product/(:any)'] = "product/site_img_product/$1";
$route['add_city'] = 'product/add_city';
$route['add_city/(:any)'] = "product/add_city/$1";
$route['edit_car'] = 'product/edit_car';
$route['edit_car/(:any)'] = "product/edit_car/$1";
$route['home_cms'] = 'product/home_cms';
$route['edit_welcome'] = 'product/edit_welcome';
$route['edit_welcome/(:any)'] = "product/edit_welcome/$1";
$route['add_model'] = 'product/add_model';
$route['edit_model'] = 'product/edit_model';
$route['edit_model/(:any)'] = "product/edit_model/$1";
$route['add_offers'] = 'product/add_offers';
$route['add_offers/(:any)'] = "product/add_offers/$1";
$route['edit_offers'] = 'product/edit_offers';
$route['edit_offers/(:any)'] = "product/edit_offers/$1";
$route['edit_service'] = 'product/edit_service';
$route['edit_service/(:any)'] = "product/edit_service/$1";
$route['offers_list'] = 'product/offers_list';
$route['offers_list/(:any)'] = "product/offers_list/$1";
$route['more_car_images'] = 'product/more_car_images';
$route['more_car_images/(:any)'] = "product/more_car_images/$1";
$route['edit_exterior_image'] = 'product/edit_exterior_image';
$route['edit_exterior_image/(:any)'] = "product/edit_exterior_image/$1";
$route['list_car'] = 'product/list_car';
$route['add_gallery'] = 'admin_main/add_gallery';
$route['update_gallery'] = 'admin_main/update_gallery';
$route['update_gallery/(:any)'] = "admin_main/update_gallery/$1";
$route['edit_gallery'] = 'admin_main/edit_gallery';
$route['edit_gallery/(:any)'] = "admin_main/edit_gallery/$1";
$route['service_appointment'] = 'admin_main/service_appointment';
$route['service_appointment/(:any)'] = "admin_main/service_appointment/$1";
$route['test_drive'] = 'admin_main/test_drive';
$route['test_drive/(:any)'] = "admin_main/test_drive/$1";
$route['add_career'] = 'admin_main/add_career';
$route['add_career/(:any)'] = "admin_main/add_career/$1";
$route['update_career'] = 'admin_main/update_career';
$route['update_career/(:any)'] = "admin_main/update_career/$1";
$route['edit_career'] = 'admin_main/edit_career';
$route['edit_career/(:any)'] = "admin_main/edit_career/$1";
$route['download_cv'] = 'admin_main/download_cv';
$route['get_model_bysegment'] = 'product/get_model_bysegment';
$route['add_portfolio'] = 'admin_main/add_portfolio';
$route['add_portfolio/(:any)'] = "admin_main/add_portfolio/$1";
$route['update_portfolio'] = 'admin_main/update_portfolio';
$route['update_portfolio/(:any)'] = "admin_main/update_portfolio/$1";
$route['edit_portfolio'] = 'admin_main/edit_portfolio';
$route['edit_portfolio/(:any)'] = "admin_main/edit_portfolio/$1";
$route['add_news'] = 'admin_main/add_news';
$route['add_news/(:any)'] = "admin_main/add_news/$1";
$route['update_news'] = 'admin_main/update_news';
$route['update_news/(:any)'] = "admin_main/update_news/$1";
$route['edit_news'] = 'admin_main/edit_news';
$route['edit_news/(:any)'] = "admin_main/edit_news/$1";
$route['old_list_car'] = 'product/old_list_car';
$route['edit_old_car'] = 'product/edit_old_car';
$route['edit_old_car/(:any)'] = "product/edit_old_car/$1";
$route['add_old_car'] = 'product/add_old_car';
$route['add_old_car/(:any)'] = "product/add_old_car/$1";
$route['edit_welcome1'] = 'product/edit_welcome1';
$route['edit_welcome1/(:any)'] = "product/edit_welcome1/$1";

$route['update_offer_banner'] = 'admin_main/update_offer_banner';
$route['update_feedback'] = 'admin_main/update_feedback';
$route['seo'] = 'admin_main/seo';


$route['edit_banner_offer'] = 'admin_main/edit_banner_offer';
$route['edit_banner_offer/(:any)'] = "admin_main/edit_banner_offer/$1";
$route['get_carname_bysegment'] = 'product/get_carname_bysegment';
$route['get_price_bysegment'] = 'product/get_price_bysegment';

$route['remove_offer'] = 'product/remove_offer';
$route['remove_offer/(:any)'] = "product/remove_offer/$1";

$route['exchange_vehicle'] = 'product/exchange_vehicle';
$route['exchange_vehicle/(:any)'] = "product/exchange_vehicle/$1";
/*delete section*/
$route['del_service'] = 'admin_main/del_service';
$route['del_service/(:any)'] = "admin_main/del_service/$1";

$route['del_test'] = 'admin_main/del_test';
$route['del_test/(:any)'] = "admin_main/del_test/$1";

$route['del_servicelist'] = 'admin_main/del_servicelist';
$route['del_servicelist/(:any)'] = "admin_main/del_servicelist/$1";
$route['del_listmodel/(:any)'] = "admin_main/del_listmodel/$1";

$route['del_listcar/(:any)'] = "admin_main/del_listcar/$1";
$route['del_gallery/(:any)'] = "admin_main/del_gallery/$1";
$route['del_excahnge/(:any)'] = "admin_main/del_excahnge/$1";

$route['add_mahindra_app'] = 'admin_main/add_mahindra_app';
$route['update_mahindra_app'] = 'admin_main/update_mahindra_app';
$route['update_mahindra_app/(:any)'] = "admin_main/update_mahindra_app/$1";
$route['edit_mahindra_app'] = 'admin_main/edit_mahindra_app';
$route['edit_mahindra_app/(:any)'] = "admin_main/edit_mahindra_app/$1";

$route['edit_seo'] = 'admin_main/edit_seo';
$route['edit_seo/(:any)'] = "admin_main/edit_seo/$1";

$route['test'] = 'admin_main/test';
$route['test/(:any)'] = "admin_main/test/$1";

/*===================    06-04-18  ===============*/
$route['hospitalization_List'] = 'product/hospitalization_List';

$route['edit_service_hospitalization'] = 'product/edit_service_hospitalization';
$route['edit_service_hospitalization/(:any)'] = "product/edit_service_hospitalization/$1";
$route['del_hospitalization'] = 'product/del_hospitalization';
$route['del_hospitalization/(:any)'] = "product/del_hospitalization/$1";

/*===================    11-04-18          ===============*/
$route['add_sleep']='admin_main/add_sleep';

$route['sleep_List'] = 'admin_main/sleep_List';
$route['sleep_List/(:any)'] = "admin_main/sleep_List/$1";
$route['add_doctors']='admin_main/add_doctors';
$route['doctors_list']='admin_main/doctors_list';

$route['edit_doctors'] = 'admin_main/edit_doctors';
$route['edit_doctors/(:any)'] = "admin_main/edit_doctors/$1";

$route['del_doctors'] = 'admin_main/del_doctors';
$route['del_doctors/(:any)'] = "admin_main/del_doctors/$1";
/*===================    16-04-18          ===============*/
$route['appointment_list']='admin_main/appointment_list';
$route['appont_del'] = 'admin_main/appont_del';
$route['appont_del/(:any)'] = "admin_main/appont_del/$1";

$route['edit_appointment'] = 'admin_main/edit_appointment';
$route['edit_appointment/(:any)'] = "admin_main/edit_appointment/$1";

$route['edit_sleep'] = 'admin_main/edit_sleep';
$route['edit_sleep/(:any)'] = "admin_main/edit_sleep/$1";
$route['order_list']='admin_main/order_list';
$route['more_details']='admin_main/more_details';
$route['more_details/(:any)'] = "admin_main/more_details/$1";


$route['brandcategory']='admin_main/brandcategory';
$route['brandcategory/(:any)'] = "admin_main/brandcategory/$1";

$route['productcategory']='product/productcategory';
$route['productcategory/(:any)'] = "product/productcategory/$1";
$route['add_subcategory'] = 'product/add_subcategory';

$route['edit_subcategory'] = 'product/edit_subcategory';
$route['edit_subcategory/(:any)'] = "product/edit_subcategory/$1";

$route['delete_subcategory'] = 'product/delete_subcategory';
$route['delete_subcategory/(:any)'] = "product/delete_subcategory/$1";

$route['edit_slider'] = 'product/edit_slider';
$route['edit_slider/(:any)'] = "product/edit_slider/$1";


//json
$route['edit_profile_api']='admin_apps/edit_profile_api';
$route['add_class_api']='admin_apps/add_class_api';
$route['list_class'] = 'admin_apps/list_class';
$route['registration_user'] = 'admin_apps/registration_user';
$route['user_login'] = 'admin_apps/user_login';
$route['list_subject'] = 'admin_apps/list_subject';
$route['list_chapter_bychapter_id'] = 'admin_apps/list_chapter_bychapter_id';
$route['list_chapter_bysubject_id'] = 'admin_apps/list_chapter_bysubject_id';
$route['popular_video'] = 'admin_apps/popular';
$route['list_chapter_name'] = 'admin_apps/list_chapter_name';
$route['list_packages'] = 'admin_apps/list_packages';
$route['user_payment_status'] = 'admin_apps/user_payment_status';
$route['list_contacts'] = 'admin_apps/list_contacts';
$route['check_subscription'] = 'admin_apps/check_subscription';
$route['user_qureis'] = 'admin_apps/user_qureis';
$route['check_subscription_expairy'] = 'admin_apps/check_subscription_expairy';

//$route['list_user_subscription'] = 'admin_apps/list_user_subscription';

$route['checkclassidhere'] = 'admin_apps/checkclassidhere';
$route['list_chapter'] = 'admin_apps/list_chapter';
$route['term_page'] = 'admin_apps/term_page';
$route['list_slider_api'] = 'admin_apps/list_slider_api';
//list_slider_api
/*examp routes start here-12-06-2019*/
$route['create_exam'] = 'product/create_exam';
$route['list_exam'] = 'product/list_exam';
$route['edit_exam/(:any)'] = "product/edit_exam/$1";
$route['update_exam/(:any)'] = "product/edit_exam/$1";
$route['delete_exam/(:any)'] = "product/delete_exam/$1";

$route['list_exam_api'] = 'admin_apps/list_exam_api';
$route['list_exambyid_api'] = 'admin_apps/list_exambyid_api';
$route['list_question_api'] = 'admin_apps/list_question_api';
$route['list_subjectbyid_api'] = 'admin_apps/list_subjectbyid_api';



$route['add_questionbank'] = 'product/add_questionbank';
$route['fetch_exambyid'] = 'product/fetch_exambyid';
$route['add_question'] = 'product/add_question';
$route['list_questionbank'] = 'product/list_questionbank';
$route['edit_questionbank/(:any)/(:any)/(:any)'] = 'product/edit_questionbank/$1/$1/$1';
$route['delete_questionbank(:any)'] = 'product/delete_questionbank/$1';
//exam subscription 
$route['list_exam_subscription'] = 'product/list_exam_subscription';
$route['delete_exam_subscription/(:any)'] = 'product/delete_exam_subscription/$1';
$route['check_exam_subscription_api'] = 'admin_apps/check_exam_subscription_api';
$route['check_exam_subscription_expiry_api'] = 'admin_apps/check_exam_subscription_expiry_api';
$route['list_exam_subscription_details'] = 'product/list_exam_subscription_details';
$route['add_exam_subs_details/(:any)'] = 'product/add_exam_subs_details/$1';
$route['fetch_examsubs_byid'] = 'product/fetch_examsubs_byid';
$route['user_examsubs_payment'] = 'admin_apps/user_examsubs_payment';

//subject subscription 
$route['check_subject_subscription_api'] = 'admin_apps/check_subject_subscription_api';
$route['check_subject_subscription_expiry_api'] = 'admin_apps/check_subject_subscription_expiry_api';
$route['user_subjectsubs_payment'] = 'admin_apps/user_subjectsubs_payment';
//refer code 
$route['user_referid_api'] = 'admin_apps/user_referid_api';
$route['check_referid'] = 'admin_apps/check_referid';
//user
$route['user_walletbyid_api'] = 'admin_apps/user_walletbyid_api';
$route['list_notification_byid_api'] = 'admin_apps/list_notification_byid_api';


//notification  
$route['alluser_notification'] = 'product/alluser_notification';

$route['notification'] = 'product/new_notification';

//update token 
$route['update_token_api'] = 'admin_apps/update_token_api';

//chapter 5/08/19 
$route['chapter_uploadImage'] = 'product/chapter_uploadImage';
$route['chapter_uploadvideo'] = 'product/chapter_uploadvideo';
$route['chapter_details_addForm'] = 'product/chapter_details_addForm';

$route['exam_result_api'] = 'admin_apps/exam_result_api';
$route['list_popularvideo_api'] = 'admin_apps/list_popularvideo_api';

$route['list_examresultbyid_api'] = 'admin_apps/list_examresultbyid_api';

$route['fetch_subscription_byuserid_api'] = 'admin_apps/fetch_subscription_byuserid_api';

//forget pass 
$route['forget_password_api'] = 'admin_apps/forget_password_api';
$route['set_new_password'] = 'product/set_new_password';
$route['set_new_password/(:any)'] = "product/set_new_password/$1";
$route['set_new_userpass'] = 'product/set_new_userpass';

//refer amount 
$route['update_refer_amount'] = "product/update_refer_amount";

$route['list_notification'] = "product/list_notification";
$route['delete_notification/(:any)'] = "product/delete_notification/$1";

$route['update_subsdates'] = "product/update_subsdates";
















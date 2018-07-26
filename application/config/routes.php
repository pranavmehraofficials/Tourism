<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'tourism/home_controller';
$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */

$route['index']    = 'tourism/home_controller/index';
$route['about-us'] = 'tourism/home_controller/about_us';
$route['contact-us'] = 'tourism/home_controller/contact_us';

//USER
$route['register'] = 'tourism/login_controller/register';
$route['login']    = 'tourism/login_controller/login';

//FLIGHT
$route['flight/index'] = 'tourism/flight_controller/index';
$route['flight/index1'] = 'tourism/flight_controller/index1';
$route['flight/index2'] = 'tourism/flight_controller/index2';
$route['flight/index3'] = 'tourism/flight_controller/index3';
$route['flight/index4'] = 'tourism/flight_controller/index4';
$route['flight/index5'] = 'tourism/flight_controller/index5';
$route['flight/index6'] = 'tourism/flight_controller/index6';


//HOTEL
$route['hotel/index'] = 'tourism/hotel_controller/index';

//TOUR
$route['tour/index'] = 'tourism/tour_controller/index';

//TAXI
$route['taxi/index'] = 'tourism/taxi_controller/index';
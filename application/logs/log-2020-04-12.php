<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-12 11:48:45 --> Query error: Column 'password' cannot be null - Invalid query: INSERT INTO `user` (`email`, `password`, `confirm_password`) VALUES ('', NULL, NULL)
ERROR - 2020-04-12 12:31:25 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 37
ERROR - 2020-04-12 12:31:44 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting function (T_FUNCTION) or const (T_CONST) C:\xampp\htdocs\CnC\application\models\CustomerModel.php 16
ERROR - 2020-04-12 12:31:54 --> Severity: Notice --> Undefined property: Customer::$UserModel C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 16
ERROR - 2020-04-12 12:31:54 --> Severity: error --> Exception: Call to a member function getCustomers() on null C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 16
ERROR - 2020-04-12 12:31:56 --> Severity: Notice --> Undefined property: Customer::$UserModel C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 16
ERROR - 2020-04-12 12:31:56 --> Severity: error --> Exception: Call to a member function getCustomers() on null C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 16
ERROR - 2020-04-12 12:43:14 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Customer' does not have a method 'index_post' C:\xampp\htdocs\CnC\application\libraries\REST_Controller.php 739
ERROR - 2020-04-12 12:45:54 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Customer' does not have a method 'index_post' C:\xampp\htdocs\CnC\application\libraries\REST_Controller.php 739
ERROR - 2020-04-12 12:56:16 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Customer' does not have a method 'index_post' C:\xampp\htdocs\CnC\application\libraries\REST_Controller.php 739
ERROR - 2020-04-12 12:56:18 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Customer' does not have a method 'index_post' C:\xampp\htdocs\CnC\application\libraries\REST_Controller.php 739
ERROR - 2020-04-12 12:57:15 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Customer' does not have a method 'index_post' C:\xampp\htdocs\CnC\application\libraries\REST_Controller.php 739
ERROR - 2020-04-12 13:00:09 --> Severity: error --> Exception: Call to undefined method CustomerModel::saveCustomer() C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 52
ERROR - 2020-04-12 13:02:11 --> Query error: Column 'medicine_id' cannot be null - Invalid query: INSERT INTO `customer` (`email`, `name`, `phone`, `quantity`, `address`, `medicine_id`, `medicine_name`, `price`, `total_price`) VALUES ('dourjoykhan@gmail.com', 'DourjoyKhan', '01675332900', '5', 'fdgsdrgdg', NULL, NULL, NULL, NULL)
ERROR - 2020-04-12 13:14:40 --> Query error: Unknown column 'napa' in 'field list' - Invalid query: insert into customer (email,name,phone,quantity,address,medicine_id,medicine_name,price,total_price)
        values ('email','name','phone','quantity','address',5.00,napa,1,25)
ERROR - 2020-04-12 13:17:19 --> Query error: Unknown column 'napa' in 'field list' - Invalid query: insert into customer (email,name,phone,quantity,address,medicine_id,medicine_name,price,total_price)
        values (email,name,phone,quantity,address,5.00,napa,1,25)
ERROR - 2020-04-12 13:28:17 --> Severity: error --> Exception: syntax error, unexpected ',' C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 52
ERROR - 2020-04-12 13:29:15 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW) C:\xampp\htdocs\CnC\application\controllers\api\Customer.php 53
ERROR - 2020-04-12 13:29:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '@gmail.com,DourjoyKhan,01675332900,5,sfdgsdrfg,5.00,napa,1,25)' at line 2 - Invalid query: insert into customer (email,name,phone,quantity,address,medicine_id,medicine_name,price,total_price)
        values (dourjoykhan@gmail.com,DourjoyKhan,01675332900,5,sfdgsdrfg,5.00,napa,1,25)
ERROR - 2020-04-12 13:47:42 --> Query error: Column 'medicine_id' cannot be null - Invalid query: INSERT INTO `customer` (`email`, `name`, `phone`, `quantity`, `address`, `medicine_id`, `medicine_name`, `price`, `total_price`) VALUES ('dourjoykhan@gmail.com', 'DourjoyKhan', '01675332900', '5', 'sdfsd', NULL, NULL, NULL, NULL)
ERROR - 2020-04-12 21:35:00 --> Query error: Table 'doctor_finder.medicine' doesn't exist - Invalid query: SELECT *
FROM `medicine`
ERROR - 2020-04-12 22:13:01 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:01 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:01 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `prescription` (`medicine_name`, `time`, `quentity`) VALUES (Array, Array, NULL)
ERROR - 2020-04-12 22:13:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:03 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `prescription` (`medicine_name`, `time`, `quentity`) VALUES (Array, Array, NULL)
ERROR - 2020-04-12 22:13:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:03 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\CnC\system\database\DB_driver.php 1471
ERROR - 2020-04-12 22:13:03 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `prescription` (`medicine_name`, `time`, `quentity`) VALUES (Array, Array, NULL)

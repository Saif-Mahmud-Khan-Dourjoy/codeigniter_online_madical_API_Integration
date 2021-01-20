<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-20 12:54:48 --> Query error: Column 'app_time' cannot be null - Invalid query: INSERT INTO `appointment_timeanddate` (`user_id`, `doc_id`, `app_date`, `app_time`) VALUES ('1', '3', '2020_09_20', NULL)
ERROR - 2020-09-20 16:12:53 --> Query error: Unknown column 'doc_id' in 'where clause' - Invalid query: SELECT *
FROM `appointment`
WHERE `doc_id` = '3'

#
# TABLE STRUCTURE FOR: announcement_post
#

DROP TABLE IF EXISTS `announcement_post`;

CREATE TABLE `announcement_post` (
  `announcement_post_id` int(11) NOT NULL AUTO_INCREMENT,
  `announcement_title` varchar(255) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`announcement_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('1', '', 'hello, kamusta kayo? Reply Asap ', '1', '17', '17', '2017-11-01 00:00:00', '0', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:41', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('2', '', 'sadadsadas', '1', '0', '0', '2017-11-09 15:10:39', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:44', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('3', '', 'asdsadasdas', '1', '0', '0', '2017-11-09 15:12:28', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:46', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('4', '', 'Oy pogi hahaha', '1', '17', '1', '2017-11-09 15:12:50', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:48', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('5', '', '', '0', '0', '0', '2017-11-09 15:21:53', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:50', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('6', '', 'sadsad', '1', '0', '0', '2017-11-09 15:31:26', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:52', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('7', '', 'Joash oy', '1', '1', '2', '2017-11-09 15:32:10', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:54', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('8', 'Branch Meeting', 'Branch Meeting @3:00 pm in conference room.', '1', '0', '0', '2017-11-09 15:54:40', '1', '0000-00-00 00:00:00', '0', '2017-11-09 16:07:56', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('9', 'IT Department Meeting ', 'Department Meeting @ 3:00 pm in lobby. Please don\'t be late.', '1', '17', '0', '2017-11-09 16:10:28', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:10:02', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('10', 'Christmas Party Meeting', '@lobby 2 pm', '1', '17', '0', '2017-11-09 16:36:33', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:10:03', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('11', 'Christmas Party Meeting', 'sadsda', '1', '1', '0', '2017-11-09 17:02:58', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:10:05', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('12', 'sadsadsa', 'sadsadsa', '1', '1', '1', '2017-11-09 17:07:40', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:10:07', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('13', '2e2esa', 'dasdasd', '1', '0', '0', '2017-11-09 17:09:31', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:10:09', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('14', '2422', 'sadsad', '1', '0', '0', '2017-11-09 17:09:55', '1', '0000-00-00 00:00:00', '0', '2017-11-09 17:09:59', '1', '0', '1');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('15', 'Group Meeting 1', '@3pm lobby 1', '1', '0', '0', '2017-11-09 17:10:42', '1', '2017-11-10 09:49:08', '1', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('16', 'Christmas Party', '@25 6pm', '1', '1', '2', '2017-11-09 17:50:25', '1', '2017-11-10 09:32:46', '1', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `announcement_post` (`announcement_post_id`, `announcement_title`, `announcement`, `branch_id`, `department_id`, `group_id`, `date_created`, `created_by`, `date_modified`, `modified_by`, `date_deleted`, `deleted_by`, `status`, `is_deleted`) VALUES ('17', '3232', 'dcdcdc', '0', '0', '0', '2017-11-10 10:01:57', '1', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0', '0');


#
# TABLE STRUCTURE FOR: announcement_read_status
#

DROP TABLE IF EXISTS `announcement_read_status`;

CREATE TABLE `announcement_read_status` (
  `read_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `announcement_post_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`read_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: backup
#

DROP TABLE IF EXISTS `backup`;

CREATE TABLE `backup` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_name` varchar(250) DEFAULT NULL,
  `backup_date` varchar(45) DEFAULT NULL,
  `backup_path` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`backup_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `backup` (`backup_id`, `backup_name`, `backup_date`, `backup_path`) VALUES ('1', 'hrispayroll-2017-08-31-03-12-16.sql', '2017-08-31 15:12:16', 'backup/hrispayroll-2017-08-31-03-12-16.sql');
INSERT INTO `backup` (`backup_id`, `backup_name`, `backup_date`, `backup_path`) VALUES ('2', 'hrispayroll-2017-09-27-05-09-34.sql', '2017-09-27 17:09:34', 'backup/hrispayroll-2017-09-27-05-09-34.sql');
INSERT INTO `backup` (`backup_id`, `backup_name`, `backup_date`, `backup_path`) VALUES ('3', 'hrispayroll-2017-10-06-08-50-38.sql', '2017-10-06 08:50:38', 'backup/hrispayroll-2017-10-06-08-50-38.sql');
INSERT INTO `backup` (`backup_id`, `backup_name`, `backup_date`, `backup_path`) VALUES ('4', 'hrispayroll-2017-11-24-03-10-54.sql', '2017-11-24 15:10:54', 'backup/hrispayroll-2017-11-24-03-10-54.sql');


#
# TABLE STRUCTURE FOR: bir_2316
#

DROP TABLE IF EXISTS `bir_2316`;

CREATE TABLE `bir_2316` (
  `bir_2316_id` int(11) NOT NULL AUTO_INCREMENT,
  `for_year` varchar(20) DEFAULT NULL,
  `period_from` varchar(20) DEFAULT NULL,
  `period_to` varchar(20) DEFAULT NULL,
  `taxpayer_identification_no` varchar(100) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `rdo_code` varchar(100) DEFAULT NULL,
  `registered_address` varchar(500) DEFAULT NULL,
  `registered_zipcode` varchar(100) DEFAULT NULL,
  `localhome_address` varchar(500) DEFAULT NULL,
  `localhome_zipcode` varchar(100) DEFAULT NULL,
  `foreign_address` varchar(500) DEFAULT NULL,
  `foreign_zipcode` varchar(100) DEFAULT NULL,
  `birthdate` varchar(50) DEFAULT NULL,
  `telphone_number` varchar(20) DEFAULT NULL,
  `exemption_status` tinyint(1) NOT NULL DEFAULT '0',
  `wife_claiming` tinyint(1) NOT NULL,
  `stat_minimum_wage_per_month` decimal(11,2) DEFAULT NULL,
  `stat_minimum_wage_per_day` decimal(11,2) DEFAULT NULL,
  `present_employer_tin` varchar(50) DEFAULT NULL,
  `employer_name` varchar(200) DEFAULT NULL,
  `employer_regadress` varchar(200) DEFAULT NULL,
  `employer_zipcode` varchar(50) DEFAULT NULL,
  `gross_compensation_present_employer` decimal(11,2) DEFAULT NULL,
  `less_total_nontax_exempt` decimal(11,2) DEFAULT NULL,
  `taxable_compensation_income` decimal(11,2) DEFAULT NULL,
  `add_taxcompensation_previous_employer` decimal(11,2) DEFAULT NULL,
  `gross_taxable_compensation_income` decimal(11,2) DEFAULT NULL,
  `less_total_exemption` decimal(11,2) DEFAULT NULL,
  `less_premium_paid` decimal(11,2) DEFAULT NULL,
  `net_taxable_compensation_income` decimal(11,2) DEFAULT NULL,
  `tax_due` decimal(11,2) DEFAULT NULL,
  `tax_withheld_present_employer` decimal(11,2) DEFAULT NULL,
  `tax_withheld_previous_employer` decimal(11,2) DEFAULT NULL,
  `total_amount_taxes` decimal(11,2) DEFAULT NULL,
  `basic_salary_minimum` decimal(11,2) DEFAULT NULL,
  `holiday_pay` decimal(11,2) DEFAULT NULL,
  `overtime_pay_mwe` decimal(11,2) DEFAULT NULL,
  `night_shift_differential` decimal(11,2) DEFAULT NULL,
  `hazard_pay_mwe` decimal(11,2) DEFAULT NULL,
  `13th_month_pay` decimal(11,2) DEFAULT NULL,
  `de_minimis` decimal(11,2) DEFAULT NULL,
  `contributions_dues` decimal(11,2) DEFAULT NULL,
  `compensation_salariesforms` decimal(11,2) DEFAULT NULL,
  `total_nontax_compensation` decimal(11,2) DEFAULT NULL,
  `basic_salary` decimal(11,2) DEFAULT NULL,
  `representation` decimal(11,2) DEFAULT NULL,
  `transportation` decimal(11,2) DEFAULT NULL,
  `cost_of_living` decimal(11,2) DEFAULT NULL,
  `fixed_housing` decimal(11,2) DEFAULT NULL,
  `othersa` decimal(11,2) DEFAULT NULL,
  `othersaamount` decimal(11,2) DEFAULT NULL,
  `commision` decimal(11,2) DEFAULT NULL,
  `profit_sharing` decimal(11,2) DEFAULT NULL,
  `fees_director_fees` decimal(11,2) DEFAULT NULL,
  `taxable_13th_other_benefits` decimal(11,2) DEFAULT NULL,
  `hazard_pay` decimal(11,2) DEFAULT NULL,
  `overtime_pay` decimal(11,2) DEFAULT NULL,
  `total_taxable_compensation_income` decimal(11,2) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bir_2316_id`) USING BTREE,
  UNIQUE KEY `bir_2316_id` (`bir_2316_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: company_setup
#

DROP TABLE IF EXISTS `company_setup`;

CREATE TABLE `company_setup` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(85) DEFAULT NULL,
  `email_address` varchar(85) DEFAULT NULL,
  `email_password` varchar(255) NOT NULL,
  `image_name` varchar(50) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `rdo` varchar(100) DEFAULT NULL,
  `bir_reg_no` varchar(50) DEFAULT NULL,
  `applicable_year` varchar(20) DEFAULT NULL,
  `applicable_month` varchar(20) DEFAULT NULL,
  `tin_no` varchar(50) DEFAULT NULL,
  `quote` varchar(1000) DEFAULT 'Hello World',
  PRIMARY KEY (`company_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=16384 ROW_FORMAT=DYNAMIC;

INSERT INTO `company_setup` (`company_id`, `company_name`, `address`, `contact_no`, `email_address`, `email_password`, `image_name`, `created_by`, `date_created`, `date_modified`, `modified_by`, `rdo`, `bir_reg_no`, `applicable_year`, `applicable_month`, `tin_no`, `quote`) VALUES ('1', 'ABCDE', 'WEB Human Resource Information System & Payroll', 'N/A', 'noblejjoash@gmail.com', '1tru5tG0d', 'assets/img/employee/5993d6d778c76.png', '0', '0000-00-00 00:00:00', '2017-10-02 15:41:35', '1', 'GGWP', '6515616', '2032', '4', '231891230', 'Web Human Resource Information & Payroll System');


#
# TABLE STRUCTURE FOR: daily_time_record
#

DROP TABLE IF EXISTS `daily_time_record`;

CREATE TABLE `daily_time_record` (
  `dtr_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT '0',
  `pay_period_id` int(11) DEFAULT '0',
  `reg` decimal(20,2) DEFAULT NULL,
  `sun` decimal(20,2) DEFAULT NULL,
  `reg_hol` decimal(20,2) DEFAULT NULL,
  `spe_hol` decimal(20,2) DEFAULT NULL,
  `sun_reg_hol` decimal(20,2) DEFAULT NULL,
  `sun_spe_hol` decimal(20,2) DEFAULT NULL,
  `days_wout_pay` decimal(20,2) DEFAULT NULL,
  `days_with_pay` decimal(20,2) DEFAULT NULL,
  `minutes_late` decimal(20,2) DEFAULT NULL,
  `ot_reg` decimal(20,2) DEFAULT NULL,
  `ot_reg_reg_hol` decimal(20,2) DEFAULT NULL,
  `ot_reg_spe_hol` decimal(20,2) DEFAULT NULL,
  `ot_sun` decimal(20,2) DEFAULT NULL,
  `ot_sun_reg_hol` decimal(20,2) DEFAULT NULL,
  `ot_sun_spe_hol` decimal(20,2) DEFAULT NULL,
  `nsd_reg` decimal(20,2) DEFAULT NULL,
  `nsd_reg_reg_hol` decimal(20,2) DEFAULT NULL,
  `nsd_reg_spe_hol` decimal(20,2) DEFAULT NULL,
  `nsd_sun` decimal(20,2) DEFAULT NULL,
  `nsd_sun_reg_hol` decimal(20,2) DEFAULT NULL,
  `nsd_sun_spe_hol` decimal(20,2) DEFAULT NULL,
  `reg_amt` decimal(20,2) DEFAULT NULL,
  `sun_amt` decimal(20,2) DEFAULT NULL,
  `reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `sun_reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `sun_spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `days_wout_pay_amt` decimal(20,2) DEFAULT NULL,
  `days_with_pay_amt` decimal(20,2) DEFAULT NULL,
  `minutes_late_amt` decimal(20,2) DEFAULT NULL,
  `ot_reg_amt` decimal(20,2) DEFAULT NULL,
  `ot_reg_reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `ot_reg_spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `ot_sun_amt` decimal(20,2) DEFAULT NULL,
  `ot_sun_reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `ot_sun_spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `nsd_reg_amt` decimal(20,2) DEFAULT NULL,
  `nsd_reg_reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `nsd_reg_spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `nsd_sun_amt` decimal(20,2) DEFAULT NULL,
  `nsd_sun_reg_hol_amt` decimal(20,2) DEFAULT NULL,
  `nsd_sun_spe_hol_amt` decimal(20,2) DEFAULT NULL,
  `reg_cola` decimal(20,2) DEFAULT NULL,
  `sun_cola` decimal(20,2) DEFAULT NULL,
  `reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `sun_reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `sun_spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `days_wout_pay_cola` decimal(20,2) DEFAULT NULL,
  `days_with_pay_cola` decimal(20,2) DEFAULT NULL,
  `minutes_late_cola` decimal(20,2) DEFAULT NULL,
  `ot_reg_cola` decimal(20,2) DEFAULT NULL,
  `ot_reg_reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `ot_reg_spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `ot_sun_cola` decimal(20,2) DEFAULT NULL,
  `ot_sun_reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `ot_sun_spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `nsd_reg_cola` decimal(20,2) DEFAULT NULL,
  `nsd_reg_reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `nsd_reg_spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `nsd_sun_cola` decimal(20,2) DEFAULT NULL,
  `nsd_sun_reg_hol_cola` decimal(20,2) DEFAULT NULL,
  `nsd_sun_spe_hol_cola` decimal(20,2) DEFAULT NULL,
  `is_to_process` tinyint(4) DEFAULT '1',
  `for_13th_month` decimal(20,2) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `modified_by` int(11) NOT NULL,
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT '0000-00-00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`dtr_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('1', '1', '20', '104.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5000.00', '1', '2017-10-10', '1', '2017-10-11', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('2', '1', '21', '104.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5000.00', '1', '2017-10-12', '0', '0000-00-00', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('3', '1', '19', '104.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5000.00', '1', '2017-10-12', '0', '0000-00-00', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('4', '1', '22', '104.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5000.00', '1', '2017-10-12', '0', '0000-00-00', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('5', '5', '24', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '0.00', '2500.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '6500.00', '1', '2017-11-22', '1', '2017-11-24', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('6', '4', '24', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '0.00', '0.00', '0.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '5200.00', '1', '2017-11-22', '1', '2017-11-24', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('7', '1', '24', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1900.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '4940.00', '1', '2017-11-22', '0', '0000-00-00', '0', '0000-00-00', '0');
INSERT INTO `daily_time_record` (`dtr_id`, `employee_id`, `pay_period_id`, `reg`, `sun`, `reg_hol`, `spe_hol`, `sun_reg_hol`, `sun_spe_hol`, `days_wout_pay`, `days_with_pay`, `minutes_late`, `ot_reg`, `ot_reg_reg_hol`, `ot_reg_spe_hol`, `ot_sun`, `ot_sun_reg_hol`, `ot_sun_spe_hol`, `nsd_reg`, `nsd_reg_reg_hol`, `nsd_reg_spe_hol`, `nsd_sun`, `nsd_sun_reg_hol`, `nsd_sun_spe_hol`, `reg_amt`, `sun_amt`, `reg_hol_amt`, `spe_hol_amt`, `sun_reg_hol_amt`, `sun_spe_hol_amt`, `days_wout_pay_amt`, `days_with_pay_amt`, `minutes_late_amt`, `ot_reg_amt`, `ot_reg_reg_hol_amt`, `ot_reg_spe_hol_amt`, `ot_sun_amt`, `ot_sun_reg_hol_amt`, `ot_sun_spe_hol_amt`, `nsd_reg_amt`, `nsd_reg_reg_hol_amt`, `nsd_reg_spe_hol_amt`, `nsd_sun_amt`, `nsd_sun_reg_hol_amt`, `nsd_sun_spe_hol_amt`, `reg_cola`, `sun_cola`, `reg_hol_cola`, `spe_hol_cola`, `sun_reg_hol_cola`, `sun_spe_hol_cola`, `days_wout_pay_cola`, `days_with_pay_cola`, `minutes_late_cola`, `ot_reg_cola`, `ot_reg_reg_hol_cola`, `ot_reg_spe_hol_cola`, `ot_sun_cola`, `ot_sun_reg_hol_cola`, `ot_sun_spe_hol_cola`, `nsd_reg_cola`, `nsd_reg_reg_hol_cola`, `nsd_reg_spe_hol_cola`, `nsd_sun_cola`, `nsd_sun_reg_hol_cola`, `nsd_sun_spe_hol_cola`, `is_to_process`, `for_13th_month`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('8', '3', '24', '40.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '10.00', '0.00', '10.00', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1900.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '4940.00', '1', '2017-11-22', '1', '2017-11-24', '0', '0000-00-00', '0');


#
# TABLE STRUCTURE FOR: deductions_temporary
#

DROP TABLE IF EXISTS `deductions_temporary`;

CREATE TABLE `deductions_temporary` (
  `deduction_temporary_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_period_id` int(11) DEFAULT '0',
  `employee_id` int(11) DEFAULT '0',
  `deduction_id` int(11) DEFAULT '0',
  `deduction_temporary_amount` decimal(19,5) DEFAULT '0.00000',
  `deduction_temporary_remarks` varchar(300) DEFAULT '',
  `created_by` int(11) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`deduction_temporary_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: dtr_deductions
#

DROP TABLE IF EXISTS `dtr_deductions`;

CREATE TABLE `dtr_deductions` (
  `dtr_deduction_id` int(11) NOT NULL AUTO_INCREMENT,
  `dtr_id` int(11) DEFAULT NULL,
  `deduction_id` int(11) DEFAULT NULL,
  `deduction_regular_id` int(11) DEFAULT NULL,
  `is_deduct` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dtr_deduction_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1014 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=109 ROW_FORMAT=DYNAMIC;

INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1', '6', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('2', '6', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('3', '6', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('4', '6', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('5', '6', '5', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('6', '6', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('7', '6', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('8', '6', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('9', '6', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('10', '6', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('11', '6', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('12', '6', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('13', '6', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('14', '6', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('15', '6', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('61', '19', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('62', '19', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('63', '19', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('64', '19', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('65', '19', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('66', '19', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('67', '19', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('68', '19', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('69', '19', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('70', '19', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('71', '19', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('72', '19', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('73', '19', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('74', '19', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('75', '19', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('76', '20', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('77', '20', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('78', '20', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('79', '20', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('80', '20', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('81', '20', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('82', '20', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('83', '20', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('84', '20', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('85', '20', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('86', '20', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('87', '20', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('88', '20', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('89', '20', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('90', '20', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('91', '21', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('92', '21', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('93', '21', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('94', '21', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('95', '21', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('96', '21', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('97', '21', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('98', '21', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('99', '21', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('100', '21', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('101', '21', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('102', '21', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('103', '21', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('104', '21', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('105', '21', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('106', '22', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('107', '22', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('108', '22', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('109', '22', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('110', '22', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('111', '22', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('112', '22', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('113', '22', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('114', '22', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('115', '22', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('116', '22', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('117', '22', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('118', '22', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('119', '22', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('120', '22', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('121', '23', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('122', '23', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('123', '23', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('124', '23', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('125', '23', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('126', '23', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('127', '23', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('128', '23', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('129', '23', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('130', '23', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('131', '23', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('132', '23', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('133', '23', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('134', '23', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('135', '23', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('136', '24', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('137', '24', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('138', '24', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('139', '24', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('140', '24', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('141', '24', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('142', '24', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('143', '24', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('144', '24', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('145', '24', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('146', '24', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('147', '24', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('148', '24', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('149', '24', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('150', '24', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('166', '26', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('167', '26', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('168', '26', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('169', '26', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('170', '26', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('171', '26', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('172', '26', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('173', '26', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('174', '26', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('175', '26', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('176', '26', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('177', '26', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('178', '26', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('179', '26', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('180', '26', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('181', '27', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('182', '27', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('183', '27', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('184', '27', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('185', '27', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('186', '27', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('187', '27', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('188', '27', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('189', '27', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('190', '27', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('191', '27', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('192', '27', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('193', '27', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('194', '27', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('195', '27', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('196', '28', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('197', '28', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('198', '28', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('199', '28', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('200', '28', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('201', '28', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('202', '28', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('203', '28', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('204', '28', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('205', '28', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('206', '28', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('207', '28', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('208', '28', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('209', '28', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('210', '28', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('211', '29', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('212', '29', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('213', '29', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('214', '29', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('215', '29', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('216', '29', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('217', '29', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('218', '29', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('219', '29', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('220', '29', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('221', '29', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('222', '29', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('223', '29', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('224', '29', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('225', '29', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('226', '25', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('227', '25', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('228', '25', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('229', '25', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('230', '25', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('231', '25', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('232', '25', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('233', '25', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('234', '25', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('235', '25', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('236', '25', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('237', '25', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('238', '25', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('239', '25', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('240', '25', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('271', '30', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('272', '30', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('273', '30', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('274', '30', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('275', '30', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('276', '30', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('277', '30', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('278', '30', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('279', '30', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('280', '30', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('281', '30', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('282', '30', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('283', '30', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('284', '30', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('285', '30', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('286', '1', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('287', '1', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('288', '1', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('289', '1', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('290', '1', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('291', '1', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('292', '1', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('293', '1', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('294', '1', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('295', '1', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('296', '1', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('297', '1', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('298', '1', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('299', '1', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('300', '1', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('301', '2', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('302', '2', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('303', '2', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('304', '2', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('305', '2', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('306', '2', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('307', '2', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('308', '2', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('309', '2', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('310', '2', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('311', '2', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('312', '2', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('313', '2', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('314', '2', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('315', '2', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('331', '4', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('332', '4', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('333', '4', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('334', '4', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('335', '4', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('336', '4', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('337', '4', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('338', '4', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('339', '4', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('340', '4', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('341', '4', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('342', '4', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('343', '4', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('344', '4', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('345', '4', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('361', '6', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('362', '6', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('363', '6', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('364', '6', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('365', '6', '5', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('366', '6', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('367', '6', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('368', '6', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('369', '6', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('370', '6', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('371', '6', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('372', '6', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('373', '6', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('374', '6', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('375', '6', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('376', '7', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('377', '7', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('378', '7', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('379', '7', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('380', '7', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('381', '7', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('382', '7', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('383', '7', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('384', '7', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('385', '7', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('386', '7', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('387', '7', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('388', '7', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('389', '7', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('390', '7', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('391', '8', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('392', '8', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('393', '8', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('394', '8', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('395', '8', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('396', '8', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('397', '8', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('398', '8', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('399', '8', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('400', '8', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('401', '8', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('402', '8', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('403', '8', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('404', '8', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('405', '8', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('421', '10', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('422', '10', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('423', '10', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('424', '10', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('425', '10', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('426', '10', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('427', '10', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('428', '10', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('429', '10', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('430', '10', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('431', '10', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('432', '10', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('433', '10', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('434', '10', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('435', '10', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('451', '5', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('452', '5', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('453', '5', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('454', '5', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('455', '5', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('456', '5', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('457', '5', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('458', '5', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('459', '5', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('460', '5', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('461', '5', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('462', '5', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('463', '5', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('464', '5', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('465', '5', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('466', '1', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('467', '1', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('468', '1', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('469', '1', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('470', '1', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('471', '1', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('472', '1', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('473', '1', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('474', '1', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('475', '1', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('476', '1', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('477', '1', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('478', '1', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('479', '1', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('480', '1', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('481', '2', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('482', '2', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('483', '2', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('484', '2', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('485', '2', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('486', '2', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('487', '2', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('488', '2', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('489', '2', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('490', '2', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('491', '2', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('492', '2', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('493', '2', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('494', '2', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('495', '2', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('511', '4', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('512', '4', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('513', '4', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('514', '4', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('515', '4', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('516', '4', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('517', '4', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('518', '4', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('519', '4', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('520', '4', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('521', '4', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('522', '4', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('523', '4', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('524', '4', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('525', '4', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('526', '5', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('527', '5', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('528', '5', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('529', '5', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('530', '5', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('531', '5', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('532', '5', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('533', '5', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('534', '5', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('535', '5', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('536', '5', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('537', '5', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('538', '5', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('539', '5', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('540', '5', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('541', '6', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('542', '6', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('543', '6', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('544', '6', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('545', '6', '5', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('546', '6', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('547', '6', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('548', '6', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('549', '6', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('550', '6', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('551', '6', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('552', '6', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('553', '6', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('554', '6', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('555', '6', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('556', '7', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('557', '7', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('558', '7', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('559', '7', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('560', '7', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('561', '7', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('562', '7', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('563', '7', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('564', '7', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('565', '7', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('566', '7', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('567', '7', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('568', '7', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('569', '7', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('570', '7', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('571', '8', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('572', '8', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('573', '8', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('574', '8', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('575', '8', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('576', '8', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('577', '8', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('578', '8', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('579', '8', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('580', '8', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('581', '8', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('582', '8', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('583', '8', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('584', '8', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('585', '8', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('601', '10', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('602', '10', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('603', '10', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('604', '10', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('605', '10', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('606', '10', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('607', '10', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('608', '10', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('609', '10', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('610', '10', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('611', '10', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('612', '10', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('613', '10', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('614', '10', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('615', '10', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('695', '9', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('696', '9', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('697', '9', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('698', '9', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('699', '9', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('700', '9', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('701', '9', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('702', '9', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('703', '9', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('704', '9', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('705', '9', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('706', '9', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('707', '9', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('708', '9', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('709', '9', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('727', '3', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('728', '3', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('729', '3', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('730', '3', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('731', '3', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('732', '3', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('733', '3', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('734', '3', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('735', '3', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('736', '3', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('737', '3', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('738', '3', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('739', '3', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('740', '3', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('741', '3', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('742', '3', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('743', '3', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('744', '11', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('745', '11', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('746', '11', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('747', '11', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('748', '11', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('749', '11', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('750', '11', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('751', '11', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('752', '11', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('753', '11', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('754', '11', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('755', '11', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('756', '11', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('757', '11', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('758', '11', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('759', '12', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('760', '12', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('761', '12', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('762', '12', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('763', '12', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('764', '12', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('765', '12', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('766', '12', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('767', '12', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('768', '12', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('769', '12', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('770', '12', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('771', '12', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('772', '12', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('773', '12', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('774', '13', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('775', '13', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('776', '13', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('777', '13', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('778', '13', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('779', '13', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('780', '13', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('781', '13', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('782', '13', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('783', '13', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('784', '13', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('785', '13', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('786', '13', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('787', '13', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('788', '13', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('789', '14', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('790', '14', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('791', '14', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('792', '14', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('793', '14', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('794', '14', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('795', '14', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('796', '14', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('797', '14', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('798', '14', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('799', '14', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('800', '14', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('801', '14', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('802', '14', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('803', '14', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('804', '15', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('805', '15', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('806', '15', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('807', '15', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('808', '15', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('809', '15', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('810', '15', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('811', '15', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('812', '15', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('813', '15', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('814', '15', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('815', '15', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('816', '15', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('817', '15', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('818', '15', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('819', '16', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('820', '16', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('821', '16', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('822', '16', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('823', '16', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('824', '16', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('825', '16', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('826', '16', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('827', '16', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('828', '16', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('829', '16', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('830', '16', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('831', '16', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('832', '16', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('833', '16', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('834', '17', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('835', '17', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('836', '17', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('837', '17', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('838', '17', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('839', '17', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('840', '17', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('841', '17', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('842', '17', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('843', '17', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('844', '17', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('845', '17', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('846', '17', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('847', '17', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('848', '17', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('849', '18', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('850', '18', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('851', '18', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('852', '18', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('853', '18', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('854', '18', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('855', '18', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('856', '18', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('857', '18', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('858', '18', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('859', '18', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('860', '18', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('861', '18', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('862', '18', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('863', '18', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('864', '19', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('865', '19', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('866', '19', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('867', '19', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('868', '19', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('869', '19', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('870', '19', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('871', '19', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('872', '19', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('873', '19', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('874', '19', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('875', '19', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('876', '19', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('877', '19', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('878', '19', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('879', '20', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('880', '20', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('881', '20', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('882', '20', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('883', '20', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('884', '20', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('885', '20', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('886', '20', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('887', '20', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('888', '20', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('889', '20', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('890', '20', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('891', '20', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('892', '20', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('893', '20', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('894', '1', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('895', '1', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('896', '1', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('897', '1', '4', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('898', '1', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('899', '1', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('900', '1', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('901', '1', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('902', '1', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('903', '1', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('904', '1', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('905', '1', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('906', '1', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('907', '1', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('908', '1', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('909', '2', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('910', '2', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('911', '2', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('912', '2', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('913', '2', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('914', '2', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('915', '2', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('916', '2', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('917', '2', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('918', '2', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('919', '2', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('920', '2', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('921', '2', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('922', '2', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('923', '2', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('924', '3', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('925', '3', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('926', '3', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('927', '3', '4', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('928', '3', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('929', '3', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('930', '3', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('931', '3', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('932', '3', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('933', '3', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('934', '3', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('935', '3', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('936', '3', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('937', '3', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('938', '3', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('939', '4', '1', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('940', '4', '2', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('941', '4', '3', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('942', '4', '4', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('943', '4', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('944', '4', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('945', '4', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('946', '4', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('947', '4', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('948', '4', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('949', '4', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('950', '4', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('951', '4', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('952', '4', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('953', '4', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('954', '5', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('955', '5', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('956', '5', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('957', '5', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('958', '5', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('959', '5', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('960', '5', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('961', '5', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('962', '5', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('963', '5', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('964', '5', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('965', '5', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('966', '5', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('967', '5', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('968', '5', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('969', '6', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('970', '6', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('971', '6', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('972', '6', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('973', '6', '5', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('974', '6', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('975', '6', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('976', '6', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('977', '6', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('978', '6', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('979', '6', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('980', '6', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('981', '6', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('982', '6', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('983', '6', '16', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('984', '7', '16', '1', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('985', '7', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('986', '7', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('987', '7', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('988', '7', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('989', '7', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('990', '7', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('991', '7', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('992', '7', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('993', '7', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('994', '7', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('995', '7', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('996', '7', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('997', '7', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('998', '7', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('999', '8', '1', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1000', '8', '2', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1001', '8', '3', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1002', '8', '4', '0', '1');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1003', '8', '5', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1004', '8', '6', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1005', '8', '7', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1006', '8', '8', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1007', '8', '9', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1008', '8', '11', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1009', '8', '12', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1010', '8', '13', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1011', '8', '14', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1012', '8', '15', '0', '0');
INSERT INTO `dtr_deductions` (`dtr_deduction_id`, `dtr_id`, `deduction_id`, `deduction_regular_id`, `is_deduct`) VALUES ('1013', '8', '16', '0', '0');


#
# TABLE STRUCTURE FOR: email_user_settings
#

DROP TABLE IF EXISTS `email_user_settings`;

CREATE TABLE `email_user_settings` (
  `email_user_settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email_password` varchar(255) NOT NULL,
  `date_modified` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email_user_settings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `email_user_settings` (`email_user_settings_id`, `user_id`, `email_address`, `email_password`, `date_modified`, `is_deleted`) VALUES ('1', '10', 'joashnoble@gmail.com', 'joashnoble', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: emp_children_dependent
#

DROP TABLE IF EXISTS `emp_children_dependent`;

CREATE TABLE `emp_children_dependent` (
  `emp_children_dependent_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `ref_relationship_id` int(11) unsigned NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`emp_children_dependent_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: emp_commendation
#

DROP TABLE IF EXISTS `emp_commendation`;

CREATE TABLE `emp_commendation` (
  `emp_commendation_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date_commendation` date NOT NULL,
  `memo_number` varchar(50) NOT NULL,
  `remarks` longtext,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`emp_commendation_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_commendation` (`emp_commendation_id`, `employee_id`, `date_commendation`, `memo_number`, `remarks`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`) VALUES ('1', '9', '2017-09-26', 'Close Big Sale', 'Promoted to TL 101', '1', '0', '2017-09-26', '0000-00-00', '0');


#
# TABLE STRUCTURE FOR: emp_educational_attainment
#

DROP TABLE IF EXISTS `emp_educational_attainment`;

CREATE TABLE `emp_educational_attainment` (
  `emp_educational_attainment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) unsigned NOT NULL,
  `ref_course_degree_id` int(11) unsigned NOT NULL,
  `year_graduate` date DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`emp_educational_attainment_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: emp_emergency_contact_details
#

DROP TABLE IF EXISTS `emp_emergency_contact_details`;

CREATE TABLE `emp_emergency_contact_details` (
  `emp_emergency_contact_details_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) unsigned NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `ref_relationship_id` int(11) unsigned NOT NULL,
  `contact_number_one` varchar(500) NOT NULL,
  `contact_number_two` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date DEFAULT '0000-00-00',
  PRIMARY KEY (`emp_emergency_contact_details_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: emp_family_details
#

DROP TABLE IF EXISTS `emp_family_details`;

CREATE TABLE `emp_family_details` (
  `emp_family_details_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `ref_relationship_id` int(10) unsigned NOT NULL,
  `birthdate` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`emp_family_details_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: emp_leave_received_forwarded_history
#

DROP TABLE IF EXISTS `emp_leave_received_forwarded_history`;

CREATE TABLE `emp_leave_received_forwarded_history` (
  `emp_leave_received_forwarded_history_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `emp_leaves_entitlement_id` int(11) unsigned NOT NULL,
  `created_by_user_id` int(11) unsigned NOT NULL,
  `from_to_leave_year_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `type_process` varchar(45) DEFAULT '0.0',
  `balance` decimal(18,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`emp_leave_received_forwarded_history_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: emp_leave_year
#

DROP TABLE IF EXISTS `emp_leave_year`;

CREATE TABLE `emp_leave_year` (
  `emp_leave_year_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `year_type` varchar(45) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `note` varchar(555) DEFAULT NULL,
  `active_year` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`emp_leave_year_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_leave_year` (`emp_leave_year_id`, `year_type`, `date_start`, `date_end`, `note`, `active_year`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'Calendar Year', '2017-01-01', '2018-01-01', 'January 2017 to January 2018', '1', '1', '0', '2017-06-28 15:36:52', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: emp_leaves_entitlement
#

DROP TABLE IF EXISTS `emp_leaves_entitlement`;

CREATE TABLE `emp_leaves_entitlement` (
  `emp_leaves_entitlement_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `emp_leave_year_id` int(11) unsigned NOT NULL,
  `employee_id` int(11) unsigned NOT NULL,
  `ref_leave_type_id` int(11) DEFAULT NULL,
  `total_grant` decimal(18,1) unsigned NOT NULL DEFAULT '0.0',
  `received_balance` decimal(18,1) DEFAULT '0.0',
  `current_balance` decimal(18,1) unsigned NOT NULL DEFAULT '0.0',
  `remark` varchar(45) DEFAULT NULL,
  `is_payable` tinyint(1) NOT NULL DEFAULT '0',
  `is_forwardable` tinyint(1) NOT NULL DEFAULT '0',
  `is_forwarded` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`emp_leaves_entitlement_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_leaves_entitlement` (`emp_leaves_entitlement_id`, `emp_leave_year_id`, `employee_id`, `ref_leave_type_id`, `total_grant`, `received_balance`, `current_balance`, `remark`, `is_payable`, `is_forwardable`, `is_forwarded`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '1', '1', '25', '1.0', '1.0', '0.0', NULL, '0', '0', '0', '0', '0', '2017-11-10 17:45:57', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: emp_leaves_filed
#

DROP TABLE IF EXISTS `emp_leaves_filed`;

CREATE TABLE `emp_leaves_filed` (
  `emp_leaves_filed_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `emp_leave_year_id` int(11) unsigned NOT NULL,
  `emp_leaves_entitlement_id` int(11) unsigned NOT NULL,
  `ref_leave_type_id` int(11) NOT NULL,
  `employee_id` int(11) unsigned NOT NULL,
  `date_filed` date DEFAULT NULL,
  `date_granted` date DEFAULT NULL,
  `purpose` longtext,
  `date_time_from` date DEFAULT NULL,
  `date_time_to` date DEFAULT NULL,
  `total` decimal(18,1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`emp_leaves_filed_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2048 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_leaves_filed` (`emp_leaves_filed_id`, `emp_leave_year_id`, `emp_leaves_entitlement_id`, `ref_leave_type_id`, `employee_id`, `date_filed`, `date_granted`, `purpose`, `date_time_from`, `date_time_to`, `total`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`, `status`) VALUES ('1', '1', '1', '25', '1', '2017-11-10', '2017-11-10', 'asdas', '2017-11-11', '2017-11-11', '1.0', '0', '0', '2017-11-10 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '1');
INSERT INTO `emp_leaves_filed` (`emp_leaves_filed_id`, `emp_leave_year_id`, `emp_leaves_entitlement_id`, `ref_leave_type_id`, `employee_id`, `date_filed`, `date_granted`, `purpose`, `date_time_from`, `date_time_to`, `total`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`, `status`) VALUES ('2', '1', '0', '33', '1', '2017-11-24', NULL, 'basta, wag ka ng magtanong', '2017-11-02', '2017-11-03', '0.5', '0', '0', '2017-11-24 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '0');


#
# TABLE STRUCTURE FOR: emp_memo
#

DROP TABLE IF EXISTS `emp_memo`;

CREATE TABLE `emp_memo` (
  `emp_memo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date_memo` date NOT NULL,
  `memo_number` varchar(50) NOT NULL,
  `ref_disciplinary_action_policy_id` int(11) unsigned NOT NULL,
  `ref_action_taken_id` int(11) unsigned NOT NULL,
  `date_granted` date DEFAULT NULL,
  `remarks` longtext,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`emp_memo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_memo` (`emp_memo_id`, `employee_id`, `date_memo`, `memo_number`, `ref_disciplinary_action_policy_id`, `ref_action_taken_id`, `date_granted`, `remarks`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('2', '9', '2017-09-26', '01-2000', '2', '1', '2017-09-26', 'AWOL', '1', '0', '2017-09-26 11:27:55', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `emp_memo` (`emp_memo_id`, `employee_id`, `date_memo`, `memo_number`, `ref_disciplinary_action_policy_id`, `ref_action_taken_id`, `date_granted`, `remarks`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('3', '1', '2017-10-18', '000123', '1', '1', '2017-10-18', 'Absence without leave', '1', '0', '2017-10-18 16:59:24', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: emp_rates_duties
#

DROP TABLE IF EXISTS `emp_rates_duties`;

CREATE TABLE `emp_rates_duties` (
  `emp_rates_duties_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) unsigned NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `ref_position_id` int(11) unsigned NOT NULL,
  `ref_employment_type_id` int(11) unsigned NOT NULL,
  `ref_payment_type_id` int(11) DEFAULT NULL,
  `ref_department_id` int(11) unsigned NOT NULL,
  `ref_branch_id` int(11) unsigned NOT NULL,
  `ref_section_id` int(11) unsigned NOT NULL,
  `ref_employment_status_id` int(11) unsigned NOT NULL,
  `remarks` longtext,
  `hour_per_day` decimal(11,2) DEFAULT NULL,
  `salary_reg_rates` decimal(18,2) NOT NULL DEFAULT '0.00',
  `per_day_pay` decimal(18,2) NOT NULL DEFAULT '0.00',
  `per_hour_pay` decimal(11,2) DEFAULT NULL,
  `sss_phic_salary_credit` decimal(18,2) DEFAULT '0.00',
  `philhealth_salary_credit` decimal(18,2) DEFAULT '0.00',
  `pagibig_salary_credit` decimal(18,2) DEFAULT '0.00',
  `tax_shield` decimal(18,2) DEFAULT '0.00',
  `active_rates_duties` tinyint(1) NOT NULL DEFAULT '0',
  `is_first_regularization` tinyint(1) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `cola_per_hour` decimal(11,2) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`emp_rates_duties_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1260 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '1', '2017-10-10', '1970-01-01', '30', '1', '3', '17', '1', '2', '0', '', '8.00', '380.00', '380.00', '47.50', '0.00', '0.00', '0.00', '0.00', '1', '0', '1', '0.00', '1', '2017-10-10 17:24:57', '1', '2017-11-22 13:30:27', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', '1', '2017-11-02', '1970-01-01', '1', '1', '1', '1', '1', '1', '0', '', '8.00', '10000.00', '769.23', '96.15', '0.00', '0.00', '0.00', '0.00', '0', '0', '1', '0.00', '1', '2017-11-02 15:41:22', NULL, '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('3', '2', '2017-11-08', '1970-01-01', '1', '1', '1', '17', '1', '1', '0', '', '8.00', '5000.00', '384.62', '48.08', '0.00', '0.00', '0.00', '0.00', '1', '0', '3', '0.00', '1', '2017-11-08 16:59:38', '1', '2017-11-10 15:00:12', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('4', '3', '2017-11-22', '1970-01-01', '1', '1', '3', '1', '1', '2', '0', '', '8.00', '380.00', '380.00', '47.50', '0.00', '0.00', '0.00', '0.00', '1', '0', '1', '0.00', '1', '2017-11-22 12:24:58', '1', '2017-11-22 13:30:14', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('5', '4', '2017-11-22', '1970-01-01', '3', '1', '3', '1', '1', '4', '0', '', '8.00', '400.00', '400.00', '50.00', '0.00', '0.00', '0.00', '0.00', '1', '0', '1', '0.00', '1', '2017-11-22 12:25:52', '1', '2017-11-22 13:31:36', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `emp_rates_duties` (`emp_rates_duties_id`, `employee_id`, `date_start`, `date_end`, `ref_position_id`, `ref_employment_type_id`, `ref_payment_type_id`, `ref_department_id`, `ref_branch_id`, `ref_section_id`, `ref_employment_status_id`, `remarks`, `hour_per_day`, `salary_reg_rates`, `per_day_pay`, `per_hour_pay`, `sss_phic_salary_credit`, `philhealth_salary_credit`, `pagibig_salary_credit`, `tax_shield`, `active_rates_duties`, `is_first_regularization`, `group_id`, `cola_per_hour`, `created_by`, `date_created`, `modified_by`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('6', '5', '2017-11-22', '1970-01-01', '3', '1', '3', '1', '1', '7', '0', '', '8.00', '500.00', '500.00', '62.50', '0.00', '0.00', '0.00', '0.00', '1', '0', '1', '0.00', '1', '2017-11-22 12:26:47', '1', '2017-11-22 13:31:54', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: emp_seminar_training
#

DROP TABLE IF EXISTS `emp_seminar_training`;

CREATE TABLE `emp_seminar_training` (
  `emp_seminar_training_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `seminar_title` varchar(300) NOT NULL,
  `given_by` varchar(300) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `venue` varchar(500) DEFAULT NULL,
  `ref_certificate_id` int(11) unsigned NOT NULL,
  `remarks` longtext,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`emp_seminar_training_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `emp_seminar_training` (`emp_seminar_training_id`, `employee_id`, `date`, `seminar_title`, `given_by`, `date_from`, `date_to`, `venue`, `ref_certificate_id`, `remarks`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '9', '2017-09-26', 'Wordpress & Joomla Seminar', 'Jojo Soliman', '2017-09-26', '2017-09-26', 'Manila', '1', '', '1', '0', '2017-09-26 12:05:37', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: employee_account
#

DROP TABLE IF EXISTS `employee_account`;

CREATE TABLE `employee_account` (
  `employee_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(12) NOT NULL,
  `employee_ecode` varchar(255) NOT NULL,
  `employee_pwd` varchar(255) NOT NULL,
  `employee_status` tinyint(1) DEFAULT '1',
  `session_status` tinyint(1) DEFAULT '0',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`employee_account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('1', '1', '000001-2017', 'a01f52bfa30dec545d73a6bc6a0d2afa37d29df8', '1', '1', '0');
INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('2', '1', '000001-2017', '1c803044c0b4a7f80ab8d3f9d19626bfe05eb555', '1', '1', '0');
INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('3', '2', '000002-2017', '8bdb1353813753547e94c2492953b8172132fb28', '1', '0', '0');
INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('4', '3', '000003-2017', '8b20ef7daf4d58aca784eaec327f3c00b19d77d8', '1', '0', '0');
INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('5', '4', '000004-2017', '551a59bf72d8e823ba179dd8b36909b21f454002', '1', '0', '0');
INSERT INTO `employee_account` (`employee_account_id`, `employee_id`, `employee_ecode`, `employee_pwd`, `employee_status`, `session_status`, `is_deleted`) VALUES ('6', '5', '000005-2017', '5b39532ba16fdd5685142fb731afd17ce5164d8c', '1', '0', '0');


#
# TABLE STRUCTURE FOR: employee_list
#

DROP TABLE IF EXISTS `employee_list`;

CREATE TABLE `employee_list` (
  `employee_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ecode` varchar(100) DEFAULT NULL,
  `id_number` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `address_one` varchar(500) DEFAULT NULL,
  `address_two` varchar(500) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `blood_type` varchar(45) DEFAULT NULL,
  `ref_religion_id` int(11) unsigned NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `cell_number` varchar(20) DEFAULT NULL,
  `telphone_number` varchar(20) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `sss` varchar(100) DEFAULT NULL,
  `phil_health` varchar(100) DEFAULT NULL,
  `pag_ibig` varchar(100) DEFAULT NULL,
  `bank_account` varchar(100) DEFAULT NULL,
  `bank_account_isprocess` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tin` varchar(100) DEFAULT NULL,
  `tax_code` varchar(50) NOT NULL,
  `employment_date` date DEFAULT NULL,
  `date_regularization` date DEFAULT NULL,
  `loan_date` date DEFAULT NULL,
  `loan_amount` decimal(18,4) DEFAULT NULL,
  `exmpt_sss` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `exmpt_pagibig` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `exmpt_philhealth` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `image_name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `emp_rates_duties_id` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Active',
  `on_leave` tinyint(4) NOT NULL DEFAULT '0',
  `tax_pay_type` int(11) DEFAULT NULL,
  `is_retired` tinyint(1) DEFAULT '0',
  `date_retired` date NOT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `created_by` int(11) NOT NULL,
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `modified_by` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`employee_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=512 ROW_FORMAT=DYNAMIC;

INSERT INTO `employee_list` (`employee_id`, `ecode`, `id_number`, `first_name`, `middle_name`, `last_name`, `address_one`, `address_two`, `birthdate`, `gender`, `height`, `weight`, `blood_type`, `ref_religion_id`, `civil_status`, `cell_number`, `telphone_number`, `email_address`, `sss`, `phil_health`, `pag_ibig`, `bank_account`, `bank_account_isprocess`, `tin`, `tax_code`, `employment_date`, `date_regularization`, `loan_date`, `loan_amount`, `exmpt_sss`, `exmpt_pagibig`, `exmpt_philhealth`, `image_name`, `emp_rates_duties_id`, `status`, `on_leave`, `tax_pay_type`, `is_retired`, `date_retired`, `date_created`, `created_by`, `date_modified`, `modified_by`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('1', '000001-2017', '01-2017', 'Joash Jezreel', 'Lucas', 'Noble', 'Angeles City', '', '1996-11-23', 'Male', '', '', '', '4', 'Single', '09367358736', '444-0122-129', 'noblejjoash@gmail.com', '', '', '', '', '0', '', '15', '2017-05-25', NULL, NULL, NULL, '0', '0', '1', 'assets/img/employee/59d6d5d1e35e2.jpg', '1', 'Active', '0', '3', '0', '1970-01-01', '2017-10-06', '1', '2017-11-22', '1', '0', '0', '0000-00-00');
INSERT INTO `employee_list` (`employee_id`, `ecode`, `id_number`, `first_name`, `middle_name`, `last_name`, `address_one`, `address_two`, `birthdate`, `gender`, `height`, `weight`, `blood_type`, `ref_religion_id`, `civil_status`, `cell_number`, `telphone_number`, `email_address`, `sss`, `phil_health`, `pag_ibig`, `bank_account`, `bank_account_isprocess`, `tin`, `tax_code`, `employment_date`, `date_regularization`, `loan_date`, `loan_amount`, `exmpt_sss`, `exmpt_pagibig`, `exmpt_philhealth`, `image_name`, `emp_rates_duties_id`, `status`, `on_leave`, `tax_pay_type`, `is_retired`, `date_retired`, `date_created`, `created_by`, `date_modified`, `modified_by`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('2', '000002-2017', '3232', 'adsa', 'asd', 'adas', 'asdasd', '', '2017-11-07', 'Male', '', '', '', '1', 'Single', '', '', '', '', '', '', '', '0', '', '1', '2017-11-07', NULL, NULL, NULL, '0', '1', '0', 'assets/img/anonymous-icon.png', '3', 'Active', '0', '1', '0', '1970-01-01', '2017-11-07', '1', '2017-11-10', '1', '0', '0', '0000-00-00');
INSERT INTO `employee_list` (`employee_id`, `ecode`, `id_number`, `first_name`, `middle_name`, `last_name`, `address_one`, `address_two`, `birthdate`, `gender`, `height`, `weight`, `blood_type`, `ref_religion_id`, `civil_status`, `cell_number`, `telphone_number`, `email_address`, `sss`, `phil_health`, `pag_ibig`, `bank_account`, `bank_account_isprocess`, `tin`, `tax_code`, `employment_date`, `date_regularization`, `loan_date`, `loan_amount`, `exmpt_sss`, `exmpt_pagibig`, `exmpt_philhealth`, `image_name`, `emp_rates_duties_id`, `status`, `on_leave`, `tax_pay_type`, `is_retired`, `date_retired`, `date_created`, `created_by`, `date_modified`, `modified_by`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('3', '000003-2017', '100004656', 'Sarah', '', 'Pabustan', 'Angeles City', '', '2017-11-21', 'Female', '', '', '', '1', 'Single', '', '', 'sarahapabustan@gmail.com', '', '', '', '', '0', '', '14', '1970-01-01', NULL, NULL, NULL, '0', '0', '0', 'assets/img/anonymous-icon.png', '4', 'Active', '0', '3', '0', '1970-01-01', '2017-11-22', '1', '2017-11-22', '1', '0', '0', '0000-00-00');
INSERT INTO `employee_list` (`employee_id`, `ecode`, `id_number`, `first_name`, `middle_name`, `last_name`, `address_one`, `address_two`, `birthdate`, `gender`, `height`, `weight`, `blood_type`, `ref_religion_id`, `civil_status`, `cell_number`, `telphone_number`, `email_address`, `sss`, `phil_health`, `pag_ibig`, `bank_account`, `bank_account_isprocess`, `tin`, `tax_code`, `employment_date`, `date_regularization`, `loan_date`, `loan_amount`, `exmpt_sss`, `exmpt_pagibig`, `exmpt_philhealth`, `image_name`, `emp_rates_duties_id`, `status`, `on_leave`, `tax_pay_type`, `is_retired`, `date_retired`, `date_created`, `created_by`, `date_modified`, `modified_by`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('4', '000004-2017', '1000234', 'Jason', '', 'Patawaran', 'Angeles City', '', '2017-11-06', 'Male', '', '', '', '3', 'Single', '', '', 'jasonpatawaran@gmail.com', '', '', '', '', '0', '', '14', '1970-01-01', NULL, NULL, NULL, '0', '0', '0', 'assets/img/anonymous-icon.png', '5', 'Active', '0', '5', '0', '1970-01-01', '2017-11-22', '1', '2017-11-22', '1', '0', '0', '0000-00-00');
INSERT INTO `employee_list` (`employee_id`, `ecode`, `id_number`, `first_name`, `middle_name`, `last_name`, `address_one`, `address_two`, `birthdate`, `gender`, `height`, `weight`, `blood_type`, `ref_religion_id`, `civil_status`, `cell_number`, `telphone_number`, `email_address`, `sss`, `phil_health`, `pag_ibig`, `bank_account`, `bank_account_isprocess`, `tin`, `tax_code`, `employment_date`, `date_regularization`, `loan_date`, `loan_amount`, `exmpt_sss`, `exmpt_pagibig`, `exmpt_philhealth`, `image_name`, `emp_rates_duties_id`, `status`, `on_leave`, `tax_pay_type`, `is_retired`, `date_retired`, `date_created`, `created_by`, `date_modified`, `modified_by`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('5', '000005-2017', '1000025', 'Dick', '', 'Pangilinan', 'lhds', '', '2017-11-21', 'Male', '', '', '', '6', 'Divorced', '', '', 'dickpangilinan@gmail.com', '', '', '', '', '0', '', '16', '1970-01-01', NULL, NULL, NULL, '0', '0', '0', 'assets/img/anonymous-icon.png', '6', 'Active', '0', '3', '0', '1970-01-01', '2017-11-22', '1', '2017-11-22', '1', '0', '0', '0000-00-00');


#
# TABLE STRUCTURE FOR: new_deductions_regular
#

DROP TABLE IF EXISTS `new_deductions_regular`;

CREATE TABLE `new_deductions_regular` (
  `deduction_regular_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT '0',
  `deduction_id` int(11) DEFAULT '0',
  `pay_period_id` int(11) DEFAULT '0',
  `deduction_total_amount` decimal(11,2) DEFAULT NULL,
  `deduction_per_pay_amount` decimal(11,2) DEFAULT NULL,
  `deduction_cycle` int(11) DEFAULT '0',
  `deduction_regular_remarks` varchar(300) DEFAULT '',
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_temporary` tinyint(1) DEFAULT '0',
  `deduction_total_amount_tempo` decimal(11,2) DEFAULT NULL,
  `loan_cashedout` tinyint(1) DEFAULT '0',
  `loan_total_amount` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`deduction_regular_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=116 ROW_FORMAT=DYNAMIC;

INSERT INTO `new_deductions_regular` (`deduction_regular_id`, `employee_id`, `deduction_id`, `pay_period_id`, `deduction_total_amount`, `deduction_per_pay_amount`, `deduction_cycle`, `deduction_regular_remarks`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`, `is_temporary`, `deduction_total_amount_tempo`, `loan_cashedout`, `loan_total_amount`) VALUES ('1', '1', '16', '24', NULL, '150000.00', NULL, ' ', '1', '2017-10-25 16:54:25', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', '1', NULL, '0', NULL);


#
# TABLE STRUCTURE FOR: new_otherearnings_regular
#

DROP TABLE IF EXISTS `new_otherearnings_regular`;

CREATE TABLE `new_otherearnings_regular` (
  `oe_regular_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT '0',
  `earnings_id` int(11) DEFAULT '0',
  `pay_period_id` int(11) DEFAULT '0',
  `oe_regular_amount` decimal(11,2) DEFAULT NULL,
  `oe_cycle` int(11) DEFAULT '0',
  `pay_type_id` int(11) DEFAULT '0',
  `oe_regular_remarks` varchar(300) DEFAULT '',
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_temporary` tinyint(1) DEFAULT '0',
  `is_taxable` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`oe_regular_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=5461 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: nsdsetup
#

DROP TABLE IF EXISTS `nsdsetup`;

CREATE TABLE `nsdsetup` (
  `nsdsetup_id` int(11) unsigned NOT NULL,
  `nsd_start` time NOT NULL,
  `nsd_end` time DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`nsdsetup_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `nsdsetup` (`nsdsetup_id`, `nsd_start`, `nsd_end`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '22:00:00', '07:00:00', '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: otherearnings_temporary
#

DROP TABLE IF EXISTS `otherearnings_temporary`;

CREATE TABLE `otherearnings_temporary` (
  `earnings_temporary_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_period_id` int(11) DEFAULT '0',
  `employee_id` int(11) DEFAULT '0',
  `earnings_id` int(11) DEFAULT '0',
  `earnings_temporary_amount` decimal(19,5) DEFAULT '0.00000',
  `earnings_temporary_remarks` varchar(300) DEFAULT '',
  `created_by` int(11) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`earnings_temporary_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: pay_slip
#

DROP TABLE IF EXISTS `pay_slip`;

CREATE TABLE `pay_slip` (
  `pay_slip_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_slip_code` varchar(20) DEFAULT NULL,
  `dtr_id` int(11) DEFAULT NULL,
  `reg_pay` decimal(19,5) DEFAULT NULL,
  `sun_pay` decimal(19,5) DEFAULT NULL,
  `reg_hol_pay` decimal(19,5) DEFAULT NULL,
  `spe_hol_pay` decimal(19,5) DEFAULT NULL,
  `reg_ot_pay` decimal(19,5) DEFAULT NULL,
  `sun_ot_pay` decimal(19,5) DEFAULT NULL,
  `reg_nsd_pay` decimal(19,5) DEFAULT NULL,
  `sun_nsd_pay` decimal(19,5) DEFAULT NULL,
  `total_dtr_amount` decimal(19,5) DEFAULT NULL,
  `days_with_pay_amt` decimal(11,2) DEFAULT NULL,
  `days_wout_pay_amt` decimal(11,2) DEFAULT NULL,
  `minutes_late_amt` decimal(11,2) DEFAULT NULL,
  `cola_pay` decimal(19,5) DEFAULT NULL,
  `gross_pay` decimal(19,5) DEFAULT NULL,
  `taxable_pay` decimal(19,5) DEFAULT NULL,
  `total_deductions` decimal(19,5) DEFAULT NULL,
  `net_pay` decimal(19,5) DEFAULT NULL,
  `date_processed` date NOT NULL DEFAULT '0000-00-00',
  `processed_by` int(11) NOT NULL,
  PRIMARY KEY (`pay_slip_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=16384 ROW_FORMAT=DYNAMIC;

INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('16', NULL, '9', '15000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '15000.00000', '0.00', '0.00', '0.00', NULL, '15000.00000', '15000.00000', '3416.08000', '11583.92000', '2017-09-26', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('29', NULL, '13', '15000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '15000.00000', '0.00', '0.00', '0.00', NULL, '15000.00000', '15000.00000', '2833.33000', '12166.67000', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('31', NULL, '14', '16000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '16000.00000', '0.00', '0.00', '0.00', NULL, '16000.00000', '16000.00000', '2820.73000', '13179.27000', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('32', NULL, '15', '20000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '20000.00000', '0.00', '0.00', '0.00', NULL, '20000.00000', '20000.00000', '4333.33000', '15666.67000', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('33', NULL, '16', '15000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '15000.00000', '0.00', '0.00', '0.00', NULL, '15000.00000', '15000.00000', '2811.87500', '12188.12500', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('35', NULL, '17', '10000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '10000.00000', '0.00', '0.00', '0.00', NULL, '10000.00000', '10000.00000', '1899.47500', '8100.52500', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('39', NULL, '20', '16000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '16000.00000', '0.00', '0.00', '0.00', NULL, '16000.00000', '16000.00000', '2837.97500', '13162.02500', '2017-10-03', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('41', NULL, '1', '5000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '5000.00000', '0.00', '0.00', '0.00', NULL, '5000.00000', '5000.00000', '770.77000', '4229.23000', '2017-10-10', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('43', NULL, '2', '5000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '5000.00000', '0.00', '0.00', '0.00', NULL, '5000.00000', '5000.00000', '1076.09000', '3923.91000', '2017-10-12', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('44', NULL, '3', '5000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '5000.00000', '0.00', '0.00', '0.00', NULL, '5000.00000', '5000.00000', '930.77000', '4069.23000', '2017-10-12', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('45', NULL, '4', '5000.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '5000.00000', '0.00', '0.00', '0.00', NULL, '5000.00000', '5000.00000', '770.77000', '4229.23000', '2017-10-12', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('46', NULL, '5', '2500.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '2500.00000', '0.00', '0.00', '0.00', NULL, '2500.00000', '2500.00000', '200.00000', '2300.00000', '2017-11-22', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('48', NULL, '7', '1900.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '1900.00000', '0.00', '0.00', '0.00', NULL, '1900.00000', '1900.00000', '200.00000', '1700.00000', '2017-11-22', '1');
INSERT INTO `pay_slip` (`pay_slip_id`, `pay_slip_code`, `dtr_id`, `reg_pay`, `sun_pay`, `reg_hol_pay`, `spe_hol_pay`, `reg_ot_pay`, `sun_ot_pay`, `reg_nsd_pay`, `sun_nsd_pay`, `total_dtr_amount`, `days_with_pay_amt`, `days_wout_pay_amt`, `minutes_late_amt`, `cola_pay`, `gross_pay`, `taxable_pay`, `total_deductions`, `net_pay`, `date_processed`, `processed_by`) VALUES ('49', NULL, '8', '1900.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '1900.00000', '0.00', '0.00', '0.00', NULL, '1900.00000', '1900.00000', '200.75000', '1699.25000', '2017-11-22', '1');


#
# TABLE STRUCTURE FOR: pay_slip_deductions
#

DROP TABLE IF EXISTS `pay_slip_deductions`;

CREATE TABLE `pay_slip_deductions` (
  `pay_slip_deduction_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_slip_id` int(11) DEFAULT NULL,
  `deduction_id` int(11) DEFAULT NULL,
  `deduction_amount` decimal(19,5) DEFAULT '0.00000',
  `deduction_regular_id` int(11) DEFAULT NULL,
  `sss_id` int(11) DEFAULT NULL,
  `philhealth_id` int(11) DEFAULT NULL,
  `wtax_id` int(11) DEFAULT NULL,
  `active_deduct` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`pay_slip_deduction_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4915 ROW_FORMAT=DYNAMIC;

INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('61', '16', '1', '545.00000', NULL, '29', NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('62', '16', '2', '187.50000', NULL, NULL, '8', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('63', '16', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('64', '16', '4', '2583.58000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('113', '29', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('114', '29', '2', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('115', '29', '3', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('116', '29', '4', '2833.33000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('121', '31', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('122', '31', '2', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('123', '31', '3', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('124', '31', '4', '2820.73000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('125', '32', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('126', '32', '2', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('127', '32', '3', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('128', '32', '4', '4333.33000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('129', '33', '1', '545.00000', NULL, '29', NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('130', '33', '2', '187.50000', NULL, NULL, '8', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('131', '33', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('132', '33', '4', '1979.37500', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('137', '35', '1', '363.30000', NULL, '19', NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('138', '35', '2', '125.00000', NULL, NULL, '3', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('139', '35', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('140', '35', '4', '1311.17500', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('153', '39', '1', '581.30000', NULL, '31', NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('154', '39', '2', '200.00000', NULL, NULL, '9', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('155', '39', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('156', '39', '4', '1956.67500', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('161', '41', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('162', '41', '2', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('163', '41', '3', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('164', '41', '4', '770.77000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('169', '43', '1', '181.65000', NULL, '9', NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('170', '43', '2', '100.00000', NULL, NULL, '1', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('171', '43', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('172', '43', '4', '694.44000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('173', '44', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('174', '44', '2', '100.00000', NULL, NULL, '1', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('175', '44', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('176', '44', '4', '730.77000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('177', '45', '1', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('178', '45', '2', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('179', '45', '3', '0.00000', NULL, NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('180', '45', '4', '770.77000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('181', '46', '1', NULL, NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('182', '46', '2', '100.00000', NULL, NULL, '1', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('183', '46', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('184', '46', '4', '0.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('189', '48', '16', '150000.00000', '1', NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('190', '48', '16', '150000.00000', '1', NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('191', '48', '16', '150000.00000', '1', NULL, NULL, NULL, '0');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('192', '48', '1', NULL, NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('193', '48', '2', '100.00000', NULL, NULL, '1', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('194', '48', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('195', '48', '4', '0.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('196', '49', '1', NULL, NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('197', '49', '2', '100.00000', NULL, NULL, '1', NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('198', '49', '3', '100.00000', NULL, NULL, NULL, NULL, '1');
INSERT INTO `pay_slip_deductions` (`pay_slip_deduction_id`, `pay_slip_id`, `deduction_id`, `deduction_amount`, `deduction_regular_id`, `sss_id`, `philhealth_id`, `wtax_id`, `active_deduct`) VALUES ('199', '49', '4', '0.75000', NULL, NULL, NULL, NULL, '1');


#
# TABLE STRUCTURE FOR: pay_slip_earned
#

DROP TABLE IF EXISTS `pay_slip_earned`;

CREATE TABLE `pay_slip_earned` (
  `pay_slip_earned_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_slip_id` int(11) DEFAULT NULL,
  `deduction_id` int(11) DEFAULT NULL,
  `total_amount_earned` decimal(19,5) DEFAULT '0.00000',
  `deduction_regular_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pay_slip_earned_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4915 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: pay_slip_loans_adjustments
#

DROP TABLE IF EXISTS `pay_slip_loans_adjustments`;

CREATE TABLE `pay_slip_loans_adjustments` (
  `loans_adjustments_id` int(11) NOT NULL AUTO_INCREMENT,
  `particular` varchar(20) DEFAULT NULL,
  `debit_amount` decimal(11,2) DEFAULT NULL,
  `deduction_regular_id` int(11) DEFAULT NULL,
  `credit_amount` decimal(11,2) DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`loans_adjustments_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: pay_slip_other_earnings
#

DROP TABLE IF EXISTS `pay_slip_other_earnings`;

CREATE TABLE `pay_slip_other_earnings` (
  `pay_slip_other_earnings_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_slip_id` int(11) DEFAULT NULL,
  `earnings_id` int(11) DEFAULT NULL,
  `earnings_amount` decimal(19,5) DEFAULT '0.00000',
  `oe_regular_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pay_slip_other_earnings_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: pay_slip_reset
#

DROP TABLE IF EXISTS `pay_slip_reset`;

CREATE TABLE `pay_slip_reset` (
  `pay_slip_reset` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pay_slip_reset`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: ref_action_taken
#

DROP TABLE IF EXISTS `ref_action_taken`;

CREATE TABLE `ref_action_taken` (
  `ref_action_taken_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `action_taken` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_action_taken_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_action_taken` (`ref_action_taken_id`, `action_taken`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '7 Days Suspension', '7 Days Suspension', '1', '0', '2017-09-26 11:25:12', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_branch
#

DROP TABLE IF EXISTS `ref_branch`;

CREATE TABLE `ref_branch` (
  `ref_branch_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `branch` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_branch_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_branch` (`ref_branch_id`, `branch`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'Main Branch', '', '1', NULL, '2017-08-31 15:06:29', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_certificate
#

DROP TABLE IF EXISTS `ref_certificate`;

CREATE TABLE `ref_certificate` (
  `ref_certificate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `certificate` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) unsigned NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_certificate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_certificate` (`ref_certificate_id`, `certificate`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('1', 'Certificate of webdev using wordpress and joomla', NULL, '1', NULL, '2017-09-26 12:05:14', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: ref_compensation_type
#

DROP TABLE IF EXISTS `ref_compensation_type`;

CREATE TABLE `ref_compensation_type` (
  `ref_compensation_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `compensation_type` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_compensation_type_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: ref_course_degree
#

DROP TABLE IF EXISTS `ref_course_degree`;

CREATE TABLE `ref_course_degree` (
  `ref_course_degree_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_degree` varchar(45) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_course_degree_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1820 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: ref_day_type
#

DROP TABLE IF EXISTS `ref_day_type`;

CREATE TABLE `ref_day_type` (
  `ref_day_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `daytype` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_day_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'Regular Day', '', '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', 'Regular Sunday', NULL, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('3', 'Regular Holiday', NULL, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('4', 'Special Holiday', NULL, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('5', 'Sunday Regular Holiday', NULL, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_day_type` (`ref_day_type_id`, `daytype`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('6', 'Sunday Special Holiday', NULL, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_department
#

DROP TABLE IF EXISTS `ref_department`;

CREATE TABLE `ref_department` (
  `ref_department_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_department_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'HR PERSONNEL', 'HR PERSONNEL', '1', '1', '2015-03-16 10:51:30', '2017-07-28 15:27:52', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', 'MIS DEPARTMENT', 'MIS COMPUTER DEPT', '1', '0', '2015-03-16 10:51:44', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('3', 'PROCUREMENT', 'PROCUREMENT / LOGISTICS', '1', '1', '2015-03-26 10:14:22', '2015-06-08 22:10:50', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('4', 'ACCOUNTING ', 'ACCOUNTING DEPARTMENT', '1', '0', '2015-03-26 10:14:22', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('5', 'SALES AND MARKETING', 'SALES AND MARKETING', '1', '0', '2015-03-26 10:14:23', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('6', 'EVET DOCTORS', 'EVET DOCTORS', '1', '0', '2015-03-26 10:14:23', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('7', 'INVENTORY DEPARTMENTS', 'INVENTORY DEPARTMENT', '1', '1', '2015-03-26 10:14:23', '2015-04-11 11:34:41', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('8', 'FINANCE DEPARTMENT', 'FINANCE AND ADMIN DEPT', '1', '0', '2015-03-26 14:06:22', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('9', 'SAMPLE 1', NULL, '1', '1', '2015-03-26 16:21:51', '2015-03-26 17:20:50', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('10', 'SAMPLE 3', '', '1', '1', '2015-03-26 16:26:56', '2015-04-10 20:33:20', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('11', 'SAMPLES 4', 'Sample 4', '1', '1', '2015-03-26 16:28:15', '2015-04-11 11:39:29', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('12', 'HRD', 'HUMAN RESOURCE DEPARTMENT', '1', '1', '2015-03-26 16:32:50', '2015-04-10 20:37:32', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('13', 'UTILITY', 'ANY UTILITY DEPT', '1', '0', '2015-04-10 20:36:40', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('14', 'EVRVETOPTIONS', NULL, '0', '0', '2017-01-18 03:03:30', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('15', 'ANGELES PET CARE CENTER', NULL, '0', '0', '2017-01-19 01:46:47', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('16', 'Hospital Administrator', NULL, '0', '0', '2017-01-20 05:51:48', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_department` (`ref_department_id`, `department`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('17', 'IT', NULL, '1', '0', '2017-09-25 14:13:41', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_disciplinary_action_policy
#

DROP TABLE IF EXISTS `ref_disciplinary_action_policy`;

CREATE TABLE `ref_disciplinary_action_policy` (
  `ref_disciplinary_action_policy_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `disciplinary_action_policy` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_disciplinary_action_policy_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_disciplinary_action_policy` (`ref_disciplinary_action_policy_id`, `disciplinary_action_policy`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'AWOL', '', '1', '0', '2017-09-26 11:24:59', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_disciplinary_action_policy` (`ref_disciplinary_action_policy_id`, `disciplinary_action_policy`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', '7 Days Suspension', '7 Days Suspension', '1', '0', '2017-09-26 11:26:11', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_employment_status
#

DROP TABLE IF EXISTS `ref_employment_status`;

CREATE TABLE `ref_employment_status` (
  `ref_employment_status_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employment_status` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by_user_id` int(11) unsigned NOT NULL,
  `modified_by_user_id` int(11) unsigned DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ref_employment_status_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: ref_employment_type
#

DROP TABLE IF EXISTS `ref_employment_type`;

CREATE TABLE `ref_employment_type` (
  `ref_employment_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employment_type` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_employment_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=3276 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'Probationary', NULL, '1', '0', '2015-06-10 08:27:11', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', 'Regular', NULL, '1', '0', '2015-06-10 08:27:11', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('3', 'Trainee', NULL, '1', '0', '2015-06-10 08:27:11', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('4', 'Casual', NULL, '1', '0', '2015-06-10 08:27:11', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('5', 'Consultant/Contractual', NULL, '1', '0', '2015-06-10 08:27:11', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_employment_type` (`ref_employment_type_id`, `employment_type`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('6', 'RESIGNED', NULL, '0', '0', '2017-03-14 07:35:41', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_leave_type
#

DROP TABLE IF EXISTS `ref_leave_type`;

CREATE TABLE `ref_leave_type` (
  `ref_leave_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `leave_type` varchar(100) NOT NULL,
  `leave_type_short_name` varchar(100) DEFAULT NULL,
  `is_forwardable` tinyint(2) NOT NULL DEFAULT '1',
  `is_payable` tinyint(2) NOT NULL DEFAULT '1',
  `total_grant` int(11) unsigned NOT NULL DEFAULT '0',
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_leave_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5461 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('24', 'SICK', 'SC', '1', '0', '5', 'SICK LEAVE', '1', '1', '2016-09-30 07:43:19', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('25', 'MATERNITY', 'MT', '1', '0', '2', 'MATERNITY', '1', '1', '2016-09-30 07:43:41', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('33', 'VACATION LEAVE', 'VL', '0', '0', '0', '0', '1', '0', '2016-11-22 06:46:12', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('34', 'sad', 'sad', '0', '0', '23', 'sad', '1', '0', '2017-10-17 16:31:43', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('35', 'Basta', '6', '0', '1', '5', 'sdsadad', '1', '0', '2017-10-25 15:42:52', '0000-00-00 00:00:00', '1', '1', '2017-10-25 15:43:02');
INSERT INTO `ref_leave_type` (`ref_leave_type_id`, `leave_type`, `leave_type_short_name`, `is_forwardable`, `is_payable`, `total_grant`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('36', 'sad', '5', '1', '1', '5', 'dasdasd', '1', '0', '2017-10-25 15:48:37', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: ref_payment_type
#

DROP TABLE IF EXISTS `ref_payment_type`;

CREATE TABLE `ref_payment_type` (
  `ref_payment_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `col1_percent` decimal(19,2) DEFAULT '0.00',
  `col1_amount` decimal(19,2) DEFAULT '0.00',
  `col2_percent` decimal(19,2) DEFAULT '0.00',
  `col2_amount` decimal(19,2) DEFAULT '0.00',
  `col3_percent` decimal(19,2) DEFAULT '0.00',
  `col3_amount` decimal(19,2) DEFAULT '0.00',
  `col4_percent` decimal(19,2) DEFAULT '0.00',
  `col4_amount` decimal(19,2) DEFAULT '0.00',
  `col5_percent` decimal(19,2) DEFAULT '0.00',
  `col5_amount` decimal(19,2) DEFAULT '0.00',
  `col6_percent` decimal(19,2) DEFAULT '0.00',
  `col6_amount` decimal(19,2) DEFAULT '0.00',
  `col7_percent` decimal(19,2) DEFAULT '0.00',
  `col7_amount` decimal(19,2) DEFAULT '0.00',
  `col8_percent` decimal(19,2) DEFAULT '0.00',
  `col8_amount` decimal(19,2) DEFAULT '0.00',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_type_factor` decimal(11,2) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_payment_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5461 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_payment_type` (`ref_payment_type_id`, `payment_type`, `description`, `col1_percent`, `col1_amount`, `col2_percent`, `col2_amount`, `col3_percent`, `col3_amount`, `col4_percent`, `col4_amount`, `col5_percent`, `col5_amount`, `col6_percent`, `col6_amount`, `col7_percent`, `col7_amount`, `col8_percent`, `col8_amount`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `pay_type_factor`, `date_deleted`, `deleted_by`) VALUES ('1', 'Semi Monthly', '', '0.00', '0.00', '0.05', '0.00', '0.10', '20.83', '0.15', '104.17', '0.20', '354.17', '0.25', '937.50', '0.30', '2083.33', '0.32', '5208.33', '0', '1', '2016-10-06 10:14:12', '2017-07-17 14:08:54', '0', '13.09', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_payment_type` (`ref_payment_type_id`, `payment_type`, `description`, `col1_percent`, `col1_amount`, `col2_percent`, `col2_amount`, `col3_percent`, `col3_amount`, `col4_percent`, `col4_amount`, `col5_percent`, `col5_amount`, `col6_percent`, `col6_amount`, `col7_percent`, `col7_amount`, `col8_percent`, `col8_amount`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `pay_type_factor`, `date_deleted`, `deleted_by`) VALUES ('2', 'Monthly', '', '0.00', '0.00', '0.05', '0.00', '0.10', '41.67', '0.15', '208.33', '0.20', '708.33', '0.25', '1875.00', '0.30', '4166.67', '0.32', '10416.67', '0', '0', '2016-10-06 10:14:00', '2017-01-26 18:53:54', '0', '26.17', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_payment_type` (`ref_payment_type_id`, `payment_type`, `description`, `col1_percent`, `col1_amount`, `col2_percent`, `col2_amount`, `col3_percent`, `col3_amount`, `col4_percent`, `col4_amount`, `col5_percent`, `col5_amount`, `col6_percent`, `col6_amount`, `col7_percent`, `col7_amount`, `col8_percent`, `col8_amount`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `pay_type_factor`, `date_deleted`, `deleted_by`) VALUES ('3', 'Daily', '', '0.00', '0.00', '0.05', '0.00', '0.10', '1.65', '0.15', '8.25', '0.20', '28.05', '0.25', '74.28', '0.30', '165.02', '0.32', '412.54', '0', '0', '2016-10-06 10:14:18', '2017-01-26 18:53:54', '0', '1.00', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_payment_type` (`ref_payment_type_id`, `payment_type`, `description`, `col1_percent`, `col1_amount`, `col2_percent`, `col2_amount`, `col3_percent`, `col3_amount`, `col4_percent`, `col4_amount`, `col5_percent`, `col5_amount`, `col6_percent`, `col6_amount`, `col7_percent`, `col7_amount`, `col8_percent`, `col8_amount`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `pay_type_factor`, `date_deleted`, `deleted_by`) VALUES ('4', 'Semi Monthly (No Sat.)', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1', '0', '2017-07-17 14:09:09', '0000-00-00 00:00:00', '0', '10.09', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_payment_type` (`ref_payment_type_id`, `payment_type`, `description`, `col1_percent`, `col1_amount`, `col2_percent`, `col2_amount`, `col3_percent`, `col3_amount`, `col4_percent`, `col4_amount`, `col5_percent`, `col5_amount`, `col6_percent`, `col6_amount`, `col7_percent`, `col7_amount`, `col8_percent`, `col8_amount`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `pay_type_factor`, `date_deleted`, `deleted_by`) VALUES ('5', 'Weekly', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1', '0', '2017-11-22 12:23:38', '0000-00-00 00:00:00', '0', '1.00', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_philhealth_contribution
#

DROP TABLE IF EXISTS `ref_philhealth_contribution`;

CREATE TABLE `ref_philhealth_contribution` (
  `ref_philhealth_contribution_id` int(11) NOT NULL,
  `salary_range_from` decimal(19,2) NOT NULL,
  `salary_range_to` decimal(19,2) NOT NULL,
  `employee` decimal(19,2) NOT NULL,
  `employer` decimal(19,2) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=585 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('1', '0.00', '8999.99', '100.00', '100.00', '200.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('2', '9000.00', '9999.99', '112.50', '112.50', '225.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('3', '10000.00', '10999.99', '125.00', '125.00', '250.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('4', '11000.00', '11999.99', '137.50', '137.50', '275.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('5', '12000.00', '12999.99', '150.00', '150.00', '300.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('6', '13000.00', '13999.99', '162.50', '162.50', '325.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('7', '14000.00', '14999.99', '175.00', '175.00', '350.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('8', '15000.00', '15999.99', '187.50', '187.50', '375.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('9', '16000.00', '16999.99', '200.00', '200.00', '400.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('10', '17000.00', '17999.99', '212.50', '212.50', '425.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('11', '18000.00', '18999.99', '225.00', '225.00', '450.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('12', '19000.00', '19999.99', '237.50', '237.50', '475.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('13', '20000.00', '20999.99', '250.00', '250.00', '500.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('14', '21000.00', '21999.99', '262.50', '262.50', '525.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('15', '22000.00', '22999.99', '275.00', '275.00', '550.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('16', '23000.00', '23999.99', '287.50', '287.50', '575.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('17', '24000.00', '24999.99', '300.00', '300.00', '600.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('18', '25000.00', '25999.99', '312.50', '312.50', '625.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('19', '26000.00', '26999.99', '325.00', '325.00', '650.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('20', '27000.00', '27999.99', '337.50', '337.50', '675.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('21', '28000.00', '28999.99', '350.00', '350.00', '700.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('22', '29000.00', '29999.99', '362.50', '362.50', '725.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('23', '30000.00', '30999.99', '375.00', '375.00', '750.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('24', '31000.00', '31999.99', '387.50', '387.50', '775.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('25', '32000.00', '32999.99', '400.00', '400.00', '800.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('26', '33000.00', '33999.99', '412.50', '412.50', '825.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('27', '34000.00', '34999.99', '425.00', '425.00', '850.00', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('28', '35000.00', '9999999.00', '437.50', '437.50', '875.00', '0', '0', '0000-00-00 00:00:00', '2017-03-29 09:53:08', '0000-00-00 00:00:00', '0', '1', '0');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('0', '4567890.00', '3456789.00', '34567890.00', '34567890.00', '69135780.00', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-03-29 15:17:55', '0', '0', '1');
INSERT INTO `ref_philhealth_contribution` (`ref_philhealth_contribution_id`, `salary_range_from`, `salary_range_to`, `employee`, `employer`, `total`, `is_deleted`, `status`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`) VALUES ('0', '100000.00', '200000.00', '10.00', '100.00', '110.00', '1', '0', '2017-03-29 15:17:42', '0000-00-00 00:00:00', '2017-03-29 15:17:55', '1', '0', '1');


#
# TABLE STRUCTURE FOR: ref_position
#

DROP TABLE IF EXISTS `ref_position`;

CREATE TABLE `ref_position` (
  `ref_position_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_position_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=712 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('1', 'Finance Analyst', '', '1', '0', '2015-03-16 23:09:48', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('2', 'Accounting Clerk', '', '1', '1', '2015-03-26 18:12:15', '2015-04-29 06:54:37', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('3', 'Clinic Assistant', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('4', 'Veterinary Representative', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('5', 'Front Desk Clerk', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('6', 'Company Driver', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('7', 'Cashier', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('8', 'HR Assistant', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('9', 'Payroll Officer', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('10', 'HR Manager', '', '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('11', 'LOGISTIC OFFICER', NULL, '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('12', 'PERSONNEL ASST/ RECEPTIONIST', NULL, '1', '0', '2015-03-26 18:12:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('13', 'STAFFS', NULL, '1', '1', '2015-03-26 18:12:16', '2015-04-29 06:47:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('14', 'SUPERVISOR', NULL, '1', '0', '2015-03-26 18:12:16', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('15', 'UTILITYMAN', NULL, '1', '0', '2015-03-26 18:12:16', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('16', 'WAREHOUSEMAN', NULL, '1', '0', '2015-03-26 18:12:16', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('19', 'R&DS', NULL, '1', '1', '2015-03-26 22:07:34', '2015-04-18 06:06:41', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('20', 'MIRUNS', NULL, '1', '1', '2015-04-18 06:23:24', '2015-04-18 17:10:58', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('30', 'Web Developer', 'web developer', '0', '0', '2016-09-28 04:06:36', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('32', 'Scientist', NULL, '0', '0', '2016-12-05 04:09:46', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('33', 'Speedster', NULL, '0', '0', '2016-12-05 05:55:30', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('34', 'TECHNICAL SUPPORT', NULL, '0', '0', '2016-12-06 04:16:06', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('35', 'Junior Web Developer', NULL, '0', '0', '2016-12-06 04:31:44', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('36', 'Resident Veterinarian', NULL, '0', '0', '2017-01-18 03:16:48', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('37', 'AUDITOR', NULL, '0', '0', '2017-01-19 02:21:48', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('38', 'PURCHASER', NULL, '0', '0', '2017-01-19 02:29:15', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('39', 'MAINTENANCE OFFICER', NULL, '0', '0', '2017-01-19 02:47:47', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('40', 'Head Veterinarian', NULL, '0', '0', '2017-01-19 03:02:00', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('41', 'AR Associate', NULL, '0', '0', '2017-01-19 03:07:49', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('42', 'Warehouse Incharge', NULL, '0', '0', '2017-01-19 03:12:19', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('43', 'Warehouse Assistant', NULL, '0', '0', '2017-01-19 03:24:27', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('44', 'Vismin Supervisor', NULL, '0', '0', '2017-01-19 03:43:17', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('45', 'Stockroom Custodian', NULL, '0', '0', '2017-01-19 04:04:52', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('46', 'Service Vehicle Incharge', NULL, '0', '0', '2017-01-19 09:17:52', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('47', 'Accounting Head', NULL, '0', '0', '2017-01-19 09:32:19', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('48', 'Hospital Administrator', NULL, '0', '0', '2017-01-20 05:53:04', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('49', 'Liason Office/Tinang Administrator', NULL, '0', '0', '2017-02-24 04:29:23', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('50', 'President', NULL, '0', '0', '2017-03-07 05:44:29', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('51', 'President', NULL, '0', '0', '2017-03-07 05:45:36', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('52', 'Developer', NULL, '1', '0', '2017-09-04 10:55:28', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_position` (`ref_position_id`, `position`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('53', 'IT', NULL, '1', '0', '2017-09-26 09:25:32', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: ref_relationship
#

DROP TABLE IF EXISTS `ref_relationship`;

CREATE TABLE `ref_relationship` (
  `ref_relationship_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `relationship` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_relationship_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1820 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('1', 'Father', 'Under desaya', '0', '1', '2017-03-28 15:20:36', '2017-11-24 15:01:38', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('2', 'Son', 'Son', '0', '0', '2017-03-28 15:27:51', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('3', 'Mother', 'Mother', '0', '0', '2017-03-28 15:36:40', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('4', 'test', '', '1', '1', '2017-03-29 09:59:19', '2017-03-29 09:59:22', '1', '1', '2017-03-29 09:59:24');
INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('5', 'relatives', 'cousin', '1', '0', '2017-08-08 18:49:48', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_relationship` (`ref_relationship_id`, `relationship`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('6', 'uncle', 'uncle', '1', '0', '2017-08-08 18:50:42', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: ref_religion
#

DROP TABLE IF EXISTS `ref_religion`;

CREATE TABLE `ref_religion` (
  `ref_religion_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `religion` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_religion_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2730 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('1', 'Roman Catholic', '', '1', '1', '2015-03-16 23:10:02', '2015-05-10 11:41:17', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('2', 'Protestant', NULL, '1', '0', '2015-03-26 18:23:42', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('3', 'INC', 'Iglesia Ni Cristo', '1', '1', '2015-03-26 18:23:42', '2015-04-18 03:51:01', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('4', 'Baptist', NULL, '1', '0', '2015-03-26 18:23:42', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('5', 'Born-Again', NULL, '1', '0', '2015-03-26 18:23:42', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('6', 'Jehovah\'s Witness', NULL, '1', '0', '2015-03-26 18:23:42', '2017-01-26 18:53:54', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('7', 'EVANGELICAL CHRISTIAN', 'EVANGELICAL CHRISTIAN', '0', '0', '2017-02-28 06:52:24', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('8', 'test', '', '1', '1', '2017-03-29 10:02:22', '2017-03-29 10:02:24', '1', '1', '2017-03-29 10:02:26');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('9', 'Christian', 'Christian', '1', '0', '2017-09-06 08:52:22', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');
INSERT INTO `ref_religion` (`ref_religion_id`, `religion`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `deleted_by`, `date_deleted`) VALUES ('10', 'Sabadista', '', '1', '0', '2017-09-22 17:18:10', '0000-00-00 00:00:00', '0', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: ref_section
#

DROP TABLE IF EXISTS `ref_section`;

CREATE TABLE `ref_section` (
  `ref_section_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `section` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`ref_section_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1092 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', '[NONE]', '', '1', '0', '2015-03-16 15:10:18', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', 'PURCHASING', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('3', 'FINANCE', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('4', 'MARKETING', '', '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('5', 'DELIVERY MAN', NULL, '1', '1', '2015-03-26 10:16:08', '2015-04-11 22:16:29', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('6', 'ENGINEERING', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('7', 'WAREHOUSE', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('8', 'QUALITY CONTROL', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('9', 'PRODUCTION', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('10', 'SECURITY', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '1', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('11', 'PACKAGING', NULL, '1', '0', '2015-03-26 10:16:08', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `ref_section` (`ref_section_id`, `section`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('12', 'R&D', NULL, '1', '0', '2015-03-26 14:07:54', '2017-01-26 18:53:54', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: ref_sss_contribution
#

DROP TABLE IF EXISTS `ref_sss_contribution`;

CREATE TABLE `ref_sss_contribution` (
  `ref_sss_contribution_id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_range_from` decimal(19,2) NOT NULL,
  `salary_range_to` decimal(19,2) NOT NULL,
  `monthly_salary_credit` decimal(19,2) NOT NULL,
  `employee` decimal(19,2) NOT NULL,
  `employer` decimal(19,2) NOT NULL,
  `employer_contribution` decimal(19,2) NOT NULL,
  `sub_total` decimal(19,2) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ref_sss_contribution_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=528 ROW_FORMAT=DYNAMIC;

INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('1', '1000.00', '1249.99', '1000.00', '36.30', '73.70', '10.00', '110.00', '120.00', '0', '0', '0', '1', '0', '0000-00-00 00:00:00', '2017-03-29 15:16:32', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('2', '1250.00', '1749.99', '1500.00', '54.50', '110.50', '10.00', '165.00', '175.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('3', '1750.00', '2249.99', '2000.00', '72.70', '147.30', '10.00', '157.30', '230.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('4', '2250.00', '2749.99', '2500.00', '90.80', '184.20', '10.00', '194.20', '285.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('5', '2750.00', '3249.99', '3000.00', '109.00', '221.00', '10.00', '231.00', '340.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('6', '3250.00', '3749.99', '3500.00', '127.20', '257.80', '10.00', '267.80', '395.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('7', '3750.00', '4249.99', '4000.00', '145.30', '294.70', '10.00', '304.70', '450.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('8', '4250.00', '4749.99', '4500.00', '163.50', '331.50', '10.00', '341.50', '505.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('9', '4750.00', '5249.99', '5000.00', '181.65', '368.30', '10.00', '549.95', '559.95', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('10', '5250.00', '5749.99', '5500.00', '199.80', '405.20', '10.00', '415.20', '615.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('11', '5750.00', '6249.99', '6000.00', '218.00', '442.00', '10.00', '452.00', '670.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('12', '6250.00', '6749.99', '6500.00', '236.20', '478.80', '10.00', '488.80', '725.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('13', '6750.00', '7249.99', '7000.00', '254.30', '515.70', '10.00', '525.70', '780.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('14', '7250.00', '7749.99', '7500.00', '272.50', '552.50', '10.00', '562.50', '835.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('15', '7750.00', '8249.99', '8000.00', '290.70', '589.30', '10.00', '599.30', '890.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('16', '8250.00', '8749.99', '8500.00', '308.80', '626.20', '10.00', '636.20', '945.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('17', '8750.00', '9249.99', '9000.00', '327.00', '663.00', '10.00', '990.00', '1000.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('18', '9250.00', '9749.99', '9500.00', '345.20', '699.80', '10.00', '1045.00', '1055.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('19', '9750.00', '10249.99', '10000.00', '363.30', '736.70', '10.00', '1100.00', '1110.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('20', '10250.00', '10749.99', '10500.00', '381.50', '773.50', '10.00', '1155.00', '1165.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('21', '10750.00', '11249.99', '11000.00', '399.70', '810.30', '10.00', '1210.00', '1220.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('22', '11250.00', '11749.99', '11500.00', '417.80', '847.20', '10.00', '1265.00', '1275.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('23', '11750.00', '12249.99', '12000.00', '436.00', '884.00', '10.00', '1320.00', '1330.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('24', '12250.00', '12749.99', '12500.00', '454.20', '920.80', '10.00', '1375.00', '1385.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('25', '12750.00', '13249.99', '13000.00', '472.30', '957.70', '10.00', '1430.00', '1440.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('26', '13250.00', '13749.99', '13500.00', '490.50', '994.50', '10.00', '1485.00', '1495.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('27', '13750.00', '14249.99', '14000.00', '508.70', '1031.30', '10.00', '1540.00', '1550.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('28', '14250.00', '14749.99', '14500.00', '526.80', '1068.20', '10.00', '1595.00', '1605.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('29', '14750.00', '15249.99', '15000.00', '545.00', '1105.00', '30.00', '1650.00', '1680.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('30', '15250.00', '15749.99', '15500.00', '563.20', '1141.80', '30.00', '1705.00', '1735.00', '0', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ref_sss_contribution` (`ref_sss_contribution_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee`, `employer`, `employer_contribution`, `sub_total`, `total`, `is_deleted`, `status`, `created_by`, `modified_by`, `deleted_by`, `date_created`, `date_modified`, `date_deleted`) VALUES ('31', '15750.00', '9999999.00', '16000.00', '581.30', '1178.70', '30.00', '1760.00', '1790.00', '0', '0', '0', '1', '0', '0000-00-00 00:00:00', '2017-03-29 10:11:00', '2017-03-29 10:08:45');


#
# TABLE STRUCTURE FOR: refdeduction
#

DROP TABLE IF EXISTS `refdeduction`;

CREATE TABLE `refdeduction` (
  `deduction_id` int(11) NOT NULL AUTO_INCREMENT,
  `deduction_desc` varchar(65) DEFAULT NULL,
  `deduction_type_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`deduction_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1820 ROW_FORMAT=DYNAMIC;

INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('1', 'S.S.S.', '1', '0', '2016-04-20 22:29:37', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('2', 'Philhealth', '1', '0', '2016-04-20 22:29:37', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('3', 'Pagibig', '1', '0', '2016-04-20 22:29:37', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('4', 'Withholding Tax', '1', '0', '2016-04-20 22:29:37', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('5', 'S.S.S. Loan', '2', '0', '2016-04-05 21:50:42', '0', '2016-05-11 10:33:23', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('6', 'Pag-Ibig Loan', '1', '0', '2016-04-05 21:51:18', '0', '2016-04-05 09:58:48', '0', '2016-04-05 10:08:06', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('7', 'Cash Advance', '4', '0', '2016-05-11 22:33:47', '1', '2017-05-30 14:00:45', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('8', 'COOP LOAN', '2', '0', '2016-11-30 07:53:07', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('9', 'COOP CONTRIBUTION', '1', '0', '2016-11-30 07:53:21', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('11', 'ATOE 3', '3', '0', '2017-01-26 19:53:18', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('12', 'Pag-Ibig Calamity Loan', '1', '0', '2017-02-22 08:03:16', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('13', 'Temporary Cash Advance', '5', '0', '2017-02-23 02:19:47', '1', '2017-03-28 17:44:30', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('14', 'ATOE1', '3', '0', '2017-02-23 10:02:06', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('15', 'Atoe 2', '3', '0', '2017-02-24 03:02:33', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refdeduction` (`deduction_id`, `deduction_desc`, `deduction_type_id`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('16', 'Excess of 13th Month', '6', '0', '2017-03-14 01:46:43', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: refdeductiontype
#

DROP TABLE IF EXISTS `refdeductiontype`;

CREATE TABLE `refdeductiontype` (
  `deduction_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `deduction_type_desc` varchar(65) DEFAULT '',
  `created_by` int(11) NOT NULL,
  `date_created` datetime DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`deduction_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=3276 ROW_FORMAT=DYNAMIC;

INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('1', 'Premium', '0', '2016-04-20 22:29:37', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('2', 'Loans', '1', '2016-04-05 20:33:31', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('3', 'Dues/Other Deductions', '1', '2016-04-05 20:33:31', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('4', 'Advances', '0', '2016-05-22 17:35:43', '0', '2016-05-22 17:36:41', '0', '2016-05-22 17:36:00', '0');
INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('5', 'Temporary Cash advance', '0', '2016-12-01 05:42:13', '1', '2017-05-30 13:36:35', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refdeductiontype` (`deduction_type_id`, `deduction_type_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('6', 'Overpayment of 13th month', '0', '2017-03-14 01:46:05', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: reffactorfile
#

DROP TABLE IF EXISTS `reffactorfile`;

CREATE TABLE `reffactorfile` (
  `factor_id` int(11) NOT NULL AUTO_INCREMENT,
  `regular_ot` decimal(19,5) DEFAULT '0.10000',
  `sunday` decimal(19,5) DEFAULT '0.10000',
  `sunday_ot` decimal(19,5) DEFAULT '0.10000',
  `regular_holiday` decimal(19,5) DEFAULT '0.10000',
  `regular_holiday_ot` decimal(19,5) DEFAULT '0.10000',
  `sun_regular_holiday` decimal(19,5) DEFAULT '0.10000',
  `sun_regular_holiday_ot` decimal(19,5) DEFAULT '0.10000',
  `spe_holiday` decimal(19,5) DEFAULT '0.10000',
  `spe_holiday_ot` decimal(19,5) DEFAULT '0.10000',
  `sun_spe_holiday` decimal(19,5) DEFAULT '0.10000',
  `sun_spe_holiday_ot` decimal(19,5) DEFAULT '0.10000',
  `pagibig1` decimal(19,5) DEFAULT '0.10000',
  `pagibig2` decimal(19,5) DEFAULT '0.10000',
  `night_shift` decimal(19,5) DEFAULT '0.10000',
  `sun_night_shift` decimal(19,5) DEFAULT '0.10000',
  `night_shift_reg_holiday` decimal(19,5) DEFAULT '0.10000',
  `sun_night_shift_reg_holiday` decimal(19,5) DEFAULT '0.10000',
  `night_shift_spe_holiday` decimal(19,5) DEFAULT '0.10000',
  `sun_night_shift_spe_holiday` decimal(19,5) DEFAULT '0.10000',
  `is_deleted` tinyint(1) DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`factor_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=16384 ROW_FORMAT=DYNAMIC;

INSERT INTO `reffactorfile` (`factor_id`, `regular_ot`, `sunday`, `sunday_ot`, `regular_holiday`, `regular_holiday_ot`, `sun_regular_holiday`, `sun_regular_holiday_ot`, `spe_holiday`, `spe_holiday_ot`, `sun_spe_holiday`, `sun_spe_holiday_ot`, `pagibig1`, `pagibig2`, `night_shift`, `sun_night_shift`, `night_shift_reg_holiday`, `sun_night_shift_reg_holiday`, `night_shift_spe_holiday`, `sun_night_shift_spe_holiday`, `is_deleted`, `created_by`, `modified_by`, `date_created`, `date_modified`, `date_deleted`, `deleted_by`) VALUES ('1', '1.25000', '1.30000', '1.55000', '2.00000', '2.30000', '2.60000', '2.90000', '1.30000', '1.60000', '1.50000', '1.80000', '100.00000', '0.02000', '0.10000', '0.10000', '0.10000', '0.10000', '0.10000', '0.10000', '0', '0', '1', '0000-00-00 00:00:00', '2017-03-29 09:32:18', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: refgroup
#

DROP TABLE IF EXISTS `refgroup`;

CREATE TABLE `refgroup` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_desc` varchar(65) DEFAULT '',
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  `group_desc2` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`group_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=3276 ROW_FORMAT=DYNAMIC;

INSERT INTO `refgroup` (`group_id`, `group_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`, `group_desc2`) VALUES ('1', 'Group 1', '1', '2017-09-04 10:56:27', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', NULL);
INSERT INTO `refgroup` (`group_id`, `group_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`, `group_desc2`) VALUES ('2', 'Clerk Account', '1', '2017-09-22 14:47:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', NULL);
INSERT INTO `refgroup` (`group_id`, `group_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`, `group_desc2`) VALUES ('3', 'Group 2', '1', '2017-09-22 15:13:56', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', NULL);
INSERT INTO `refgroup` (`group_id`, `group_desc`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`, `group_desc2`) VALUES ('4', 'Sales Clerk', '1', '2017-09-22 16:59:34', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0', NULL);


#
# TABLE STRUCTURE FOR: refotherearnings
#

DROP TABLE IF EXISTS `refotherearnings`;

CREATE TABLE `refotherearnings` (
  `earnings_id` int(11) NOT NULL AUTO_INCREMENT,
  `earnings_desc` varchar(65) DEFAULT NULL,
  `earnings_type_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`earnings_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: refotherearningstype
#

DROP TABLE IF EXISTS `refotherearningstype`;

CREATE TABLE `refotherearningstype` (
  `earnings_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `earnings_type_desc` varchar(65) DEFAULT '',
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `modified_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`earnings_type_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

INSERT INTO `refotherearningstype` (`earnings_type_id`, `earnings_type_desc`, `created_by`, `date_created`, `modified_by`, `modified_datetime`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('1', 'Subsidiary', '0', '2017-01-27 14:56:46', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refotherearningstype` (`earnings_type_id`, `earnings_type_desc`, `created_by`, `date_created`, `modified_by`, `modified_datetime`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('2', 'Benefits(Other Income/Earnings)', '0', '2017-01-27 14:56:40', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: refpayperiod
#

DROP TABLE IF EXISTS `refpayperiod`;

CREATE TABLE `refpayperiod` (
  `pay_period_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_period_start` date DEFAULT NULL,
  `pay_period_end` date DEFAULT NULL,
  `pay_period_sequence` int(11) DEFAULT NULL,
  `month_id` int(11) DEFAULT '0',
  `pay_period_year` int(11) DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`pay_period_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=3276 ROW_FORMAT=DYNAMIC;

INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('1', '2017-01-01', '2017-01-15', '1', '1', '0', '0', '2017-01-19 08:30:07', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('2', '2017-01-16', '2017-01-31', '2', '1', '0', '0', '2017-01-26 06:27:13', '0', '2017-01-26 18:53:53', '0', '2017-01-26 18:53:53', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('3', '2017-02-01', '2017-02-15', '1', '2', '0', '0', '2017-02-02 11:21:44', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('4', '2017-02-16', '2017-02-28', '2', '2', '0', '0', '2017-02-02 11:55:49', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('5', '2017-03-01', '2017-03-15', '1', '3', '0', '0', '2017-03-07 08:35:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('6', '2017-03-16', '2017-03-31', '2', '3', '0', '0', '2017-03-16 06:01:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('7', '2017-03-29', '2017-03-31', '3', '3', '0', '1', '2017-03-29 09:50:11', '1', '2017-03-29 09:50:14', '1', '2017-03-29 09:50:16', '1');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('8', '2017-04-01', '2017-04-15', '1', '4', '0', '1', '2017-04-26 16:49:27', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('9', '2017-04-16', '2017-04-30', '2', '4', '0', '1', '2017-04-26 16:49:53', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('10', '2017-05-01', '2017-05-15', '1', '5', '0', '1', '2017-05-02 15:22:44', '1', '2017-05-18 13:10:26', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('11', '2017-05-16', '2017-05-31', '2', '5', '0', '1', '2017-05-18 13:50:17', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('12', '2017-06-01', '2017-06-15', '1', '6', '0', '1', '2017-05-22 12:33:26', '1', '2017-05-31 15:23:27', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('13', '2017-06-16', '2017-06-30', '2', '6', '0', '1', '2017-06-16 12:16:48', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('14', '2017-07-01', '2017-07-15', '1', '7', '0', '1', '2017-06-16 16:05:34', '1', '2017-06-16 16:19:36', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('15', '2017-07-16', '2017-07-31', '2', '7', '0', '1', '2017-07-17 15:28:40', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('16', '2017-08-01', '2017-08-15', '1', '8', '0', '1', '2017-07-28 16:06:43', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('17', '2017-08-16', '2017-08-31', '2', '8', '0', '1', '2017-08-01 11:52:12', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('18', '2017-09-01', '2017-09-15', '1', '9', '0', '1', '2017-08-01 14:34:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('19', '2017-09-16', '2017-09-30', '2', '9', '0', '1', '2017-08-01 15:34:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('20', '2017-10-01', '2017-10-15', '1', '10', '0', '1', '2017-08-01 16:28:02', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('21', '2017-10-16', '2017-10-31', '2', '10', '0', '1', '2017-08-01 16:38:34', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('22', '2017-11-01', '2017-11-15', '1', '11', '0', '1', '2017-08-17 15:58:29', '1', '2017-10-12 16:48:12', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `refpayperiod` (`pay_period_id`, `pay_period_start`, `pay_period_end`, `pay_period_sequence`, `month_id`, `pay_period_year`, `created_by`, `date_created`, `modified_by`, `date_modified`, `deleted_by`, `date_deleted`, `is_deleted`) VALUES ('24', '2017-11-16', '2017-11-30', '2', '11', '0', '1', '2017-09-18 16:53:14', '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: refsss
#

DROP TABLE IF EXISTS `refsss`;

CREATE TABLE `refsss` (
  `sss_id` int(11) NOT NULL,
  `salary_range_from` decimal(19,5) DEFAULT '0.00000',
  `salary_range_to` decimal(19,5) DEFAULT '0.00000',
  `monthly_salary_credit` decimal(19,5) DEFAULT '0.00000',
  `employee_cont` decimal(19,5) DEFAULT '0.00000',
  `employer_cont` decimal(19,5) DEFAULT '0.00000',
  `ec_cont` decimal(19,5) DEFAULT '0.00000',
  `created_by` int(11) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=264 ROW_FORMAT=DYNAMIC;

INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('1', '1000.00000', '1249.99000', '1000.00000', '36.30000', '73.70000', '10.00000', '0', '2016-04-05 10:14:24', '0', '2016-04-28 00:38:00', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('2', '1250.00000', '1749.99000', '1500.00000', '54.50000', '110.50000', '10.00000', '0', '2016-04-05 10:16:26', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('3', '1750.00000', '2499.99000', '2000.00000', '72.70000', '147.30000', '10.00000', '0', '2016-04-05 10:44:58', '0', '2016-04-28 00:37:03', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('4', '2250.00000', '2749.99000', '2500.00000', '90.80000', '184.20000', '10.00000', '0', '2016-04-05 12:22:29', NULL, '2017-01-26 18:53:53', '0', '2016-04-05 00:22:32', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('5', '2750.00000', '3249.99000', '3000.00000', '109.00000', '221.00000', '10.00000', NULL, '2016-04-28 12:41:58', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('6', '3250.00000', '3749.99000', '3500.00000', '127.20000', '257.80000', '10.00000', NULL, '2016-04-28 12:41:58', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('7', '3750.00000', '4249.99000', '4000.00000', '145.30000', '294.70000', '10.00000', NULL, '2016-04-28 12:44:27', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('8', '4250.00000', '4749.99000', '4500.00000', '163.50000', '331.50000', '10.00000', NULL, '2016-04-28 12:44:27', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('9', '4750.00000', '5249.99000', '5000.00000', '181.70000', '368.30000', '10.00000', NULL, '2016-04-28 12:44:27', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('10', '5250.00000', '5749.99000', '5500.00000', '199.80000', '405.20000', '10.00000', NULL, '2016-04-28 12:45:38', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('11', '5750.00000', '6249.99000', '6000.00000', '218.00000', '442.00000', '10.00000', NULL, '2016-04-28 12:45:38', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('12', '6250.00000', '6749.99000', '6500.00000', '236.20000', '478.80000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('13', '6750.00000', '7249.99000', '7000.00000', '254.30000', '515.70000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('14', '7250.00000', '7749.99000', '7500.00000', '272.50000', '552.50000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('15', '7750.00000', '8249.99000', '8000.00000', '290.70000', '589.30000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('16', '8250.00000', '8749.99000', '8500.00000', '308.80000', '626.20000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('17', '8750.00000', '9249.99000', '9000.00000', '327.00000', '663.90000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('18', '9250.00000', '9749.99000', '9500.00000', '345.20000', '699.80000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('19', '9750.00000', '10249.99000', '10000.00000', '363.30000', '736.70000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('20', '10250.00000', '10749.99000', '10500.00000', '381.50000', '773.50000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('21', '10750.00000', '11249.99000', '11000.00000', '399.70000', '810.30000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('22', '11250.00000', '11749.99000', '11500.00000', '417.80000', '847.20000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('23', '11750.00000', '12449.99000', '12000.00000', '436.00000', '884.00000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('24', '12250.00000', '12749.99000', '12500.00000', '454.20000', '920.80000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('25', '12750.00000', '13249.99000', '13000.00000', '472.30000', '957.70000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('26', '13250.00000', '13749.99000', '13500.00000', '490.50000', '994.50000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('27', '13750.00000', '14249.99000', '14000.00000', '508.70000', '1031.30000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('28', '14250.00000', '14749.99000', '14500.00000', '526.80000', '1068.20000', '10.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('29', '14750.00000', '15249.99000', '15000.00000', '545.00000', '1105.00000', '30.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('30', '15250.00000', '15749.99000', '15500.00000', '563.20000', '1141.80000', '30.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');
INSERT INTO `refsss` (`sss_id`, `salary_range_from`, `salary_range_to`, `monthly_salary_credit`, `employee_cont`, `employer_cont`, `ec_cont`, `created_by`, `created_datetime`, `modified_by`, `modified_datetime`, `deleted_by`, `deleted_datetime`, `is_deleted`) VALUES ('31', '15750.00000', '100000.00000', '16000.00000', '581.30000', '1178.70000', '30.00000', NULL, '2016-04-28 13:56:53', NULL, '2017-01-26 18:53:53', NULL, '2017-01-26 18:53:53', '0');


#
# TABLE STRUCTURE FOR: reftaxcode
#

DROP TABLE IF EXISTS `reftaxcode`;

CREATE TABLE `reftaxcode` (
  `tax_id` int(11) NOT NULL,
  `ref_payment_type_id` int(11) DEFAULT '0',
  `tax_code` varchar(65) DEFAULT '',
  `tax_desc` varchar(65) DEFAULT '',
  `col1` decimal(19,2) DEFAULT '0.00',
  `col2` decimal(19,2) DEFAULT '0.00',
  `col3` decimal(19,2) DEFAULT '0.00',
  `col4` decimal(19,2) DEFAULT '0.00',
  `col5` decimal(19,2) DEFAULT '0.00',
  `col6` decimal(19,2) DEFAULT '0.00',
  `col7` decimal(19,2) DEFAULT '0.00',
  `col8` decimal(19,2) DEFAULT '0.00',
  `is_deleted` binary(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=910 ROW_FORMAT=DYNAMIC;

INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('7', '2', 'Z', '', '1.00', '0.00', '833.00', '2500.00', '5833.00', '11667.00', '20833.00', '41667.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('8', '2', 'S/ME', '', '1.00', '4167.00', '5000.00', '6667.00', '10000.00', '15833.00', '25000.00', '45833.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('9', '2', 'ME1/S1', '', '1.00', '6250.00', '7083.00', '8750.00', '12083.00', '17917.00', '27083.00', '47917.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('10', '2', 'ME2/S2', '', '1.00', '8333.00', '9167.00', '10833.00', '14167.00', '20000.00', '29167.00', '50000.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('11', '2', 'ME3/S3', '', '1.00', '10417.00', '11250.00', '12917.00', '16250.00', '22083.00', '31250.00', '52083.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('12', '2', 'ME4/S4', '', '1.00', '12500.00', '13333.00', '15000.00', '18333.00', '24167.00', '33333.00', '54167.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('1', '1', 'Z', '', '1.00', '0.00', '417.00', '1250.00', '2917.00', '5833.00', '10417.00', '20833.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('2', '1', 'S/ME', '', '1.00', '2083.00', '2500.00', '3333.00', '5000.00', '7917.00', '12500.00', '22917.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('3', '1', 'ME1/S1', '', '1.00', '3125.00', '3542.00', '4375.00', '6042.00', '8958.00', '13542.00', '23958.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('4', '1', 'ME2/S2', '', '1.00', '4167.00', '4583.00', '5417.00', '7083.00', '10000.00', '14583.00', '25000.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('5', '1', 'ME3/S3', '', '1.00', '5208.00', '5625.00', '6458.00', '8125.00', '11042.00', '15625.00', '26042.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('6', '1', 'ME4/S4', '', '1.00', '6250.00', '6667.00', '7500.00', '9167.00', '12083.00', '16667.00', '27083.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('13', '3', 'Z', '', '1.00', '0.00', '33.00', '99.00', '231.00', '462.00', '825.00', '1650.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('14', '3', 'S/ME', '', '1.00', '165.00', '198.00', '264.00', '396.00', '627.00', '990.00', '1815.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('15', '3', 'ME1/S1', '', '1.00', '248.00', '281.00', '347.00', '479.00', '710.00', '1073.00', '1898.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('16', '3', 'ME2/S2', '', '1.00', '330.00', '363.00', '429.00', '561.00', '792.00', '1155.00', '1980.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('17', '3', 'ME3/S3', '', '1.00', '413.00', '446.00', '512.00', '644.00', '875.00', '1238.00', '2145.00', '0');
INSERT INTO `reftaxcode` (`tax_id`, `ref_payment_type_id`, `tax_code`, `tax_desc`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`, `col7`, `col8`, `is_deleted`) VALUES ('18', '3', 'ME4/S4', '', '1.00', '495.00', '528.00', '594.00', '726.00', '957.00', '1320.00', '2145.00', '0');


#
# TABLE STRUCTURE FOR: sched_holiday_setup
#

DROP TABLE IF EXISTS `sched_holiday_setup`;

CREATE TABLE `sched_holiday_setup` (
  `sched_holiday_setup_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ref_day_type_id` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`sched_holiday_setup_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `sched_holiday_setup` (`sched_holiday_setup_id`, `ref_day_type_id`, `description`, `date`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('15', '3', NULL, '2017-09-10', '1', NULL, '2017-09-12 13:34:35', '2017-09-12 13:34:54', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `sched_holiday_setup` (`sched_holiday_setup_id`, `ref_day_type_id`, `description`, `date`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('16', '5', NULL, '2017-11-17', '1', NULL, '2017-11-24 15:08:30', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `sched_holiday_setup` (`sched_holiday_setup_id`, `ref_day_type_id`, `description`, `date`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('17', '3', NULL, '2017-11-10', '1', NULL, '2017-11-24 15:08:44', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `sched_holiday_setup` (`sched_holiday_setup_id`, `ref_day_type_id`, `description`, `date`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('18', '5', NULL, '2017-11-09', '1', NULL, '2017-11-24 15:09:51', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');
INSERT INTO `sched_holiday_setup` (`sched_holiday_setup_id`, `ref_day_type_id`, `description`, `date`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('19', '3', NULL, '1970-01-01', '1', NULL, '2017-11-24 15:10:07', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', '0');


#
# TABLE STRUCTURE FOR: sched_refpay
#

DROP TABLE IF EXISTS `sched_refpay`;

CREATE TABLE `sched_refpay` (
  `sched_refpay_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `schedpay` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`sched_refpay_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=8192 ROW_FORMAT=DYNAMIC;

INSERT INTO `sched_refpay` (`sched_refpay_id`, `schedpay`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('1', 'Regular Pay', 'Regular Pay', '1', NULL, '2017-04-26 09:24:13', '2017-05-02 11:18:05', '0', '2017-04-26 09:28:48', '1');
INSERT INTO `sched_refpay` (`sched_refpay_id`, `schedpay`, `description`, `created_by`, `modified_by`, `date_created`, `date_modified`, `is_deleted`, `date_deleted`, `deleted_by`) VALUES ('2', 'Holiday Pay', 'Holiday Pay', '1', NULL, '2017-05-02 11:16:24', '2017-05-02 11:18:20', '0', '0000-00-00 00:00:00', '1');


#
# TABLE STRUCTURE FOR: sched_refshift
#

DROP TABLE IF EXISTS `sched_refshift`;

CREATE TABLE `sched_refshift` (
  `sched_refshift_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_template_advance_in_out` int(11) NOT NULL,
  `schedule_template_timein` time DEFAULT NULL,
  `schedule_template_timeout` time DEFAULT NULL,
  `schedule_template_break_time` time DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `date_deleted` varchar(45) DEFAULT NULL,
  `deleted_by` varchar(45) DEFAULT NULL,
  `shift` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sched_refshift_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('1', '30', '08:30:00', '18:00:00', '01:00:00', '0', NULL, NULL, 'SHIFT 1');
INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('2', '15', '13:00:00', '22:00:00', '00:00:00', '0', NULL, NULL, 'SHIFT 2');
INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('3', '15', '22:00:00', '07:00:00', '00:00:00', '0', NULL, NULL, 'GRAVEYARD SHIFT');
INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('4', '60', '00:00:00', '23:59:59', '00:00:00', '0', NULL, NULL, 'Flexi');
INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('5', '15', '18:00:00', '23:00:00', '01:00:00', '1', '2017-10-04 09:06:18', '1', 'Midshift');
INSERT INTO `sched_refshift` (`sched_refshift_id`, `schedule_template_advance_in_out`, `schedule_template_timein`, `schedule_template_timeout`, `schedule_template_break_time`, `is_deleted`, `date_deleted`, `deleted_by`, `shift`) VALUES ('6', '15', '18:00:00', '23:00:00', '01:00:00', '1', '2017-10-03 18:00:08', '1', 'Midshift');


#
# TABLE STRUCTURE FOR: sched_weekly_stats
#

DROP TABLE IF EXISTS `sched_weekly_stats`;

CREATE TABLE `sched_weekly_stats` (
  `sched_weekly_stats_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_employee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sched_weekly_stats_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# TABLE STRUCTURE FOR: schedule_employee
#

DROP TABLE IF EXISTS `schedule_employee`;

CREATE TABLE `schedule_employee` (
  `schedule_employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `pay_period_id` int(11) DEFAULT NULL,
  `sched_refshift_id` int(11) DEFAULT NULL,
  `sched_refpay_id` int(11) DEFAULT NULL,
  `day` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `advance_in_out` int(11) NOT NULL DEFAULT '0',
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `total` time DEFAULT NULL,
  `date_created` datetime DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  `is_in` tinyint(1) DEFAULT '0',
  `is_out` tinyint(1) DEFAULT '0',
  `clock_in` datetime DEFAULT NULL,
  `clock_out` datetime DEFAULT NULL,
  `stat_completion` decimal(11,0) NOT NULL DEFAULT '0',
  `date_deleted` datetime DEFAULT '0000-00-00 00:00:00',
  `break_time` time NOT NULL DEFAULT '00:00:00',
  `late` decimal(11,0) NOT NULL,
  `allow_ot` tinyint(1) DEFAULT '0',
  `ot_in` tinyint(1) DEFAULT '0',
  `ot_out` datetime DEFAULT '0000-00-00 00:00:00',
  `ref_day_type_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`schedule_employee_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('1', '1', '20', '1', NULL, 'Sun', '2017-10-01', '30', '2017-10-01 08:30:00', '2017-10-01 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('2', '1', '20', '1', NULL, 'Mon', '2017-10-02', '30', '2017-10-02 08:30:00', '2017-10-02 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('3', '1', '20', '1', NULL, 'Tue', '2017-10-03', '30', '2017-10-03 08:30:00', '2017-10-03 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('4', '1', '20', '1', NULL, 'Wed', '2017-10-04', '30', '2017-10-04 08:30:00', '2017-10-04 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('5', '1', '20', '1', NULL, 'Thu', '2017-10-05', '30', '2017-10-05 08:30:00', '2017-10-05 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('6', '1', '20', '1', NULL, 'Fri', '2017-10-06', '30', '2017-10-06 08:30:00', '2017-10-06 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('7', '1', '20', '1', NULL, 'Sat', '2017-10-07', '30', '2017-10-07 08:30:00', '2017-10-07 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('8', '1', '20', '1', NULL, 'Sun', '2017-10-08', '30', '2017-10-08 08:30:00', '2017-10-08 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('9', '1', '20', '1', NULL, 'Mon', '2017-10-09', '30', '2017-10-09 08:30:00', '2017-10-09 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('10', '1', '20', '1', NULL, 'Tue', '2017-10-10', '30', '2017-10-10 08:30:00', '2017-10-10 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('11', '1', '20', '1', NULL, 'Wed', '2017-10-11', '30', '2017-10-11 08:30:00', '2017-10-11 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('12', '1', '20', '1', NULL, 'Thu', '2017-10-12', '30', '2017-10-12 08:30:00', '2017-10-12 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('13', '1', '20', '1', NULL, 'Fri', '2017-10-13', '30', '2017-10-13 08:30:00', '2017-10-13 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('14', '1', '20', '1', NULL, 'Sat', '2017-10-14', '30', '2017-10-14 08:30:00', '2017-10-14 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('15', '1', '20', '1', NULL, 'Sun', '2017-10-15', '30', '2017-10-15 08:30:00', '2017-10-15 18:00:00', '08:30:00', '2017-10-10 13:47:04', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('16', '1', '21', '1', NULL, 'Mon', '2017-10-16', '30', '2017-10-16 08:30:00', '2017-10-16 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('17', '1', '21', '1', NULL, 'Tue', '2017-10-17', '30', '2017-10-17 08:30:00', '2017-10-17 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('18', '1', '21', '1', NULL, 'Wed', '2017-10-18', '30', '2017-10-18 08:30:00', '2017-10-18 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('19', '1', '21', '1', NULL, 'Thu', '2017-10-19', '30', '2017-10-19 08:30:00', '2017-10-19 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('20', '1', '21', '1', NULL, 'Fri', '2017-10-20', '30', '2017-10-20 08:30:00', '2017-10-20 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('21', '1', '21', '1', NULL, 'Sat', '2017-10-21', '30', '2017-10-21 08:30:00', '2017-10-21 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('22', '1', '21', '1', NULL, 'Sun', '2017-10-22', '30', '2017-10-22 08:30:00', '2017-10-22 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('23', '1', '21', '1', NULL, 'Mon', '2017-10-23', '30', '2017-10-23 08:30:00', '2017-10-23 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('24', '1', '21', '1', NULL, 'Tue', '2017-10-24', '30', '2017-10-24 08:30:00', '2017-10-24 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('25', '1', '21', '1', NULL, 'Wed', '2017-10-25', '30', '2017-10-25 08:30:00', '2017-10-25 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('26', '1', '21', '1', NULL, 'Thu', '2017-10-26', '30', '2017-10-26 08:30:00', '2017-10-26 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('27', '1', '21', '1', NULL, 'Fri', '2017-10-27', '30', '2017-10-27 08:30:00', '2017-10-27 18:00:00', '08:30:00', '2017-10-12 15:42:14', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('28', '1', '21', '1', NULL, 'Sat', '2017-10-28', '30', '2017-10-28 08:30:00', '2017-10-28 18:00:00', '08:30:00', '2017-10-12 15:42:15', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('29', '1', '21', '1', NULL, 'Sun', '2017-10-29', '30', '2017-10-29 08:30:00', '2017-10-29 18:00:00', '08:30:00', '2017-10-12 15:42:15', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('30', '1', '21', '1', NULL, 'Mon', '2017-10-30', '30', '2017-10-30 08:30:00', '2017-10-30 18:00:00', '08:30:00', '2017-10-12 15:42:15', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('31', '1', '21', '1', NULL, 'Tue', '2017-10-31', '30', '2017-10-31 08:30:00', '2017-10-31 18:00:00', '08:30:00', '2017-10-12 15:42:15', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('32', '1', '19', '1', NULL, 'Sat', '2017-09-16', '30', '2017-09-16 08:30:00', '2017-09-16 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('33', '1', '19', '1', NULL, 'Sun', '2017-09-17', '30', '2017-09-17 08:30:00', '2017-09-17 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('34', '1', '19', '1', NULL, 'Mon', '2017-09-18', '30', '2017-09-18 08:30:00', '2017-09-18 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('35', '1', '19', '1', NULL, 'Tue', '2017-09-19', '30', '2017-09-19 08:30:00', '2017-09-19 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('36', '1', '19', '1', NULL, 'Wed', '2017-09-20', '30', '2017-09-20 08:30:00', '2017-09-20 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('37', '1', '19', '1', NULL, 'Thu', '2017-09-21', '30', '2017-09-21 08:30:00', '2017-09-21 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('38', '1', '19', '1', NULL, 'Fri', '2017-09-22', '30', '2017-09-22 08:30:00', '2017-09-22 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('39', '1', '19', '1', NULL, 'Sat', '2017-09-23', '30', '2017-09-23 08:30:00', '2017-09-23 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('40', '1', '19', '1', NULL, 'Sun', '2017-09-24', '30', '2017-09-24 08:30:00', '2017-09-24 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('41', '1', '19', '1', NULL, 'Mon', '2017-09-25', '30', '2017-09-25 08:30:00', '2017-09-25 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('42', '1', '19', '1', NULL, 'Tue', '2017-09-26', '30', '2017-09-26 08:30:00', '2017-09-26 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('43', '1', '19', '1', NULL, 'Wed', '2017-09-27', '30', '2017-09-27 08:30:00', '2017-09-27 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('44', '1', '19', '1', NULL, 'Thu', '2017-09-28', '30', '2017-09-28 08:30:00', '2017-09-28 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('45', '1', '19', '1', NULL, 'Fri', '2017-09-29', '30', '2017-09-29 08:30:00', '2017-09-29 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('46', '1', '19', '1', NULL, 'Sat', '2017-09-30', '30', '2017-09-30 08:30:00', '2017-09-30 18:00:00', '08:30:00', '2017-10-12 16:41:37', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('47', '1', '22', '1', NULL, 'Wed', '2017-11-01', '30', '2017-11-01 08:30:00', '2017-11-01 18:00:00', '08:30:00', '2017-10-12 16:48:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('48', '1', '22', '1', NULL, 'Thu', '2017-11-02', '30', '2017-11-02 08:30:00', '2017-11-02 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('49', '1', '22', '1', NULL, 'Fri', '2017-11-03', '30', '2017-11-03 08:30:00', '2017-11-03 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('50', '1', '22', '1', NULL, 'Sat', '2017-11-04', '30', '2017-11-04 08:30:00', '2017-11-04 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('51', '1', '22', '1', NULL, 'Sun', '2017-11-05', '30', '2017-11-05 08:30:00', '2017-11-05 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('52', '1', '22', '1', NULL, 'Mon', '2017-11-06', '30', '2017-11-06 08:30:00', '2017-11-06 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('53', '1', '22', '1', NULL, 'Tue', '2017-11-07', '30', '2017-11-07 08:30:00', '2017-11-07 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('54', '1', '22', '1', NULL, 'Wed', '2017-11-08', '30', '2017-11-08 08:30:00', '2017-11-08 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('55', '1', '22', '1', NULL, 'Thu', '2017-11-09', '30', '2017-11-09 08:30:00', '2017-11-09 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '5');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('56', '1', '22', '1', NULL, 'Fri', '2017-11-10', '30', '2017-11-10 08:30:00', '2017-11-10 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '3');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('57', '1', '22', '1', NULL, 'Sat', '2017-11-11', '30', '2017-11-11 08:30:00', '2017-11-11 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('58', '1', '22', '1', NULL, 'Sun', '2017-11-12', '30', '2017-11-12 08:30:00', '2017-11-12 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('59', '1', '22', '1', NULL, 'Mon', '2017-11-13', '30', '2017-11-13 08:30:00', '2017-11-13 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('60', '1', '22', '1', NULL, 'Tue', '2017-11-14', '30', '2017-11-14 08:30:00', '2017-11-14 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('61', '1', '22', '1', NULL, 'Wed', '2017-11-15', '30', '2017-11-15 08:30:00', '2017-11-15 18:00:00', '08:30:00', '2017-10-12 16:48:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('62', '1', '24', '1', NULL, 'Thu', '2017-11-16', '30', '2017-11-16 08:30:00', '2017-11-16 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('63', '1', '24', '1', NULL, 'Fri', '2017-11-17', '30', '2017-11-17 08:30:00', '2017-11-17 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '5');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('64', '1', '24', '1', NULL, 'Sat', '2017-11-18', '30', '2017-11-18 08:30:00', '2017-11-18 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('65', '1', '24', '1', NULL, 'Sun', '2017-11-19', '30', '2017-11-19 08:30:00', '2017-11-19 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('66', '1', '24', '1', NULL, 'Mon', '2017-11-20', '30', '2017-11-20 08:30:00', '2017-11-20 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('67', '1', '24', '1', NULL, 'Tue', '2017-11-21', '30', '2017-11-21 08:30:00', '2017-11-21 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('68', '1', '24', '1', NULL, 'Wed', '2017-11-22', '30', '2017-11-22 08:30:00', '2017-11-22 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('69', '1', '24', '1', NULL, 'Thu', '2017-11-23', '30', '2017-11-23 08:30:00', '2017-11-23 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('70', '1', '24', '1', NULL, 'Fri', '2017-11-24', '30', '2017-11-24 08:30:00', '2017-11-24 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('71', '1', '24', '1', NULL, 'Sat', '2017-11-25', '30', '2017-11-25 08:30:00', '2017-11-25 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('72', '1', '24', '1', NULL, 'Sun', '2017-11-26', '30', '2017-11-26 08:30:00', '2017-11-26 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('73', '1', '24', '1', NULL, 'Mon', '2017-11-27', '30', '2017-11-27 08:30:00', '2017-11-27 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('74', '1', '24', '1', NULL, 'Tue', '2017-11-28', '30', '2017-11-28 08:30:00', '2017-11-28 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('75', '1', '24', '1', NULL, 'Wed', '2017-11-29', '30', '2017-11-29 08:30:00', '2017-11-29 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('76', '1', '24', '1', NULL, 'Thu', '2017-11-30', '30', '2017-11-30 08:30:00', '2017-11-30 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('77', '3', '24', '1', NULL, 'Thu', '2017-11-16', '30', '2017-11-16 08:30:00', '2017-11-16 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('78', '3', '24', '1', NULL, 'Fri', '2017-11-17', '30', '2017-11-17 08:30:00', '2017-11-17 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '5');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('79', '3', '24', '1', NULL, 'Sat', '2017-11-18', '30', '2017-11-18 08:30:00', '2017-11-18 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('80', '3', '24', '1', NULL, 'Sun', '2017-11-19', '30', '2017-11-19 08:30:00', '2017-11-19 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('81', '3', '24', '1', NULL, 'Mon', '2017-11-20', '30', '2017-11-20 08:30:00', '2017-11-20 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('82', '3', '24', '1', NULL, 'Tue', '2017-11-21', '30', '2017-11-21 08:30:00', '2017-11-21 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('83', '3', '24', '1', NULL, 'Wed', '2017-11-22', '30', '2017-11-22 08:30:00', '2017-11-22 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('84', '3', '24', '1', NULL, 'Thu', '2017-11-23', '30', '2017-11-23 08:30:00', '2017-11-23 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('85', '3', '24', '1', NULL, 'Fri', '2017-11-24', '30', '2017-11-24 08:30:00', '2017-11-24 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('86', '3', '24', '1', NULL, 'Sat', '2017-11-25', '30', '2017-11-25 08:30:00', '2017-11-25 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('87', '3', '24', '1', NULL, 'Sun', '2017-11-26', '30', '2017-11-26 08:30:00', '2017-11-26 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('88', '3', '24', '1', NULL, 'Mon', '2017-11-27', '30', '2017-11-27 08:30:00', '2017-11-27 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('89', '3', '24', '1', NULL, 'Tue', '2017-11-28', '30', '2017-11-28 08:30:00', '2017-11-28 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('90', '3', '24', '1', NULL, 'Wed', '2017-11-29', '30', '2017-11-29 08:30:00', '2017-11-29 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('91', '3', '24', '1', NULL, 'Thu', '2017-11-30', '30', '2017-11-30 08:30:00', '2017-11-30 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('92', '4', '24', '1', NULL, 'Thu', '2017-11-16', '30', '2017-11-16 08:30:00', '2017-11-16 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('93', '4', '24', '1', NULL, 'Fri', '2017-11-17', '30', '2017-11-17 08:30:00', '2017-11-17 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '5');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('94', '4', '24', '1', NULL, 'Sat', '2017-11-18', '30', '2017-11-18 08:30:00', '2017-11-18 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('95', '4', '24', '1', NULL, 'Sun', '2017-11-19', '30', '2017-11-19 08:30:00', '2017-11-19 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('96', '4', '24', '1', NULL, 'Mon', '2017-11-20', '30', '2017-11-20 08:30:00', '2017-11-20 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('97', '4', '24', '1', NULL, 'Tue', '2017-11-21', '30', '2017-11-21 08:30:00', '2017-11-21 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('98', '4', '24', '1', NULL, 'Wed', '2017-11-22', '30', '2017-11-22 08:30:00', '2017-11-22 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('99', '4', '24', '1', NULL, 'Thu', '2017-11-23', '30', '2017-11-23 08:30:00', '2017-11-23 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('100', '4', '24', '1', NULL, 'Fri', '2017-11-24', '30', '2017-11-24 08:30:00', '2017-11-24 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('101', '4', '24', '1', NULL, 'Sat', '2017-11-25', '30', '2017-11-25 08:30:00', '2017-11-25 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('102', '4', '24', '1', NULL, 'Sun', '2017-11-26', '30', '2017-11-26 08:30:00', '2017-11-26 18:00:00', '08:30:00', '2017-11-22 13:42:31', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('103', '4', '24', '1', NULL, 'Mon', '2017-11-27', '30', '2017-11-27 08:30:00', '2017-11-27 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('104', '4', '24', '1', NULL, 'Tue', '2017-11-28', '30', '2017-11-28 08:30:00', '2017-11-28 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('105', '4', '24', '1', NULL, 'Wed', '2017-11-29', '30', '2017-11-29 08:30:00', '2017-11-29 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('106', '4', '24', '1', NULL, 'Thu', '2017-11-30', '30', '2017-11-30 08:30:00', '2017-11-30 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('107', '5', '24', '1', NULL, 'Thu', '2017-11-16', '30', '2017-11-16 08:30:00', '2017-11-16 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('108', '5', '24', '1', NULL, 'Fri', '2017-11-17', '30', '2017-11-17 08:30:00', '2017-11-17 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '5');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('109', '5', '24', '1', NULL, 'Sat', '2017-11-18', '30', '2017-11-18 08:30:00', '2017-11-18 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('110', '5', '24', '1', NULL, 'Sun', '2017-11-19', '30', '2017-11-19 08:30:00', '2017-11-19 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('111', '5', '24', '1', NULL, 'Mon', '2017-11-20', '30', '2017-11-20 08:30:00', '2017-11-20 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('112', '5', '24', '1', NULL, 'Tue', '2017-11-21', '30', '2017-11-21 08:30:00', '2017-11-21 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('113', '5', '24', '1', NULL, 'Wed', '2017-11-22', '30', '2017-11-22 08:30:00', '2017-11-22 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('114', '5', '24', '1', NULL, 'Thu', '2017-11-23', '30', '2017-11-23 08:30:00', '2017-11-23 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('115', '5', '24', '1', NULL, 'Fri', '2017-11-24', '30', '2017-11-24 08:30:00', '2017-11-24 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('116', '5', '24', '1', NULL, 'Sat', '2017-11-25', '30', '2017-11-25 08:30:00', '2017-11-25 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('117', '5', '24', '1', NULL, 'Sun', '2017-11-26', '30', '2017-11-26 08:30:00', '2017-11-26 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('118', '5', '24', '1', NULL, 'Mon', '2017-11-27', '30', '2017-11-27 08:30:00', '2017-11-27 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('119', '5', '24', '1', NULL, 'Tue', '2017-11-28', '30', '2017-11-28 08:30:00', '2017-11-28 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('120', '5', '24', '1', NULL, 'Wed', '2017-11-29', '30', '2017-11-29 08:30:00', '2017-11-29 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');
INSERT INTO `schedule_employee` (`schedule_employee_id`, `employee_id`, `pay_period_id`, `sched_refshift_id`, `sched_refpay_id`, `day`, `date`, `advance_in_out`, `time_in`, `time_out`, `total`, `date_created`, `date_modified`, `created_by`, `modified_by`, `is_deleted`, `deleted_by`, `is_in`, `is_out`, `clock_in`, `clock_out`, `stat_completion`, `date_deleted`, `break_time`, `late`, `allow_ot`, `ot_in`, `ot_out`, `ref_day_type_id`) VALUES ('121', '5', '24', '1', NULL, 'Thu', '2017-11-30', '30', '2017-11-30 08:30:00', '2017-11-30 18:00:00', '08:30:00', '2017-11-22 13:42:32', '0000-00-00 00:00:00', '1', NULL, '0', NULL, '0', '0', NULL, NULL, '0', '0000-00-00 00:00:00', '01:00:00', '0', '0', '0', '0000-00-00 00:00:00', '1');


#
# TABLE STRUCTURE FOR: system_settings_default_deductions
#

DROP TABLE IF EXISTS `system_settings_default_deductions`;

CREATE TABLE `system_settings_default_deductions` (
  `default_id` int(11) NOT NULL AUTO_INCREMENT,
  `deduction_id` int(11) DEFAULT '0',
  `deduction_cycle` varchar(45) DEFAULT '0',
  `check1` tinyint(1) DEFAULT '0',
  `check2` tinyint(1) DEFAULT '0',
  `check3` tinyint(1) DEFAULT '0',
  `check4` tinyint(1) DEFAULT '0',
  `modified_by` int(11) DEFAULT NULL,
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`default_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

INSERT INTO `system_settings_default_deductions` (`default_id`, `deduction_id`, `deduction_cycle`, `check1`, `check2`, `check3`, `check4`, `modified_by`, `date_modified`) VALUES ('1', '1', '0,2,0,0', '1', '2', '0', '0', '1', '2017-11-24');
INSERT INTO `system_settings_default_deductions` (`default_id`, `deduction_id`, `deduction_cycle`, `check1`, `check2`, `check3`, `check4`, `modified_by`, `date_modified`) VALUES ('2', '2', '0,2,0,0', '1', '2', '0', '0', '1', '2017-11-24');
INSERT INTO `system_settings_default_deductions` (`default_id`, `deduction_id`, `deduction_cycle`, `check1`, `check2`, `check3`, `check4`, `modified_by`, `date_modified`) VALUES ('3', '3', '0,0,3,0', '1', '2', '0', '0', '1', '2017-11-24');
INSERT INTO `system_settings_default_deductions` (`default_id`, `deduction_id`, `deduction_cycle`, `check1`, `check2`, `check3`, `check4`, `modified_by`, `date_modified`) VALUES ('4', '4', '0,0,3,0', '1', '2', '0', '0', '1', '2017-11-24');


#
# TABLE STRUCTURE FOR: tax_code_name
#

DROP TABLE IF EXISTS `tax_code_name`;

CREATE TABLE `tax_code_name` (
  `tax_code_name_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tax_code_name_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=3276 ROW_FORMAT=DYNAMIC;

INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('1', 'Z');
INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('2', 'S/ME');
INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('3', 'ME1/S1');
INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('4', 'ME2/S2');
INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('5', 'ME3/S3');
INSERT INTO `tax_code_name` (`tax_code_name_id`, `tax_name`) VALUES ('6', 'ME4/S4');


#
# TABLE STRUCTURE FOR: user_accounts
#

DROP TABLE IF EXISTS `user_accounts`;

CREATE TABLE `user_accounts` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT '',
  `user_pword` varchar(500) DEFAULT '',
  `user_lname` varchar(100) DEFAULT '',
  `user_fname` varchar(100) DEFAULT '',
  `user_mname` varchar(100) DEFAULT '',
  `user_address` varchar(155) DEFAULT '',
  `user_email` varchar(100) DEFAULT '',
  `user_mobile` varchar(100) DEFAULT '',
  `user_telephone` varchar(100) DEFAULT '',
  `user_bdate` date DEFAULT '0000-00-00',
  `user_group_id` int(11) DEFAULT '0',
  `photo_path` varchar(255) DEFAULT '',
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `session_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=4096 ROW_FORMAT=DYNAMIC;

INSERT INTO `user_accounts` (`user_id`, `user_name`, `user_pword`, `user_lname`, `user_fname`, `user_mname`, `user_address`, `user_email`, `user_mobile`, `user_telephone`, `user_bdate`, `user_group_id`, `photo_path`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`, `session_status`) VALUES ('1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Account', 'Admin', '', 'Sunrise Village 2, Maliwalo, Tarlac City', 'iamjbpv@outlook.com', '09954093200', '', '1995-12-09', '1', 'assets/img/user/58e59eda15600.jpg', '1', '0', '0000-00-00 00:00:00', '2017-10-19 10:37:58', '0000-00-00 00:00:00', '0', '1', '0', '1');
INSERT INTO `user_accounts` (`user_id`, `user_name`, `user_pword`, `user_lname`, `user_fname`, `user_mname`, `user_address`, `user_email`, `user_mobile`, `user_telephone`, `user_bdate`, `user_group_id`, `photo_path`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `date_deleted`, `created_by`, `modified_by`, `deleted_by`, `session_status`) VALUES ('10', 'joashnoble', 'a27fa77104dc3683850d3cb68adb04a73cfbb95f', 'Noble', 'Joash Jezreel', 'Lucas', '5069 Malabanias Road Angeles City', 'joashnoble@gmail.com', '9367358736', '09367358736', '1996-11-23', '1', 'assets/img/anonymous-icon.png', '1', '0', '2017-10-19 10:55:50', '2017-10-19 11:29:14', '0000-00-00 00:00:00', '1', '1', '0', '0');


#
# TABLE STRUCTURE FOR: user_groups
#

DROP TABLE IF EXISTS `user_groups`;

CREATE TABLE `user_groups` (
  `user_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group` varchar(135) DEFAULT '',
  `user_group_desc` varchar(500) DEFAULT '',
  `is_active` tinyint(1) DEFAULT '1',
  `is_deleted` tinyint(1) DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_group_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5461 ROW_FORMAT=DYNAMIC;

INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('1', 'Super User', 'Can access all features.', '1', '0', '0000-00-00 00:00:00', '2017-09-29 12:05:40', '0', '1', '0', '0000-00-00 00:00:00');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('2', 'test', 'test', '1', '1', '2017-03-29 13:34:50', '2017-03-29 13:44:41', '1', '1', '1', '2017-03-29 13:45:55');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('3', 'Staff', 'limited access', '1', '0', '2017-03-29 19:12:48', '2017-09-29 11:39:24', '1', '1', '0', '0000-00-00 00:00:00');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('4', 'Staff', 'limited access', '1', '1', '2017-03-30 11:43:27', '0000-00-00 00:00:00', '1', '0', '1', '2017-08-08 17:56:08');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('5', 'Test', 'haha', '1', '1', '2017-03-30 11:44:10', '2017-03-30 11:55:40', '1', '1', '1', '2017-08-09 13:32:08');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('6', 'haha', 'hahaha', '1', '1', '2017-03-30 11:55:48', '2017-07-13 14:57:57', '1', '1', '1', '2017-08-09 13:32:11');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('7', 'Basic Access', 'Time in / out', '1', '0', '2017-08-08 18:04:33', '2017-09-29 11:38:50', '1', '1', '0', '0000-00-00 00:00:00');
INSERT INTO `user_groups` (`user_group_id`, `user_group`, `user_group_desc`, `is_active`, `is_deleted`, `date_created`, `date_modified`, `created_by`, `modified_by`, `deleted_by`, `date_deleted`) VALUES ('8', 'tryrtry', 'asas', '1', '0', '2017-09-20 11:27:52', '2017-09-29 11:39:33', '1', '1', '0', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: user_rights
#

DROP TABLE IF EXISTS `user_rights`;

CREATE TABLE `user_rights` (
  `user_rights_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) DEFAULT NULL,
  `right_employee_view` tinyint(1) DEFAULT '0',
  `right_employee_create` tinyint(1) DEFAULT '0',
  `right_employee_edit` tinyint(1) DEFAULT '0',
  `right_employee_delete` tinyint(1) DEFAULT '0',
  `right_leaveentitlement_view` tinyint(1) DEFAULT '0',
  `right_leaveentitlement_create` tinyint(1) DEFAULT '0',
  `right_leaveentitlement_edit` tinyint(1) DEFAULT '0',
  `right_leaveentitlement_delete` tinyint(1) DEFAULT '0',
  `right_applyleave_view` tinyint(1) DEFAULT '0',
  `right_applyleave_create` tinyint(1) DEFAULT '0',
  `right_rates_view` tinyint(1) DEFAULT '0',
  `right_rates_create` tinyint(1) DEFAULT '0',
  `right_rates_edit` tinyint(1) DEFAULT '0',
  `right_rates_delete` tinyint(1) DEFAULT '0',
  `right_memorandum_view` tinyint(1) DEFAULT '0',
  `right_memorandum_create` tinyint(1) DEFAULT '0',
  `right_memorandum_edit` tinyint(1) DEFAULT '0',
  `right_memorandum_delete` tinyint(1) DEFAULT '0',
  `right_commendation_view` tinyint(1) DEFAULT '0',
  `right_commendation_create` tinyint(1) DEFAULT '0',
  `right_commendation_edit` tinyint(1) DEFAULT '0',
  `right_commendation_delete` tinyint(1) DEFAULT '0',
  `right_seminar_view` tinyint(1) DEFAULT '0',
  `right_seminar_create` tinyint(1) DEFAULT '0',
  `right_seminar_edit` tinyint(1) DEFAULT '0',
  `right_seminar_delete` tinyint(1) DEFAULT '0',
  `right_leavemgmt_view` tinyint(1) DEFAULT '0',
  `right_leavetype_view` tinyint(1) DEFAULT '0',
  `right_leavetype_create` tinyint(1) DEFAULT '0',
  `right_leavetype_edit` tinyint(1) DEFAULT '0',
  `right_leavetype_delete` tinyint(1) DEFAULT '0',
  `right_yearsetup_view` tinyint(1) DEFAULT '0',
  `right_yearsetup_create` tinyint(1) DEFAULT '0',
  `right_empreference_view` tinyint(1) DEFAULT '0',
  `right_paymenttype_view` tinyint(1) DEFAULT '0',
  `right_paymenttype_create` tinyint(1) DEFAULT '0',
  `right_paymenttype_edit` tinyint(1) DEFAULT '0',
  `right_paymenttype_delete` tinyint(1) DEFAULT '0',
  `right_department_view` tinyint(1) DEFAULT '0',
  `right_department_create` tinyint(1) DEFAULT '0',
  `right_department_edit` tinyint(1) DEFAULT '0',
  `right_department_delete` tinyint(1) DEFAULT '0',
  `right_position_view` tinyint(1) DEFAULT '0',
  `right_position_create` tinyint(1) DEFAULT '0',
  `right_position_edit` tinyint(1) DEFAULT '0',
  `right_position_delete` tinyint(1) DEFAULT '0',
  `right_branch_view` tinyint(1) DEFAULT '0',
  `right_branch_create` tinyint(1) DEFAULT '0',
  `right_branch_edit` tinyint(1) DEFAULT '0',
  `right_branch_delete` tinyint(1) DEFAULT '0',
  `right_group_view` tinyint(1) DEFAULT '0',
  `right_group_create` tinyint(1) DEFAULT '0',
  `right_group_edit` tinyint(1) DEFAULT '0',
  `right_group_delete` tinyint(1) DEFAULT '0',
  `right_section_view` tinyint(1) DEFAULT '0',
  `right_section_create` tinyint(1) DEFAULT '0',
  `right_section_edit` tinyint(1) DEFAULT '0',
  `right_section_delete` tinyint(1) DEFAULT '0',
  `right_religion_view` tinyint(1) DEFAULT '0',
  `right_religion_create` tinyint(1) DEFAULT '0',
  `right_religion_edit` tinyint(1) DEFAULT '0',
  `right_religion_delete` tinyint(1) DEFAULT '0',
  `right_course_view` tinyint(1) DEFAULT '0',
  `right_course_create` tinyint(1) DEFAULT '0',
  `right_course_edit` tinyint(1) DEFAULT '0',
  `right_course_delete` tinyint(1) DEFAULT '0',
  `right_relationship_view` tinyint(1) DEFAULT '0',
  `right_relationship_create` tinyint(1) DEFAULT '0',
  `right_relationship_edit` tinyint(1) DEFAULT '0',
  `right_relationship_delete` tinyint(1) DEFAULT '0',
  `right_docreference_view` tinyint(1) DEFAULT '0',
  `right_certificate_view` tinyint(1) DEFAULT '0',
  `right_certificate_create` tinyint(1) DEFAULT '0',
  `right_certificate_edit` tinyint(1) DEFAULT '0',
  `right_certificate_delete` tinyint(1) DEFAULT '0',
  `right_actiontaken_view` tinyint(1) DEFAULT '0',
  `right_actiontaken_create` tinyint(1) DEFAULT '0',
  `right_actiontaken_edit` tinyint(1) DEFAULT '0',
  `right_actiontaken_delete` tinyint(1) DEFAULT '0',
  `right_disciplinary_view` tinyint(1) DEFAULT '0',
  `right_disciplinary_create` tinyint(1) DEFAULT '0',
  `right_disciplinary_edit` tinyint(1) DEFAULT '0',
  `right_disciplinary_delete` tinyint(1) DEFAULT '0',
  `right_compensation_view` tinyint(1) DEFAULT '0',
  `right_compensation_create` tinyint(1) DEFAULT '0',
  `right_compensation_edit` tinyint(1) DEFAULT '0',
  `right_compensation_delete` tinyint(1) DEFAULT '0',
  `right_contribution_view` tinyint(1) DEFAULT '0',
  `right_sss_view` tinyint(1) DEFAULT '0',
  `right_sss_create` tinyint(1) DEFAULT '0',
  `right_sss_edit` tinyint(1) DEFAULT '0',
  `right_sss_delete` tinyint(1) DEFAULT '0',
  `right_philhealth_view` tinyint(1) DEFAULT '0',
  `right_philhealth_create` tinyint(1) DEFAULT '0',
  `right_philhealth_edit` tinyint(1) DEFAULT '0',
  `right_philhealth_delete` tinyint(1) DEFAULT '0',
  `right_hrisreports_view` tinyint(1) DEFAULT '0',
  `right_personnel_view` tinyint(1) DEFAULT '0',
  `right_manpower_view` tinyint(1) DEFAULT '0',
  `right_employeetenure_view` tinyint(1) DEFAULT '0',
  `right_sssreport_view` tinyint(1) DEFAULT '0',
  `right_philhealthreport_view` tinyint(1) DEFAULT '0',
  `right_pagibigreport_view` tinyint(1) DEFAULT '0',
  `right_wtaxreport_view` tinyint(1) DEFAULT '0',
  `right_payrollparent_view` tinyint(1) DEFAULT '0',
  `right_dtr_view` tinyint(1) DEFAULT '0',
  `right_dtr_create` tinyint(1) DEFAULT '0',
  `right_dtr_edit` tinyint(1) DEFAULT '0',
  `right_processpayroll_view` tinyint(1) DEFAULT '0',
  `right_processpayroll_process` tinyint(1) DEFAULT '0',
  `right_payslip_view` tinyint(1) DEFAULT '0',
  `right_loanadjustment_view` tinyint(1) DEFAULT '0',
  `right_dtrverification_view` tinyint(1) DEFAULT '0',
  `right_payrollhistory_view` tinyint(1) DEFAULT '0',
  `right_monthlypayroll_view` tinyint(1) DEFAULT '0',
  `right_yearlypayroll_view` tinyint(1) DEFAULT '0',
  `right_ledger_view` tinyint(1) DEFAULT '0',
  `right_13thmonthpay_view` tinyint(1) DEFAULT '0',
  `right_otherearningsparent_view` tinyint(1) DEFAULT '0',
  `right_otherregearnings_view` tinyint(1) DEFAULT '0',
  `right_otherregearnings_create` tinyint(1) DEFAULT '0',
  `right_otherregearnings_edit` tinyint(1) DEFAULT '0',
  `right_otherregearnings_delete` tinyint(1) DEFAULT '0',
  `right_othertempearnings_view` tinyint(1) DEFAULT '0',
  `right_othertempearnings_create` tinyint(1) DEFAULT '0',
  `right_othertempearnings_edit` tinyint(1) DEFAULT '0',
  `right_othertempearnings_delete` tinyint(1) DEFAULT '0',
  `right_deductionsparent_view` tinyint(1) DEFAULT '0',
  `right_regdeduction_view` tinyint(1) DEFAULT '0',
  `right_regdeduction_create` tinyint(1) DEFAULT '0',
  `right_regdeduction_edit` tinyint(1) DEFAULT '0',
  `right_regdeduction_delete` tinyint(1) DEFAULT '0',
  `right_tempdeduction_view` tinyint(1) DEFAULT '0',
  `right_tempdeduction_create` tinyint(1) DEFAULT '0',
  `right_tempdeduction_edit` tinyint(1) DEFAULT '0',
  `right_tempdeduction_delete` tinyint(1) DEFAULT '0',
  `right_payrollreferenceparent_view` tinyint(1) DEFAULT '0',
  `right_payperiod_view` tinyint(1) DEFAULT '0',
  `right_payperiod_create` tinyint(1) DEFAULT '0',
  `right_payperiod_edit` tinyint(1) DEFAULT '0',
  `right_payperiod_delete` tinyint(1) DEFAULT '0',
  `right_earningsetup_view` tinyint(1) DEFAULT '0',
  `right_earningsetup_create` tinyint(1) DEFAULT '0',
  `right_earningsetup_edit` tinyint(1) DEFAULT '0',
  `right_earningsetup_delete` tinyint(1) DEFAULT '0',
  `right_earningtype_view` tinyint(1) DEFAULT '0',
  `right_earningtype_create` tinyint(1) DEFAULT '0',
  `right_earningtype_edit` tinyint(1) DEFAULT '0',
  `right_earningtype_delete` tinyint(1) DEFAULT '0',
  `right_deductiontype_view` tinyint(1) DEFAULT '0',
  `right_deductiontype_create` tinyint(1) DEFAULT '0',
  `right_deductiontype_edit` tinyint(1) DEFAULT '0',
  `right_deductiontype_delete` tinyint(1) DEFAULT '0',
  `right_deductionsetup_view` tinyint(1) DEFAULT '0',
  `right_deductionsetup_create` tinyint(1) DEFAULT '0',
  `right_deductionsetup_edit` tinyint(1) DEFAULT '0',
  `right_deductionsetup_delete` tinyint(1) DEFAULT '0',
  `right_deductionperiod_view` tinyint(1) DEFAULT '0',
  `right_deductionperiod_edit` tinyint(1) DEFAULT '0',
  `right_adminparent_view` tinyint(1) DEFAULT '0',
  `right_useracccount_view` tinyint(1) DEFAULT '0',
  `right_useracccount_create` tinyint(1) DEFAULT '0',
  `right_useracccount_edit` tinyint(1) DEFAULT '0',
  `right_useracccount_delete` tinyint(1) DEFAULT '0',
  `right_usergroup_view` tinyint(1) DEFAULT '0',
  `right_usergroup_create` tinyint(1) DEFAULT '0',
  `right_usergroup_edit` tinyint(1) DEFAULT '0',
  `right_usergroup_delete` tinyint(1) DEFAULT '0',
  `right_companysetup_view` tinyint(1) DEFAULT '0',
  `right_companysetup_edit` tinyint(1) DEFAULT '0',
  `right_reffactorfile_view` tinyint(1) DEFAULT '0',
  `right_reffactorfile_edit` tinyint(1) DEFAULT '0',
  `right_taxtable_view` tinyint(1) DEFAULT '0',
  `right_bir2316_view` tinyint(1) DEFAULT '0',
  `right_bir2316_create` tinyint(1) DEFAULT '0',
  `right_bir2316_edit` tinyint(1) DEFAULT '0',
  `right_bir2316_delete` tinyint(1) DEFAULT '0',
  `right_scheduling_view` tinyint(1) DEFAULT '0',
  `right_employee_schedule_view` tinyint(1) DEFAULT '0',
  `right_employee_schedule_create` tinyint(1) DEFAULT '0',
  `right_employee_schedule_edit` tinyint(1) DEFAULT '0',
  `right_employee_schedule_delete` tinyint(1) DEFAULT '0',
  `right_schedule_demography_view` tinyint(1) DEFAULT '0',
  `right_schedule_demography_create` tinyint(1) DEFAULT '0',
  `right_schedule_demography_edit` tinyint(1) DEFAULT '0',
  `right_schedule_demography_delete` tinyint(1) DEFAULT '0',
  `right_schedule_timeinout` tinyint(1) DEFAULT '0',
  `right_schedule_paytype_view` tinyint(1) DEFAULT '0',
  `right_schedule_paytype_create` tinyint(1) DEFAULT '0',
  `right_schedule_paytype_edit` tinyint(1) DEFAULT '0',
  `right_schedule_paytype_delete` tinyint(1) DEFAULT '0',
  `right_schedule_shifting_view` tinyint(1) DEFAULT '0',
  `right_schedule_shifting_create` tinyint(1) DEFAULT '0',
  `right_schedule_shifting_edit` tinyint(1) DEFAULT '0',
  `right_schedule_shifting_delete` tinyint(1) DEFAULT '0',
  `right_backup_view` tinyint(1) DEFAULT NULL,
  `right_backup_create` tinyint(1) DEFAULT NULL,
  `right_backup_restore` varchar(45) DEFAULT NULL,
  `right_schedstat_view` tinyint(1) DEFAULT '0',
  `right_scheddtr_view` tinyint(1) DEFAULT '0',
  `right_scheddtrsummary_view` tinyint(1) DEFAULT '0',
  `right_scheddtrdetailed_view` tinyint(1) DEFAULT '0',
  `right_employee_compensation_view` tinyint(1) DEFAULT '0',
  `right_employee_deduction_view` tinyint(1) DEFAULT '0',
  `right_alphalist_view` tinyint(1) DEFAULT '0',
  `right_employee_sched_view` tinyint(1) DEFAULT '0',
  `right_schedholidaysetup_view` tinyint(1) DEFAULT '0',
  `right_overtimeentry_view` tinyint(1) DEFAULT '0',
  `right_overtimeentry_edit` tinyint(1) DEFAULT '0',
  `right_employeeactual_view` tinyint(1) DEFAULT '0',
  `right_payrollreports_view` tinyint(1) DEFAULT '0',
  `right_employeequicksetup_view` tinyint(1) DEFAULT '0',
  `right_birthdaycelebrant_view` tinyint(1) DEFAULT '0',
  `right_plantilla_view` tinyint(1) DEFAULT '0',
  `right_201records_view` tinyint(1) DEFAULT '0',
  `right_override_time_view` tinyint(1) DEFAULT '0',
  `right_override_time_authorization` tinyint(1) DEFAULT '1',
  `right_leaverequest_view` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_rights_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=5461 ROW_FORMAT=DYNAMIC;

INSERT INTO `user_rights` (`user_rights_id`, `user_group_id`, `right_employee_view`, `right_employee_create`, `right_employee_edit`, `right_employee_delete`, `right_leaveentitlement_view`, `right_leaveentitlement_create`, `right_leaveentitlement_edit`, `right_leaveentitlement_delete`, `right_applyleave_view`, `right_applyleave_create`, `right_rates_view`, `right_rates_create`, `right_rates_edit`, `right_rates_delete`, `right_memorandum_view`, `right_memorandum_create`, `right_memorandum_edit`, `right_memorandum_delete`, `right_commendation_view`, `right_commendation_create`, `right_commendation_edit`, `right_commendation_delete`, `right_seminar_view`, `right_seminar_create`, `right_seminar_edit`, `right_seminar_delete`, `right_leavemgmt_view`, `right_leavetype_view`, `right_leavetype_create`, `right_leavetype_edit`, `right_leavetype_delete`, `right_yearsetup_view`, `right_yearsetup_create`, `right_empreference_view`, `right_paymenttype_view`, `right_paymenttype_create`, `right_paymenttype_edit`, `right_paymenttype_delete`, `right_department_view`, `right_department_create`, `right_department_edit`, `right_department_delete`, `right_position_view`, `right_position_create`, `right_position_edit`, `right_position_delete`, `right_branch_view`, `right_branch_create`, `right_branch_edit`, `right_branch_delete`, `right_group_view`, `right_group_create`, `right_group_edit`, `right_group_delete`, `right_section_view`, `right_section_create`, `right_section_edit`, `right_section_delete`, `right_religion_view`, `right_religion_create`, `right_religion_edit`, `right_religion_delete`, `right_course_view`, `right_course_create`, `right_course_edit`, `right_course_delete`, `right_relationship_view`, `right_relationship_create`, `right_relationship_edit`, `right_relationship_delete`, `right_docreference_view`, `right_certificate_view`, `right_certificate_create`, `right_certificate_edit`, `right_certificate_delete`, `right_actiontaken_view`, `right_actiontaken_create`, `right_actiontaken_edit`, `right_actiontaken_delete`, `right_disciplinary_view`, `right_disciplinary_create`, `right_disciplinary_edit`, `right_disciplinary_delete`, `right_compensation_view`, `right_compensation_create`, `right_compensation_edit`, `right_compensation_delete`, `right_contribution_view`, `right_sss_view`, `right_sss_create`, `right_sss_edit`, `right_sss_delete`, `right_philhealth_view`, `right_philhealth_create`, `right_philhealth_edit`, `right_philhealth_delete`, `right_hrisreports_view`, `right_personnel_view`, `right_manpower_view`, `right_employeetenure_view`, `right_sssreport_view`, `right_philhealthreport_view`, `right_pagibigreport_view`, `right_wtaxreport_view`, `right_payrollparent_view`, `right_dtr_view`, `right_dtr_create`, `right_dtr_edit`, `right_processpayroll_view`, `right_processpayroll_process`, `right_payslip_view`, `right_loanadjustment_view`, `right_dtrverification_view`, `right_payrollhistory_view`, `right_monthlypayroll_view`, `right_yearlypayroll_view`, `right_ledger_view`, `right_13thmonthpay_view`, `right_otherearningsparent_view`, `right_otherregearnings_view`, `right_otherregearnings_create`, `right_otherregearnings_edit`, `right_otherregearnings_delete`, `right_othertempearnings_view`, `right_othertempearnings_create`, `right_othertempearnings_edit`, `right_othertempearnings_delete`, `right_deductionsparent_view`, `right_regdeduction_view`, `right_regdeduction_create`, `right_regdeduction_edit`, `right_regdeduction_delete`, `right_tempdeduction_view`, `right_tempdeduction_create`, `right_tempdeduction_edit`, `right_tempdeduction_delete`, `right_payrollreferenceparent_view`, `right_payperiod_view`, `right_payperiod_create`, `right_payperiod_edit`, `right_payperiod_delete`, `right_earningsetup_view`, `right_earningsetup_create`, `right_earningsetup_edit`, `right_earningsetup_delete`, `right_earningtype_view`, `right_earningtype_create`, `right_earningtype_edit`, `right_earningtype_delete`, `right_deductiontype_view`, `right_deductiontype_create`, `right_deductiontype_edit`, `right_deductiontype_delete`, `right_deductionsetup_view`, `right_deductionsetup_create`, `right_deductionsetup_edit`, `right_deductionsetup_delete`, `right_deductionperiod_view`, `right_deductionperiod_edit`, `right_adminparent_view`, `right_useracccount_view`, `right_useracccount_create`, `right_useracccount_edit`, `right_useracccount_delete`, `right_usergroup_view`, `right_usergroup_create`, `right_usergroup_edit`, `right_usergroup_delete`, `right_companysetup_view`, `right_companysetup_edit`, `right_reffactorfile_view`, `right_reffactorfile_edit`, `right_taxtable_view`, `right_bir2316_view`, `right_bir2316_create`, `right_bir2316_edit`, `right_bir2316_delete`, `right_scheduling_view`, `right_employee_schedule_view`, `right_employee_schedule_create`, `right_employee_schedule_edit`, `right_employee_schedule_delete`, `right_schedule_demography_view`, `right_schedule_demography_create`, `right_schedule_demography_edit`, `right_schedule_demography_delete`, `right_schedule_timeinout`, `right_schedule_paytype_view`, `right_schedule_paytype_create`, `right_schedule_paytype_edit`, `right_schedule_paytype_delete`, `right_schedule_shifting_view`, `right_schedule_shifting_create`, `right_schedule_shifting_edit`, `right_schedule_shifting_delete`, `right_backup_view`, `right_backup_create`, `right_backup_restore`, `right_schedstat_view`, `right_scheddtr_view`, `right_scheddtrsummary_view`, `right_scheddtrdetailed_view`, `right_employee_compensation_view`, `right_employee_deduction_view`, `right_alphalist_view`, `right_employee_sched_view`, `right_schedholidaysetup_view`, `right_overtimeentry_view`, `right_overtimeentry_edit`, `right_employeeactual_view`, `right_payrollreports_view`, `right_employeequicksetup_view`, `right_birthdaycelebrant_view`, `right_plantilla_view`, `right_201records_view`, `right_override_time_view`, `right_override_time_authorization`, `right_leaverequest_view`) VALUES ('73', '6', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', NULL, '0', '0', '0', '0', '0', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `user_rights` (`user_rights_id`, `user_group_id`, `right_employee_view`, `right_employee_create`, `right_employee_edit`, `right_employee_delete`, `right_leaveentitlement_view`, `right_leaveentitlement_create`, `right_leaveentitlement_edit`, `right_leaveentitlement_delete`, `right_applyleave_view`, `right_applyleave_create`, `right_rates_view`, `right_rates_create`, `right_rates_edit`, `right_rates_delete`, `right_memorandum_view`, `right_memorandum_create`, `right_memorandum_edit`, `right_memorandum_delete`, `right_commendation_view`, `right_commendation_create`, `right_commendation_edit`, `right_commendation_delete`, `right_seminar_view`, `right_seminar_create`, `right_seminar_edit`, `right_seminar_delete`, `right_leavemgmt_view`, `right_leavetype_view`, `right_leavetype_create`, `right_leavetype_edit`, `right_leavetype_delete`, `right_yearsetup_view`, `right_yearsetup_create`, `right_empreference_view`, `right_paymenttype_view`, `right_paymenttype_create`, `right_paymenttype_edit`, `right_paymenttype_delete`, `right_department_view`, `right_department_create`, `right_department_edit`, `right_department_delete`, `right_position_view`, `right_position_create`, `right_position_edit`, `right_position_delete`, `right_branch_view`, `right_branch_create`, `right_branch_edit`, `right_branch_delete`, `right_group_view`, `right_group_create`, `right_group_edit`, `right_group_delete`, `right_section_view`, `right_section_create`, `right_section_edit`, `right_section_delete`, `right_religion_view`, `right_religion_create`, `right_religion_edit`, `right_religion_delete`, `right_course_view`, `right_course_create`, `right_course_edit`, `right_course_delete`, `right_relationship_view`, `right_relationship_create`, `right_relationship_edit`, `right_relationship_delete`, `right_docreference_view`, `right_certificate_view`, `right_certificate_create`, `right_certificate_edit`, `right_certificate_delete`, `right_actiontaken_view`, `right_actiontaken_create`, `right_actiontaken_edit`, `right_actiontaken_delete`, `right_disciplinary_view`, `right_disciplinary_create`, `right_disciplinary_edit`, `right_disciplinary_delete`, `right_compensation_view`, `right_compensation_create`, `right_compensation_edit`, `right_compensation_delete`, `right_contribution_view`, `right_sss_view`, `right_sss_create`, `right_sss_edit`, `right_sss_delete`, `right_philhealth_view`, `right_philhealth_create`, `right_philhealth_edit`, `right_philhealth_delete`, `right_hrisreports_view`, `right_personnel_view`, `right_manpower_view`, `right_employeetenure_view`, `right_sssreport_view`, `right_philhealthreport_view`, `right_pagibigreport_view`, `right_wtaxreport_view`, `right_payrollparent_view`, `right_dtr_view`, `right_dtr_create`, `right_dtr_edit`, `right_processpayroll_view`, `right_processpayroll_process`, `right_payslip_view`, `right_loanadjustment_view`, `right_dtrverification_view`, `right_payrollhistory_view`, `right_monthlypayroll_view`, `right_yearlypayroll_view`, `right_ledger_view`, `right_13thmonthpay_view`, `right_otherearningsparent_view`, `right_otherregearnings_view`, `right_otherregearnings_create`, `right_otherregearnings_edit`, `right_otherregearnings_delete`, `right_othertempearnings_view`, `right_othertempearnings_create`, `right_othertempearnings_edit`, `right_othertempearnings_delete`, `right_deductionsparent_view`, `right_regdeduction_view`, `right_regdeduction_create`, `right_regdeduction_edit`, `right_regdeduction_delete`, `right_tempdeduction_view`, `right_tempdeduction_create`, `right_tempdeduction_edit`, `right_tempdeduction_delete`, `right_payrollreferenceparent_view`, `right_payperiod_view`, `right_payperiod_create`, `right_payperiod_edit`, `right_payperiod_delete`, `right_earningsetup_view`, `right_earningsetup_create`, `right_earningsetup_edit`, `right_earningsetup_delete`, `right_earningtype_view`, `right_earningtype_create`, `right_earningtype_edit`, `right_earningtype_delete`, `right_deductiontype_view`, `right_deductiontype_create`, `right_deductiontype_edit`, `right_deductiontype_delete`, `right_deductionsetup_view`, `right_deductionsetup_create`, `right_deductionsetup_edit`, `right_deductionsetup_delete`, `right_deductionperiod_view`, `right_deductionperiod_edit`, `right_adminparent_view`, `right_useracccount_view`, `right_useracccount_create`, `right_useracccount_edit`, `right_useracccount_delete`, `right_usergroup_view`, `right_usergroup_create`, `right_usergroup_edit`, `right_usergroup_delete`, `right_companysetup_view`, `right_companysetup_edit`, `right_reffactorfile_view`, `right_reffactorfile_edit`, `right_taxtable_view`, `right_bir2316_view`, `right_bir2316_create`, `right_bir2316_edit`, `right_bir2316_delete`, `right_scheduling_view`, `right_employee_schedule_view`, `right_employee_schedule_create`, `right_employee_schedule_edit`, `right_employee_schedule_delete`, `right_schedule_demography_view`, `right_schedule_demography_create`, `right_schedule_demography_edit`, `right_schedule_demography_delete`, `right_schedule_timeinout`, `right_schedule_paytype_view`, `right_schedule_paytype_create`, `right_schedule_paytype_edit`, `right_schedule_paytype_delete`, `right_schedule_shifting_view`, `right_schedule_shifting_create`, `right_schedule_shifting_edit`, `right_schedule_shifting_delete`, `right_backup_view`, `right_backup_create`, `right_backup_restore`, `right_schedstat_view`, `right_scheddtr_view`, `right_scheddtrsummary_view`, `right_scheddtrdetailed_view`, `right_employee_compensation_view`, `right_employee_deduction_view`, `right_alphalist_view`, `right_employee_sched_view`, `right_schedholidaysetup_view`, `right_overtimeentry_view`, `right_overtimeentry_edit`, `right_employeeactual_view`, `right_payrollreports_view`, `right_employeequicksetup_view`, `right_birthdaycelebrant_view`, `right_plantilla_view`, `right_201records_view`, `right_override_time_view`, `right_override_time_authorization`, `right_leaverequest_view`) VALUES ('101', '7', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `user_rights` (`user_rights_id`, `user_group_id`, `right_employee_view`, `right_employee_create`, `right_employee_edit`, `right_employee_delete`, `right_leaveentitlement_view`, `right_leaveentitlement_create`, `right_leaveentitlement_edit`, `right_leaveentitlement_delete`, `right_applyleave_view`, `right_applyleave_create`, `right_rates_view`, `right_rates_create`, `right_rates_edit`, `right_rates_delete`, `right_memorandum_view`, `right_memorandum_create`, `right_memorandum_edit`, `right_memorandum_delete`, `right_commendation_view`, `right_commendation_create`, `right_commendation_edit`, `right_commendation_delete`, `right_seminar_view`, `right_seminar_create`, `right_seminar_edit`, `right_seminar_delete`, `right_leavemgmt_view`, `right_leavetype_view`, `right_leavetype_create`, `right_leavetype_edit`, `right_leavetype_delete`, `right_yearsetup_view`, `right_yearsetup_create`, `right_empreference_view`, `right_paymenttype_view`, `right_paymenttype_create`, `right_paymenttype_edit`, `right_paymenttype_delete`, `right_department_view`, `right_department_create`, `right_department_edit`, `right_department_delete`, `right_position_view`, `right_position_create`, `right_position_edit`, `right_position_delete`, `right_branch_view`, `right_branch_create`, `right_branch_edit`, `right_branch_delete`, `right_group_view`, `right_group_create`, `right_group_edit`, `right_group_delete`, `right_section_view`, `right_section_create`, `right_section_edit`, `right_section_delete`, `right_religion_view`, `right_religion_create`, `right_religion_edit`, `right_religion_delete`, `right_course_view`, `right_course_create`, `right_course_edit`, `right_course_delete`, `right_relationship_view`, `right_relationship_create`, `right_relationship_edit`, `right_relationship_delete`, `right_docreference_view`, `right_certificate_view`, `right_certificate_create`, `right_certificate_edit`, `right_certificate_delete`, `right_actiontaken_view`, `right_actiontaken_create`, `right_actiontaken_edit`, `right_actiontaken_delete`, `right_disciplinary_view`, `right_disciplinary_create`, `right_disciplinary_edit`, `right_disciplinary_delete`, `right_compensation_view`, `right_compensation_create`, `right_compensation_edit`, `right_compensation_delete`, `right_contribution_view`, `right_sss_view`, `right_sss_create`, `right_sss_edit`, `right_sss_delete`, `right_philhealth_view`, `right_philhealth_create`, `right_philhealth_edit`, `right_philhealth_delete`, `right_hrisreports_view`, `right_personnel_view`, `right_manpower_view`, `right_employeetenure_view`, `right_sssreport_view`, `right_philhealthreport_view`, `right_pagibigreport_view`, `right_wtaxreport_view`, `right_payrollparent_view`, `right_dtr_view`, `right_dtr_create`, `right_dtr_edit`, `right_processpayroll_view`, `right_processpayroll_process`, `right_payslip_view`, `right_loanadjustment_view`, `right_dtrverification_view`, `right_payrollhistory_view`, `right_monthlypayroll_view`, `right_yearlypayroll_view`, `right_ledger_view`, `right_13thmonthpay_view`, `right_otherearningsparent_view`, `right_otherregearnings_view`, `right_otherregearnings_create`, `right_otherregearnings_edit`, `right_otherregearnings_delete`, `right_othertempearnings_view`, `right_othertempearnings_create`, `right_othertempearnings_edit`, `right_othertempearnings_delete`, `right_deductionsparent_view`, `right_regdeduction_view`, `right_regdeduction_create`, `right_regdeduction_edit`, `right_regdeduction_delete`, `right_tempdeduction_view`, `right_tempdeduction_create`, `right_tempdeduction_edit`, `right_tempdeduction_delete`, `right_payrollreferenceparent_view`, `right_payperiod_view`, `right_payperiod_create`, `right_payperiod_edit`, `right_payperiod_delete`, `right_earningsetup_view`, `right_earningsetup_create`, `right_earningsetup_edit`, `right_earningsetup_delete`, `right_earningtype_view`, `right_earningtype_create`, `right_earningtype_edit`, `right_earningtype_delete`, `right_deductiontype_view`, `right_deductiontype_create`, `right_deductiontype_edit`, `right_deductiontype_delete`, `right_deductionsetup_view`, `right_deductionsetup_create`, `right_deductionsetup_edit`, `right_deductionsetup_delete`, `right_deductionperiod_view`, `right_deductionperiod_edit`, `right_adminparent_view`, `right_useracccount_view`, `right_useracccount_create`, `right_useracccount_edit`, `right_useracccount_delete`, `right_usergroup_view`, `right_usergroup_create`, `right_usergroup_edit`, `right_usergroup_delete`, `right_companysetup_view`, `right_companysetup_edit`, `right_reffactorfile_view`, `right_reffactorfile_edit`, `right_taxtable_view`, `right_bir2316_view`, `right_bir2316_create`, `right_bir2316_edit`, `right_bir2316_delete`, `right_scheduling_view`, `right_employee_schedule_view`, `right_employee_schedule_create`, `right_employee_schedule_edit`, `right_employee_schedule_delete`, `right_schedule_demography_view`, `right_schedule_demography_create`, `right_schedule_demography_edit`, `right_schedule_demography_delete`, `right_schedule_timeinout`, `right_schedule_paytype_view`, `right_schedule_paytype_create`, `right_schedule_paytype_edit`, `right_schedule_paytype_delete`, `right_schedule_shifting_view`, `right_schedule_shifting_create`, `right_schedule_shifting_edit`, `right_schedule_shifting_delete`, `right_backup_view`, `right_backup_create`, `right_backup_restore`, `right_schedstat_view`, `right_scheddtr_view`, `right_scheddtrsummary_view`, `right_scheddtrdetailed_view`, `right_employee_compensation_view`, `right_employee_deduction_view`, `right_alphalist_view`, `right_employee_sched_view`, `right_schedholidaysetup_view`, `right_overtimeentry_view`, `right_overtimeentry_edit`, `right_employeeactual_view`, `right_payrollreports_view`, `right_employeequicksetup_view`, `right_birthdaycelebrant_view`, `right_plantilla_view`, `right_201records_view`, `right_override_time_view`, `right_override_time_authorization`, `right_leaverequest_view`) VALUES ('103', '3', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `user_rights` (`user_rights_id`, `user_group_id`, `right_employee_view`, `right_employee_create`, `right_employee_edit`, `right_employee_delete`, `right_leaveentitlement_view`, `right_leaveentitlement_create`, `right_leaveentitlement_edit`, `right_leaveentitlement_delete`, `right_applyleave_view`, `right_applyleave_create`, `right_rates_view`, `right_rates_create`, `right_rates_edit`, `right_rates_delete`, `right_memorandum_view`, `right_memorandum_create`, `right_memorandum_edit`, `right_memorandum_delete`, `right_commendation_view`, `right_commendation_create`, `right_commendation_edit`, `right_commendation_delete`, `right_seminar_view`, `right_seminar_create`, `right_seminar_edit`, `right_seminar_delete`, `right_leavemgmt_view`, `right_leavetype_view`, `right_leavetype_create`, `right_leavetype_edit`, `right_leavetype_delete`, `right_yearsetup_view`, `right_yearsetup_create`, `right_empreference_view`, `right_paymenttype_view`, `right_paymenttype_create`, `right_paymenttype_edit`, `right_paymenttype_delete`, `right_department_view`, `right_department_create`, `right_department_edit`, `right_department_delete`, `right_position_view`, `right_position_create`, `right_position_edit`, `right_position_delete`, `right_branch_view`, `right_branch_create`, `right_branch_edit`, `right_branch_delete`, `right_group_view`, `right_group_create`, `right_group_edit`, `right_group_delete`, `right_section_view`, `right_section_create`, `right_section_edit`, `right_section_delete`, `right_religion_view`, `right_religion_create`, `right_religion_edit`, `right_religion_delete`, `right_course_view`, `right_course_create`, `right_course_edit`, `right_course_delete`, `right_relationship_view`, `right_relationship_create`, `right_relationship_edit`, `right_relationship_delete`, `right_docreference_view`, `right_certificate_view`, `right_certificate_create`, `right_certificate_edit`, `right_certificate_delete`, `right_actiontaken_view`, `right_actiontaken_create`, `right_actiontaken_edit`, `right_actiontaken_delete`, `right_disciplinary_view`, `right_disciplinary_create`, `right_disciplinary_edit`, `right_disciplinary_delete`, `right_compensation_view`, `right_compensation_create`, `right_compensation_edit`, `right_compensation_delete`, `right_contribution_view`, `right_sss_view`, `right_sss_create`, `right_sss_edit`, `right_sss_delete`, `right_philhealth_view`, `right_philhealth_create`, `right_philhealth_edit`, `right_philhealth_delete`, `right_hrisreports_view`, `right_personnel_view`, `right_manpower_view`, `right_employeetenure_view`, `right_sssreport_view`, `right_philhealthreport_view`, `right_pagibigreport_view`, `right_wtaxreport_view`, `right_payrollparent_view`, `right_dtr_view`, `right_dtr_create`, `right_dtr_edit`, `right_processpayroll_view`, `right_processpayroll_process`, `right_payslip_view`, `right_loanadjustment_view`, `right_dtrverification_view`, `right_payrollhistory_view`, `right_monthlypayroll_view`, `right_yearlypayroll_view`, `right_ledger_view`, `right_13thmonthpay_view`, `right_otherearningsparent_view`, `right_otherregearnings_view`, `right_otherregearnings_create`, `right_otherregearnings_edit`, `right_otherregearnings_delete`, `right_othertempearnings_view`, `right_othertempearnings_create`, `right_othertempearnings_edit`, `right_othertempearnings_delete`, `right_deductionsparent_view`, `right_regdeduction_view`, `right_regdeduction_create`, `right_regdeduction_edit`, `right_regdeduction_delete`, `right_tempdeduction_view`, `right_tempdeduction_create`, `right_tempdeduction_edit`, `right_tempdeduction_delete`, `right_payrollreferenceparent_view`, `right_payperiod_view`, `right_payperiod_create`, `right_payperiod_edit`, `right_payperiod_delete`, `right_earningsetup_view`, `right_earningsetup_create`, `right_earningsetup_edit`, `right_earningsetup_delete`, `right_earningtype_view`, `right_earningtype_create`, `right_earningtype_edit`, `right_earningtype_delete`, `right_deductiontype_view`, `right_deductiontype_create`, `right_deductiontype_edit`, `right_deductiontype_delete`, `right_deductionsetup_view`, `right_deductionsetup_create`, `right_deductionsetup_edit`, `right_deductionsetup_delete`, `right_deductionperiod_view`, `right_deductionperiod_edit`, `right_adminparent_view`, `right_useracccount_view`, `right_useracccount_create`, `right_useracccount_edit`, `right_useracccount_delete`, `right_usergroup_view`, `right_usergroup_create`, `right_usergroup_edit`, `right_usergroup_delete`, `right_companysetup_view`, `right_companysetup_edit`, `right_reffactorfile_view`, `right_reffactorfile_edit`, `right_taxtable_view`, `right_bir2316_view`, `right_bir2316_create`, `right_bir2316_edit`, `right_bir2316_delete`, `right_scheduling_view`, `right_employee_schedule_view`, `right_employee_schedule_create`, `right_employee_schedule_edit`, `right_employee_schedule_delete`, `right_schedule_demography_view`, `right_schedule_demography_create`, `right_schedule_demography_edit`, `right_schedule_demography_delete`, `right_schedule_timeinout`, `right_schedule_paytype_view`, `right_schedule_paytype_create`, `right_schedule_paytype_edit`, `right_schedule_paytype_delete`, `right_schedule_shifting_view`, `right_schedule_shifting_create`, `right_schedule_shifting_edit`, `right_schedule_shifting_delete`, `right_backup_view`, `right_backup_create`, `right_backup_restore`, `right_schedstat_view`, `right_scheddtr_view`, `right_scheddtrsummary_view`, `right_scheddtrdetailed_view`, `right_employee_compensation_view`, `right_employee_deduction_view`, `right_alphalist_view`, `right_employee_sched_view`, `right_schedholidaysetup_view`, `right_overtimeentry_view`, `right_overtimeentry_edit`, `right_employeeactual_view`, `right_payrollreports_view`, `right_employeequicksetup_view`, `right_birthdaycelebrant_view`, `right_plantilla_view`, `right_201records_view`, `right_override_time_view`, `right_override_time_authorization`, `right_leaverequest_view`) VALUES ('105', '8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '1', '1');
INSERT INTO `user_rights` (`user_rights_id`, `user_group_id`, `right_employee_view`, `right_employee_create`, `right_employee_edit`, `right_employee_delete`, `right_leaveentitlement_view`, `right_leaveentitlement_create`, `right_leaveentitlement_edit`, `right_leaveentitlement_delete`, `right_applyleave_view`, `right_applyleave_create`, `right_rates_view`, `right_rates_create`, `right_rates_edit`, `right_rates_delete`, `right_memorandum_view`, `right_memorandum_create`, `right_memorandum_edit`, `right_memorandum_delete`, `right_commendation_view`, `right_commendation_create`, `right_commendation_edit`, `right_commendation_delete`, `right_seminar_view`, `right_seminar_create`, `right_seminar_edit`, `right_seminar_delete`, `right_leavemgmt_view`, `right_leavetype_view`, `right_leavetype_create`, `right_leavetype_edit`, `right_leavetype_delete`, `right_yearsetup_view`, `right_yearsetup_create`, `right_empreference_view`, `right_paymenttype_view`, `right_paymenttype_create`, `right_paymenttype_edit`, `right_paymenttype_delete`, `right_department_view`, `right_department_create`, `right_department_edit`, `right_department_delete`, `right_position_view`, `right_position_create`, `right_position_edit`, `right_position_delete`, `right_branch_view`, `right_branch_create`, `right_branch_edit`, `right_branch_delete`, `right_group_view`, `right_group_create`, `right_group_edit`, `right_group_delete`, `right_section_view`, `right_section_create`, `right_section_edit`, `right_section_delete`, `right_religion_view`, `right_religion_create`, `right_religion_edit`, `right_religion_delete`, `right_course_view`, `right_course_create`, `right_course_edit`, `right_course_delete`, `right_relationship_view`, `right_relationship_create`, `right_relationship_edit`, `right_relationship_delete`, `right_docreference_view`, `right_certificate_view`, `right_certificate_create`, `right_certificate_edit`, `right_certificate_delete`, `right_actiontaken_view`, `right_actiontaken_create`, `right_actiontaken_edit`, `right_actiontaken_delete`, `right_disciplinary_view`, `right_disciplinary_create`, `right_disciplinary_edit`, `right_disciplinary_delete`, `right_compensation_view`, `right_compensation_create`, `right_compensation_edit`, `right_compensation_delete`, `right_contribution_view`, `right_sss_view`, `right_sss_create`, `right_sss_edit`, `right_sss_delete`, `right_philhealth_view`, `right_philhealth_create`, `right_philhealth_edit`, `right_philhealth_delete`, `right_hrisreports_view`, `right_personnel_view`, `right_manpower_view`, `right_employeetenure_view`, `right_sssreport_view`, `right_philhealthreport_view`, `right_pagibigreport_view`, `right_wtaxreport_view`, `right_payrollparent_view`, `right_dtr_view`, `right_dtr_create`, `right_dtr_edit`, `right_processpayroll_view`, `right_processpayroll_process`, `right_payslip_view`, `right_loanadjustment_view`, `right_dtrverification_view`, `right_payrollhistory_view`, `right_monthlypayroll_view`, `right_yearlypayroll_view`, `right_ledger_view`, `right_13thmonthpay_view`, `right_otherearningsparent_view`, `right_otherregearnings_view`, `right_otherregearnings_create`, `right_otherregearnings_edit`, `right_otherregearnings_delete`, `right_othertempearnings_view`, `right_othertempearnings_create`, `right_othertempearnings_edit`, `right_othertempearnings_delete`, `right_deductionsparent_view`, `right_regdeduction_view`, `right_regdeduction_create`, `right_regdeduction_edit`, `right_regdeduction_delete`, `right_tempdeduction_view`, `right_tempdeduction_create`, `right_tempdeduction_edit`, `right_tempdeduction_delete`, `right_payrollreferenceparent_view`, `right_payperiod_view`, `right_payperiod_create`, `right_payperiod_edit`, `right_payperiod_delete`, `right_earningsetup_view`, `right_earningsetup_create`, `right_earningsetup_edit`, `right_earningsetup_delete`, `right_earningtype_view`, `right_earningtype_create`, `right_earningtype_edit`, `right_earningtype_delete`, `right_deductiontype_view`, `right_deductiontype_create`, `right_deductiontype_edit`, `right_deductiontype_delete`, `right_deductionsetup_view`, `right_deductionsetup_create`, `right_deductionsetup_edit`, `right_deductionsetup_delete`, `right_deductionperiod_view`, `right_deductionperiod_edit`, `right_adminparent_view`, `right_useracccount_view`, `right_useracccount_create`, `right_useracccount_edit`, `right_useracccount_delete`, `right_usergroup_view`, `right_usergroup_create`, `right_usergroup_edit`, `right_usergroup_delete`, `right_companysetup_view`, `right_companysetup_edit`, `right_reffactorfile_view`, `right_reffactorfile_edit`, `right_taxtable_view`, `right_bir2316_view`, `right_bir2316_create`, `right_bir2316_edit`, `right_bir2316_delete`, `right_scheduling_view`, `right_employee_schedule_view`, `right_employee_schedule_create`, `right_employee_schedule_edit`, `right_employee_schedule_delete`, `right_schedule_demography_view`, `right_schedule_demography_create`, `right_schedule_demography_edit`, `right_schedule_demography_delete`, `right_schedule_timeinout`, `right_schedule_paytype_view`, `right_schedule_paytype_create`, `right_schedule_paytype_edit`, `right_schedule_paytype_delete`, `right_schedule_shifting_view`, `right_schedule_shifting_create`, `right_schedule_shifting_edit`, `right_schedule_shifting_delete`, `right_backup_view`, `right_backup_create`, `right_backup_restore`, `right_schedstat_view`, `right_scheddtr_view`, `right_scheddtrsummary_view`, `right_scheddtrdetailed_view`, `right_employee_compensation_view`, `right_employee_deduction_view`, `right_alphalist_view`, `right_employee_sched_view`, `right_schedholidaysetup_view`, `right_overtimeentry_view`, `right_overtimeentry_edit`, `right_employeeactual_view`, `right_payrollreports_view`, `right_employeequicksetup_view`, `right_birthdaycelebrant_view`, `right_plantilla_view`, `right_201records_view`, `right_override_time_view`, `right_override_time_authorization`, `right_leaverequest_view`) VALUES ('107', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');


#
# TABLE STRUCTURE FOR: wall_post
#

DROP TABLE IF EXISTS `wall_post`;

CREATE TABLE `wall_post` (
  `wall_post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(1000) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`wall_post_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `wall_post` (`wall_post_id`, `post_content`, `user_id`, `date_created`) VALUES ('1', 'Hello', '1', '2017-10-02 17:47:13');
INSERT INTO `wall_post` (`wall_post_id`, `post_content`, `user_id`, `date_created`) VALUES ('2', 'sadsa', '1', '2017-10-13 12:50:54');
INSERT INTO `wall_post` (`wall_post_id`, `post_content`, `user_id`, `date_created`) VALUES ('3', 'sd', '1', '2017-10-13 12:50:56');



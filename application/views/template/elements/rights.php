	<script>
		/*employee info*/
        var right_employee_email='<button class="btn btn-default btn-sm btnemail" name="email_info" data-toggle="tooltip" data-placement="top" title="Resend Email"><i class="fa fa-envelope fa-lg"></i> </button>';
		var right_employee_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil fa-lg"></i> </button>';
        var right_employee_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o fa-lg"></i> </button>';
        var right_employee_active='<button class="btn btn-default btn-sm btnactivate" name="activate_employee" data-toggle="tooltip" data-placement="top" title="Activate Employee"><i class="fa fa-check-circle fa-lg"></i> </button>';
		/*entitlement*/
		var right_leaveentitlement_edit='<button class="btn btn-default btn-sm btnedit" name="entitlement_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_leaveentitlement_delete='<button class="btn btn-default btn-sm btndelete" name="entitlement_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*rates*/
        var right_rates_edit='<button class="btn btn-default btn-sm btnedit" name="rates_duties_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_rates_delete='<button class="btn btn-default btn-sm btndelete" name="rates_duties_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*memorandum*/
        var right_memorandum_edit='<button class="btn btn-default btn-sm btnedit" name="memorandum_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_memorandum_delete='<button class="btn btn-default btn-sm btndelete" name="memorandum_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*commendation*/
        var right_commendation_edit='<button class="btn btn-default btn-sm btnedit" name="commendation_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_commendation_delete='<button class="btn btn-default btn-sm btndelete" name="commendation_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*seminar*/
        var right_seminar_edit='<button class="btn btn-default btn-sm btnedit" name="seminarstraining_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_seminar_delete='<button class="btn btn-default btn-sm btndelete" name="seminarstraining_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

        /*leave type*/
        var right_leavetype_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_leavetype_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*paymenttype*/
     	var right_paymenttype_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_paymenttype_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*department*/
     	var right_department_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_department_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*position*/
        var right_position_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_position_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*branch*/
        var right_branch_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_branch_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*group*/
        var right_group_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_group_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*section*/
        var right_section_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_section_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*religion*/
        var right_religion_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_religion_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*course*/
        var right_course_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_course_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*relationshio*/
        var right_relationship_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_relationship_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*certificate*/
        var right_certificate_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_certificate_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*action*/
        var right_actiontaken_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_actiontaken_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*disciplinary*/
        var right_disciplinary_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_disciplinary_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*compensation*/
        var right_compensation_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_compensation_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*sss*/
        var right_sss_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_sss_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*philhealth*/
        var right_philhealth_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_philhealth_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

        /*bir2316*/
        var right_bir2316_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_bir2316_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

        /*dtr*/
        var right_dtr_edit='<button class="btn btn-default btn-sm btnedit" name="dtr_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        /*regearning*/
        var right_otherregearnings_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_otherregearnings_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*othertempearning*/
        var right_othertempearnings_edit='<button class="btn btn-default btn-sm btnedit" name="temp_otherearnings_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_othertempearnings_delete='<button class="btn btn-default btn-sm btndelete" name="temp_otherearnings_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*regdeduction*/
        var right_regdeduction_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_regdeduction_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*tempdeduct*/
        var right_tempdeduction_edit='<button class="btn btn-default btn-sm btnedit" name="temp_deduction_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_tempdeduction_delete='<button class="btn btn-default btn-sm btndelete" name="temp_deduction_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*payperiod*/
        var right_payperiod_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info" searchPlaceholder  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_payperiod_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*earningsetup*/
        var right_earningsetup_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_earningsetup_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*earningtype*/
        var right_earningtype_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_earningtype_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*deductiontype*/
        var right_deductiontype_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_deductiontype_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*deductionsetup*/
        var right_deductionsetup_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_deductionsetup_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*deductionperiod*/
        var right_deductionperiod_edit='<button class="btn btn-success btn-sm" name="edit_info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        /*users*/
        var right_useracccount_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_useracccount_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*usergroups*/
        var right_usergroup_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_usergroup_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*employee shedule*/
        var right_employee_schedule_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_employee_schedule_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*pay type*/
        var right_schedule_paytype_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_schedule_paytype_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        /*shifting*/
        var right_schedule_shifting_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_schedule_shifting_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
		//backup
		var right_backup_restore='<button class="btn btn-default btn-sm btn-green" name="restore_db" data-toggle="tooltip" data-placement="top" title="Restore"><i class="fa fa-undo"></i> </button>';

        var right_announcement_edit = "<button type='button' name='edit_announcement' class='btn' style='border: 1px solid #B0BEC5 !important;background-color: #F5F5F5;'><span class='fa fa-edit'></span></button>";

        var right_announcement_delete = "<button type='button' name='remove_announcement' class='btn' style='background-color: #ef5350;color: #fff;border: 1px solid #b71c1c !important;'><span class='fa fa-times-circle'></span></button>";

        var right_leaverequest_approve = "<button type='button' name='btn_approve' class='btn' style='border: 1px solid #B0BEC5 !important;background-color: #F5F5F5;'><span class='fa fa-check-circle'></span> Approve</button>";
        var right_leaverequest_decline = "<button type='button' name='btn_decline' class='btn' style='background-color: #ef5350;color: #fff;border: 1px solid #b71c1c !important;'><span class='fa fa-times-circle'></span> Decline</button>";
        var right_duration_edit='<button class="btn btn-default btn-sm btnedit" name="edit_info"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
        var right_duration_delete='<button class="btn btn-default btn-sm btndelete" name="remove_info"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
        var right_emp_resignation_edit = "<button class='btn btn-primary' name='edit_info' style='margin-right: 5px;'><i class='fa fa-edit'></i></button>";
        var right_emp_resignation_delete = "<button class='btn btn-danger' name='remove_info' style='margin-right: 5px;'><i class='fa fa-trash'></i></button>";


	</script>

	<!-- rights start -->
<?php
	echo ($this->session->right_employee_view==0 || NULL ? '<script> $(".right_employee_view").remove(); </script>' : '');
	echo ($this->session->right_employee_create==0 || NULL ? '<script> $(".right_employee_create").remove(); </script>' : '');

    echo ($this->session->right_employee_email==0 || NULL ? '<script> var right_employee_email=" "; </script>' : '');
	echo ($this->session->right_employee_edit==0 || NULL ? '<script> var right_employee_edit=" "; </script>' : '');
 	echo ($this->session->right_employee_delete==0 || NULL ? '<script> var right_employee_delete=" "; </script>' : '');
    echo ($this->session->right_employee_active==0 || NULL ? '<script> var right_employee_active=" "; </script>' : '');


 	echo ($this->session->right_leaveentitlement_view==0 || NULL ? '<script> $(".right_leaveentitlement_view").remove(); </script>' : '');
 	echo ($this->session->right_leaveentitlement_create==0 || NULL ? '<script> $(".right_leaveentitlement_create").remove(); </script>' : '');
 	echo ($this->session->right_leaveentitlement_edit==0 || NULL ? '<script> var right_leaveentitlement_edit=" "; </script>' : '');
 	echo ($this->session->right_leaveentitlement_delete==0 || NULL ? '<script> var right_leaveentitlement_delete=" "; </script>' : '');

 	echo ($this->session->right_leavemgmt_view==0 || NULL ? '<script> $(".right_leavemgmt_view").remove(); </script>' : '');
 	echo ($this->session->right_applyleave_view==0 || NULL ? '<script> $(".right_applyleave_view").remove(); </script>' : '');
 	echo ($this->session->right_applyleave_create==0 || NULL ? '<script> $(".right_applyleave_create").remove(); </script>' : '');

 	echo ($this->session->right_rates_view==0 || NULL ? '<script> $(".right_rates_view").remove(); </script>' : '');
 	echo ($this->session->right_rates_create==0 || NULL ? '<script> $(".right_rates_create").remove(); </script>' : '');
 	echo ($this->session->right_rates_edit==0 || NULL ? '<script> var right_rates_edit=" "; </script>' : '');
 	echo ($this->session->right_rates_delete==0 || NULL ? '<script> var right_rates_delete=" "; </script>' : '');

 	echo ($this->session->right_memorandum_view==0 || NULL ? '<script> $(".right_memorandum_view").remove(); </script>' : '');
 	echo ($this->session->right_memorandum_create==0 || NULL ? '<script> $(".right_memorandum_create").remove(); </script>' : '');
 	echo ($this->session->right_memorandum_edit==0 || NULL ? '<script> var right_memorandum_edit=" "; </script>' : '');
 	echo ($this->session->right_memorandum_delete==0 || NULL ? '<script> var right_memorandum_delete=" "; </script>' : '');

 	echo ($this->session->right_commendation_view==0 || NULL ? '<script> $(".right_commendation_view").remove(); </script>' : '');
 	echo ($this->session->right_commendation_create==0 || NULL ? '<script> $(".right_commendation_create").remove(); </script>' : '');
 	echo ($this->session->right_commendation_edit==0 || NULL ? '<script> var right_commendation_edit=" "; </script>' : '');
 	echo ($this->session->right_commendation_delete==0 || NULL ? '<script> var right_commendation_delete=" "; </script>' : '');

 	echo ($this->session->right_seminar_view==0 || NULL ? '<script> $(".right_seminar_view").remove(); </script>' : '');
 	echo ($this->session->right_seminar_create==0 || NULL ? '<script> $(".right_seminar_create").remove(); </script>' : '');
 	echo ($this->session->right_seminar_edit==0 || NULL ? '<script> var right_seminar_edit=" "; </script>' : '');
 	echo ($this->session->right_seminar_delete==0 || NULL ? '<script> var right_seminar_delete=" "; </script>' : '');

 	echo ($this->session->right_leavetype_view==0 || NULL ? '<script> $(".right_leavetype_view").remove(); </script>' : '');
 	echo ($this->session->right_leavetype_create==0 || NULL ? '<script> $(".right_leavetype_create").remove(); </script>' : '');
 	echo ($this->session->right_leavetype_edit==0 || NULL ? '<script> var right_leavetype_edit=" "; </script>' : '');
 	echo ($this->session->right_leavetype_delete==0 || NULL ? '<script> var right_leavetype_delete=" "; </script>' : '');

 	echo ($this->session->right_yearsetup_view==0 || NULL ? '<script> $(".right_yearsetup_view").remove(); </script>' : '');
 	echo ($this->session->right_yearsetup_create==0 || NULL ? '<script> $(".right_yearsetup_create").remove(); </script>' : '');

 	echo ($this->session->right_empreference_view==0 || NULL ? '<script> $(".right_empreference_view").remove(); </script>' : '');
 	echo ($this->session->right_paymenttype_view==0 || NULL ? '<script> $(".right_paymenttype_view").remove(); </script>' : '');
 	echo ($this->session->right_paymenttype_create==0 || NULL ? '<script> $(".right_paymenttype_create").remove(); </script>' : '');
 	echo ($this->session->right_paymenttype_edit==0 || NULL ? '<script> var right_paymenttype_edit=" "; </script>' : '');
 	echo ($this->session->right_paymenttype_delete==0 || NULL ? '<script> var right_paymenttype_delete=" "; </script>' : '');

 	echo ($this->session->right_department_view==0 || NULL ? '<script> $(".right_department_view").remove(); </script>' : '');
 	echo ($this->session->right_department_create==0 || NULL ? '<script> $(".right_department_create").remove(); </script>' : '');
 	echo ($this->session->right_department_edit==0 || NULL ? '<script> var right_department_edit=" "; </script>' : '');
 	echo ($this->session->right_department_delete==0 || NULL ? '<script> var right_department_delete=" "; </script>' : '');

 	echo ($this->session->right_position_view==0 || NULL ? '<script> $(".right_position_view").remove(); </script>' : '');
 	echo ($this->session->right_position_create==0 || NULL ? '<script> $(".right_position_create").remove(); </script>' : '');
 	echo ($this->session->right_position_edit==0 || NULL ? '<script> var right_position_edit=" "; </script>' : '');
 	echo ($this->session->right_position_delete==0 || NULL ? '<script> var right_position_delete=" "; </script>' : '');

 	echo ($this->session->right_branch_view==0 || NULL ? '<script> $(".right_branch_view").remove(); </script>' : '');
 	echo ($this->session->right_branch_create==0 || NULL ? '<script> $(".right_branch_create").remove(); </script>' : '');
 	echo ($this->session->right_branch_edit==0 || NULL ? '<script> var right_branch_edit=" "; </script>' : '');
 	echo ($this->session->right_branch_delete==0 || NULL ? '<script> var right_branch_delete=" "; </script>' : '');

 	echo ($this->session->right_group_view==0 || NULL ? '<script> $(".right_group_view").remove(); </script>' : '');
 	echo ($this->session->right_group_create==0 || NULL ? '<script> $(".right_group_create").remove(); </script>' : '');
 	echo ($this->session->right_group_edit==0 || NULL ? '<script> var right_group_edit=" "; </script>' : '');
 	echo ($this->session->right_group_delete==0 || NULL ? '<script> var right_group_delete=" "; </script>' : '');

 	echo ($this->session->right_section_view==0 || NULL ? '<script> $(".right_section_view").remove(); </script>' : '');
 	echo ($this->session->right_section_create==0 || NULL ? '<script> $(".right_section_create").remove(); </script>' : '');
 	echo ($this->session->right_section_edit==0 || NULL ? '<script> var right_section_edit=" "; </script>' : '');
 	echo ($this->session->right_section_delete==0 || NULL ? '<script> var right_section_delete=" "; </script>' : '');

 	echo ($this->session->right_religion_view==0 || NULL ? '<script> $(".right_religion_view").remove(); </script>' : '');
 	echo ($this->session->right_religion_create==0 || NULL ? '<script> $(".right_religion_create").remove(); </script>' : '');
 	echo ($this->session->right_religion_edit==0 || NULL ? '<script> var right_religion_edit=" "; </script>' : '');
 	echo ($this->session->right_religion_delete==0 || NULL ? '<script> var right_religion_delete=" "; </script>' : '');

 	echo ($this->session->right_course_view==0 || NULL ? '<script> $(".right_course_view").remove(); </script>' : '');
 	echo ($this->session->right_course_create==0 || NULL ? '<script> $(".right_course_create").remove(); </script>' : '');
 	echo ($this->session->right_course_edit==0 || NULL ? '<script> var right_course_edit=" "; </script>' : '');
 	echo ($this->session->right_course_delete==0 || NULL ? '<script> var right_course_delete=" "; </script>' : '');

 	echo ($this->session->right_relationship_view==0 || NULL ? '<script> $(".right_relationship_view").remove(); </script>' : '');
 	echo ($this->session->right_relationship_create==0 || NULL ? '<script> $(".right_relationship_create").remove(); </script>' : '');
 	echo ($this->session->right_relationship_edit==0 || NULL ? '<script> var right_relationship_edit=" "; </script>' : '');
 	echo ($this->session->right_relationship_delete==0 || NULL ? '<script> var right_relationship_delete=" "; </script>' : '');

 	echo ($this->session->right_docreference_view==0 || NULL ? '<script> $(".right_docreference_view").remove(); </script>' : '');
 	echo ($this->session->right_certificate_view==0 || NULL ? '<script> $(".right_certificate_view").remove(); </script>' : '');
 	echo ($this->session->right_certificate_create==0 || NULL ? '<script> $(".right_certificate_create").remove(); </script>' : '');
 	echo ($this->session->right_certificate_edit==0 || NULL ? '<script> var right_certificate_edit=" "; </script>' : '');
 	echo ($this->session->right_certificate_delete==0 || NULL ? '<script> var right_certificate_delete=" "; </script>' : '');

 	echo ($this->session->right_actiontaken_view==0 || NULL ? '<script> $(".right_actiontaken_view").remove(); </script>' : '');
 	echo ($this->session->right_actiontaken_create==0 || NULL ? '<script> $(".right_actiontaken_create").remove(); </script>' : '');
 	echo ($this->session->right_actiontaken_edit==0 || NULL ? '<script> var right_actiontaken_edit=" "; </script>' : '');
 	echo ($this->session->right_actiontaken_delete==0 || NULL ? '<script> var right_actiontaken_delete=" "; </script>' : '');

 	echo ($this->session->right_disciplinary_view==0 || NULL ? '<script> $(".right_disciplinary_view").remove(); </script>' : '');
 	echo ($this->session->right_disciplinary_create==0 || NULL ? '<script> $(".right_disciplinary_create").remove(); </script>' : '');
 	echo ($this->session->right_disciplinary_edit==0 || NULL ? '<script> var right_disciplinary_edit=" "; </script>' : '');
 	echo ($this->session->right_disciplinary_delete==0 || NULL ? '<script> var right_disciplinary_delete=" "; </script>' : '');

 	echo ($this->session->right_compensation_view==0 || NULL ? '<script> $(".right_compensation_view").remove(); </script>' : '');
 	echo ($this->session->right_compensation_create==0 || NULL ? '<script> $(".right_compensation_create").remove(); </script>' : '');
 	echo ($this->session->right_compensation_edit==0 || NULL ? '<script> var right_compensation_edit=" "; </script>' : '');
 	echo ($this->session->right_compensation_delete==0 || NULL ? '<script> var right_compensation_delete=" "; </script>' : '');

 	echo ($this->session->right_contribution_view==0 || NULL ? '<script> $(".right_contribution_view").remove(); </script>' : '');
 	echo ($this->session->right_sss_view==0 || NULL ? '<script> $(".right_sss_view").remove(); </script>' : '');
 	echo ($this->session->right_sss_create==0 || NULL ? '<script> $(".right_sss_create").remove(); </script>' : '');
 	echo ($this->session->right_sss_edit==0 || NULL ? '<script> var right_sss_edit=" "; </script>' : '');
 	echo ($this->session->right_sss_delete==0 || NULL ? '<script> var right_sss_delete=" "; </script>' : '');

 	echo ($this->session->right_philhealth_view==0 || NULL ? '<script> $(".right_philhealth_view").remove(); </script>' : '');
 	echo ($this->session->right_philhealth_create==0 || NULL ? '<script> $(".right_philhealth_create").remove(); </script>' : '');
 	echo ($this->session->right_philhealth_edit==0 || NULL ? '<script> var right_philhealth_edit=" "; </script>' : '');
 	echo ($this->session->right_philhealth_delete==0 || NULL ? '<script> var right_philhealth_delete=" "; </script>' : '');

 	echo ($this->session->right_hrisreports_view==0 || NULL ? '<script> $(".right_hrisreports_view").remove(); </script>' : '');
 	echo ($this->session->right_personnel_view==0 || NULL ? '<script> $(".right_personnel_view").remove(); </script>' : '');
 	echo ($this->session->right_manpower_view==0 || NULL ? '<script> $(".right_manpower_view").remove(); </script>' : '');
 	echo ($this->session->right_employeetenure_view==0 || NULL ? '<script> $(".right_employeetenure_view").remove(); </script>' : '');
 	echo ($this->session->right_sssreport_view==0 || NULL ? '<script> $(".right_sssreport_view").remove(); </script>' : '');
 	echo ($this->session->right_philhealthreport_view==0 || NULL ? '<script> $(".right_philhealthreport_view").remove(); </script>' : '');
 	echo ($this->session->right_pagibigreport_view==0 || NULL ? '<script> $(".right_pagibigreport_view").remove(); </script>' : '');
 	echo ($this->session->right_wtaxreport_view==0 || NULL ? '<script> $(".right_wtaxreport_view").remove(); </script>' : '');

    echo ($this->session->right_bir2316_view==0 || NULL ? '<script> $(".right_bir2316_view").remove(); </script>' : '');
    echo ($this->session->right_bir2316_create==0 || NULL ? '<script> $(".right_bir2316_create").remove(); </script>' : '');
    echo ($this->session->right_bir2316_edit==0 || NULL ? '<script> var right_bir2316_edit=" "; </script>' : '');
    echo ($this->session->right_bir2316_delete==0 || NULL ? '<script> var right_bir2316_delete=" "; </script>' : '');

 	echo ($this->session->right_payrollparent_view==0 || NULL ? '<script> $(".right_payrollparent_view").remove(); </script>' : '');
 	echo ($this->session->right_dtr_view==0 || NULL ? '<script> $(".right_dtr_view").remove(); </script>' : '');
 	echo ($this->session->right_dtr_create==0 || NULL ? '<script> $(".right_dtr_create").remove(); </script>' : '');
 	echo ($this->session->right_dtr_edit==0 || NULL ? '<script> var right_dtr_edit=" "; </script>' : '');

 	echo ($this->session->right_processpayroll_view==0 || NULL ? '<script> $(".right_processpayroll_view").remove(); </script>' : '');
 	echo ($this->session->right_processpayroll_process==0 || NULL ? '<script> $(".right_processpayroll_process").remove(); </script>' : '');

 	echo ($this->session->right_payslip_view==0 || NULL ? '<script> $(".right_payslip_view").remove(); </script>' : '');
 	echo ($this->session->right_loanadjustment_view==0 || NULL ? '<script> $(".right_loanadjustment_view").remove(); </script>' : '');
 	echo ($this->session->right_dtrverification_view==0 || NULL ? '<script> $(".right_dtrverification_view").remove(); </script>' : '');
 	echo ($this->session->right_payrollhistory_view==0 || NULL ? '<script> $(".right_payrollhistory_view").remove(); </script>' : '');
 	echo ($this->session->right_monthlypayroll_view==0 || NULL ? '<script> $(".right_monthlypayroll_view").remove(); </script>' : '');
 	echo ($this->session->right_yearlypayroll_view==0 || NULL ? '<script> $(".right_yearlypayroll_view").remove(); </script>' : '');
 	echo ($this->session->right_ledger_view==0 || NULL ? '<script> $(".right_ledger_view").remove(); </script>' : '');
 	echo ($this->session->right_13thmonthpay_view==0 || NULL ? '<script> $(".right_13thmonthpay_view").remove(); </script>' : '');

 	echo ($this->session->right_otherearningsparent_view==0 || NULL ? '<script> $(".right_otherearningsparent_view").remove(); </script>' : '');
 	echo ($this->session->right_otherregearnings_view==0 || NULL ? '<script> $(".right_otherregearnings_view").remove(); </script>' : '');
 	echo ($this->session->right_otherregearnings_create==0 || NULL ? '<script> $(".right_otherregearnings_create").remove(); </script>' : '');
 	echo ($this->session->right_otherregearnings_edit==0 || NULL ? '<script> var right_otherregearnings_edit=" "; </script>' : '');
 	echo ($this->session->right_otherregearnings_delete==0 || NULL ? '<script> var right_otherregearnings_delete=" "; </script>' : '');

 	echo ($this->session->right_othertempearnings_view==0 || NULL ? '<script> $(".right_othertempearnings_view").remove(); </script>' : '');
 	echo ($this->session->right_othertempearnings_create==0 || NULL ? '<script> $(".right_othertempearnings_create").remove(); </script>' : '');
 	echo ($this->session->right_othertempearnings_edit==0 || NULL ? '<script> var right_othertempearnings_edit=" "; </script>' : '');
 	echo ($this->session->right_othertempearnings_delete==0 || NULL ? '<script> var right_othertempearnings_delete=" "; </script>' : '');

 	echo ($this->session->right_deductionsparent_view==0 || NULL ? '<script> $(".right_deductionsparent_view").remove(); </script>' : '');
 	echo ($this->session->right_regdeduction_view==0 || NULL ? '<script> $(".right_regdeduction_view").remove(); </script>' : '');
 	echo ($this->session->right_regdeduction_create==0 || NULL ? '<script> $(".right_regdeduction_create").remove(); </script>' : '');
 	echo ($this->session->right_regdeduction_edit==0 || NULL ? '<script> var right_regdeduction_edit=" "; </script>' : '');
 	echo ($this->session->right_regdeduction_delete==0 || NULL ? '<script> var right_regdeduction_delete=" "; </script>' : '');

 	echo ($this->session->right_tempdeduction_view==0 || NULL ? '<script> $(".right_tempdeduction_view").remove(); </script>' : '');
 	echo ($this->session->right_tempdeduction_create==0 || NULL ? '<script> $(".right_tempdeduction_create").remove(); </script>' : '');
 	echo ($this->session->right_tempdeduction_edit==0 || NULL ? '<script> var right_tempdeduction_edit=" "; </script>' : '');
 	echo ($this->session->right_tempdeduction_delete==0 || NULL ? '<script> var right_tempdeduction_delete=" "; </script>' : '');

 	echo ($this->session->right_payrollreferenceparent_view==0 || NULL ? '<script> $(".right_payrollreferenceparent_view").remove(); </script>' : '');
 	echo ($this->session->right_payperiod_view==0 || NULL ? '<script> $(".right_payperiod_view").remove(); </script>' : '');
 	echo ($this->session->right_payperiod_create==0 || NULL ? '<script> $(".right_payperiod_create").remove(); </script>' : '');
 	echo ($this->session->right_payperiod_edit==0 || NULL ? '<script> var right_payperiod_edit=" "; </script>' : '');
 	echo ($this->session->right_payperiod_delete==0 || NULL ? '<script> var right_payperiod_delete=" "; </script>' : '');

 	echo ($this->session->right_earningsetup_view==0 || NULL ? '<script> $(".right_earningsetup_view").remove(); </script>' : '');
 	echo ($this->session->right_earningsetup_create==0 || NULL ? '<script> $(".right_earningsetup_create").remove(); </script>' : '');
 	echo ($this->session->right_earningsetup_edit==0 || NULL ? '<script> var right_earningsetup_edit=" "; </script>' : '');
 	echo ($this->session->right_earningsetup_delete==0 || NULL ? '<script> var right_earningsetup_delete=" "; </script>' : '');

 	echo ($this->session->right_earningtype_view==0 || NULL ? '<script> $(".right_earningtype_view").remove(); </script>' : '');
 	echo ($this->session->right_earningtype_create==0 || NULL ? '<script> $(".right_earningtype_create").remove(); </script>' : '');
 	echo ($this->session->right_earningtype_edit==0 || NULL ? '<script> var right_earningtype_edit=" "; </script>' : '');
 	echo ($this->session->right_earningtype_delete==0 || NULL ? '<script> var right_earningtype_delete=" "; </script>' : '');

 	echo ($this->session->right_deductiontype_view==0 || NULL ? '<script> $(".right_deductiontype_view").remove(); </script>' : '');
 	echo ($this->session->right_deductiontype_create==0 || NULL ? '<script> $(".right_deductiontype_create").remove(); </script>' : '');
 	echo ($this->session->right_deductiontype_edit==0 || NULL ? '<script> var right_deductiontype_edit=" "; </script>' : '');
 	echo ($this->session->right_deductiontype_delete==0 || NULL ? '<script> var right_deductiontype_delete=" "; </script>' : '');

 	echo ($this->session->right_deductionsetup_view==0 || NULL ? '<script> $(".right_deductionsetup_view").remove(); </script>' : '');
 	echo ($this->session->right_deductionsetup_create==0 || NULL ? '<script> $(".right_deductionsetup_create").remove(); </script>' : '');
 	echo ($this->session->right_deductionsetup_edit==0 || NULL ? '<script> var right_deductionsetup_edit=" "; </script>' : '');
 	echo ($this->session->right_deductionsetup_delete==0 || NULL ? '<script> var right_deductionsetup_delete=" "; </script>' : '');

 	echo ($this->session->right_deductionperiod_view==0 || NULL ? '<script> $(".right_deductionperiod_view").remove(); </script>' : '');
 	echo ($this->session->right_deductionperiod_edit==0 || NULL ? '<script> var right_deductionperiod_edit=" "; </script>' : '');

 	echo ($this->session->right_adminparent_view==0 || NULL ? '<script> $(".right_adminparent_view").remove(); </script>' : '');
 	echo ($this->session->right_useracccount_view==0 || NULL ? '<script> $(".right_useracccount_view").remove(); </script>' : '');
 	echo ($this->session->right_useracccount_create==0 || NULL ? '<script> $(".right_useracccount_create").remove(); </script>' : '');
 	echo ($this->session->right_useracccount_edit==0 || NULL ? '<script> var right_useracccount_edit=" "; </script>' : '');
 	echo ($this->session->right_useracccount_delete==0 || NULL ? '<script> var right_useracccount_delete=" "; </script>' : '');

 	echo ($this->session->right_usergroup_view==0 || NULL ? '<script> $(".right_usergroup_view").remove(); </script>' : '');
 	echo ($this->session->right_usergroup_create==0 || NULL ? '<script> $(".right_usergroup_create").remove(); </script>' : '');
 	echo ($this->session->right_usergroup_edit==0 || NULL ? '<script> var right_usergroup_edit=" "; </script>' : '');
 	echo ($this->session->right_usergroup_delete==0 || NULL ? '<script> var right_usergroup_delete=" "; </script>' : '');

 	echo ($this->session->right_companysetup_view==0 || NULL ? '<script> $(".right_companysetup_view").remove(); </script>' : '');
 	echo ($this->session->right_companysetup_edit==0 || NULL ? '<script> $(".right_companysetup_edit").remove(); </script>' : '');

 	echo ($this->session->right_reffactorfile_view==0 || NULL ? '<script> $(".right_reffactorfile_view").remove(); </script>' : '');
 	echo ($this->session->right_reffactorfile_edit==0 || NULL ? '<script> $(".right_reffactorfile_edit").remove(); </script>' : '');

 	echo ($this->session->right_taxtable_view==0 || NULL ? '<script> $(".right_taxtable_view").remove(); </script>' : '');

		echo ($this->session->right_scheduling_view==0 || NULL ? '<script> $(".right_scheduling_view").remove(); </script>' : '');

    echo ($this->session->right_employee_schedule_view==0 || NULL ? '<script> $(".right_employee_schedule_view").remove(); </script>' : '');
    echo ($this->session->right_employee_schedule_create==0 || NULL ? '<script> $(".right_employee_schedule_create").remove(); </script>' : '');
    echo ($this->session->right_employee_schedule_edit==0 || NULL ? '<script> var right_employee_schedule_edit=" "; </script>' : '');
    echo ($this->session->right_employee_schedule_delete==0 || NULL ? '<script> var right_employee_schedule_delete=" "; </script>' : '');

    echo ($this->session->right_schedule_demography_view==0 || NULL ? '<script> $(".right_schedule_demography_view").remove(); </script>' : '');

    echo ($this->session->right_schedule_timeinout==0 || NULL ? '<script> $(".right_schedule_timeinout").remove(); </script>' : '');

    echo ($this->session->right_schedule_paytype_view==0 || NULL ? '<script> $(".right_schedule_paytype_view").remove(); </script>' : '');
    echo ($this->session->right_schedule_paytype_create==0 || NULL ? '<script> $(".right_schedule_paytype_create").remove(); </script>' : '');
    echo ($this->session->right_schedule_paytype_edit==0 || NULL ? '<script> var right_schedule_paytype_edit=" "; </script>' : '');
    echo ($this->session->right_schedule_paytype_delete==0 || NULL ? '<script> var right_schedule_paytype_delete=" "; </script>' : '');

    echo ($this->session->right_schedule_shifting_view==0 || NULL ? '<script> $(".right_schedule_shifting_view").remove(); </script>' : '');
    echo ($this->session->right_schedule_shifting_create==0 || NULL ? '<script> $(".right_schedule_shifting_create").remove(); </script>' : '');
    echo ($this->session->right_schedule_shifting_edit==0 || NULL ? '<script> var right_schedule_shifting_edit=" "; </script>' : '');
    echo ($this->session->right_schedule_shifting_delete==0 || NULL ? '<script> var right_schedule_shifting_delete=" "; </script>' : '');

		echo ($this->session->right_backup_view==0 || NULL ? '<script> $(".right_backup_view").remove(); </script>' : '');
    echo ($this->session->right_backup_create==0 || NULL ? '<script> $(".right_backup_create").remove(); </script>' : '');
    echo ($this->session->right_backup_restore==0 || NULL ? '<script> var right_backup_restore=" "; </script>' : '');

		echo ($this->session->right_schedstat_view==0 || NULL ? '<script> $(".right_schedstat_view").remove(); </script>' : '');

		echo ($this->session->right_scheddtr_view==0 || NULL ? '<script> $(".right_scheddtr_view").remove(); </script>' : '');

		echo ($this->session->right_scheddtrsummary_view==0 || NULL ? '<script> $(".right_scheddtrsummary_view").remove(); </script>' : '');

		echo ($this->session->right_scheddtrdetailed_view==0 || NULL ? '<script> $(".right_scheddtrdetailed_view").remove(); </script>' : '');

		echo ($this->session->right_employee_compensation_view==0 || NULL ? '<script> $(".right_employee_compensation_view").remove(); </script>' : '');

		echo ($this->session->right_employee_deduction_view==0 || NULL ? '<script> $(".right_employee_deduction_view").remove(); </script>' : '');
		echo ($this->session->right_alphalist_view==0 || NULL ? '<script> $(".right_alphalist_view").remove(); </script>' : '');
		echo ($this->session->right_employee_sched_view==0 || NULL ? '<script> $(".right_employee_sched_view").remove(); </script>' : '');
		echo ($this->session->right_schedholidaysetup_view==0 || NULL ? '<script> $(".right_schedholidaysetup_view").remove(); </script>' : '');
        
        echo ($this->session->right_overtimeentry_view==0 || NULL ? '<script> $(".right_overtimeentry_view").remove(); </script>' : '');
        echo ($this->session->right_employeeactual_view==0 || NULL ? '<script> $(".right_employeeactual_view").remove(); </script>' : '');
        echo ($this->session->right_payrollreports_view==0 || NULL ? '<script> $(".right_payrollreports_view").remove(); </script>' : '');
        echo ($this->session->right_employeequicksetup_view==0 || NULL ? '<script> $(".right_employeequicksetup_view").remove(); </script>' : '');
        echo ($this->session->right_birthdaycelebrant_view==0 || NULL ? '<script> $(".right_birthdaycelebrant_view").remove(); </script>' : '');
        echo ($this->session->right_plantilla_view==0 || NULL ? '<script> $(".right_plantilla_view").remove(); </script>' : '');
        echo ($this->session->right_201records_view==0 || NULL ? '<script> $(".right_201records_view").remove(); </script>' : '');
        echo ($this->session->right_override_time_view==0 || NULL ? '<script> $(".right_override_time_view").remove(); </script>' : '');
        echo ($this->session->right_leaverequest_view==0 || NULL ? '<script> $(".right_leaverequest_view").remove(); </script>' : '');
        echo ($this->session->right_announcement_view==0 || NULL ? '<script> $(".right_announcement_view").remove(); </script>' : '');
        echo ($this->session->right_announcement_create==0 || NULL ? '<script> $(".right_announcement_create").remove(); </script>' : '');

        echo ($this->session->right_announcement_edit==0 || NULL ? '<script> var right_announcement_edit=" "; </script>' : '');
        echo ($this->session->right_announcement_delete==0 || NULL ? '<script> var right_announcement_delete=" "; </script>' : '');

        echo ($this->session->right_leaverequest_approve==0 || NULL ? '<script> var right_leaverequest_approve=" "; </script>' : '');
        echo ($this->session->right_leaverequest_decline==0 || NULL ? '<script> var right_leaverequest_decline=" "; </script>' : '');

        echo ($this->session->right_duration_view==0 || NULL ? '<script> $(".right_duration_view").remove(); </script>' : '');
        echo ($this->session->right_duration_create==0 || NULL ? '<script> $(".right_duration_create").remove(); </script>' : '');
        echo ($this->session->right_duration_edit==0 || NULL ? '<script> var right_duration_edit=" "; </script>' : '');
        echo ($this->session->right_duration_delete==0 || NULL ? '<script> var right_duration_delete=" "; </script>' : '');

        echo ($this->session->right_expiringpersonnel_view==0 || NULL ? '<script> $(".right_expiringpersonnel_view").remove(); </script>' : '');

        echo ($this->session->right_emp_resignation_view==0 || NULL ? '<script> $(".right_emp_resignation_view").remove(); </script>' : '');
        echo ($this->session->right_emp_resignation_create==0 || NULL ? '<script> $(".right_emp_resignation_create").remove(); </script>' : '');
        echo ($this->session->right_emp_resignation_edit==0 || NULL ? '<script> var right_emp_resignation_edit=" "; </script>' : '');
        echo ($this->session->right_emp_resignation_delete==0 || NULL ? '<script> var right_emp_resignation_delete=" "; </script>' : '');
        echo ($this->session->right_attrition_view==0 || NULL ? '<script> $(".right_attrition_view").remove(); </script>' : '');




?>

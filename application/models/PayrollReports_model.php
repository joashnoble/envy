<?php

class PayrollReports_model extends CORE_Model {
    protected  $table="";
    protected  $pk_id="";

    function __construct() {
        parent::__construct();
    }

    function filter_function_adjustment($filter_value,$filter_value2,$filter_value3) {
                        if($filter_value2=="all" AND $filter_value3=="all"){
                        $filter_salary_adjustment=array('pay_slip_other_earnings.earnings_id'=>2,'daily_time_record.pay_period_id'=>$filter_value,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2=="all" AND $filter_value3!="all"){
                        $filter_salary_adjustment=array('pay_slip_other_earnings.earnings_id'=>2,'daily_time_record.pay_period_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3=="all"){
                        $filter_salary_adjustment=array('pay_slip_other_earnings.earnings_id'=>2,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3!="all"){
                        $filter_salary_adjustment=array('pay_slip_other_earnings.earnings_id'=>2,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }

                          return $filter_salary_adjustment;
    }

    function filter_function_otherearnings($filter_value,$filter_value2,$filter_value3) {
                        if($filter_value2=="all" AND $filter_value3=="all"){
                        $filter_other_earnings=array('pay_slip_other_earnings.earnings_id!=2','daily_time_record.pay_period_id'=>$filter_value,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2=="all" AND $filter_value3!="all"){
                        $filter_other_earnings=array('pay_slip_other_earnings.earnings_id!=2','daily_time_record.pay_period_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3=="all"){
                        $filter_other_earnings=array('pay_slip_other_earnings.earnings_id!=2','daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3!="all"){
                        $filter_other_earnings=array('pay_slip_other_earnings.earnings_id!=2','daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE);
                        }

                          return $filter_other_earnings;
    }

    function filter_function_deduction($deduction_id_filter,$filter_value,$filter_value2,$filter_value3) {
                        if($filter_value2=="all" AND $filter_value3=="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2=="all" AND $filter_value3!="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3=="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3!="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }

                          return $filter_sss;
    }

    function filter_function_other_deduction($filter_value,$filter_value2,$filter_value3) {
                        if($filter_value2=="all" AND $filter_value3=="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id!=1','pay_slip_deductions.deduction_id!=2',
                                          'pay_slip_deductions.deduction_id!=3','pay_slip_deductions.deduction_id!=4',
                                          'pay_slip_deductions.deduction_id!=5','pay_slip_deductions.deduction_id!=6',
                                          'pay_slip_deductions.deduction_id!=7','pay_slip_deductions.deduction_id!=8',
                                          'pay_slip_deductions.deduction_id!=9',
                                          'daily_time_record.pay_period_id'=>$filter_value,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2=="all" AND $filter_value3!="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3=="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }
                        if($filter_value2!="all" AND $filter_value3!="all"){
                        $filter_sss=array('pay_slip_deductions.deduction_id'=>$deduction_id_filter,'daily_time_record.pay_period_id'=>$filter_value,'ref_department.ref_department_id'=>$filter_value2,'ref_branch.ref_branch_id'=>$filter_value3,'emp_rates_duties.active_rates_duties'=>TRUE,'active_deduct'=>TRUE);
                        }

                          return $filter_sss;
    }

    function get_employee_history($filter_value,$filter_value2,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision edited na d na standard
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE rpp.pay_period_id='.$filter_value2.' AND dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.' ORDER BY fullname');

            return $query->result();
    }

    function get_employee_history_filter_year($filter_value2,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE rpp.pay_period_id='.$filter_value2.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.' ORDER BY fullname');

            return $query->result();
    }

    // function get_employee_history_filter_employee($filter_value,$filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,deduction_amount as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                     /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.' ORDER BY fullname');
    //
    //         return $query->result();
    // }
    //
    // function get_employee_history_wofilter($filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
    //                                         GROUP BY earnings_id) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                         /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id  WHERE erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);
    //
    //         return $query->result();
    // }

    function get_monthly_salary_history($filter_value,$filter_value2,$filter_value3,$filter_year) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision edited na d na standard
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        /*LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1) as psoe
                                                ON ps.pay_slip_id=psoe.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
                                            GROUP BY earnings_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
                                            GROUP BY earnings_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id*/
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE extract(MONTH from rpp.pay_period_start)='.$filter_value2.' AND extract(YEAR from rpp.pay_period_start)='.$filter_year.' AND dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.' ORDER BY fullname');

            return $query->result();
    }

    function get_monthly_salary_filter_year($filter_value2,$filter_value3,$filter_year) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE extract(MONTH from rpp.pay_period_start)='.$filter_value2.' AND extract(YEAR from rpp.pay_period_start)='.$filter_year.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'
                                            ORDER BY fullname');

            return $query->result();
    }

    // function get_monthly_salary_filter_employee($filter_value,$filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,deduction_amount as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                     /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'ORDER BY fullname');
    //
    //         return $query->result();
    // }
    //
    // function get_monthly_salary_wofilter($filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
    //                                         GROUP BY earnings_id) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                         /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id  WHERE erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);
    //
    //         return $query->result();
    // }

    function get_yearly_salary_history($filter_value,$filter_value2,$filter_value3) {

            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision edited na d na standard
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE extract(YEAR from rpp.pay_period_start)='.$filter_value2.' AND dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);

            return $query->result();
    }

    function get_yearly_salary_filter_year($filter_value2,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
                                                    psdsss.sss_deduction,psdphil.philhealth_deduction,
                                                    psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
                                                    psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
                                                    psdcashadvance.cashadvance_deduction,COALESCE(ROUND(psoeall.allowance,2),0) as allowance,COALESCE(ROUND(psoea.adjustment,2),0) as adjustment
                                                    ,COALESCE(ROUND(psoec.other_earnings,2),0) as other_earnings,psdcalamityloan.calamityloan_deduction,psod.other_deductions
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
                                            GROUP BY pay_slip_id) as psoeall
                                                ON ps.pay_slip_id=psoeall.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=2
                                            GROUP BY pay_slip_id) as psoea
                                                ON ps.pay_slip_id=psoea.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=2
                                            GROUP BY pay_slip_id) as psoec
                                                ON ps.pay_slip_id=psoec.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
                                            ON ps.pay_slip_id=psdsss.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
                                            ON ps.pay_slip_id=psdphil.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
                                            ON ps.pay_slip_id=psdpagibig.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
                                            ON ps.pay_slip_id=psdwtax.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
                                            ON ps.pay_slip_id=psdsssloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
                                            ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
                                            ON ps.pay_slip_id=psdcashadvance.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
                                            ON ps.pay_slip_id=psdcooploan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
                                            ON ps.pay_slip_id=psdcalamityloan.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,SUM(deduction_amount) as other_deductions FROM pay_slip_deductions
                                            LEFT JOIN refdeduction
                                            ON refdeduction.deduction_id=pay_slip_deductions.deduction_id
                                            WHERE refdeduction.deduction_type_id!=1 AND refdeduction.deduction_type_id!=2 AND refdeduction.deduction_type_id!=4 AND active_deduct=TRUE
                                            GROUP BY pay_slip_id) as psod
                                                ON ps.pay_slip_id=psod.pay_slip_id
                                        LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
                                            ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE extract(YEAR from rpp.pay_period_start)='.$filter_value2.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'
                                            ORDER BY el.first_name');

            return $query->result();
    }

    // function get_yearly_salary_filter_employee($filter_value,$filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,deduction_amount as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                     /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id WHERE dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);
    //
    //         return $query->result();
    // }
    //
    // function get_yearly_salary_wofilter($filter_value3) {
    //         //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
    //         $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname,rpp.pay_period_start,rpp.pay_period_end,
    //                                                 psdsss.sss_deduction,psdphil.philhealth_deduction,
    //                                                 psdpagibig.pagibig_deduction,psdwtax.wtax_deduction,psdsssloan.sssloan_deduction,
    //                                                 psdpagibigloan.pagibigloan_deduction,psdcooploan.cooploan_deduction,psdcoopcontrib.coopcontribution_deduction,
    //                                                 psdcashadvance.cashadvance_deduction/*,psdcalamityloan.calamityloan_deduction*/
    //                                      FROM pay_slip as ps
    //                                     LEFT JOIN daily_time_record as dtr
    //                                         ON ps.dtr_id=dtr.dtr_id
    //                                     LEFT JOIN employee_list as el
    //                                     ON dtr.employee_id=el.employee_id
    //                                     LEFT JOIN emp_rates_duties as erd
    //                                     ON el.employee_id=erd.employee_id
    //                                     LEFT JOIN refpayperiod as rpp
    //                                         ON dtr.pay_period_id=rpp.pay_period_id
    //                                    /* LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as allowance FROM pay_slip_other_earnings WHERE earnings_id=1
    //                                         GROUP BY earnings_id) as psoe
    //                                             ON ps.pay_slip_id=psoe.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as adjustment FROM pay_slip_other_earnings WHERE earnings_id=6
    //                                         GROUP BY earnings_id) as psoea
    //                                             ON ps.pay_slip_id=psoea.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,SUM(earnings_amount) as other_earnings FROM pay_slip_other_earnings WHERE earnings_id!=1 AND earnings_id!=6
    //                                         GROUP BY earnings_id) as psoec
    //                                             ON ps.pay_slip_id=psoec.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sss_deduction FROM pay_slip_deductions WHERE deduction_id=1) as psdsss
    //                                         ON ps.pay_slip_id=psdsss.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as philhealth_deduction FROM pay_slip_deductions WHERE deduction_id=2) as psdphil
    //                                         ON ps.pay_slip_id=psdphil.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibig_deduction FROM pay_slip_deductions WHERE deduction_id=3) as psdpagibig
    //                                         ON ps.pay_slip_id=psdpagibig.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as wtax_deduction FROM pay_slip_deductions WHERE deduction_id=4) as psdwtax
    //                                         ON ps.pay_slip_id=psdwtax.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as sssloan_deduction FROM pay_slip_deductions WHERE deduction_id=5) as psdsssloan
    //                                         ON ps.pay_slip_id=psdsssloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as pagibigloan_deduction FROM pay_slip_deductions WHERE deduction_id=6) as psdpagibigloan
    //                                         ON ps.pay_slip_id=psdpagibigloan.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cashadvance_deduction FROM pay_slip_deductions WHERE deduction_id=7) as psdcashadvance
    //                                         ON ps.pay_slip_id=psdcashadvance.pay_slip_id
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as cooploan_deduction FROM pay_slip_deductions WHERE deduction_id=8) as psdcooploan
    //                                         ON ps.pay_slip_id=psdcooploan.pay_slip_id
    //                                         /*LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as calamityloan_deduction FROM pay_slip_deductions WHERE deduction_id=12) as psdcalamityloan
    //                                         ON ps.pay_slip_id=psdcalamityloan.pay_slip_id*/
    //                                     LEFT JOIN (SELECT pay_slip_id,(deduction_amount) as coopcontribution_deduction FROM pay_slip_deductions WHERE deduction_id=9) as psdcoopcontrib
    //                                         ON ps.pay_slip_id=psdcoopcontrib.pay_slip_id  WHERE erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);
    //
    //         return $query->result();
    // }

    function getloan($filter_value,$filter_value2){
        $loan = $this->db->query('SELECT psd.deduction_regular_id,psd.deduction_amount,pay_period_end,CONCAT(emplist.first_name," ",emplist.middle_name," ",emplist.last_name) as fullname FROM employee_list as emplist
                                    LEFT JOIN daily_time_record as dtr
                                    ON emplist.employee_id=dtr.employee_id
                                    LEFT JOIN refpayperiod as rpp
                                    ON dtr.pay_period_id=rpp.pay_period_id
                                    LEFT JOIN pay_slip as ps
                                    ON dtr.dtr_id=ps.dtr_id
                                    LEFT JOIN pay_slip_deductions as psd
                                    ON ps.pay_slip_id=psd.pay_slip_id
                                    WHERE emplist.employee_id='.$filter_value.' AND deduction_id='.$filter_value2);
                                    return $loan->result();
    }

    function getloanadjustments($deduction_regular_id){
        $loanadjustments = $this->db->query('SELECT CONCAT(emp.first_name," ",emp.middle_name," ",emp.last_name) as fullname,particular,pay_slip_loans_adjustments.date_created,debit_amount,credit_amount,pay_slip_loans_adjustments.deduction_regular_id FROM pay_slip_loans_adjustments
                                LEFT JOIN new_deductions_regular
                                ON new_deductions_regular.deduction_regular_id=pay_slip_loans_adjustments.deduction_regular_id
                                LEFT JOIN employee_list as emp
                                ON emp.employee_id=new_deductions_regular.employee_id
                                WHERE new_deductions_regular.is_deleted=0 AND pay_slip_loans_adjustments.deduction_regular_id='.$deduction_regular_id);
                                    return $loanadjustments->result();
    }

    function getloanamount($filter_value,$filter_value2){
        $loan_temp = $this->db->query('SELECT new_deductions_regular.deduction_regular_id,new_deductions_regular.loan_total_amount,new_deductions_regular.deduction_total_amount,COALESCE((psd.deduction_amount),0) as psdamount,new_deductions_regular.deduction_per_pay_amount,COUNT(new_deductions_regular.deduction_regular_id) as count FROM new_deductions_regular
                                    LEFT JOIN pay_slip_deductions as psd
                                    ON new_deductions_regular.deduction_regular_id=psd.deduction_regular_id
                                    WHERE new_deductions_regular.employee_id='.$filter_value.' AND is_deleted=0 AND new_deductions_regular.deduction_id='.$filter_value2);
                                    return $loan_temp->result();
    }

     function get_13thmonthpay_wofilter($filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname, SUM(ps.reg_pay) as total_reg,erd.salary_reg_rates,SUM(erd.salary_reg_rates) as total_basic_pay,dtr.for_13th_month,SUM(dtr.for_13th_month) as total_13thmonth,
                                         SUM(ps.days_wout_pay_amt) as total_days_wout_pay_amt,  SUM(ps.minutes_late_amt) as total_minutes_late_amt,COALESCE(SUM(salary_retro.earnings_amount),0) as retro
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,(earnings_amount) as earnings_amount FROM pay_slip_other_earnings WHERE earnings_id=7) as salary_retro
                                            ON ps.pay_slip_id=salary_retro.pay_slip_id
                                        WHERE erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'
                                        GROUP BY el.first_name');

            return $query->result();
    }

    function get_13thmonthpay_year_filter($filter_value2,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname, SUM(ps.reg_pay) as total_reg,erd.salary_reg_rates,SUM(erd.salary_reg_rates) as total_basic_pay,dtr.for_13th_month,SUM(dtr.for_13th_month) as total_13thmonth,
                                         SUM(ps.days_wout_pay_amt) as total_days_wout_pay_amt,  SUM(ps.minutes_late_amt) as total_minutes_late_amt,COALESCE(SUM(salary_retro.earnings_amount),0) as retro
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,(earnings_amount) as earnings_amount FROM pay_slip_other_earnings WHERE earnings_id=7) as salary_retro
                                            ON ps.pay_slip_id=salary_retro.pay_slip_id
                                        WHERE extract(YEAR from rpp.pay_period_start)='.$filter_value2.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'
                                        GROUP BY el.first_name');

            return $query->result();
    }

    function get_13thmonthpay_employee_filter($filter_value,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname, SUM(ps.reg_pay) as total_reg,erd.salary_reg_rates,SUM(erd.salary_reg_rates) as total_basic_pay,dtr.for_13th_month,SUM(dtr.for_13th_month) as total_13thmonth,
                                         SUM(ps.days_wout_pay_amt) as total_days_wout_pay_amt,  SUM(ps.minutes_late_amt) as total_minutes_late_amt,COALESCE(SUM(salary_retro.earnings_amount),0) as retro
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,(earnings_amount) as earnings_amount FROM pay_slip_other_earnings WHERE earnings_id=7) as salary_retro
                                            ON ps.pay_slip_id=salary_retro.pay_slip_id

                                        WHERE dtr.employee_id='.$filter_value.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3);

            return $query->result();
    }

    function get_13thmonthpay($filter_value,$filter_value2,$filter_value3) {
            //1=allowance 2=salary adjustments 3=meal allowance 4=other allowance 5=commision
            $query = $this->db->query('SELECT ps.*,CONCAT(el.first_name," ",el.middle_name," ",el.last_name) as fullname, SUM(ps.reg_pay) as total_reg,erd.salary_reg_rates,SUM(erd.salary_reg_rates) as total_basic_pay,dtr.for_13th_month,SUM(dtr.for_13th_month) as total_13thmonth,
                                         SUM(ps.days_wout_pay_amt) as total_days_wout_pay_amt,  SUM(ps.minutes_late_amt) as total_minutes_late_amt,COALESCE(SUM(salary_retro.earnings_amount),0) as retro
                                         FROM pay_slip as ps
                                        LEFT JOIN daily_time_record as dtr
                                            ON ps.dtr_id=dtr.dtr_id
                                        LEFT JOIN employee_list as el
                                        ON dtr.employee_id=el.employee_id
                                        LEFT JOIN emp_rates_duties as erd
                                        ON el.employee_id=erd.employee_id
                                        LEFT JOIN refpayperiod as rpp
                                            ON dtr.pay_period_id=rpp.pay_period_id
                                        LEFT JOIN (SELECT pay_slip_id,(earnings_amount) as earnings_amount FROM pay_slip_other_earnings WHERE earnings_id=7) as salary_retro
                                            ON ps.pay_slip_id=salary_retro.pay_slip_id
                                        WHERE dtr.employee_id='.$filter_value.' AND extract(YEAR from rpp.pay_period_start)='.$filter_value2.' AND erd.active_rates_duties=1 AND erd.ref_branch_id='.$filter_value3.'
                                        GROUP BY el.first_name');

            return $query->result();
    }

    function get_employee_compensation($filter_value,$filter_value2) {

            $query = $this->db->query("SELECT m.*,SUM(m.reg_pay) as sum_regpay,SUM(m.net_pay) as sum_netpay,
                                    	SUM(m.t3rthmonth) as sum_t3rthmonth,SUM(m.total_deductions) as sum_total_deductions
                                    	FROM(SELECT (CASE
                                    	WHEN EXTRACT(MONTH FROM pay_period_start) = '1' THEN 'January'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '2' THEN 'February'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '3' THEN 'March'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '4' THEN 'April'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '5' THEN 'May'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '6' THEN 'June'
                                	    WHEN EXTRACT(MONTH FROM pay_period_start) = '7' THEN 'July'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '8' THEN 'August'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '9' THEN 'September'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '10' THEN 'October'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '11' THEN 'November'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '12' THEN 'December'
                                          END) as Month,
                                          ROUND(SUM(reg_pay),2) as reg_pay,ROUND(SUM(net_pay),2) as net_pay,
                                          ROUND(SUM(reg_pay)/12,2) as t3rthmonth,ROUND(SUM(total_deductions),2) as total_deductions
                                     FROM pay_slip
                                    LEFT JOIN daily_time_record ON
                                    daily_time_record.dtr_id=pay_slip.dtr_id
                                    LEFT JOIN refpayperiod ON
                                    refpayperiod.pay_period_id=daily_time_record.pay_period_id
                                    WHERE employee_id=".$filter_value." AND
                                    EXTRACT(YEAR FROM pay_period_start) = ".$filter_value2."
                                    GROUP BY Month) as m
                                    GROUP BY m.Month
                                      ");

            return $query->result();
    }

    function get_employee_deduction_history($filter_value,$filter_value2) {
            $query = $this->db->query("SELECT m.*,SUM(m.sss) as t_sss,SUM(m.philhealth) as t_philhealth,
                                    	SUM(m.pagibig) as t_pagibig,SUM(m.wtax) as t_wtax
                                    	FROM(
                                      SELECT (CASE
                                    	WHEN EXTRACT(MONTH FROM pay_period_start) = '1' THEN 'January'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '2' THEN 'February'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '3' THEN 'March'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '4' THEN 'April'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '5' THEN 'May'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '6' THEN 'June'
                                    	WHEN EXTRACT(MONTH FROM pay_period_start) = '7' THEN 'July'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '8' THEN 'August'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '9' THEN 'September'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '10' THEN 'October'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '11' THEN 'November'
                                      WHEN EXTRACT(MONTH FROM pay_period_start) = '12' THEN 'December'
                                          END) as Month,
                                          ROUND(SUM(tb_sss.sss),2) as sss,ROUND(SUM(tb_philhealth.philhealth),2) as philhealth,
                                          ROUND(SUM(tb_pagibig.pagibig),2) as pagibig,ROUND(SUM(tb_wtax.wtax),2) as wtax
                                     FROM pay_slip
                                    LEFT JOIN daily_time_record ON
                                    daily_time_record.dtr_id=pay_slip.dtr_id
                                    LEFT JOIN refpayperiod ON
                                    refpayperiod.pay_period_id=daily_time_record.pay_period_id
                                    LEFT JOIN
                                    (
                                    	SELECT pay_slip_id,deduction_amount as sss FROM pay_slip_deductions
                                        WHERE active_deduct = 1 AND deduction_id=1
                                    ) as tb_sss ON
                                    	tb_sss.pay_slip_id=pay_slip.pay_slip_id
                                    LEFT JOIN
                                    (
                                    	SELECT pay_slip_id,deduction_amount as philhealth FROM pay_slip_deductions
                                        WHERE active_deduct = 1 AND deduction_id=2
                                    ) as tb_philhealth ON
                                    	tb_philhealth.pay_slip_id=pay_slip.pay_slip_id
                                    LEFT JOIN
                                    (
                                    	SELECT pay_slip_id,deduction_amount as pagibig FROM pay_slip_deductions
                                        WHERE active_deduct = 1 AND deduction_id=3
                                    ) as tb_pagibig ON
                                    	tb_pagibig.pay_slip_id=pay_slip.pay_slip_id
                                    LEFT JOIN
                                    (
                                    	SELECT pay_slip_id,deduction_amount as wtax FROM pay_slip_deductions
                                        WHERE active_deduct = 1 AND deduction_id=4
                                    ) as tb_wtax ON
                                    	tb_wtax.pay_slip_id=pay_slip.pay_slip_id
                                    WHERE employee_id=".$filter_value." AND
                                    EXTRACT(YEAR FROM pay_period_start) = ".$filter_value2."
                                    GROUP BY Month) as m
                                    GROUP BY m.Month
                                      ");

            return $query->result();
    }

    function get_alpha_list($filter_value) {
            $query = $this->db->query("SELECT
                                        last_name,
                                        first_name,
                                        middle_name,
                                        tin,
                                        getwtax.wtax,
                                        reftaxcode.tax_code as tax_name,
                                        ROUND(yearly_gross,2) as yearly_gross,
                                        yearly_sss,
                                        yearly_phil,
                                        yearly_pagibig,
                                        ROUND(yearly_gross - (yearly_sss + yearly_phil + yearly_pagibig),
                                                2) AS taxable_income
                                    FROM
                                        employee_list
                                            LEFT JOIN
                                        (SELECT
                                            daily_time_record.employee_id,
                                                ROUND(SUM(pay_slip_deductions.deduction_amount), 2) AS wtax
                                        FROM
                                            daily_time_record
                                        LEFT JOIN refpayperiod ON refpayperiod.pay_period_id = daily_time_record.pay_period_id
                                        LEFT JOIN pay_slip ON pay_slip.dtr_id = daily_time_record.dtr_id
                                        LEFT JOIN pay_slip_deductions ON pay_slip_deductions.pay_slip_id = pay_slip.pay_slip_id
                                        WHERE
                                            pay_slip_deductions.deduction_id = 4
                                                AND EXTRACT(YEAR FROM refpayperiod.pay_period_start) = ".$filter_value."
                                        GROUP BY employee_id) AS getwtax ON getwtax.employee_id = employee_list.employee_id
                                            LEFT JOIN
                                        reftaxcode ON reftaxcode.tax_id = employee_list.tax_code
                                            LEFT JOIN
                                        (SELECT
                                            daily_time_record.employee_id,
                                                ROUND(SUM(pay_slip.reg_pay), 2) AS yearly_gross
                                        FROM
                                            daily_time_record
                                        LEFT JOIN refpayperiod ON refpayperiod.pay_period_id = daily_time_record.pay_period_id
                                        LEFT JOIN pay_slip ON pay_slip.dtr_id = daily_time_record.dtr_id
                                        WHERE
                                          EXTRACT(YEAR FROM refpayperiod.pay_period_start) = ".$filter_value."
                                        GROUP BY employee_id) AS gross ON gross.employee_id = employee_list.employee_id
                                            LEFT JOIN
                                        (SELECT
                                            daily_time_record.employee_id,
                                                ROUND(SUM(pay_slip_deductions.deduction_amount), 2) AS yearly_sss
                                        FROM
                                            daily_time_record
                                        LEFT JOIN refpayperiod ON refpayperiod.pay_period_id = daily_time_record.pay_period_id
                                        LEFT JOIN pay_slip ON pay_slip.dtr_id = daily_time_record.dtr_id
                                        LEFT JOIN pay_slip_deductions ON pay_slip_deductions.pay_slip_id = pay_slip.pay_slip_id
                                        WHERE
                                            pay_slip_deductions.deduction_id = 1
                                                AND EXTRACT(YEAR FROM refpayperiod.pay_period_start) = ".$filter_value."
                                        GROUP BY employee_id) AS getsss ON getsss.employee_id = employee_list.employee_id
                                            LEFT JOIN
                                        (SELECT
                                            daily_time_record.employee_id,
                                                ROUND(SUM(pay_slip_deductions.deduction_amount), 2) AS yearly_phil
                                        FROM
                                            daily_time_record
                                        LEFT JOIN refpayperiod ON refpayperiod.pay_period_id = daily_time_record.pay_period_id
                                        LEFT JOIN pay_slip ON pay_slip.dtr_id = daily_time_record.dtr_id
                                        LEFT JOIN pay_slip_deductions ON pay_slip_deductions.pay_slip_id = pay_slip.pay_slip_id
                                        WHERE
                                            pay_slip_deductions.deduction_id = 2
                                                AND EXTRACT(YEAR FROM refpayperiod.pay_period_start) = ".$filter_value."
                                        GROUP BY employee_id) AS getphil ON getphil.employee_id = employee_list.employee_id
                                            LEFT JOIN
                                        (SELECT
                                            daily_time_record.employee_id,
                                                ROUND(SUM(pay_slip_deductions.deduction_amount), 2) AS yearly_pagibig
                                        FROM
                                            daily_time_record
                                        LEFT JOIN refpayperiod ON refpayperiod.pay_period_id = daily_time_record.pay_period_id
                                        LEFT JOIN pay_slip ON pay_slip.dtr_id = daily_time_record.dtr_id
                                        LEFT JOIN pay_slip_deductions ON pay_slip_deductions.pay_slip_id = pay_slip.pay_slip_id
                                        WHERE
                                            pay_slip_deductions.deduction_id = 3
                                                AND EXTRACT(YEAR FROM refpayperiod.pay_period_start) = ".$filter_value."
                                        GROUP BY employee_id) AS getpagibig ON getpagibig.employee_id = employee_list.employee_id
                                        ORDER BY employee_list.last_name");

            return $query->result();
    }


}
?>

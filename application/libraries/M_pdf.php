<?php 
class M_pdf {
    
    function m_pdf()
    {
        $CI = & get_instance();
        log_message('Debug', 'mPDF class is loaded.');
    }
 
    function load($param="A4")
    {
        include_once APPPATH.'third_party/mpdf/mpdf.php';

        return new mPDF('c',$param);
    }
}
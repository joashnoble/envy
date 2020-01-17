<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackupRestore extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('right_backup_view') == 0 || $this->session->userdata('right_backup_view') == null) {
            redirect('../Dashboard');
        }
        $this->load->model('Employee_model');
        $this->load->model('RatesDuties_model');
        $this->load->model('Ref_Emptype_model');
        $this->load->model('RefDepartment_model');
        $this->load->model('RefPosition_model');
        $this->load->model('RefBranch_model');
        $this->load->model('Backup_model');



    }

    public function index() {
        $data['_def_css_files'] = $this->load->view('template/assets/css_files', '', TRUE);
        $data['_def_js_files'] = $this->load->view('template/assets/js_files', '', TRUE);
        $data['_switcher_settings'] = $this->load->view('template/elements/switcher', '', TRUE);
        $data['_side_bar_navigation'] = $this->load->view('template/elements/side_bar_navigation', '', TRUE);
        $data['_top_navigation'] = $this->load->view('template/elements/top_navigation', '', TRUE);
        $data['_rights'] = $this->load->view('template/elements/rights', '', TRUE);
        $data['loader'] = $this->load->view('template/elements/loader', '', TRUE);
        $data['loaderscript'] = $this->load->view('template/elements/loaderscript', '', TRUE);
        $data['title'] = 'Backup Database';

        $this->load->view('backup_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Backup_model->get_list();
                echo json_encode($response);
            break;

            case 'backup':
            $date = date("Y-m-d-h-i-s");
            $filename='hrispayroll-'.$date.'.sql';
            $path='backup/hrispayroll-'.$date.'.sql';
            $m_backup = $this->Backup_model;
            $m_backup->backup_name = $filename;
            $m_backup->backup_path = $path;
            $m_backup->backup_date = date("Y-m-d H:i:s");
            $m_backup->save();
            $response['title']='Success!';
            $response['stat']='success';
            $response['msg']='Database Backup Successful.';
            echo json_encode($response);
              // Load the DB utility class
              $this->load->dbutil();

              $prefs = array(
                      'tables'        => array(),   // Array of tables to backup.
                      'ignore'        => array(),                     // List of tables to omit from the backup
                      'format'        => 'txt',                       // gzip, zip, txt
                      'filename'      => 'hrispayroll-'.$date.'.sql',              // File name - NEEDED ONLY WITH ZIP FILES
                      'add_drop'      => TRUE,                        // Whether to add DROP TABLE statements to backup file
                      'add_insert'    => TRUE,                        // Whether to add INSERT data to backup file
                      'newline'       => "\n"                         // Newline character used in backup file
              );

              $backup = $this->dbutil->backup($prefs);


              // Load the file helper and write the file to your server
              $this->load->helper('file');
              write_file('backup/'.$filename, $backup);

              $this->load->helper('download');
              force_download($filename, $backup);


            break;

            case 'restore':
            $backup = read_file($this->input->post('backup_path', TRUE));

            $sql_clean = '';
            foreach (explode("\n", $backup) as $line){

                if(isset($line[0]) && $line[0] != "#"){
                    $sql_clean .= $line."\n";
                }

            }

            //echo $sql_clean;

            foreach (explode(";\n", $sql_clean) as $sql){
                $sql = trim($sql);
                //echo  $sql.'<br/>============<br/>';
                if($sql)
                {
                    $this->db->query($sql);
                }
            }
            $response['title']='Success!';
            $response['stat']='success';
            $response['msg']='Database Restore Successful.';
            echo json_encode($response);

            break;

            case 'test':

            break;
        }
    }











}

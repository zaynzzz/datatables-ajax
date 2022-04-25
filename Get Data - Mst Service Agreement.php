<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\Master\M_mst_service_agreement;

// $session = session();

class Mst_service_agreement extends BaseController
{
    /* START INDEX FUNCTION */
    public function index()
    {
        /* ***Using Valid Path */

        $data['actView'] = 'Master/agreement/v_mst_service_agreement';
        return view('home', $data);
    }
    /* END INDEX FUNCTION */
    /* START INPUT FUNCTION */
    public function ins_view()
    {
        /* ***Using Valid Path */

        $data['client'] = db_connect()->query('SELECT * FROM mst_client')->getResultArray();

        $data['actView'] = 'Master/Agreement/ins_mst_service_agreement';
        return view('home', $data);
    }
    /* END INPUT FUNCTION */
    /* START UPDATE FUNCTION */
    public function upd_view($doc_id)
    {
        $data['client'] = db_connect()->query('SELECT * FROM mst_client')->getResultArray();
        $mstServiceAgreement = new M_mst_service_agreement();
        $data['mstServiceAgreement'] = $mstServiceAgreement->getById($doc_id);
        /* ***Using Valid Path */
        $data['actView'] = 'Master/Agreement/upd_mst_service_agreement';
        return view('home', $data);
    }
    /* END UPDATE FUNCTION */
    /* START INSERT */



    public function insFile($id, $noDoc)
    {
        switch ($id)                 //untuk mendapatkan ID awal
        {
            case 'LM_System':
                $group_code = 'LM';
                break;
            case 'Sangati':
                $group_code = 'SG';
                break;
            case 'Elenem':
                $group_code = 'EL';
                break;
            case 'Avontourier':
                $group_code = 'AV';
                break;
            case 'Main_Outdoor':
                $group_code = 'MO';
                break;
            case 'Eruwok':
                $group_code = 'ER';
                break;
        }
        // $group_code = '';
        $dName = $noDoc;
        $name                    = $dName . '.pdf';
        $sql = db_connect()->query('SELECT * FROM mst_service_agreement')->getNumRows();
        $sql = "00" . $sql;
        $name                    = $group_code . date('Ym')  . $sql++ . '.pdf';
        $config['upload_path']   = './file_upload/agreement';
        $config['allowed_types'] = 'pdf|jpg|jpeg|png|gif|zip|rar|doc|docx|xls|xlsx|ods|odt|odp';
        $config['file_name']     = $name;
        $pdf = $this->request->getFile('file_quotation');
        // dd($namefile);
        // dd($name);
        $pdf->move('uploads/berkas/Agreement/', $name);
    }

    public function execute_insert()
    {
        $reg = $_POST['isfile'];
        $name   = '';
        $newId = '';
        $periode = date("Y") . date("m");
        $group_code = '';
        $cName = $_POST['company_name'];
        switch ($cName)                 //untuk mendapatkan ID awal
        {
            case 'LM_System':
                $group_code = 'LM';
                break;
            case 'Sangati':
                $group_code = 'SG';
                break;
            case 'Elenem':
                $group_code = 'EL';
                break;
            case 'Avontourier':
                $group_code = 'AV';
                break;
            case 'Main_Outdoor':
                $group_code = 'MO';
                break;
            case 'Eruwok':
                $group_code = 'ER';
                break;
        }
        if ($reg == 1) {
            $tahun                   = date("Y");
            $bulan                   = date("m");
            $hari                    = date("d");
            $jam                     = date("h");
            $sec                     = date("s");
            $min                     = date("i");
            $tanggal                 = $tahun . $bulan . $hari . $jam . $min;
            $name                    = $group_code . '' . $tanggal . '.pdf';
            $tanggalUpload           = $tahun . $bulan . $hari;
        }

        // $this->load->model('General_Model');
        $mstServiceAgreement = new M_mst_service_agreement();
        $tahun = date("Y");            //untuk mendapatkan ID kedua yaitu tahun
        $bulan = date("m");            //untuk mendapatkan ID ketiga yaitu bulan
        $query = db_connect()->query("SELECT IFNULL(LPAD(MAX(SUBSTRING(doc_no,10,4))+1,4,'0'),'0001') doc_no FROM mst_service_agreement WHERE SUBSTRING(doc_no,4,6) = '" . $periode . "' ")->getRow();


        $tahun = date("Y");            //untuk mendapatkan ID kedua yaitu tahun
        $bulan = date("m");            //untuk mendapatkan ID ketiga yaitu bulan
        $newId         = $group_code . $tahun . $bulan; // untuk menampilkan semua ID baru
        $sql = db_connect()->query('SELECT * FROM mst_service_agreement')->getNumRows();
        $sql = "00" . $sql + 1;
        $datalevel         = session('uId');
        $doc_id         = $newId . $sql;
        $company_name     = $_POST['company_name'];
        $client         = $_POST['client'];
        $contract_number = $_POST['contract_number'];
        $doc_no         = $newId . $sql;
        $file_info      = $_POST['file_info'];
        $amount         = str_replace(',', '', $this->request->getPost('amount'));
        // echo $amount; exit();
        $explanation    = $_POST['explanation'];
        $start_period     = $_POST['start_period'];
        $expired_date     = $_POST['expired_date'];
        $remarks         = $_POST['remarks'];
        $fileOri        = $_POST['fileOri'];
        $finishedProject        = 1;
        $is_active        = 1;
        $is_renewal     = 1;
        $data_type      = "SA";
        $picinput         = session('uId');
        if ($reg == 1) {
            $tahun                   = date("Y");
            $bulan                   = date("m");
            $hari                    = date("d");
            // $jam                     = date("h"); 
            // $sec                     = date("s"); 
            // $min                     = date("i"); 
            // $tanggal                 = $tahun.$bulan.$hari.$j;  
            $name                    = $newId . $sql . '.pdf';
            // echo $name;exit();
            $tanggalUpload           = $tahun . $bulan . $hari;
        }
        // echo $doc_id, $name; exit()
        // dd($newId);
        // dd($doc_id);
        $save                 = $mstServiceAgreement->ins($doc_id, $data_type, $company_name, $client, $contract_number, $doc_no, $file_info, $amount, $explanation, $start_period, $expired_date, $remarks, $finishedProject, $is_renewal, $fileOri, $name,  $tanggalUpload, $datalevel, $picinput);
        // dd($save);

        echo $doc_no;
        // return $doc_no;
        // $this->session->set_flashdata('cc_slide', $save);
        // redirect('Agreement/viewAgreement');
    }
    /* END INSERT */

    /* START UPDATE */
    public function upd()
    {
        $mstServiceAgreement = new M_mst_service_agreement();
        if ($_FILES['filename']['name'] == "") {
            echo "Kosong";  // No file was selected for upload, your (re)action goes here

        } else {
            echo "Ada";
            $id = $_POST['docId'];
            // $img = $_FILES['filename']['name'];
            $img = $this->request->getFile('filename');
            $imageName = $img->getName();
            // dd($imageName);
            // dd($img);
            $sql = $mstServiceAgreement->query("UPDATE mst_service_agreement SET filename='$imageName' WHERE doc_id='$id'");
            $img->move('uploads/berkas/Agreement/', $imageName);
        }
        $id = $_POST['docId'];
        $mstServiceAgreement = new M_mst_service_agreement();
        $mstServiceAgreement->setObjectById($id);
        $mstServiceAgreement->setDocId($_POST['docId']);
        $mstServiceAgreement->setDataType($_POST['dataType']);
        $mstServiceAgreement->setCompanyName($_POST['companyName']);
        $mstServiceAgreement->setDocNo($_POST['docNo']);
        $mstServiceAgreement->setClientName($_POST['clientName']);
        $mstServiceAgreement->setContractTitle($_POST['contractTitle']);
        $mstServiceAgreement->setContractNo($_POST['contractNo']);
        $mstServiceAgreement->setAmount($_POST['amount']);
        $mstServiceAgreement->setExplanation($_POST['explanation']);
        $mstServiceAgreement->setStartPeriod($_POST['startPeriod']);
        $mstServiceAgreement->setExpiredPeriod($_POST['expiredPeriod']);
        $mstServiceAgreement->setFileRemarks($_POST['fileRemarks']);
        // $mstServiceAgreement->setFileOriginal($_POST['fileOriginal']);
        $mstServiceAgreement->setFinishedProject($_POST['finishedProject']);
        // $mstServiceAgreement->setFilename($_POST['filename']);
        // $mstServiceAgreement->setRemarks($_POST['remarks']);
        // $mstServiceAgreement->setUploadTime($_POST['uploadTime']);
        // $mstServiceAgreement->setPicInput($_POST['picInput']);
        // $mstServiceAgreement->setInputTime($_POST['inputTime']);
        $mstServiceAgreement->setPicEdit(session()->get('uId'));
        $mstServiceAgreement->setEditTime(date('Y-m-d H:i:s'));
        $mstServiceAgreement->upd($id);
    }
    /* END UPDATE */
    /* START DELETE */
    public function del()
    {
        $mstServiceAgreement = new M_mst_service_agreement();
        $id = $_POST['docId'];
        $mstServiceAgreement->del($id);
    }
    /* END DELETE */
    /* START GET ALL */
    public function getAll()
    {
        $mstServiceAgreement = new M_mst_service_agreement();
        $rs = $mstServiceAgreement->getAll();
        return json_encode($rs);
    }
    /* END GET ALL */
}

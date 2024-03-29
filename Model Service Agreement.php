<?php

namespace App\Models\Master;

use CodeIgniter\Model;

class M_mst_service_agreement extends Model
{
	/* START PRIVATE VARIABLES */
	protected $DBGroup = '';
	protected $table = 'mst_service_agreement';
	protected $primaryKey = 'doc_id';
	protected $returnType = 'array';
	protected $db = null;
	protected $allowedFields = [
		"doc_id",
		"data_type",
		"company_name",
		"doc_no",
		"client_name",
		"contract_title",
		"contract_no",
		"amount",
		"explanation",
		"start_period",
		"expired_period",
		"file_remarks",
		"file_original",
		"finished_project",
		"filename",
		"remarks",
		"upload_time",
		"pic_input",
		"input_time",
		"pic_edit",
		"edit_time"
	];

	protected $docId;
	protected $dataType;
	protected $companyName;
	protected $docNo;
	protected $clientName;
	protected $contractTitle;
	protected $contractNo;
	protected $amount;
	protected $explanation;
	protected $startPeriod;
	protected $expiredPeriod;
	protected $fileRemarks;
	protected $fileOriginal;
	protected $finishedProject;
	protected $filename;
	protected $remarks;
	protected $uploadTime;
	protected $picInput;
	protected $inputTime;
	protected $picEdit;
	protected $editTime;
	/* END PRIVATE VARIABLES */
	/* START CONSTRUCTOR */
	public function __construct()
	{
		parent::__construct();
		$this->db = \Config\Database::connect($this->DBGroup, false);
		$this->docId = '';
		$this->dataType = '';
		$this->companyName = '';
		$this->docNo = '';
		$this->clientName = '';
		$this->contractTitle = '';
		$this->contractNo = '';
		$this->amount = 0;
		$this->explanation = '';
		$this->startPeriod = '0000-00-00';
		$this->expiredPeriod = '0000-00-00';
		$this->fileRemarks = '';
		$this->fileOriginal = 0;
		$this->finishedProject = 0;
		$this->filename = '';
		$this->remarks = '';
		$this->uploadTime = '0000-00-00';
		$this->picInput = '';
		$this->inputTime = '1700-01-01 00:00:00';
		$this->picEdit = '';
		$this->editTime = '1700-01-01 00:00:00';
	}
	/* END CONSTRUCTOR */

	/* START GENERATE SETTER AND GETTER */
	public function setDocId($aDocId)
	{
		$this->docId = $aDocId;
	}
	public function getDocId()
	{
		return $this->docId;
	}
	public function setDataType($aDataType)
	{
		$this->dataType = $aDataType;
	}
	public function getDataType()
	{
		return $this->dataType;
	}
	public function setCompanyName($aCompanyName)
	{
		$this->companyName = $aCompanyName;
	}
	public function getCompanyName()
	{
		return $this->companyName;
	}
	public function setDocNo($aDocNo)
	{
		$this->docNo = $aDocNo;
	}
	public function getDocNo()
	{
		return $this->docNo;
	}
	public function setClientName($aClientName)
	{
		$this->clientName = $aClientName;
	}
	public function getClientName()
	{
		return $this->clientName;
	}
	public function setContractTitle($aContractTitle)
	{
		$this->contractTitle = $aContractTitle;
	}
	public function getContractTitle()
	{
		return $this->contractTitle;
	}
	public function setContractNo($aContractNo)
	{
		$this->contractNo = $aContractNo;
	}
	public function getContractNo()
	{
		return $this->contractNo;
	}
	public function setAmount($aAmount)
	{
		$this->amount = $aAmount;
	}
	public function getAmount()
	{
		return $this->amount;
	}
	public function setExplanation($aExplanation)
	{
		$this->explanation = $aExplanation;
	}
	public function getExplanation()
	{
		return $this->explanation;
	}
	public function setStartPeriod($aStartPeriod)
	{
		$this->startPeriod = $aStartPeriod;
	}
	public function getStartPeriod()
	{
		return $this->startPeriod;
	}
	public function setExpiredPeriod($aExpiredPeriod)
	{
		$this->expiredPeriod = $aExpiredPeriod;
	}
	public function getExpiredPeriod()
	{
		return $this->expiredPeriod;
	}
	public function setFileRemarks($aFileRemarks)
	{
		$this->fileRemarks = $aFileRemarks;
	}
	public function getFileRemarks()
	{
		return $this->fileRemarks;
	}
	public function setFileOriginal($aFileOriginal)
	{
		$this->fileOriginal = $aFileOriginal;
	}
	public function getFileOriginal()
	{
		return $this->fileOriginal;
	}
	public function setFinishedProject($aFinishedProject)
	{
		$this->finishedProject = $aFinishedProject;
	}
	public function getFinishedProject()
	{
		return $this->finishedProject;
	}
	public function setFilename($aFilename)
	{
		$this->filename = $aFilename;
	}
	public function getFilename()
	{
		return $this->filename;
	}
	public function setRemarks($aRemarks)
	{
		$this->remarks = $aRemarks;
	}
	public function getRemarks()
	{
		return $this->remarks;
	}
	public function setUploadTime($aUploadTime)
	{
		$this->uploadTime = $aUploadTime;
	}
	public function getUploadTime()
	{
		return $this->uploadTime;
	}
	public function setPicInput($aPicInput)
	{
		$this->picInput = $aPicInput;
	}
	public function getPicInput()
	{
		return $this->picInput;
	}
	public function setInputTime($aInputTime)
	{
		$this->inputTime = $aInputTime;
	}
	public function getInputTime()
	{
		return $this->inputTime;
	}
	public function setPicEdit($aPicEdit)
	{
		$this->picEdit = $aPicEdit;
	}
	public function getPicEdit()
	{
		return $this->picEdit;
	}
	public function setEditTime($aEditTime)
	{
		$this->editTime = $aEditTime;
	}
	public function getEditTime()
	{
		return $this->editTime;
	}
	/* END GENERATE SETTER AND GETTER */
	/* START INSERT */
	public function ins($doc_id, $data_type, $company_name, $client, $contract_number, $doc_no, $file_info, $amount, $explanation, $start_period, $expired_date, $remarks, $finishedProject, $is_renewal, $fileOri, $name, $tanggalUpload, $datalevel, $picinput)
	{
		$data = [

			'doc_id' => $doc_id,
			'data_type' => $data_type,
			'company_name' => $company_name,
			'doc_no' => $doc_no,
			'client_name' => $client,
			'contract_title' => $file_info,
			'contract_no' => $contract_number,
			'amount' => $amount,
			'explanation' => $explanation,
			'start_period' => $start_period,
			'expired_period' => $expired_date,
			'file_remarks' => $remarks,
			'filename' => $name,
			'upload_time' => $tanggalUpload,
			'pic_input' => $picinput,
			'input_time' => time(),
			'file_original' => $fileOri,

		];
		// dd($name);
		// $name->move('uploads/berkas/', $name);

		// dd($contract_number);
		echo $this->insert($data);
		exit;
		return $doc_id;
	}

	public function insss()
	{
		if ($this->docId == "" || $this->docId == NULL) {
			$this->docId = '';
		}
		if ($this->dataType == "" || $this->dataType == NULL) {
			$this->dataType = '';
		}
		if ($this->companyName == "" || $this->companyName == NULL) {
			$this->companyName = '';
		}
		if ($this->docNo == "" || $this->docNo == NULL) {
			$this->docNo = '';
		}
		if ($this->clientName == "" || $this->clientName == NULL) {
			$this->clientName = '';
		}
		if ($this->contractTitle == "" || $this->contractTitle == NULL) {
			$this->contractTitle = '';
		}
		if ($this->contractNo == "" || $this->contractNo == NULL) {
			$this->contractNo = '';
		}
		if ($this->amount == "" || $this->amount == NULL) {
			$this->amount = 0;
		}
		if ($this->explanation == "" || $this->explanation == NULL) {
			$this->explanation = '';
		}
		if ($this->startPeriod == "" || $this->startPeriod == NULL) {
			$this->startPeriod = '1700-01-01';
		}
		if ($this->expiredPeriod == "" || $this->expiredPeriod == NULL) {
			$this->expiredPeriod = '1700-01-01';
		}
		if ($this->fileRemarks == "" || $this->fileRemarks == NULL) {
			$this->fileRemarks = '';
		}
		if ($this->fileOriginal == "" || $this->fileOriginal == NULL) {
			$this->fileOriginal = 0;
		}
		if ($this->finishedProject == "" || $this->finishedProject == NULL) {
			$this->finishedProject = 0;
		}
		if ($this->filename == "" || $this->filename == NULL) {
			$this->filename = '';
		}
		if ($this->remarks == "" || $this->remarks == NULL) {
			$this->remarks = '';
		}
		if ($this->uploadTime == "" || $this->uploadTime == NULL) {
			$this->uploadTime = '1700-01-01';
		}
		if ($this->picInput == "" || $this->picInput == NULL) {
			$this->picInput = '';
		}
		if ($this->inputTime == "" || $this->inputTime == NULL) {
			$this->inputTime = '1700-01-01 00:00:00';
		}
		if ($this->picEdit == "" || $this->picEdit == NULL) {
			$this->picEdit = '';
		}
		if ($this->editTime == "" || $this->editTime == NULL) {
			$this->editTime = '1700-01-01 00:00:00';
		}

		$stQuery  = "INSERT INTO " . $this->table . " ";
		$stQuery .= "( ";
		$stQuery .=   "doc_id,";
		$stQuery .=   "data_type,";
		$stQuery .=   "company_name,";
		$stQuery .=   "doc_no,";
		$stQuery .=   "client_name,";
		$stQuery .=   "contract_title,";
		$stQuery .=   "contract_no,";
		$stQuery .=   "amount,";
		$stQuery .=   "explanation,";
		$stQuery .=   "start_period,";
		$stQuery .=   "expired_period,";
		$stQuery .=   "file_remarks,";
		$stQuery .=   "file_original,";
		$stQuery .=   "finished_project,";
		$stQuery .=   "filename,";
		$stQuery .=   "remarks,";
		$stQuery .=   "upload_time,";
		$stQuery .=   "pic_input,";
		$stQuery .=   "input_time,";
		$stQuery .=   "pic_edit,";
		$stQuery .=   "edit_time";
		$stQuery .= ") ";
		$stQuery .= "VALUES ";
		$stQuery .= "( ";
		$stQuery .=   "'" . $this->db->escapeString($this->docId) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->dataType) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->companyName) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->docNo) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->clientName) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->contractTitle) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->contractNo) . "',";
		$stQuery .=   " " . $this->amount . ",";
		$stQuery .=   "'" . $this->db->escapeString($this->explanation) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->startPeriod) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->expiredPeriod) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->fileRemarks) . "',";
		$stQuery .=   " " . $this->fileOriginal . ",";
		$stQuery .=   " " . $this->finishedProject . ",";
		$stQuery .=   "'" . $this->db->escapeString($this->filename) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->remarks) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->uploadTime) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->picInput) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->inputTime) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->picEdit) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->editTime) . "'";
		$stQuery .= "); ";
		$this->db->query($stQuery);
	}
	/* END INSERT */
	/* START QUERY INSERT */
	public function getInsQuery()
	{
		if ($this->docId == "" || $this->docId == NULL) {
			$this->docId = '';
		}
		if ($this->dataType == "" || $this->dataType == NULL) {
			$this->dataType = '';
		}
		if ($this->companyName == "" || $this->companyName == NULL) {
			$this->companyName = '';
		}
		if ($this->docNo == "" || $this->docNo == NULL) {
			$this->docNo = '';
		}
		if ($this->clientName == "" || $this->clientName == NULL) {
			$this->clientName = '';
		}
		if ($this->contractTitle == "" || $this->contractTitle == NULL) {
			$this->contractTitle = '';
		}
		if ($this->contractNo == "" || $this->contractNo == NULL) {
			$this->contractNo = '';
		}
		if ($this->amount == "" || $this->amount == NULL) {
			$this->amount = 0;
		}
		if ($this->explanation == "" || $this->explanation == NULL) {
			$this->explanation = '';
		}
		if ($this->startPeriod == "" || $this->startPeriod == NULL) {
			$this->startPeriod = '1700-01-01';
		}
		if ($this->expiredPeriod == "" || $this->expiredPeriod == NULL) {
			$this->expiredPeriod = '1700-01-01';
		}
		if ($this->fileRemarks == "" || $this->fileRemarks == NULL) {
			$this->fileRemarks = '';
		}
		if ($this->fileOriginal == "" || $this->fileOriginal == NULL) {
			$this->fileOriginal = 0;
		}
		if ($this->finishedProject == "" || $this->finishedProject == NULL) {
			$this->finishedProject = 0;
		}
		if ($this->filename == "" || $this->filename == NULL) {
			$this->filename = '';
		}
		if ($this->remarks == "" || $this->remarks == NULL) {
			$this->remarks = '';
		}
		if ($this->uploadTime == "" || $this->uploadTime == NULL) {
			$this->uploadTime = '1700-01-01';
		}
		if ($this->picInput == "" || $this->picInput == NULL) {
			$this->picInput = '';
		}
		if ($this->inputTime == "" || $this->inputTime == NULL) {
			$this->inputTime = '1700-01-01 00:00:00';
		}
		if ($this->picEdit == "" || $this->picEdit == NULL) {
			$this->picEdit = '';
		}
		if ($this->editTime == "" || $this->editTime == NULL) {
			$this->editTime = '1700-01-01 00:00:00';
		}

		$stQuery  = "INSERT INTO " . $this->table . " ";
		$stQuery .= "( ";
		$stQuery .=   "doc_id,";
		$stQuery .=   "data_type,";
		$stQuery .=   "company_name,";
		$stQuery .=   "doc_no,";
		$stQuery .=   "client_name,";
		$stQuery .=   "contract_title,";
		$stQuery .=   "contract_no,";
		$stQuery .=   "amount,";
		$stQuery .=   "explanation,";
		$stQuery .=   "start_period,";
		$stQuery .=   "expired_period,";
		$stQuery .=   "file_remarks,";
		$stQuery .=   "file_original,";
		$stQuery .=   "finished_project,";
		$stQuery .=   "filename,";
		$stQuery .=   "remarks,";
		$stQuery .=   "upload_time,";
		$stQuery .=   "pic_input,";
		$stQuery .=   "input_time,";
		$stQuery .=   "pic_edit,";
		$stQuery .=   "edit_time";
		$stQuery .= ") ";
		$stQuery .= "VALUES ";
		$stQuery .= "( ";
		$stQuery .=   "'" . $this->db->escapeString($this->docId) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->dataType) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->companyName) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->docNo) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->clientName) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->contractTitle) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->contractNo) . "',";
		$stQuery .=   " " . $this->amount . ",";
		$stQuery .=   "'" . $this->db->escapeString($this->explanation) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->startPeriod) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->expiredPeriod) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->fileRemarks) . "',";
		$stQuery .=   " " . $this->fileOriginal . ",";
		$stQuery .=   " " . $this->finishedProject . ",";
		$stQuery .=   "'" . $this->db->escapeString($this->filename) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->remarks) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->uploadTime) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->picInput) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->inputTime) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->picEdit) . "',";
		$stQuery .=   "'" . $this->db->escapeString($this->editTime) . "'";
		$stQuery .= "); ";
		return $stQuery;
	}
	/* END QUERY INSERT */
	/* START UPDATE */
	public function upd($id)
	{
		if ($this->docId == "" || $this->docId == NULL) {
			$this->docId = '';
		}
		if ($this->dataType == "" || $this->dataType == NULL) {
			$this->dataType = '';
		}
		if ($this->companyName == "" || $this->companyName == NULL) {
			$this->companyName = '';
		}
		if ($this->docNo == "" || $this->docNo == NULL) {
			$this->docNo = '';
		}
		if ($this->clientName == "" || $this->clientName == NULL) {
			$this->clientName = '';
		}
		if ($this->contractTitle == "" || $this->contractTitle == NULL) {
			$this->contractTitle = '';
		}
		if ($this->contractNo == "" || $this->contractNo == NULL) {
			$this->contractNo = '';
		}
		if ($this->amount == "" || $this->amount == NULL) {
			$this->amount = 0;
		}
		if ($this->explanation == "" || $this->explanation == NULL) {
			$this->explanation = '';
		}
		if ($this->startPeriod == "" || $this->startPeriod == NULL) {
			$this->startPeriod = '1700-01-01';
		}
		if ($this->expiredPeriod == "" || $this->expiredPeriod == NULL) {
			$this->expiredPeriod = '1700-01-01';
		}
		if ($this->fileRemarks == "" || $this->fileRemarks == NULL) {
			$this->fileRemarks = '';
		}
		if ($this->fileOriginal == "" || $this->fileOriginal == NULL) {
			$this->fileOriginal = 0;
		}
		if ($this->finishedProject == "" || $this->finishedProject == NULL) {
			$this->finishedProject = 0;
		}
		if ($this->filename == "" || $this->filename == NULL) {
			$this->filename = '';
		}
		if ($this->remarks == "" || $this->remarks == NULL) {
			$this->remarks = '';
		}
		if ($this->uploadTime == "" || $this->uploadTime == NULL) {
			$this->uploadTime = '1700-01-01';
		}
		if ($this->picInput == "" || $this->picInput == NULL) {
			$this->picInput = '';
		}
		if ($this->inputTime == "" || $this->inputTime == NULL) {
			$this->inputTime = '1700-01-01 00:00:00';
		}
		if ($this->picEdit == "" || $this->picEdit == NULL) {
			$this->picEdit = '';
		}
		if ($this->editTime == "" || $this->editTime == NULL) {
			$this->editTime = '1700-01-01 00:00:00';
		}

		$stQuery  = "UPDATE " . $this->table . " ";
		$stQuery .= "SET ";
		$stQuery .=   "doc_id ='" . $this->db->escapeString($this->docId) . "', ";
		$stQuery .=   "data_type ='" . $this->db->escapeString($this->dataType) . "', ";
		$stQuery .=   "company_name ='" . $this->db->escapeString($this->companyName) . "', ";
		$stQuery .=   "doc_no ='" . $this->db->escapeString($this->docNo) . "', ";
		$stQuery .=   "client_name ='" . $this->db->escapeString($this->clientName) . "', ";
		$stQuery .=   "contract_title ='" . $this->db->escapeString($this->contractTitle) . "', ";
		$stQuery .=   "contract_no ='" . $this->db->escapeString($this->contractNo) . "', ";
		$stQuery .=   'amount =' . $this->amount . ',';
		$stQuery .=   "explanation ='" . $this->db->escapeString($this->explanation) . "', ";
		$stQuery .=   "start_period ='" . $this->db->escapeString($this->startPeriod) . "', ";
		$stQuery .=   "expired_period ='" . $this->db->escapeString($this->expiredPeriod) . "', ";
		$stQuery .=   "file_remarks ='" . $this->db->escapeString($this->fileRemarks) . "', ";
		$stQuery .=   'file_original =' . $this->fileOriginal . ',';
		$stQuery .=   'finished_project =' . $this->finishedProject . ',';
		$stQuery .=   "filename ='" . $this->db->escapeString($this->filename) . "', ";
		$stQuery .=   "remarks ='" . $this->db->escapeString($this->remarks) . "', ";
		$stQuery .=   "upload_time ='" . $this->db->escapeString($this->uploadTime) . "', ";
		$stQuery .=   "pic_input ='" . $this->db->escapeString($this->picInput) . "', ";
		$stQuery .=   "input_time ='" . $this->db->escapeString($this->inputTime) . "', ";
		$stQuery .=   "pic_edit ='" . $this->db->escapeString($this->picEdit) . "', ";
		$stQuery .=   "edit_time ='" . $this->db->escapeString($this->editTime) . "' ";
		$stQuery .= 'WHERE ';
		$stQuery .=   "doc_id = '" . $this->db->escapeString($id) . "'";
		$this->db->query($stQuery);
	}
	/* END UPDATE */
	/* START QUERY UPDATE */
	public function getUpdQuery($id)
	{
		if ($this->docId == "" || $this->docId == NULL) {
			$this->docId = '';
		}
		if ($this->dataType == "" || $this->dataType == NULL) {
			$this->dataType = '';
		}
		if ($this->companyName == "" || $this->companyName == NULL) {
			$this->companyName = '';
		}
		if ($this->docNo == "" || $this->docNo == NULL) {
			$this->docNo = '';
		}
		if ($this->clientName == "" || $this->clientName == NULL) {
			$this->clientName = '';
		}
		if ($this->contractTitle == "" || $this->contractTitle == NULL) {
			$this->contractTitle = '';
		}
		if ($this->contractNo == "" || $this->contractNo == NULL) {
			$this->contractNo = '';
		}
		if ($this->amount == "" || $this->amount == NULL) {
			$this->amount = 0;
		}
		if ($this->explanation == "" || $this->explanation == NULL) {
			$this->explanation = '';
		}
		if ($this->startPeriod == "" || $this->startPeriod == NULL) {
			$this->startPeriod = '1700-01-01';
		}
		if ($this->expiredPeriod == "" || $this->expiredPeriod == NULL) {
			$this->expiredPeriod = '1700-01-01';
		}
		if ($this->fileRemarks == "" || $this->fileRemarks == NULL) {
			$this->fileRemarks = '';
		}
		if ($this->fileOriginal == "" || $this->fileOriginal == NULL) {
			$this->fileOriginal = 0;
		}
		if ($this->finishedProject == "" || $this->finishedProject == NULL) {
			$this->finishedProject = 0;
		}
		if ($this->filename == "" || $this->filename == NULL) {
			$this->filename = '';
		}
		if ($this->remarks == "" || $this->remarks == NULL) {
			$this->remarks = '';
		}
		if ($this->uploadTime == "" || $this->uploadTime == NULL) {
			$this->uploadTime = '1700-01-01';
		}
		if ($this->picInput == "" || $this->picInput == NULL) {
			$this->picInput = '';
		}
		if ($this->inputTime == "" || $this->inputTime == NULL) {
			$this->inputTime = '1700-01-01 00:00:00';
		}
		if ($this->picEdit == "" || $this->picEdit == NULL) {
			$this->picEdit = '';
		}
		if ($this->editTime == "" || $this->editTime == NULL) {
			$this->editTime = '1700-01-01 00:00:00';
		}

		$stQuery  = "UPDATE " . $this->table . " ";
		$stQuery .= "SET ";
		$stQuery .=   "doc_id ='" . $this->db->escapeString($this->docId) . "', ";
		$stQuery .=   "data_type ='" . $this->db->escapeString($this->dataType) . "', ";
		$stQuery .=   "company_name ='" . $this->db->escapeString($this->companyName) . "', ";
		$stQuery .=   "doc_no ='" . $this->db->escapeString($this->docNo) . "', ";
		$stQuery .=   "client_name ='" . $this->db->escapeString($this->clientName) . "', ";
		$stQuery .=   "contract_title ='" . $this->db->escapeString($this->contractTitle) . "', ";
		$stQuery .=   "contract_no ='" . $this->db->escapeString($this->contractNo) . "', ";
		$stQuery .=   'amount =' . $this->amount . ',';
		$stQuery .=   "explanation ='" . $this->db->escapeString($this->explanation) . "', ";
		$stQuery .=   "start_period ='" . $this->db->escapeString($this->startPeriod) . "', ";
		$stQuery .=   "expired_period ='" . $this->db->escapeString($this->expiredPeriod) . "', ";
		$stQuery .=   "file_remarks ='" . $this->db->escapeString($this->fileRemarks) . "', ";
		$stQuery .=   'file_original =' . $this->fileOriginal . ',';
		$stQuery .=   'finished_project =' . $this->finishedProject . ',';
		$stQuery .=   "filename ='" . $this->db->escapeString($this->filename) . "', ";
		$stQuery .=   "remarks ='" . $this->db->escapeString($this->remarks) . "', ";
		$stQuery .=   "upload_time ='" . $this->db->escapeString($this->uploadTime) . "', ";
		$stQuery .=   "pic_input ='" . $this->db->escapeString($this->picInput) . "', ";
		$stQuery .=   "input_time ='" . $this->db->escapeString($this->inputTime) . "', ";
		$stQuery .=   "pic_edit ='" . $this->db->escapeString($this->picEdit) . "', ";
		$stQuery .=   "edit_time ='" . $this->db->escapeString($this->editTime) . "' ";
		$stQuery .= 'WHERE ';
		$stQuery .=   "doc_id = '" . $this->db->escapeString($id) . "'";
		return $stQuery;
	}
	/* END QUERY UPDATE */
	/* START DELETE */
	public function del($id)
	{
		$db = db_connect();
		$stQuery  = "DELETE FROM " . $this->table . " ";
		$stQuery .= "WHERE doc_id = '" . $this->db->escapeString($id) . "'";
		$db->query($stQuery);
	}
	/* END DELETE */
	/* START GET ALL DATA */
	public function getAll()
	{
		$stQuery  = "SELECT * FROM " . $this->table . " ";
		$query  = $this->db->query($stQuery);
		$arrayList = $query->getResultArray();
		return $arrayList;
	}
	/* END GET ALL DATA */
	/* START GET DATA BY ID */
	public function getById($id)
	{
		$stQuery  = "SELECT * FROM " . $this->table . " ";
		$stQuery .= "WHERE doc_id = '" . $this->db->escapeString($id) . "'";
		$query  = $this->db->query($stQuery);
		$arrayRow = $query->getRowArray();
		return $arrayRow;
	}
	/* END GET DATA BY ID */
	/* START GET OBJECT DATA BY ID */
	public function setObjectById($id)
	{
		$stQuery  = "SELECT * FROM " . $this->table . " ";
		$stQuery .= "WHERE doc_id = '" . $this->db->escapeString($id) . "'";
		$query  = $this->db->query($stQuery);
		$arrayRow = $query->getRowArray();
		$this->docId = $arrayRow['doc_id'];
		$this->dataType = $arrayRow['data_type'];
		$this->companyName = $arrayRow['company_name'];
		$this->docNo = $arrayRow['doc_no'];
		$this->clientName = $arrayRow['client_name'];
		$this->contractTitle = $arrayRow['contract_title'];
		$this->contractNo = $arrayRow['contract_no'];
		$this->amount = $arrayRow['amount'];
		$this->explanation = $arrayRow['explanation'];
		$this->startPeriod = $arrayRow['start_period'];
		$this->expiredPeriod = $arrayRow['expired_period'];
		$this->fileRemarks = $arrayRow['file_remarks'];
		$this->fileOriginal = $arrayRow['file_original'];
		$this->finishedProject = $arrayRow['finished_project'];
		$this->filename = $arrayRow['filename'];
		$this->remarks = $arrayRow['remarks'];
		$this->uploadTime = $arrayRow['upload_time'];
		$this->picInput = $arrayRow['pic_input'];
		$this->inputTime = $arrayRow['input_time'];
		$this->picEdit = $arrayRow['pic_edit'];
		$this->editTime = $arrayRow['edit_time'];
	}
	/* END GET OBJECT DATA BY ID */
	/* START OF RESET VALUES */
	public function resetValues()
	{
		$this->docId = '';
		$this->dataType = '';
		$this->companyName = '';
		$this->docNo = '';
		$this->clientName = '';
		$this->contractTitle = '';
		$this->contractNo = '';
		$this->amount = 0;
		$this->explanation = '';
		$this->startPeriod = '1700-01-01';
		$this->expiredPeriod = '1700-01-01';
		$this->fileRemarks = '';
		$this->fileOriginal = 0;
		$this->finishedProject = 0;
		$this->filename = '';
		$this->remarks = '';
		$this->uploadTime = '1700-01-01';
		$this->picInput = '';
		$this->inputTime = '1700-01-01 00:00:00';
		$this->picEdit = '';
		$this->editTime = '1700-01-01 00:00:00';
	}
	/* END OF RESET VALUES */
	/* START OF ID GENERATOR */
	public function generateId($columnId)
	{
		$strSql = "SELECT ";
		$strSql .= " CASE WHEN id_year = curr_ym THEN ";
		$strSql .= "   CONCAT(id_year,LPAD(CAST( (CAST(RIGHT(fi,5) AS INTEGER)+1) AS CHAR),5,'0')) ";
		$strSql .= " ELSE ";
		$strSql .= "   CONCAT(curr_ym, '00001') ";
		$strSql .= " END AS doc_id ";
		$strSql .= "FROM ";
		$strSql .= " (SELECT ";
		$strSql .= "   MAX(" . $columnId . ") fi,";
		$strSql .= "   LEFT(" . $columnId . ",4) id_year,";
		$strSql .= "   current_date dt,";
		$strSql .= "   RIGHT(" . $columnId . ", 5) curr_id,";
		$strSql .= "   CONCAT(";
		$strSql .= "   RIGHT(CAST(DATE_FORMAT(NOW(), '%y') AS CHAR),2), ";
		$strSql .= "   LPAD(";
		$strSql .= "      CAST(DATE_FORMAT(NOW(), '%m') AS CHAR),2,'0'";
		$strSql .= "    )";
		$strSql .= "   ) curr_ym,";
		$strSql .= "   RIGHT(CAST(DATE_FORMAT(NOW(), '%y') AS CHAR),2) tYear,";
		$strSql .= "   CAST(DATE_FORMAT(NOW(), '%m') AS CHAR) tMonth ";
		$strSql .= " FROM ";
		$strSql .= "   " . $this->table . " ";
		$strSql .= " GROUP BY " . $columnId . ") a ";
		$strSql .= " ORDER BY doc_id DESC LIMIT 1 ";
		$query  = $this->db->query($strSql);
		$arrayRow = $query->getRowArray();
		if (!isset($arrayRow)) {
			$curYM = date('ym');
			$arrayRow['doc_id'] = $curYM . '00001';
		}
		return $arrayRow;
	}

	public function get_newid($newId)
	{
		$tambah = (int)$newId + 1;
		if (strlen($tambah) == 1) {
			$new = $newId . "000" . $tambah;
		} else if (strlen($tambah) == 2) {
			$new = $newId . "00" . $tambah;
		} else if (strlen($tambah) == 3) {
			$new = $newId . "0" . $tambah;
		} else if (strlen($tambah) == 4) {
			$new = $newId . $tambah;
		}
		return $new;
	}	/* END OF ID GENERATOR */
	public function get_idmax()
	{
		$this->table('mst_service_agreement');
		// $this->from('');
		$query = $this->get();
		return $query;
	}
}

<?php 
class MY_Model extends CI_Model {
	private $_queryLog = array();
	private $_insertLog = array();
	private $_msg = null;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function setLogQuery($name = NULL){
		$this->_queryLog[$name] = $this->db->last_query();
	}
	
	public function getLogQuery($name = NULL){
		return (isset($this->_queryLog[$name]))? $this->_queryLog[$name] : $this->_queryLog;
	}
	
	public function setLogQueryInsert($table_name = ''){
		$this->_insertLog[$table_name] = $this->db->get_compiled_insert($table_name);
	}
	
	public function getLogQueryInsert($table_name = ''){
		return (isset($this->_insertLog[$table_name]))? $this->_insertLog[$table_name] : $this->_insertLog;
	}
	
	public function setMessage($msg = null){
		$this->_msg = $msg;
	}
	
	public function getMessage(){
		return $this->_msg;
	}
}
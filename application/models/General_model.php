<?php


class General_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function insert($table,$data){
        $this->db->insert($table,$data);
        return TRUE;
    }
    public function getTableData($table_name){
        $result = $this->db->get($table_name);
        return $result;
    }
    public function getEditData($table_name,$id){
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('id',$id);
        $result = $this->db->get()->row();
        return $result;
    }
    public function updateTableData($table_name,$field,$id,$data){
        $this->db->where($field,$id);
        $this->db->update($table_name,$data);
        return TRUE;
    }
    public function deleteData($table_name,$id){
        $this->db->where('id',$id);
        $this->db->delete($table_name);
        $result = $this->db->get($table_name);
        return $result;
    }
}

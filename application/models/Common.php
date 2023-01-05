<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model
{
    public function getAllData($table) {
        return $this->db->get($table)->result();
    }

    public function getById($table, $id) {
        $this->db->from($table);
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function getByFeild($table, $feild, $value) {
        $this->db->from($table);
        $this->db->where($feild, $value);
        return $this->db->get()->result();
    }

    public function getByFeildSingle($table, $feild, $value) {
        $this->db->from($table);
        $this->db->where($feild, $value);
        return $this->db->get()->row();
    }

    public function delete($table, $id) {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }

    public function deleteByFeild($table, $feild, $value) {
        $this->db->where($feild, $value);
        $this->db->delete($table);
    }

    public function update($table, $id, $data) {
        $this->db->where('id', $id);
        $this->db->update( $table, $data);
    }

    public function updateMultipleCondition($table, $conditions, $data) {
        $conditionCount=count($conditions);
        $keys=array_keys($conditions);
        $values=array_values($conditions);
        
        $i=0;
        while($i<$conditionCount){
            $this->db->where($keys[$i], $values[$i]);
            $i++;
        }
        
        $this->db->update( $table, $data);
    }

    function upload($inputname) {
		$date = date('d-m-Y');
		$path='./upload/'.$date;
		$db_path='upload/'.$date.'/';

		if (!is_dir('upload/'.$date)) {
			mkdir('./upload/' . $date, 0777, TRUE);
		}

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = False;

		$this->upload->initialize($config);
		$this->upload->do_upload($inputname);

		$data_upload_files = $this->upload->data();

		if($data_upload_files['file_name']){
			return $db_path.$data_upload_files['file_name'];
		}
		else{
			return false;
		}		
    }

    public function getCount($table,$feild,$value) {
        $this->db->select('id');
        $this->db->from($table);
        $this->db->where($feild, $value);    
        return $this->db->count_all_results();
    }

    public function webTemplate($view, $data=null){
        if($this->session->userdata ( 'userId' )){
            $userId = $this->session->userdata ( 'userId' );
            $basicInfo=$this->getById('studio', $userId);        
            $data['basicInfo']=$basicInfo;
        }
                
        $this->load->view($view, $data);
    }

    public function adminTemplate($view, $data=null){
        
        $this->load->view($view, $data);
    }

}
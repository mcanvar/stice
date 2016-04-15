<?php
/*
	* Author: mevlutcanvar@gmail.com
*/
?>
<?php
class Student_Model extends CI_Model {

	function __construct() {
         parent::__construct();
  }

  public function list_students()
  {
    if( $query = $this->db->get("student") )
      return $query->result();
  }

  public function get_student($id)
  {
    $this->db->where('id', $id);
    if( $query = $this->db->get("student") )
      return $query->result();
  }

  public function insert_student($data)
  {
    if ($this->db->insert('student', $data))
      return true;
  }

  public function delete_student($id)
  {
		$this->db->where('id', $id);
    if ( $this->db->delete('student'))
      return true;
  }

  public function update_student($data)
  {
    $this->db->where('id', $data['id']);
    if($this->db->update('student', $data))
      return true;
  }
}

<?php
class mainmodel extends CI_model
{

	public function encpass_fn($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);
	}
	public function regist($a)
	{
		$this->db->insert("user",$a);
		
	}
	
	public function encpassfn($pass)
	{
		return password_hash($pass,PASSWORD_BCRYPT);	
	}


	public function ad_regist($a)
	{
		$this->db->insert("user",$a);
		
	}

	public function user_status()
	{
		$this->db->select('*');
		$qry=$this->db->where('user_type','0');
		$qry=$this->db->get("user");
		return $qry;

	}

	public function approve($id)
	{
     $this->db->set('status','1');
     $qry=$this->db->where('id',$id);
     $qry=$this->db->update("user");
     return $qry;
	}

	public function reject($id)
	{
	$this->db->set('status','0');
	$qry=$this->db->where('id',$id);
	$qry=$this->db->update("user");
     return $qry;
	}
	public function select_user($uname,$pass)
	{
		$this->db->select('password');
		$this->db->from("user");
		$this->db->where("uname",$uname);
		$qry=$this->db->get()->row('password');
		return $this->verify_userpass($pass,$qry);

	}
	public function verify_userpass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function get_user_id($uname)
	{
		$this->db->select('id');
		$this->db->from("user");
		$this->db->where("uname",$uname);
		return $this->db->get()->row('user');
	}
	public function get_user($id)
	{
		$this->db->select('*');
		$this->db->from("user");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
}
?>
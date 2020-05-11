<?php
class dienthoai_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function find($string)
	{
		$result=$this->db->query($string);
		return $result->result_array();
	}
/*Dienthoai**************************************************************************************************************************/
	public function alldienthoai()
	{
		return $this->db->get('dienthoai')->result_array();
	}
	public function dienthoai3()
	{
		$this->db->order_by("Ngay","desc");
		$this->db->limit(3,0);
		return $this->db->get('dienthoai')->result_array();
	}
	public function finddienthoai($id)
	{
		$this->db->where('MaDienThoai',$id);
		return $this->db->get('dienthoai')->row_array();
	}
	public function countdienthoai()
	{
		$query = $this->db->query("SELECT * FROM dienthoai");
       return $query;
	}
	public function insertdienthoai($dm=array())
	{
		$this->db->insert('dienthoai',$dm);
	}
	public function deletedienthoai($id)
	{
		$this->db->where("MaDienThoai",$id);
		$this->db->delete('dienthoai');
	}
/*LoaiDienThoai**************************************************************************************************************************/
	public function allloaidienthoai()
	{
		return $this->db->get('loaidienthoai')->result_array();
	}
	public function findloaidienthoai($id)
	{
		$this->db->where('MaLoaiDienThoai',$id);
		return $this->db->get('loaidienthoai')->row_array();
	}
	public function countloaidienthoai()
	{
		$query = $this->db->query("SELECT * FROM loaidienthoai");
       return $query;
	}
	public function insertloaidienthoai($dm=array())
	{
		$this->db->insert('loaidienthoai',$dm);
	}
	public function deleteloaidienthoai($id)
	{
		$this->db->where("MaLoaiDienThoai",$id);
		$this->db->delete('loaidienthoai');
	}
/*Banner**************************************************************************************************************************/
	public function allbanner()
	{
		return $this->db->get('banner')->result_array();
	}
	public function countbanner()
	{
		$query = $this->db->query("SELECT * FROM banner");
       return $query;
	}
	public function insertbanner($dm=array())
	{
		$this->db->insert('banner',$dm);
	}
	public function deletebanner($id)
	{
		$this->db->where("MaBanner",$id);
		$this->db->delete('banner');
	}
/*nhanvien************************************************************************************************************************/
	public function allnhanvien()
	{
		return $this->db->get('nhanvien')->result_array();
	}	
	public function updatenhanvien($id,$dm=array())
	{
		$this->db->where("MaNhanVien",$id);
		$this->db->update('nhanvien',$dm);
	}	
	public function countnhanvien()
	{
		$query = $this->db->query("SELECT * FROM nhanvien");
       return $query;
	}
	public function findnhanvien($id)
	{
		$this->db->where('MaNhanVien',$id);
		return $this->db->get('nhanvien')->row_array();
	}
	public function insertnhanvien($dm=array())
	{
		$this->db->insert('nhanvien',$dm);
	}
	public function deletenhanvien($id)
	{
		$this->db->where("MaNhanVien",$id);
		$this->db->delete('nhanvien');
	}
/***************************************************************************************************************************/
	public function allhoadon()
	{
		return $this->db->get('hoadon')->result_array();
	}
	public function counthoadon()
	{
		$query = $this->db->query("SELECT * FROM hoadon");
       return $query;
	}
	public function findhoadon($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('hoadon')->row_array();
	}
	public function inserthoadon($dm=array())
	{
		$this->db->insert('hoadon',$dm);
	}
	public function deletehoadon($id)
	{
		$this->db->where("id",$id);
		$this->db->delete('hoadon');
	}
/***************************************************************************************************************************/
	public function countchitiethoadon()
	{
		$query = $this->db->query("SELECT * FROM chitiethoadon");
       return $query;
	}
	public function allchitiethoadon()
	{
		return $this->db->get('chitiethoadon')->result_array();
	}	
	public function findchitiethoadon($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('chitiethoadon')->row_array();
	}
	public function insertchitiethoadon($dm=array())
	{
		$this->db->insert('chitiethoadon',$dm);
	}
	public function deletechitiethoadon($id)
	{
		$this->db->where("id_hoadon",$id);
		$this->db->delete('chitiethoadon');
	}	
/***************************************************************************************************************************/
	public function timkiem($string)
	{
		$result=$this->db->query($string);
		return $result->result_array();
	}
	public function insert($table,$data)
	{
		$id=$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	public function loginnhanvien($username,$password) 
    {
        $this->db->select('MaNhanVien, password');
        $this->db->from('NHANVIEN');
        $this->db->where('username', $username);
        $this->db->where('password',$password);
        $this->db->limit(1);
        $query = $this->db->get();           
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
   	} 
}
/***************************************************************************************************************************/
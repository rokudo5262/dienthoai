<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		$this->load->library("cart");
		$this->load->model(array('dienthoai_model'));
		$this->load->library('image_lib');
	}
	public function trangchu()
	{
		$danhdau['trangchu'] = 'active';
		$data['dienthoai']=$this->dienthoai_model->find('SELECT * from dienthoai');
		$data['loaidienthoai']=$this->dienthoai_model->find('SELECT * from loaidienthoai');
		$data['dienthoai6']=$this->dienthoai_model->find('select * from dienthoai order by Ngay desc limit 3');
		$data['banner']=$this->dienthoai_model->find('SELECT * from banner');
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function tintuc()
	{
		$danhdau['tintuc'] = 'active';
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/tintuc',NULL,TRUE);
		$this->load->view('home/master',$giaodien);	
	}
	public function chitiet($id='')
	{
		$data['data']=$this->dienthoai_model->finddienthoai($id);
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/chitiet',$data,TRUE);
		$this->load->view('home/master',$giaodien);	
	}
	public function datmua($id='')
	{
		$sanpham=$this->dienthoai_model->finddienthoai($id);
		if ($this->session->has_userdata('giohang'))
		{
			$array_old=$this->session->userdata("giohang");
			$array_new['id']=$id;
			$array_new['hinhanh']=$sanpham['HinhAnh'];
			$array_new['tendienthoai']=$sanpham['TenDienThoai'];
			$array_new['gia']=$sanpham['Gia'];
			$array_new['number']=1;	
			array_push($array_old, $array_new);
			$this->session->set_userdata("giohang",$array_old);
		}
		else
		{
			$array_new[0]['id']=$id;
			$array_new[0]['hinhanh']=$sanpham['HinhAnh'];
			$array_new[0]['tendienthoai']=$sanpham['TenDienThoai'];
			$array_new[0]['gia']=$sanpham['Gia'];
			$array_new[0]['number']=1;
			$this->session->set_userdata("giohang",$array_new);
		}
		redirect('home/giohang');
	}
	public function insert($id)
	{
		$sanpham=$this->dienthoai_model->finddienthoai($id);
		$data=array
		(
	            "id" => $sanpham['MaDienThoai'],
	           "name" => $sanpham['TenDienThoai'],
	            "qty" =>"1",
	            "price" => $sanpham['Gia'],
	            "option" => array
	            (
	            	"img" => $sanpham['HinhAnh'],
		        ),
        );
        $this->cart->insert($data);
        redirect('home/giohang');
    }
    public function delete($rowid)
        {
            $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
            redirect('home/giohang');
        }
	public function giohang()
	{
		$data['giohang'] = $data=$this->cart->contents();
		$giaodien['header'] = $this->load->view('home/header',NULL,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/giohang',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	
	}
	public function xoahang()
	{
		$this->cart->destroy();
		redirect('home/giohang');
	}
	public function ketqua()
	{
		if ($frm=$this->input->post('check_hang')) 
		{
			$query="select * from dienthoai where Hidden = 0 and (";
			for($i=0;$i<count($frm);$i++)
			{
				if($i==count($frm)-1)
				{
					$query.="MaLoaiDienThoai=".$frm[$i]." ) ";
				}
				else
				{
					$query.="MaLoaiDienThoai=".$frm[$i]." OR ";
				}
				$data['check']=$frm;
				$danhdau['trangchu'] = 'active';
				$data['dienthoai']=$this->dienthoai_model->timkiem($query);
				$data['loaidienthoai']=$this->dienthoai_model->find('SELECT * from dienthoai');
				$data['dienthoai6']=$this->dienthoai_model->find('select * from dienthoai order by Gia desc limit 3');
				$data['banner']=$this->dienthoai_model->find('SELECT * from banner');
				$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
				$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
				$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
				$this->load->view('home/master',$giaodien);
			}
		}
		else
		{
			echo "<script> alert('Vui Lòng Nhập Thông Tin');</script>";
			echo "<script> window.location.href='../';</script>";
		}
	}
	public function sapxep()
	{
		$frm=$this->input->post('sap_xep');
		$data['check']=$frm;
		$danhdau['trangchu'] = 'active';
		$data['dienthoai']=$this->dienthoai_model->timkiem('select * from dienthoai order by Gia asc');
		$data['loaidienthoai']=$this->dienthoai_model->find('SELECT * from dienthoai');
		$data['dienthoai6']=$this->dienthoai_model->find('select * from dienthoai order by Gia desc limit 3');
		$data['banner']=$this->dienthoai_model->find('SELECT * from banner');
		$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
		$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
		$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
		$this->load->view('home/master',$giaodien);
	}
	public function search()
	{
		if($searchname=$this->input->post('timkiem'))
		{
			$danhdau['searchname'] = $searchname;
			$query="select * from dienthoai where TenDienThoai like '%".$searchname."%' ";
			$data['dienthoai']=$this->dienthoai_model->timkiem($query);
			$data['loaidienthoai']=$this->dienthoai_model->find('SELECT * from dienthoai');
			$data['dienthoai6']=$this->dienthoai_model->find('select * from dienthoai order by Gia desc limit 3');
			$data['banner']=$this->dienthoai_model->find('SELECT * from banner');
			$giaodien['header'] = $this->load->view('home/header',$danhdau,TRUE);
			$giaodien['footer'] = $this->load->view('home/footer',NULL,TRUE);
			$giaodien['body'] = $this->load->view('page/trangchu',$data,TRUE);
			$this->load->view('home/master',$giaodien);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function muahang()
	{
		$frm=$this->input->post();
		$data['name']=$frm['name'];
		$data['diachi']=$frm['diachi'];
		$data['sdt']=$frm['sdt'];
		$data2['id_hoadon']=$this->dienthoai_model->insert('hoadon',$data);
		$giohang=$this->cart->contents();
		foreach ($giohang as $key => $value) 
		{
			$data2['madienthoai']=$value['id'];
			$data2['soluong']=$value['qty'];
			$data2['price']=$value['price'];
			$this->dienthoai_model->insert('chitiethoadon',$data2);
		}
		$this->cart->destroy();
		echo "<script> alert('mua hàng thành công');</script>";
		echo "<script> window.location.href='../';</script>";
	}
	public function background()
	{
		$this->load->view('home/background');
	}
}
?>
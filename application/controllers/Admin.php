<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller 
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
		$this->load->database();
	}
	public function login()
	{
		$this->load->view('Admin/login_admin');
	}
	public function check_login() 
	{          
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $query = $this->dienthoai_model->loginnhanvien($username,md5($password));
            if ($query>0)
            {
                foreach($query as $row)
                {
                    $newdata = array
                    (
                    	'username' => $username,
                    	'password' => $password
                    );
                    $this->session->set_userdata($newdata);              
                    redirect('Admin/main');
                }
            }
            else
	        {
	           echo "<script> alert('Đăng nhập không thành công');</script>";
	           echo "<script> window.location.href='../admin/login';</script>";
	        }            
    } 
	public function logout()
	{
		$this->session->unset_userdata($newdata);
		redirect('Admin/login');
	}
	public function main()
	{
		if($this->session->userdata('username')!='')
		{
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/main_view',NULL,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function banner()
	{
		if($this->session->userdata('username')!='')
		{
			$data['banner']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * form banner');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/banner_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function insertbanner()
	{
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["TenBanner"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["TenBanner"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["TenBanner"] = 'unknow.jpg';
	    }
	    $this->dienthoai_model->insertbanner($data);
	    redirect(base_url('Admin/banner'));
	}
	public function insertnhanvien()
	{
		$data=array
		(
			'TenNhanVien'=>$this->input->post('tennhanvien'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
		);
		$this->dienthoai_model->insertnhanvien($data);
		redirect("admin/nhanvien");
	}
	public function insertdienthoai()
	{
		$data=array
		(
			'TenDienThoai'=>$this->input->post('tendienthoai'),
			'Gia'=>$this->input->post('gia'),
			'GhiChu'=>$this->input->post('ghichu')
		);
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["HinhAnh"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["HinhAnh"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["HinhAnh"] = 'unknow.jpg';
	    }
	    $this->dienthoai_model->insertdienthoai($data);
	    redirect(base_url('admin/dienthoai'));
	}
	public function inserthoadon()
	{
		$data=array
		(
			'name'=>$this->input->post('name'),
			'diachi'=>$this->input->post('diachi'),
			'sdt'=>$this->input->post('sdt'),
			'gioitinh'=>$this->input->post('gioitinh')
		);
		$this->dienthoai_model->inserthoadon($data);
		redirect("admin/hoadon");
	}
	public function deletebanner($id='')
	{
		$this->dienthoai_model->deletebanner($id);
		redirect("admin/banner");
	}
	public function deletenhanvien($id='')
	{
		$this->dienthoai_model->deletenhanvien($id);
		redirect("admin/nhanvien");
	}
	public function deletedienthoai($id)
	{
		$this->dienthoai_model->deletedienthoai($id);
		redirect("admin/dienthoai");
	}
	public function deletehoadon($id)
	{
		$this->dienthoai_model->deletehoadon($id);
		redirect("admin/hoadon");
	}
	public function deleteloaidienthoai($id)
	{
		$this->dienthoai_model->deleteloaidienthoai($id);
		redirect("admin/loaidienthoai");
	}
	public function insertloaidienthoai()
	{
		$data=array
		(
			'TenLoaiDienThoai'=>$this->input->post('tenloaidienthoai')
		);
		if (!empty($_FILES['image']['name']))
		{
	        $config['upload_path'] = './public/image/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['image']['name'];
	    	$config['overwrite'] = TRUE;  
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('image'))
	        {
         		$uploadData = $this->upload->data();
          		$data["logo"] = $uploadData['file_name'];
       	 	}
       	 	else
       	 	{
       	 		$datas['errors'] = $this->upload->display_errors();
         		$data["logo"] = 'unknow.jpg';
	        }
	    }
	    else
	    {
	      	$datas['errors'] = $this->upload->display_errors();
	        $data["logo"] = 'unknow.jpg';
	    }
	    $this->dienthoai_model->insertloaidienthoai($data);
	    redirect(base_url('admin/loaidienthoai'));
	}
	public function deletechitiethoadon($id)
	{
		$this->dienthoai_model->deletechitiethoadon($id);
		redirect("admin/chitiethoadon");
	}
	public function nhanvien()
	{
		if($this->session->userdata('username')!='')
		{
			$data['nhanvien']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * from nhanvien');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/nhanvien_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function loaidienthoai()
	{
		if($this->session->userdata('username')!='')
		{
			$data['loaidienthoai']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * from loaidienthoai');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/loaidienthoai_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function dienthoai()
	{
		if($this->session->userdata('username')!='')
		{
			$data['dienthoai']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * from dienthoai');
			$data['ds2']=$this->dienthoai_model->find('SELECT * from loaidienthoai');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/dienthoai_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function hoadon()
	{
		if($this->session->userdata('username')!='')
		{
			$data['hoadon']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * from hoadon');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/hoadon_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
	public function chitiethoadon()
	{
		if($this->session->userdata('username')!='')
		{
			$data['chitiethoadon']='active';
			$data['ds']=$this->dienthoai_model->find('SELECT * from chitiethoadon');
			$giaodien['query']=$this->dienthoai_model->countbanner();
			$giaodien['query1']=$this->dienthoai_model->countnhanvien();
			$giaodien['query2']=$this->dienthoai_model->countdienthoai();
			$giaodien['query3']=$this->dienthoai_model->countloaidienthoai();
			$giaodien['query4']=$this->dienthoai_model->counthoadon();
			$giaodien['query5']=$this->dienthoai_model->countchitiethoadon();
			$giaodien['subview']=$this->load->view('admin/chitiethoadon_view',$data,TRUE);
			$this->load->view('Admin/master_admin',$giaodien);
		}
		else
		{
			redirect('admin/login');
		}
	}
}
?>
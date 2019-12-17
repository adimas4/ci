<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_crud extends CI_Controller{
	//function
	public function index(){
		$data= $this->mod->GetTable('data_mahasiswa');
		$this->load->view('viewcrud', array('data'=>$data));
	}

	public function insert(){
		// jika sudah submit data akan tersimpan di db
		if(isset($_POST['submit'])){

			// ambil post dari form
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			//data yg akan di insert
			$data = array('id' => $id, 'nama' => $nama);

			//memasukan data melalui fungsi insertdata pad models mod.php
			$this->mod->InsertData('data_mahasiswa', $data);

			redirect('Belajar_crud');
		
		}else{

			$this->load->view('insertcrud');
		
		}
	}

	public function update(){

		if(isset($_POST['submit'])){

		//mengambil post dr form

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');

		//data yang akan di update
		$data = array('id' => $id, 'nama' => $nama);

		$this->mod->UpdateData('data_mahasiswa', $data,'id',$id); 
		//mengaupdate data melalui fungsi insertdata pad models mod.php

		redirect('Belajar_crud'); //

		}else{

		$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga

		$data = $this->mod->getByID('data_mahasiswa','id',$id)->row_array(); //menselect data yg akan di update

		 

		$this->load->view('updatecrud', array('r'=>$data)); //menampilkan views updatecrud

		}
	}

	public function delete(){
		$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga

		$this->mod->DeleteData('data_mahasiswa','id',$id); //menghapus data

		redirect('Belajar_crud'); //mengalihkan ke tampbali
	}
}

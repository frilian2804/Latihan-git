<?php
/**
 * 
 */
class Matakuliah extends CI_Controller
{

	public function index()
	{
		$this->load->view('view-form-matakuliah');
	}
	public function cetak()
	{
		$data = ['kode' => $this->input->post('kode'),
		$this->form_validation->set_rules('kode','Kode Matakuliah','required|min_length[3]',[
			'required' => 'kode Matakuliah Harus diisi', 
			'min_length' => 'Kode terlalu pendek'
	]);

		$this->form_validation->set_rules('nama','Nama Matakuliah','required|min_length[3]',[
			'required' => 'Nama Matakuliah Harus diisi',
			'min_length' => 'Nama terlalu pendek'
	]);
		if ($this->form_validation->run() != true)
	{
		$this->load->view('view-form-matakuliah');
	} else {
			$data = [
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('kode')];
				$this->load->view('view-data-matakuliah', $data);
				'sks' => $this->input->post('sks')
			];

			$this->load->view('view-data-matakuliah', $data);
		}
	}
} 

<?php

class Latihan1 extends CI_Controller
{
	public function index()
	{
		echo "<b><h2>Selamat Datang.. Selamat Belajar Web Programming</h2></b>";
	}
	public function penjumlahan($n1, $n2)
	{
		// code...
		/*$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
		*/

		$this->load->model('Model_latihan1');
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

		$this->load->view('view-latihan1', $data);
	}

} 
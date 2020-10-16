<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	//halaman utama
	public function index()
	{
		$data['all'] = $this->Model->getAll();
		$this->load->view('templates/header');
		$this->load->view('dashboard/index', $data);
	}

	//halaman segitiga
	public function segitiga()
	{
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/segitiga');
	}

	//halaman persegi
	public function persegi()
	{
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/persegi');
	}

	//halaman lingkaran
	public function lingkaran()
	{
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/lingkaran');
	}

	//perhitungan segitiga dan menampilhan hasil
	public function hitungSegitiga()
	{
		//mengambil nilai dari input menggunakan post
		$tinggi 		= $this->input->post('tinggi');
		$alas 			= $this->input->post('alas');
		$sisikiri 	= $this->input->post('sisikiri');
		$sisikanan	=	$this->input->post('sisikanan');

		//perhitungan luas dan keliling
		$luas 			= 1 / 2 * $tinggi * $alas;
		$keliling		= $alas + $sisikanan + $sisikiri;

		//memasukkan data kedalam array
		$data = [
			'Bangun Datar' 	=> 'segitiga',
			'tinggi'				=> $tinggi,
			'alas'					=> $alas,
			'sisikiri'			=> $sisikiri,
			'sisikanan'			=> $sisikanan,
			'luas'					=> $luas,
			'keliling'			=> $keliling
		];

		//kirim ke model
		$name['name'] = 'segitiga';
		$this->Model->insertData($name);

		//menyimpan data histori perhitungan ke dalam history.txt
		$myfile = fopen("./data/history.txt", "a");
		fwrite($myfile, print_r($data, true));
		fclose($myfile);

		$hasil['data'] = $data;
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/hasil_segitiga', $hasil);
	}

	//perhitungan persegi dan menampilhan hasil
	public function hitungPersegi()
	{
		//mengambil nilai dari input menggunakan post
		$panjang 		= $this->input->post('panjang');
		$lebar 			= $this->input->post('lebar');

		//perhitungan luas dan keliling
		$luas 			= $panjang * $lebar;
		$keliling		= ($panjang * 2) + ($lebar * 2);

		//memasukkan data kedalam array
		$data = [
			'Bangun Datar' 	=> 'persegi',
			'panjang'				=> $panjang,
			'lebar'					=> $lebar,
			'luas'					=> $luas,
			'keliling'			=> $keliling
		];

		//kirim ke model
		$name['name'] = 'persegi';
		$this->Model->insertData($name);

		//menyimpan data histori perhitungan ke dalam history.txt
		$myfile = fopen("./data/history.txt", "a");
		fwrite($myfile, print_r($data, true));
		fclose($myfile);

		$hasil['data'] = $data;
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/hasil_persegi', $hasil);
	}

	//perhitungan persegi dan menampilhan hasil
	public function hitungLingkaran()
	{
		//deklarasi phi
		$phi 				= 3.14;

		//mengambil nilai dari input menggunakan post
		$jari 			= $this->input->post('jari');

		//perhitungan luas dan keliling
		$luas 			= $phi * $jari * $jari;
		$keliling		= 2 * $phi * $jari;

		//memasukkan data kedalam array
		$data = [
			'Bangun Datar' 	=> 'lingkaran',
			'jari'					=> $jari,
			'luas'					=> $luas,
			'keliling'			=> $keliling
		];

		//kirim ke model
		$name['name'] = 'lingkaran';
		$this->Model->insertData($name);

		//menyimpan data histori perhitungan ke dalam history.txt
		$myfile = fopen("./data/history.txt", "a");
		fwrite($myfile, print_r($data, true));
		fclose($myfile);

		$hasil['data'] = $data;
		$this->load->view('templates/header');
		$this->load->view('bangun-datar/hasil_lingkaran', $hasil);
	}

	public function dashboard()
	{
		$data['all'] = $this->Model->getAll();
		$segitiga 	= $this->Model->getSegitiga();
		$persegi 		= $this->Model->getPersegi();
		$lingkaran 	= $this->Model->getLingkaran();

		$data['segitiga'] = number_format($segitiga / $data['all'] * 100, 2, '.', '');
		$data['persegi'] = number_format($persegi / $data['all'] * 100, 2, '.', '');
		$data['lingkaran'] = number_format($lingkaran / $data['all'] * 100, 2, '.', '');

		$this->load->view('templates/header');
		$this->load->view('dashboard/dash', $data);
	}

	public function histori()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard/histori',);
	}
}

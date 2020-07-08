<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('transaksi_model');
		$this->load->model('obat_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$transaksi = $this->transaksi_model->listing();

		$data = array(	'title'			=> 'Daftar Transaksi',
						'transaksi'		=> $transaksi,
						'isi'			=> 'admin/transaksi/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

		// Tambah Pelanggan
	public function tambah()
	{
		// Validasi Input
		$obat = $this->obat_model->listing();
		$user = $this->user_model->listing();

		$valid = $this->form_validation;

		$valid->set_rules('BAYAR','Bayar','required',
			array(	'required'			=>'%s harus diisi'));

		if($valid->run()===FALSE) {
		// end validasi

		$data = array(	'title'		=> 'Pembayaran',
						'obat'		=> $obat,
						'user'		=> $user,
						'isi'		=> 'admin/transaksi/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;

			$data = array(	'ID_OBAT'				=> $i->post('ID_OBAT'),
							'ID_USER'				=> $i->post('ID_USER'),
							'BAYAR'					=> $i->post('BAYAR')
						);
			$this->transaksi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Pembelian Sukses');
			redirect(base_url('admin/transaksi'),'refresh');
		}
		// End Masuk Database
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */
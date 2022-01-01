<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login(); //letaknya di helper ->nashit_helper
		$this->load->model('Menu_model');
		$this->load->model('Tgames_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['totalPengunjung'] = $this->Menu_model->totalPengunjung();
		$data['pengunjung'] = $this->Menu_model->pengunjung();
		$data['pengunjungOnline'] = $this->Menu_model->pengunjungOnline();
		$data['totalHits'] = $this->Menu_model->totalHits();

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/menu_footer');
	}
	public function tambah()
	{
		$data['title'] = 'Menu Tambah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/tambah', $data);
		$this->load->view('templates/menu_footer');
	}
	public function tambahData()
	{
		// $this->load->model('Menu_model');
		if ($this->Menu_model->tambahDataGames($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Data berhasil di tambah</div>');
			redirect('menu/tambah');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Data gagal di tambah pesan error <?= $this->db->error(); 
            ?></div>');
			redirect('menu/tambah');
			exit;
		}
	}

	public function ubah()
	{
		$data['title'] = 'Menu Ubah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['games'] = $this->db->get('games')->result_array();
		$sort = (isset($_GET["sort"]) ? $_GET["sort"] : '');
		switch ($sort) {
			case 'nama':
				$data['games'] = $this->Tgames_model->sortByNama();
				break;
			case 'rilis':
				$data['games'] = $this->Tgames_model->gamesBaru();
				break;
			case 'update':
				$data['games'] = $this->Tgames_model->baruUplouad();
				break;
			default:
				$data['games'] = $this->Tgames_model->baruUplouad();
		}

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/ubah', $data);
		$this->load->view('templates/menu_footer');
	}

	public function detail_ubah($id)
	{
		$data['title'] = 'Detail Ubah';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $this->load->model('Menu_model');
		$data['games'] = $this->Menu_model->getDataGamesById($id);

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/detail_ubah', $data);
		$this->load->view('templates/menu_footer');
	}
	public function ubahData()
	{
		// $this->load->model('Menu_model');
		if ($this->Menu_model->ubahDataGames($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Data berhasil di Ubah</div>');
			redirect('menu/ubah');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Data gagal di ubah pesan error <?= $this->db->error(); 
            ?></div>');
			redirect('menu/ubah');
			exit;
		}
	}

	public function hapus()
	{
		$data['title'] = 'Hapus Informasi Games';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['games'] = $this->Menu_model->getGames();
		$sort = (isset($_GET["sort"]) ? $_GET["sort"] : '');
		switch ($sort) {
			case 'nama':
				$data['games'] = $this->Tgames_model->sortByNama();
				break;
			case 'rilis':
				$data['games'] = $this->Tgames_model->gamesBaru();
				break;
			case 'update':
				$data['games'] = $this->Tgames_model->baruUplouad();
				break;
			default:
				$data['games'] = $this->Tgames_model->baruUplouad();
		}

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/hapus', $data);
		$this->load->view('templates/menu_footer');
	}
	public function hapusData($id)
	{
		if ($this->Menu_model->hapusDataGames($id) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Data berhasil dihapus</div>');
			redirect('menu/hapus');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Data gagal dihapus pesan error <?= $this->db->error(); 
            ?></div>');
			redirect('menu/hapus');
			exit;
		}
	}

	public function profil()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/profil', $data);
		$this->load->view('templates/menu_footer');
	}

	public function ubahFotoProfil()
	{
		// $this->load->model('Menu_model');
		if ($this->Menu_model->ubahFotoProfil($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Data berhasil di Ubah</div>');
			redirect('menu/profil');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Data gagal di ubah pesan error <?= error_log; ?></div>');
			redirect('menu/profil');
			exit;
		}
	}
	public function ubahProfil()
	{
		$ubah = (isset($_GET["ubah"]) ? $_GET["ubah"] : '');
		switch ($ubah) {
			case 'nama':
				if ($this->Menu_model->ubahProfil($_POST) > 0) {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Selamat! Data berhasil di Ubah</div>');
					redirect('menu/profil');
					exit;
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Gagal! Data gagal di ubah pesan error <?= error_log; ?></div>');
					redirect('menu/profil');
					exit;
				}
				break;
			case 'password':
				if ($this->Menu_model->ubahPassProfil($_POST) > 0) {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                Selamat! Data berhasil di Ubah</div>');
					redirect('menu/profil');
					exit;
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                            Gagal! Data gagal di ubah pesan error <?= error_log; ?></div>');
					redirect('menu/profil');
					exit;
				}
				break;
		}
	}

	public function genre()
	{
		$data['title'] = 'Edit Genre';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['genre'] = $this->db->order_by('nama_genre', 'asc')->get('genre')->result_array();

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/genre', $data);
		$this->load->view('templates/menu_footer');
	}

	public function tambahGenre()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->Menu_model->tambahDataGenre($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Data berhasil di genre</div>');
			redirect('menu/genre');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Data gagal di genre pesan error <?= $this->db->error(); 
            ?></div>');
			redirect('menu/genre');
			exit;
		}
	}

	public function detailGenre()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		echo json_encode($this->Menu_model->getGenreById($_POST['id']));
	}

	public function ubahGenre()
	{

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->Menu_model->ubahDataGenre($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Genre berhasil di Ubah</div>');
			redirect('menu/genre');
			exit;
		} else {
			// $error = $this->db->error();
			// var_dump($error);
			// $this->session->set_flashdata('message', $error);
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Genre gagal di ubah</div>');
			redirect('menu/genre');
			exit;
		}
	}


	public function rating()
	{
		$data['title'] = 'Rating Games';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['genre'] = $this->db->order_by('nama', 'asc')->get('games')->result_array();

		$this->load->view('templates/menu_header', $data);
		$this->load->view('templates/menu_sidebar', $data);
		$this->load->view('templates/menu_topbar', $data);
		$this->load->view('menu/rating', $data);
		$this->load->view('templates/menu_footer');
	}

	public function ubahRating()
	{

		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		if ($this->Menu_model->ubahDataRating($_POST) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Rating berhasil di Ubah</div>');
			redirect('menu/rating');
			exit;
		} else {
			// $error = $this->db->error();
			// var_dump($error);
			// $this->session->set_flashdata('message', $error);
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Rating gagal di ubah</div>');
			redirect('menu/rating');
			exit;
		}
	}

	public function hapusGenre($id)
	{
		if ($this->Menu_model->hapusDataGenre($id) > 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Selamat! Genre berhasil dihapus</div>');
			redirect('menu/genre');
			exit;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal! Genre gagal dihapus pesan error <?= $this->db->error(); 
            ?></div>');
			redirect('menu/genre');
			exit;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda telah logout!</div>');
		redirect('auth');
	}
}

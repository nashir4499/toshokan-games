<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tgames extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tgames_model');
        date_default_timezone_set('Asia/Jakarta');
        $this->Tgames_model->pengunjung();
    }
    public function index()
    {
        $data['slide'] = $this->Tgames_model->slide();
        $data['dinding1'] = $this->Tgames_model->acak();
        $data['dinding2'] = $this->Tgames_model->acak();
        $data['gamesbaru'] = $this->Tgames_model->gamesBaruHome();
        $data['gamestop'] = $this->Tgames_model->gamesTopHome();
        $data['gamesup'] = $this->Tgames_model->baruUplouadHome();
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/home', $data);
        $this->load->view('templates/tgames_footer');
    }

    public function list()
    {
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
                $data['games'] = $this->Tgames_model->sortByNama();
        }

        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/list', $data);
        $this->load->view('templates/tgames_footer');
    }
    public function release()
    {
        $data['games'] = $this->Tgames_model->releaseDate();
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/release', $data);
        $this->load->view('templates/tgames_footer');
    }
    public function konten($id)
    {
        $data['games'] = $this->Tgames_model->getDataGamesById($id);
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/konten', $data);
        $this->load->view('templates/tgames_footer');
    }
    public function genre()
    {
        $data['genre'] = $this->db->order_by('nama_genre', 'asc')->get('genre')->result_array();
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/genre', $data);
        $this->load->view('templates/tgames_footer');
    }

    public function cariGenre($id)
    {
        // urlencode($id);
        $genre = $this->db->get_where('genre', ['id' => $id])->row_array();
        $data['cari'] = $genre['nama_genre'];
        $data['games'] = $this->Tgames_model->cariGenre($id);
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/pencarian', $data);
        $this->load->view('templates/tgames_footer');
    }
    public function cari()
    {
        $data['cari'] = $this->input->get('search');
        $data['games'] = $this->Tgames_model->cari();
        $this->load->view('templates/tgames_header');
        $this->load->view('tgames/pencarian', $data);
        $this->load->view('templates/tgames_footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tgames_model extends CI_Model
{
    function slide()
    {
        $query = $this->db->order_by('id', 'RANDOM')->limit(3)->get('games');
        $data = $query->result_array();
        return $data;
    }

    public function acak()
    {
        $query = $this->db->order_by('id', 'RANDOM')->get('games')->row_array();
        return $query;
    }

    public function getDataGamesById($id)
    {
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $data['games'] = $this->db->get_where('games', ['id' => $id]);
        return $data['games']->row_array();
    }

    public function gamesBaruHome()
    {
        $query = $this->db->order_by('rilis', 'desc')->get('games', 6);
        $data = $query->result_array();
        return $data;
    }

    public function gamesTopHome()
    {
        $query = $this->db->order_by('rating', 'desc')->get('games', 6);
        $data = $query->result_array();
        return $data;
    }

    public function baruUplouadHome()
    {
        $query = $this->db->order_by('waktu_buat', 'desc')->get('games', 6);
        $data = $query->result_array();
        return $data;
    }

    public function gamesBaru()
    {
        $query = $this->db->order_by('rilis', 'desc')->get('games');
        $data = $query->result_array();
        return $data;
    }
    public function baruUplouad()
    {
        $query = $this->db->order_by('waktu_buat', 'desc')->get('games');
        $data = $query->result_array();
        return $data;
    }

    public function sortByNama()
    {
        $query = $this->db->order_by('nama', 'asc')->get('games');
        $data = $query->result_array();
        return $data;
    }

    public function releaseDate()
    {
        $waktu = date('Y-m-d');
        $this->db->where('rilis >=', $waktu);

        // $data = $this->db->get_where('games', 'rilis >= ', $waktu)->result_array();
        return $this->db->get('games')->result_array();
    }

    public function cari()
    {
        $nama = $this->input->get('search');
        $query = $this->db->like('nama', $nama)->get('games');
        $data = $query->result_array();

        return $data;
    }
    public function cariGenre($id)
    {
        // $genre = $this->input->get('search');
        // $query = $this->db->like('genre', $genre)->get('games');
        // $data = $query->result_array();
        $genre = $this->db->get_where('genre', ['id' => $id])->row_array();
        $data['games'] = $this->db->like('genre', $genre['nama_genre'])->get('games');

        return $data['games']->result_array();
    }

    public function pengunjung()
    {
        $ip = $this->input->ip_address();
        $date = date("Y-m-d");
        $waktu = time();

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->db->get_where('tbvisitor', ['ip' => $ip, 'tanggal' => $date])->num_rows();
        $ss = isset($s) ? ($s) : 0;

        // Kalo belum ada simpan data user tersebut
        if ($ss == 0) {
            $data = [
                'ip' => $ip,
                'tanggal' => $date,
                'hits' => 1,
                'online' => $waktu

            ];
            $this->db->insert('tbvisitor', $data);
        }

        //jika sudah ada, UPDATE
        else {
            $this->db->set('hits', 'hits+1', false);
            $this->db->set('online', $waktu);
            $this->db->where(['ip' => $ip, 'tanggal' => $date]);
            $this->db->update('tbvisitor');
        }
    }
}

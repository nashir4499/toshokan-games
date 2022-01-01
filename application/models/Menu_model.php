<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getGames()
    {
        $data['games'] = $this->db->get('games');
        return $data['games']->result_array();
    }

    public function getDataGamesById($id)
    {
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $data['games'] = $this->db->get_where('games', ['id' => $id]);
        return $data['games']->row_array();
    }

    public function tambahDataGames()
    {
        $this->db->query("ALTER TABLE genre AUTO_INCREMENT 1");
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'sinopsis' => $this->input->post('sinopsis'),
            'gambar_portrait' => $this->_uploadImage(),
            'gambar_landscape' => $this->_uploadImageLc(),
            'series' => htmlspecialchars($this->input->post('series')),
            'rilis' => date($this->input->post('rilis')),
            'informasi' => $this->input->post('informasi'),
            'genre' => $this->input->post('genre'),
            'mode' => $this->input->post('mode'),
            'platform' => $this->input->post('platform'),
            'minimum' => $this->input->post('minimum'),
            'rekomen' => $this->input->post('rekomen'),
            'waktu_buat' => date('Y-m-d H:i:s'),
            'rating' => 0,
        ];
        $this->db->insert('games', $data);
        return $this->db->affected_rows();
    }

    public function ubahDataGames()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES['gambar_pr']['name'])) {
            $mantanpr = $this->input->post('gambar_pr_lama'); //hapus gambar sebelumnya dari folder
            if ($mantanpr != 'default.jpg') {
                unlink(FCPATH . 'assets/img/games/' . $mantanpr);
            }
            $postpr = $this->_uploadImage();
        } else {
            $postpr = $this->input->post('gambar_pr_lama');
        }
        if (!empty($_FILES['gambar_lc']['name'])) {
            $mantanlc = $this->input->post('gambar_lc_lama'); //hapus gambar sebelumnya dari folder
            if ($mantanlc != 'default.jpg') {
                unlink(FCPATH . 'assets/img/games/' . $mantanlc);
            }
            $postlc = $this->_uploadImageLc();
        } else {
            $postlc = $this->input->post('gambar_lc_lama');
        }

        $data = [

            'nama' => htmlspecialchars($this->input->post('nama')),
            'sinopsis' => $this->input->post('sinopsis'),
            'gambar_portrait' => $postpr,
            'gambar_landscape' => $postlc,
            'series' => htmlspecialchars($this->input->post('series')),
            'rilis' => date($this->input->post('rilis')),
            'informasi' => $this->input->post('informasi'),
            'genre' => $this->input->post('genre'),
            'mode' => $this->input->post('mode'),
            'platform' => $this->input->post('platform'),
            'minimum' => $this->input->post('minimum'),
            'rekomen' => $this->input->post('rekomen'),
            'waktu_buat' => date('Y-m-d H:i:s'),
        ];

        $this->db->where('id', $id);
        $this->db->update('games', $data);

        return $this->db->affected_rows();
    }

    public function hapusDataGames($id)
    {
        // $this->db->where('id', $id);
        $data = $this->db->get_where('games', ['id' => $id])->row_array();

        if ($data['gambar_portrait'] != 'default.jpg') {
            unlink(FCPATH . 'assets/img/games/' . $data['gambar_portrait']);
            unlink(FCPATH . 'assets/img/games/' . $data);
        }
        if ($data['gambar_landscape'] != 'default.jpg') {
            unlink(FCPATH . 'assets/img/games/' . $data['gambar_landscape']);
        }

        $this->db->delete('games', ['id' => $id]);

        return $this->db->affected_rows();
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/games/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        // $config['max_width']            = 900;
        // $config['max_height']           = 1200;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('gambar_pr')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            return $this->upload->data('file_name');
        } else {
            // Jika gagal :
            // print_r($this->upload->display_errors());
            echo '<script language="javascript"> alert("<?php print_r($this->upload->display_errors()); ?>")</script>';
            return 'default.jpg';
        }
    }
    private function _uploadImageLc()
    {
        $config['upload_path']          = './assets/img/games/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        // $config['max_width']            = 900;
        // $config['max_height']           = 1200;

        $this->load->library('upload', $config); // Load Konfigueasi uploadnya
        if ($this->upload->do_upload('gambar_lc')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            return $this->upload->data('file_name');
        } else {
            // Jika gagal :
            print_r($this->upload->display_errors());
            return 'default.jpg';
        }
    }

    // bagian profil

    public function ubahFotoProfil()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES['myFile']['name'])) {
            $mantanProfil = $this->input->post('profil_lama'); //hapus gambar sebelumnya dari folder
            if ($mantanProfil != 'default.jpg') {
                unlink(FCPATH . 'assets/img/profil/' . $mantanProfil);
            }
            $fotoProfil = $this->_uploadImageProfil();
        } else {
            $fotoProfil = $this->input->post('profil_lama');
        }

        $this->db->set('gambar', $fotoProfil);

        $this->db->where('id', $id);
        $this->db->update('user');

        return $this->db->affected_rows();
    }

    public function ubahProfil()
    {
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email telah terdaftar'
        ]);

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);

        return $this->db->affected_rows();
    }

    private function _uploadImageProfil()
    {
        $config['upload_path']          = './assets/img/profil/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload', $config); // Load Konfigueasi uploadnya
        if ($this->upload->do_upload('myFile')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            return $this->upload->data('file_name');
        } else {
            // Jika gagal :
            print_r($this->upload->display_errors());
            return 'default.jpg';
        }
    }

    public function totalPengunjung()
    {
        // $this->db->get('tbvisitor');
        // $dbpengunjung = $this->db->select('hits, COUNT(hits) as hits');
        // $dbpengunjung = $this->db->select('COUNT(hits) as hits');
        // $dbpengunjung = $this->db->query("SELECT COUNT(hits) FROM tbvisitor", 0)->affected_rows();
        // $dbpengunjung = $this->db->count_all_results('tbvisitor');
        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as total FROM tbvisitor")->row_array();
        // $totalp = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0;
        return $dbpengunjung;
    }

    public function pengunjung()
    {
        $date = date("Y-m-d");
        $this->db->group_by('ip');
        $pengunjung = $this->db->get_where('tbvisitor', ['tanggal' => $date])->num_rows();
        return $pengunjung;
    }

    public function pengunjungOnline()
    {
        $bataswaktu = time() - 300;
        $ponline = $this->db->query("SELECT * FROM tbvisitor WHERE online > '$bataswaktu'")->num_rows();
        return $ponline;
    }

    public function totalHits()
    {
        $this->db->select_sum('hits');
        $jumlah = $this->db->get('tbvisitor');
        return $jumlah->row_array();
    }

    //genre
    public function getGenreById($id)
    {
        $data['genre'] = $this->db->get_where('genre', ['id' => $id]);
        return $data['genre']->row_array();
    }

    public function tambahDataGenre()
    {
        $this->db->query("ALTER TABLE genre AUTO_INCREMENT 1");
        $data = [
            'nama_genre' => htmlspecialchars($this->input->post('editGenre'))
        ];
        $this->db->insert('genre', $data);
        return $this->db->affected_rows();
    }

    public function ubahDataGenre()
    {
        $id = $this->input->post('id');

        $data = [
            'nama_genre' => htmlspecialchars($this->input->post('editGenre'))
        ];
        // $this->db->set('nama_genre', $data['nama_genre']);
        $this->db->set('nama_genre', $data['nama_genre']);
        $this->db->where('id', $id);
        // $this->db->set('nama_genre', $this->input->post('editGenre'));
        // $this->db->where('id', $this->input->post('id'));
        $this->db->update('genre');
        return $this->db->affected_rows();
    }

    public function ubahDataRating()
    {
        $id = $this->input->post('id');

        $data = [
            'rating' => $this->input->post('rating')
        ];
        $this->db->set('rating', $data['rating']);
        $this->db->where('id', $id);
        // $this->db->set('nama_genre', $this->input->post('editGenre'));
        // $this->db->where('id', $this->input->post('id'));
        $this->db->update('games');
        return $this->db->affected_rows();
    }

    public function hapusDataGenre($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('genre');

        return $this->db->affected_rows();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/menu_header', $data);
        $this->load->view('templates/menu_sidebar', $data);
        $this->load->view('templates/menu_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/menu_footer');
    }

    public function role()
    {
        $data['title'] = 'Rle';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['level'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/menu_header', $data);
        $this->load->view('templates/menu_sidebar', $data);
        $this->load->view('templates/menu_topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/menu_footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/menu_header', $data);
        $this->load->view('templates/menu_sidebar', $data);
        $this->load->view('templates/menu_topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/menu_footer');
    }
}

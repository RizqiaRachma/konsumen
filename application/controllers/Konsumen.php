<?php
class Konsumen extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    function index()
    {
        $data['konsumen'] = $this->m_data->tampil_data();
        $this->load->view('konsumen', $data);
    }

    function tambah()
    {
        $data['sales'] = $this->m_data->tampil_sales()->result();
        $this->load->view('input_konsumen', $data);
    }
    function proses_tambah()
    {
        $id        = $this->input->post('id');
        $nama      = $this->input->post('nama');
        $no_tlp    = $this->input->post('no_tlp');
        $id_sales  = $this->input->post('id_sales');
        $data = array(
            'id'    => $id,
            'nama'   => $nama,
            'no_tlp'    => $no_tlp,
            'id_sales'  => $id_sales,
        );

        $this->m_data->input_data($data, 'konsumen');
        redirect('konsumen');
    }
    function edit($id)
    {
        $where                = array('id' => $id);
        $data['konsumen']       = $this->m_data->edit_data($where, 'konsumen')->result();
        $data['sales']          = $this->m_data->edit_data($where, 'sales')->result();
        $this->load->view('edit_konsumen', $data);
    }
    function update()
    {
        $id        = $this->input->post('id');
        $nama      = $this->input->post('nama');
        $no_tlp    = $this->input->post('no_tlp');
        $id_sales  = $this->input->post('id_sales');
        $data = array(
            'nama'   => $nama,
            'no_tlp'    => $no_tlp,
            'id_sales'  => $id_sales,
        );
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'konsumen');
        redirect('konsumen');
    }


    function delete($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'konsumen');
        redirect('konsumen');
    }
}

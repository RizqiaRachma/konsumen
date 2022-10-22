<?php
class Sales extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }


    function index()
    {
        $this->load->view('input_sales');
    }
    function proses_tambah()
    {
        $id        = $this->input->post('id');
        $nama      = $this->input->post('nama');
        $data = array(
            'id'    => $id,
            'nama'   => $nama
        );

        $this->m_data->input_data($data, 'sales');
        redirect('sales');
    }
    function data()
    {
        $data['sales'] = $this->m_data->tampil_data();
        $this->load->view('sales', $data);
    }
    function edit($id)
    {
        $where                = array('id' => $id);
        $data['sales']    = $this->m_data->edit_data($where, 'sales')->result();
        $this->load->view('edit_sales', $data);
    }

    function update()
    {
        $id        = $this->input->post('id');
        $nama      = $this->input->post('nama');
        $data = array(
            'nama'   => $nama
        );
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'sales');
        redirect('sales/data');
    }


    function delete($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'sales');
        redirect('sales');
    }
}

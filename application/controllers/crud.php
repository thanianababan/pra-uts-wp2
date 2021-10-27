<?php
class Crud extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('m_data');
      $this->load->helper('url');
   }
   function index()
   {
      $data['mhs'] = $this->m_data->tampil_data()->result();
      $this->load->view('v_tampil', $data);
   }
   function tambah()
   {
      $this->load->view('v_input');
   }
   function tambah_aksi()
   {
      $nim=$this->input->post('nim');
      $nama=$this->input->post('nama');
      $kelas=$this->input->post('kelas');
      $alamat=$this->input->post('alamat');

      $data = array(
         'nim' => $nim,
         'nama' => $nama,
         'kelas' => $kelas,
         'alamat' => $alamat
      );
      $this->m_data->input_data($data, 'mhs');
      redirect('crud/index');
   }
   function edit($nim) {
      $where = array('nim' => $nim );
      $data['user']=$this->m_data->edit_data($where,'mhs')->result();
      $this->load->view('v_edit',$data);
   }
   function update() {
      $nim=$this->input->post('nim');
      $nama=$this->input->post('nama');
      $kelas=$this->input->post('kelas');
      $alamat=$this->input->post('alamat');

      $data = array(
         'nim' => $nim,
         'nama' => $nama,
         'kelas' => $kelas,
         'alamat' => $alamat
      );
      $where = array('nim' =>$nim );
      $this->m_data->update_data($where,$data,'mhs');
      redirect('crud/index');
   }

   function hapus($nim) {
      $where = array('nim' => $nim );
      $this->m_data->hapus_data($where,'mhs');
      redirect('crud/index');
   }
}
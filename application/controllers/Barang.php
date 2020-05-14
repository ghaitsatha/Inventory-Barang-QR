<?php
    

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function daftar_barang(){
        $this->load->view('v_header');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang/daftar_barang',$data);
        $this->load->view('v_footer');

    }

    public function daftar_simpan(){
        // $data['title'] = "Daftar Penyimpanan";
        $this->load->view('v_header');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang/daftar_simpan',$data);
        $this->load->view('v_footer');
    }

    function CheckNamaBarang($nama_barang){
        if($this->model->check_namabarang($nama_barang)==''){
            return true;
        }else{
            $this->form_validation->set_message('nama_barang', 'nama_barang'.$nama_barang.'sudah ada!');
            return false;
        }
    }
    
    public function index()
    {
        $this->load->view('v_header');
        

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('barang/barang_list', $data);
        $this->load->view('v_footer');
    }

    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_barang' => $row->id_barang,
		'nama_barang' => $row->nama_barang,
		'id_kategori' => $row->id_kategori,
		'tgl_masuk' => $row->tgl_masuk,
		'pengirim' => $row->pengirim,
		'id_lokasi' => $row->id_lokasi,
		'barcode' => $row->barcode,
		'qr' => $row->qr,
        'stok' => $row->stok,
        'satuan' => $row->satuan,
        'fungsi' => $row->fungsi,
	    );
            $this->load->view('barang/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function create() 
    {


        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
    	    'id_barang' => set_value('id_barang'),
    	    'nama_barang' => set_value('nama_barang'),
    	    'id_kategori' => set_value('id_kategori'),
    	    'tgl_masuk' => set_value('tgl_masuk'),
    	    'pengirim' => set_value('pengirim'),
    	    'id_lokasi' => set_value('id_lokasi'),
    	    'barcode' => set_value('barcode'),
    	    'qr' => set_value('qr'),
            'stok' => set_value('stok'),
            'satuan' => set_value('satuan'),
            'fungsi' => set_value('fungsi'),
	);
        $this->load->view('barang/barang_form', $data);
    }
    
    public function create_action() 
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

            require 'vendor/autoload.php';

            // cek buku ada apa gak
            $nmbrg = $this->input->post('nama_barang',TRUE);
            $ceknama = $this->Barang_model->check_namabarang($nmbrg);
            if($ceknama>0){
                // panggil model get by name
                $dt = array(
                    'check' => $ceknama,
                    'namaBarang' => $nmbrg,
                    'keterangan' => $this->Barang_model->get_by_name($nmbrg)
                );
                $this->load->view('barang/avail',$dt);
            }
            else{

                $tanggal = date('Y-m-d H:i:s');
                $tgl = date('Y-m-d');

                $namabarcode = $this->input->post('nama_barang').'.'.$tgl.$this->input->post('id_kategori').'.'.$this->input->post('id_lokasi');

                $dummy = 'mamas';

                // buat barcode
                require 'vendor/autoload.php';

                $redColor = [255, 0, 0];

                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                file_put_contents('./assets/barcode/'.$namabarcode.'.png', $generator->getBarcode($namabarcode, $generator::TYPE_CODE_128, 3, 50, $redColor));;
                // akhir buat barcode

                //buat qr
                $this->load->library('ciqrcode');

                $params['data'] = $namabarcode;
                $params['level'] = 'H';
                $params['size'] = 10;
                $params['savename'] = FCPATH.'./assets/qr/'.$namabarcode.'.png';
                $this->ciqrcode->generate($params);




                $data = array(
        		'nama_barang' => $this->input->post('nama_barang',TRUE),
        		'id_kategori' => $this->input->post('id_kategori',TRUE),
        		'tgl_masuk' => $tanggal,
        		'pengirim' => $this->input->post('pengirim',TRUE),
        		'id_lokasi' => $this->input->post('id_lokasi',TRUE),
        		'barcode' => $namabarcode.'.png',
        		'qr' => $namabarcode.'.png',
                'stok' => $this->input->post('stok',TRUE),
                'satuan' => $this->input->post('satuan',TRUE),
                'fungsi' => $this->input->post('fungsi',TRUE),
    	    );

                $this->Barang_model->insert($data);
                $this->session->set_flashdata('message', 'Create Record Success');
                redirect(site_url('barang'));
            }
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
		'id_kategori' => set_value('id_kategori', $row->id_kategori),
		'tgl_masuk' => set_value('tgl_masuk', $row->tgl_masuk),
		'pengirim' => set_value('pengirim', $row->pengirim),
		'id_lokasi' => set_value('id_lokasi', $row->id_lokasi),
		'barcode' => set_value('barcode', $row->barcode),
		'qr' => set_value('qr', $row->qr),
        'stok' => set_value('stok', $row->stok),
        'satuan' => set_value('satuan', $row->satuan),
        'fungsi' => set_value('fungsi', $row->fungsi),
	    );
            $this->load->view('barang/barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
		'nama_barang' => $this->input->post('nama_barang',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
		'pengirim' => $this->input->post('pengirim',TRUE),
		'id_lokasi' => $this->input->post('id_lokasi',TRUE),
		'barcode' => $this->input->post('barcode',TRUE),
		'qr' => $this->input->post('qr',TRUE),
        'stok' => $this->input->post('stok',TRUE),
        'satuan' => $this->input->post('satuan',TRUE),
        'fungsi' => $this->input->post('fungsi',TRUE),
	    );

            $this->Barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required|is_unique[barang.nama_barang]',
 //    array(
 //        'required' => 'You have not provided %s.',
 //        'is_unique' => '%s sudah ada!!'
 //    )
 //    );
	$this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
	// $this->form_validation->set_rules('tgl_masuk', 'tgl masuk', 'trim|required');
	$this->form_validation->set_rules('pengirim', 'pengirim', 'trim|required');
	$this->form_validation->set_rules('id_lokasi', 'id lokasi', 'trim|required');
	// $this->form_validation->set_rules('barcode', 'barcode', 'trim|required');
	// $this->form_validation->set_rules('qr', 'qr', 'trim|required');
    $this->form_validation->set_rules('stok', 'stok', 'trim|required');
    $this->form_validation->set_rules('satuan', 'satuan', 'trim|required');
    $this->form_validation->set_rules('fungsi', 'fungsi', 'trim|required');


	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-06 19:47:17 */
/* http://harviacode.com */
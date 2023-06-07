<?php
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class RekamMedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("M_RM");
        $this->load->model("M_AnalisisRM");
        $this->load->model("M_poli");
        //$this->load->library('Excel');
    }

    function index()
    {
        $data = [
            'tittle'        => 'SIAKRM - Data Rekam Medis Pasien',
            'judul'         => 'DATA REKAM MEDIS',
            'head'          => 'Rekam Medis',
            'isi'           => 'rekam_medis/v_rm/list',
            'rms'           => $this->M_RM->tampil_rm(),
            'pl'            => $this->M_poli->tampil_poli(),
            'no_rm'         => $this->M_RM->ambil_kode(),
        ];
        check_not_login();
        $this->load->view('_partial/wrapper_content', $data);
    }

    public function unggah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status_unggah = $this->unggahxls();
            if ($status_unggah != false) {
                $inputFileName = 'excel/' . $status_unggah;
                $inputTileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
                $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputTileType);
                $spreadsheet = $reader->load($inputFileName);
                $sheet = $spreadsheet->getSheet(0);
                $count_Rows = 0;
                foreach ($sheet->getRowIterator() as $row) {
                    $nama           = $spreadsheet->getActiveSheet()->getCell('A' . $row->getRowIndex());
                    $no_rm          = $spreadsheet->getActiveSheet()->getCell('B' . $row->getRowIndex());
                    $no_bpjs        = $spreadsheet->getActiveSheet()->getCell('C' . $row->getRowIndex());
                    $no_ktp         = $spreadsheet->getActiveSheet()->getCell('D' . $row->getRowIndex());
                    $JK             = $spreadsheet->getActiveSheet()->getCell('E' . $row->getRowIndex());
                    $tanggal_lahir  = $spreadsheet->getActiveSheet()->getCell('F' . $row->getRowIndex());
                    $umur           = $spreadsheet->getActiveSheet()->getCell('G' . $row->getRowIndex());
                    $alamat         = $spreadsheet->getActiveSheet()->getCell('H' . $row->getRowIndex());
                    $pekerjaan      = $spreadsheet->getActiveSheet()->getCell('I' . $row->getRowIndex());
                    $keluhan        = $spreadsheet->getActiveSheet()->getCell('J' . $row->getRowIndex());
                    $terapi         = $spreadsheet->getActiveSheet()->getCell('K' . $row->getRowIndex());
                    $tensi          = $spreadsheet->getActiveSheet()->getCell('L' . $row->getRowIndex());
                    $nadi           = $spreadsheet->getActiveSheet()->getCell('M' . $row->getRowIndex());
                    $suhu           = $spreadsheet->getActiveSheet()->getCell('N' . $row->getRowIndex());
                    $pernapasan     = $spreadsheet->getActiveSheet()->getCell('O' . $row->getRowIndex());
                    $tinggi         = $spreadsheet->getActiveSheet()->getCell('P' . $row->getRowIndex());
                    $berat          = $spreadsheet->getActiveSheet()->getCell('Q' . $row->getRowIndex());
                    $lingkar_perut  = $spreadsheet->getActiveSheet()->getCell('R' . $row->getRowIndex());
                    $id_diagnosa    = $spreadsheet->getActiveSheet()->getCell('S' . $row->getRowIndex());
                    $diagnosa       = $spreadsheet->getActiveSheet()->getCell('T' . $row->getRowIndex());
                    $tindakan       = $spreadsheet->getActiveSheet()->getCell('U' . $row->getRowIndex());

                    $data = array(
                        'nama'          => $nama,
                        'no_rm'         => str_replace("`","",$no_rm),
                        'no_bpjs'       => str_replace("`","",$no_bpjs),
                        'no_ktp'        => str_replace("`","",$no_ktp),
                        'JK'            => $JK,
                        'tanggal_lahir' => $tanggal_lahir,
                        'umur'          => $umur,
                        'alamat'        => $alamat,
                        'pekerjaan'     => $pekerjaan,
                        'keluhan'       => $keluhan,
                        'terapi'        => str_replace("-","",$terapi),
                        'tensi'         => str_replace("0/0","",$tensi),
                        'nadi'          => str_replace("0","",$nadi),
                        'suhu'          => str_replace("0","",$suhu),
                        'pernapasan'    => str_replace("0","",$pernapasan),
                        'tinggi'        => str_replace("0","",$tinggi),
                        'berat'         => str_replace("0","",$berat),
                        'lingkar_perut' => str_replace("0","",$lingkar_perut),
                        'id_diagnosa'   => $id_diagnosa,
                        'diagnosa'      => $diagnosa,
                        'tindakan'      => $tindakan,
                    );

                    $this->db->insert('tb_rekam_medis', $data);
                    $count_Rows++;
                }
                unlink('excel/' . $inputFileName);
                $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>Data berhasil diunggah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                return redirect(base_url('rekammedis'));
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>Data gagal diunggah, coba unggah lagi!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                return redirect(base_url('rekammedis'));
            }
        } else {
            return redirect(base_url('rekammedis'));
        }
    }

    public function unggahxls()
    {
        $uploadPath = './excel/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'xlsx|xls|xlt|csv';
        $config['file_name'] = 'xls' . time();
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            return $file['file_name'];
        } else {
            return false;
        }
    }

    function tambah()
    {
        $nama          = $this->input->post('nama');
        $no_rm         = $this->M_RM->ambil_kode();
        $no_bpjs       = $this->input->post('no_bpjs');
        $no_ktp        = $this->input->post('no_ktp');
        $LP            = $this->input->post('LP');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $umur          = $this->input->post('umur');
        $alamat        = $this->input->post('alamat');
        $pekerjaan     = $this->input->post('pekerjaan');
        $keluhan       = $this->input->post('keluhan');
        $terapi        = $this->input->post('terapi');
        $tensi         = $this->input->post('tensi');
        $nadi          = $this->input->post('nadi');
        $suhu          = $this->input->post('suhu');
        $pernapasan    = $this->input->post('pernapasan');
        $tinggi        = $this->input->post('tinggi');
        $berat         = $this->input->post('berat');
        $lingkar_perut = $this->input->post('lingkar_perut');
        $id_diagnosa   = $this->input->post('id_diagnosa');
        $diagnosa      = $this->input->post('diagnosa');
        $tindakan      = $this->input->post('tindakan');

        $data = array(
            'nama'          => $nama,
            'no_rm'         => $no_rm,
            'no_bpjs'       => $no_bpjs,
            'no_ktp'        => $no_ktp,
            'L/P'           => $LP,
            'tanggal_lahir' => $tanggal_lahir,
            'umur'          => $umur,
            'alamat'        => $alamat,
            'pekerjaan'     => $pekerjaan,
            'keluhan'       => $keluhan,
            'terapi'        => $terapi,
            'tensi'         => $tensi,
            'nadi'          => $nadi,
            'suhu'          => $suhu,
            'pernapasan'    => $pernapasan,
            'tinggi'        => $tinggi,
            'berat'         => $berat,
            'lingkar_perut' => $lingkar_perut,
            'id_diagnosa'   => $id_diagnosa,
            'diagnosa'      => $diagnosa,
            'tindakan'      => $tindakan,
        );
        // $this->M_RM->simpan($data);
        $this->M_AnalisisRM->simpan($data);
        return redirect(base_url('rekammedis'));
    }

    function detail()
    {
        $data = [
            'tittle'        => 'SIAKRM - Detail User',
            'judul'         => 'DATA USER',
            'users'         => $this->M_users->tampil_user(),
            'roles'         => $this->M_users->tampil_role(),
        ];
        $this->load->view('rekam_medis/v_user/detail', $data);
    }
}

<?php namespace App\Controllers;

// Panggil JWT
use \Firebase\JWT\JWT;
// panggil class Auht
use App\Controllers\Auth;
use App\Models\MahasiswaModel;
// panggil restful api codeigniter 4
use CodeIgniter\RESTful\ResourceController;

header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

class Mahasiswa extends ResourceController
{

    public function __construct()
    {
        // inisialisasi class Auth dengan $this->protect
        $this->protect         = new Auth();
        $this->model_mahasiswa = new MahasiswaModel();
        $pager                 = \Config\Services::pager();
    }
    protected $format       = 'json'; //atur format output

    public function index()
    {
        // ambil dari controller auth function public private key
        $secret_key = $this->protect->privateKey();

        $token = null;

        $authHeader = $this->request->getServer('HTTP_AUTHORIZATION');

        $arr = explode(" ", $authHeader);

        $token = $arr[1];

        if($token){

            try {

                $decoded = JWT::decode($token, $secret_key, array('HS256'));

                // Access is granted. Add code of the operation here
                if($decoded){
                    // response true
                    $output = [
                        'message' => 'Access granted'
                    ];
                    return '200';
                }


            } catch (\Exception $e){

                $output = [
                    'message' => 'Access denied',
                    "error" => $e->getMessage()
                ];

                return '401';
            }
        }
    }

    public function getData()
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        if($_GET){
          $data     = $this->model_mahasiswa->orderBy('id_mahasiswa', 'DESC')->paginate($_GET['limit'],'group1',$_GET['page']);
          $perPage  = count($data);
        }else{
          $data     = $this->model_mahasiswa->getData();
          $perPage  = count($data);
        }
        $response = [
            'status' => 200,
            'pesan'  => $data,
            'count'  => $perPage
        ];
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);
    }

    public function search()
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        if($_GET){
          if(isset($_GET['jurusan']) || isset($_GET['nama'])){
            $status = '200';
            $jurusan  = isset($_GET['jurusan']) ? $_GET['jurusan'] : '' ;
            $nama     = isset($_GET['nama']) ? $_GET['nama'] : '' ;
            $data     = $this->model_mahasiswa->search($nama,$jurusan)->paginate($_GET['limit'],'group1',$_GET['page']);
            $perPage  = count($data);
          }else{
            $status   = '500';
            $data     = 'Masukkan keyword';
            $perPage  = '';
          }
        }else{
          $status   = '405';
          $data     = 'Parameter tidak boleh kosong';
          $perPage  = '';
        }
        $response = [
            'status' => 200,
            'pesan'  => $data,
            'count'  => $perPage
        ];
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);
    }


    public function add()
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        $nama_mahasiswa     = $this->request->getPost('nama_mahasiswa');
        $jurusan_mahasiswa  = $this->request->getPost('jurusan_mahasiswa');
        $create_at          = date('Y-m-d H:i:s');

        $dataAdd = [
            'nama_mahasiswa'    => $nama_mahasiswa,
            'jurusan_mahasiswa' => $jurusan_mahasiswa,
            'create_at'         => $create_at
        ];

        $add = $this->model_mahasiswa->add($dataAdd);

        if($add == true){
          $response = [
              'status' => 200,
              'pesan'  => 'Berhasil Tambah Data'
          ];
        } else {
          $response = [
              'status' => 400,
              'pesan'  => 'Gagal Tambah Data'
          ];
        }
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);

    }

    public function edit($id = NULL)
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        if (!empty($id)) {
          $nama_mahasiswa     = $this->request->getPost('nama_mahasiswa');
          $jurusan_mahasiswa  = $this->request->getPost('jurusan_mahasiswa');
          $update_at          = date('Y-m-d H:i:s');

          $dataEdit = [
              'nama_mahasiswa'    => $nama_mahasiswa,
              'jurusan_mahasiswa' => $jurusan_mahasiswa,
              'update_at'         => $update_at
          ];

          $edit = $this->model_mahasiswa->edit($dataEdit,$id);

          if($edit == true){
            $response = [
                'status' => 200,
                'pesan'  => 'Berhasil Edit Data Id '.$id
            ];
          } else {
            $response = [
                'status' => 400,
                'pesan'  => 'Gagal Edit Data'
            ];
          }
        }else{
          $response = [
              'status' => 400,
              'pesan'  => 'Parameter Kosong'
          ];
        }
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);
    }

    public function detail($id=NULL)
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        if (!empty($id)) {
          $data = $this->model_mahasiswa->getOne($id);
          $response = [
              'status' => 200,
              'pesan'  => $data
          ];
        }else{
          $response = [
              'status' => 400,
              'pesan'  => 'Parameter Kosong'
          ];
        }
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);
    }

    public function delete($id=NULL)
    {
      $cek_token = $this->index();
      if ($cek_token == '200') {
        if (!empty($id)) {
          $hapus = $this->model_mahasiswa->hapus($id);

          if($hapus == true){
            $response = [
                'status' => 200,
                'pesan'  => 'Berhasil Hapus Data Id '.$id
            ];
          } else {
            $response = [
                'status' => 400,
                'pesan'  => 'Gagal Hapus Data'
            ];
          }
        }else{
          $response = [
              'status' => 400,
              'pesan'  => 'Parameter Kosong'
          ];
        }
      }else{
        $response = [
            'status' => 401,
            'pesan'  => 'token rejected'
        ];
      }

      return $this->respond($response, $response['status']);
    }

}

<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\AuthModel;

class C_Login extends Controller
{
    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel;
    }
    public function index(): string
    {
        $data = [
            'title' => 'Login'
        ];
        return view('home/login', $data);
    }

    public function register()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'nama_lengkap' => $this->request->getPost('nama'),
            'password' => $this->request->getPost('password')
        ];

        $this->usersModel->tambahData($data);
        //redirect atau autoload 
        session()->setFlashdata('create', 'Akun berhasil dibuat, silahkan login');
        return redirect()->to('/login');
    }

    public function login(){
        $model = new AuthModel;
        $table = 'users';
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($email,$table);
        if ($row == NULL){
            session()->setFlashdata('pesan','email anda salah');
            return redirect()->to('/login');
        }
        if ($password == $row->password){
                $data = array(
                    'log' => TRUE,
                    'id' => $row->id,
                    'password' => $row->password,
                    'nama_lengkap' => $row->nama_lengkap,
                    'email' => $row->email,
                    'no_telp' => $row->no_telp
                );
                session()->set($data);
                session()->setFlashdata('login','Berhasil Login');
                return redirect()->to('/');
        }
                session()->setFlashdata('pesan','Password Salah');
                return redirect()->to('/login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        session()->setFlashdata('login','Berhasil Logout');
        return redirect()->to('/');
    }
    
    public function hapus($id)
    {
        //memanggil fungsi hapus data pada model
        $session = session();
        $session->destroy();
        $this->usersModel->hapusData($id);
        session()->setFlashdata('login','Akun telah dihapus');
        return redirect()->to('/');
    }

    public function edit(){
        $data = [
            'log' => TRUE,
            'id' => $this->request->getPost('id'),
            'email' => $this->request->getPost('email'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password' => $this->request->getPost('password')
        ];
        session()->set($data);
        $this->usersModel->tambahData($data);
        //redirect atau autoload 
        session()->setFlashdata('update', 'Data berhasil diubah');
        return redirect()->to('/profile');
    }
    
}
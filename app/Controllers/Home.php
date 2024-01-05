<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\TransaksiModel;
use App\Models\UsersModel;
use App\Models\AuthModel;

class Home extends BaseController
{
    protected $produkModel;
    protected $transaksiModel;
    protected $usersModel;
    protected $authModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel;
        $this->transaksiModel = new TransaksiModel;
        $this->usersModel = new UsersModel;
        $this->authModel = new AuthModel;
    }
    public function index(): string
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home/index', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About'
        ];
        return view('home/about', $data);
    }

    public function checkout(): string
    {
        $data = [
            'title' => 'Checkout'
        ];
        return view('home/checkout', $data);
    }

    public function profile()
    {
        $tr = $this->transaksiModel->riwayat();
        $data = [
            'title' => 'Profile',
            'tr' => $tr
        ];
        return view('home/profile', $data);
    }
}
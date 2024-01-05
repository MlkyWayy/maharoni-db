<?php

namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\ProdukModel;

class C_Transaksi extends BaseController
{
    protected $transaksiModel;
    protected $produkModel;
    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel;
        $this->produkModel = new ProdukModel;
    }

    public function index($id): string
    {
        $produk = $this->produkModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Checkout',
            'produk' => $produk
        ];
        return view('home/checkout', $data);
    }
    
    public function beli(){     
        $data = [
            'id_produk' => $this->request->getVar('id'),
            'id_pengguna' => $this->request->getVar('id_pengguna'),
            'jumlah' => $this->request->getVar('jumlah'),
            'total' => $this->request->getVar('total'),
            'alamat' => $this->request->getVar('alamat'),
            'status' => $this->request->getVar('status'),
            'jasa_kirim' => $this->request->getVar('jasa_kirim'),
        ];
        $this->transaksiModel->tambahData($data);
        //redirect atau autoload 
        session()->setFlashdata('pesan', 'Pesanan berhasil dibuat');
        return redirect()->to('/');
    }
}
<?php

namespace App\Controllers;
use App\Models\ProdukModel;

class C_Products extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel;
    }

    public function index(): string
    {
        $produk = $this->produkModel->findAll();
        $data = [
            'title' => 'Products',
            'produk' => $produk
        ];
        return view('home/products', $data);
    }

    public function detail($id)
    {
        $produk = $this->produkModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Detail',
            'produk' => $produk
        ];
        return view('home/product_detail', $data);
    }

    
}
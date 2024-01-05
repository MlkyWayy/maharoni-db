<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $allowedFields = [
        'id_produk',
        'id_pengguna',
            'jumlah',
            'total',
            'alamat',
            'status',
            'jasa_kirim'
    ];
    
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $returnType = 'object';

    public function tambahData($data)
    {
        //syntax ini sama dengan INSERT INTO tablename (....) VALUE (....)
        //apabila variable $data tidak mengandung primary key, maka akan menjadi syntax INSERT
        //apabila variable $data mengandung primary key, maka akan menjadi syntax UPDATE 
        $this->save($data);
    }

    function riwayat(){
        $builder = $this->db->table('transaksi');
        $builder->join('produk', 'produk.id = transaksi.id_produk');
        $builder->join('users', 'users.id = transaksi.id_pengguna');
        $builder->where('id_pengguna', session('id'));
        $query = $builder->get();
        return $query->getResult();
    }
    
}
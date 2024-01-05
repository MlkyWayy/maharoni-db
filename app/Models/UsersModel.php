<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'nama_lengkap',
        'email',
        'password',
        'no_telp',
    ];

    public function tambahData($data)
    {
        //syntax ini sama dengan INSERT INTO tablename (....) VALUE (....)
        //apabila variable $data tidak mengandung primary key, maka akan menjadi syntax INSERT
        //apabila variable $data mengandung primary key, maka akan menjadi syntax UPDATE 
        $this->save($data);
    }

     public function hapusData($id)
    {
        //syntax ini sama dengan DELETE FROM tablename WHERE ....
        $this->delete($id);
    }
    
}
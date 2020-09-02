<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model{

    protected $table = "mahasiswa";

    public function add($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query ? true : false;
    }

    public function getData($id=NULL)
    {
      if(empty($id)){
        $hasil = $this->table($this->table)
                ->orderBy('id_mahasiswa', 'DESC')
                ->get()
                ->getResultArray();
        return $hasil;
      }else{
        $hasil = $this->table($this->table)
                ->where('id_mahasiswa', $id)
                ->get()
                ->getRowArray();
        return $hasil;
      }
    }

    public function edit($data,$id)
    {
        $query = $this->db->table($this->table)->update($data, ['id_mahasiswa' => $id]);
        return $query ? true : false;
    }

    public function hapus($id)
    {
        $query = $this->db->table($this->table)->delete(['id_mahasiswa' => $id]);
        return $query ? true : false;
    }
}

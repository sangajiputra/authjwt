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

    public function getData($offset=NULL,$limit=NULL)
    {
      if(empty($offset)){
        $hasil = $this->table($this->table)
                ->orderBy('id_mahasiswa', 'DESC')
                ->get()
                ->getResultArray();
      }else{
        $hasil = $this->table($this->table)
                ->orderBy('id_mahasiswa', 'DESC')
                ->offset($offset)
                ->limit($limit)
                ->get()
                ->getResultArray();
      }
      return $hasil;
    }

    public function search($nama=NULL, $jurusan=NULL)
    {
      $hasil = $this->table($this->table)
              ->like('nama_mahasiswa',$nama)
              ->like('jurusan_mahasiswa',$jurusan)
              ->orderBy('id_mahasiswa', 'DESC');
      return $hasil;
    }

    public function getOne($id=NULL)
    {
      $hasil = $this->table($this->table)
              ->where('id_mahasiswa', $id)
              ->get()
              ->getRowArray();
      return $hasil;
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

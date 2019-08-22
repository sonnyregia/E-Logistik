<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class No_urut extends CI_Model
{

    function buat_kode_barang()   {    
      $this->db->select('RIGHT(barang.id_barang,4) as kode', FALSE);
      $this->db->order_by('id_barang','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('barang');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
      $kodejadi = "BRG".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_bmn()   {    
      $this->db->select('RIGHT(barang_aset_sub.id_aset_sub,4) as kode', FALSE);
      $this->db->order_by('id_aset_sub','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('barang_aset_sub');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
      $kodejadi = "BMN".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_pinjam()   {    
      $this->db->select('RIGHT(barang_aset_pinjam.id_aset_pinjam,5) as kode', FALSE);
      $this->db->order_by('id_aset_pinjam','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('barang_aset_pinjam');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
      $kodejadi = "PJM".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_kembali()   {    
      $this->db->select('RIGHT(barang_aset_kembali.id_aset_kembali,5) as kode', FALSE);
      $this->db->order_by('id_aset_kembali','ASC');    
      $this->db->limit(1);     
      $query = $this->db->get('barang_aset_kembali');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
      $kodejadi = "KMB".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_penjualan()   {    
      $this->db->select('RIGHT(transaksi.id_transaksi,5) as kode', FALSE);
      $this->db->order_by('id_transaksi','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('transaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);    
      $kodejadi = "TR".$kodemax;     
      return $kodejadi;  
     }

     function buat_kode_santri()   {    
      $this->db->select('RIGHT(santri.id_santri,5) as kode', FALSE);
      $this->db->order_by('id_santri','DESC');    
      $this->db->limit(1);     
      $query = $this->db->get('santri');      //cek dulu apakah ada sudah ada kode di tabel.    
      if($query->num_rows() <> 0){       
       //jika kode ternyata sudah ada.      
       $data = $query->row();      
       $kode = intval($data->kode) + 1;     
      }
      else{       
       //jika kode belum ada      
       $kode = 1;     
      }
      $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);    
      $kodejadi = "SN".$kodemax;     
      return $kodejadi;  
     }

}

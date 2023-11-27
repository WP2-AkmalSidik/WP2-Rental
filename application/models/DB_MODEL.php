<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//

class DB_MODEL extends CI_Model
{
   public function getOne($table,$column,$data)
   {
      if( $table === 'application' )
      {
         return
            $this->db->
               where($column, $data)->
                  get($table)->
                     row();
      }
      
      return 
         $this->db->
            where($column, $data)->
               get($table)->
                  row();
   }

   public function cekUser($table,$data)
   {
      return $this->db->
         where('username',$data)->
            get($table)->
               row();
   }

   public function cekName($table,$data)
   {
      return $this->db->
         where('nama_member',$data)->
            get($table)->
               row();
   }
   
   public function getAll($table)
   {
      return
         $this->db->
               get($table)->
                  result();
   }
   
   public function getPesanan($table)
   {
      $this->db->select('*');
      $this->db->join('member','member.nik = '. $table .'.nik');
      $this->db->join('paket','paket.id_paket = '. $table .'.id_paket');
      $this->db->join('driver','driver.id_driver = '. $table .'.id_driver');
      $this->db->join('mobil','mobil.id_mobil = '. $table .'.id_mobil');
      $this->db->from($table);

      return
         $this->db->
            get()->
               result();
   }
   
   public function getTransaksi($table)
   {
      $this->db->select('*');
      $this->db->join('pesanan','pesanan.id_pesanan = '. $table .'.id_pesanan');
      $this->db->join('member','member.nik = pesanan.nik');
      $this->db->join('driver','driver.id_driver = pesanan.id_driver');
      $this->db->join('paket','paket.id_paket = pesanan.id_paket');
      $this->db->join('mobil','mobil.id_mobil = pesanan.id_mobil');
      $this->db->from($table);

      return
         $this->db->
            get()->
               result();
   }

   public function getLimit($table,$limit)
   {
      return
         $this->db->limit($limit)->
            get($table)->
               result();
   }

   public function insert($table,$data)
   {
      return
         $this->db->
            insert($table, $data);
   }

   public function delete($table,$column,$data)
   {
      return
         $this->db->
            where($column,$data)->
               delete($table);
   }

   public function update($table, $data)
   {
      if( $table === 'member' )
      {
         $this->db->
            where('nik', $data['nik'])->
               update($table, $data);
      }

      if( $table === 'mobil' )
      {
         $this->db->
            where('id_mobil', $data['id_mobil'])->
               update($table, $data);
      }

      if( $table === 'pesanan' )
      {
         $this->db->
            where('nik', $data['nik'])->
               update($table, array( 'bukti_pembayaran' => $data['bukti_pembayaran'] ));
      }

      if( $table === 'paket' )
      {
         $this->db->
            where('id_paket', $data['id_paket'])->
               update($table, $data);
      }

      if( $table === 'driver' )
      {
         $this->db->
            where('id_driver', $data['id_driver'])->
               update($table, $data);
      }

      if( $table === 'application' )
      {
         $this->db->
            where('name', 'color')->
               update($table, array('value' => $data));
      }

      return true;

   }

}

//=======>***)->  Izzat alharis - RBX family - Brebes - Jawa Tengah  <-(***<=======//
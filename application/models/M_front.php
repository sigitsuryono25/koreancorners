<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_front
 *
 * @author sigit
 */
class M_front extends CI_Model{
    //put your code here
    
    function getKategoriList($showIn){
        return $this->db->query("SELECT * FROM tb_kategori $showIn");
    }
    
    function getKontenByKategori($slug, $limit = null){
        return $this->db->query("SELECT * FROM tb_post INNER JOIN tb_kategori ON category=tb_kategori.id WHERE slug IN ('$slug') $limit");
    }
    
    function getPopularPost() {
        return $this->db->query("SELECT * FROM tb_post ORDER BY viewers DES LIMIT 0,7");
    }
    
    function getRecentArticle($limit){
        return $this->db->query("SELECT * FROM tb_post ORDER BY date_post DESC $limit");
    }
    
    function getDetailArticle($slugTitle){
        return $this->db->query("SELECT * FROM tb_post LEFT JOIN tb_kategori ON category=tb_kategori.id WHERE slug_title IN ('$slugTitle')");
    }
}

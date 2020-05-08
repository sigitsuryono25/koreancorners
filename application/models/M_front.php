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
class M_front extends CI_Model {

    //put your code here

    function getKategoriList($showIn) {
        return $this->db->query("SELECT * FROM tb_kategori_source $showIn");
    }

    function getKontenByKategori($slug, $limit = null) {
        return $this->db->query("SELECT * FROM tb_post INNER JOIN tb_kategori_source "
                . "ON category=tb_kategori_source.id WHERE slug IN ('$slug') ORDER BY original_published_date DESC $limit");
    }

    function getKategoriBySlug($slug) {
        return $this->db->query("SELECT * FROM tb_kategori_source WHERE slug IN ('$slug')");
    }

    function getPopularPost() {
        return $this->db->query("SELECT * FROM tb_post ORDER BY viewers DESS LIMIT 0,7");
    }

    function getRecentArticle($limit) {
        return $this->db->query("SELECT * FROM tb_post ORDER BY original_published_date DESC $limit");
    }

    function getDetailArticle($slugTitle) {
        return $this->db->query("SELECT * FROM tb_post LEFT JOIN tb_kategori_source ON category=tb_kategori_source.id WHERE slug_title IN ('$slugTitle')");
    }

    function getRandArticle() {
        return $this->db->query("SELECT * FROM `tb_post` ORDER BY RAND() DESC LIMIT 8");
    }

    //API Service

    function getKategoriSource($idSource) {
        return $this->db->query("SELECT *, tb_kategori.id as id_kategori_source  FROM tb_kategori INNER JOIN tb_source ON tb_kategori.id_source=tb_source.id WHERE id_source IN ('$idSource')");
    }

    function getAllKategori() {
        return $this->db->query("SELECT * FROM tb_kategori_source ORDER BY id ASC");
    }

    function getAllSource() {
        return $this->db->query("SELECT * FROM tb_source ORDER BY id ASC");
    }

    function getLatestPost($limit) {
        return $this->db->query("SELECT * FROM tb_post LEFT JOIN tb_kategori_source ON tb_post.category=tb_kategori_source.id "
                        . " LIMIT $limit");
    }

    function getArticleBySlug($slug) {
        return $this->db->query("SELECT * FROM tb_post WHERE slug_title IN ('$slug')");
    }

    function insertArticle($table, $data) {
        return $this->db->insert($table, $data);
    }

}

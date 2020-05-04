<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $notShow = "WHERE id NOT IN ('2', '3', '4', '5', '7', '11')";
        $showing = "WHERE id IN ('2', '3', '4', '5', '7', '11')";
        $data['lainnya'] = $this->front->getKategoriList($notShow);
        $data['kategori'] = $this->front->getKategoriList($showing);
        
        $data['first_new'] = $this->front->getRecentArticle("LIMIT 0,1")->row();
        $data['second__third_new'] = $this->front->getRecentArticle("LIMIT 1,2")->result();
        
        $data['idol'] = $this->front->getKontenByKategori('idol-celebrity', "LIMIT 0,3")->result();
        $data['drama'] = $this->front->getKontenByKategori('drama-movie', "LIMIT 0,10")->result();
        $data['idol'] = $this->front->getKontenByKategori('idol-celebrity', "LIMIT 0,3")->result();
        $this->load->view('headfoot/header', $data);
        $this->load->view('home');
        $this->load->view('headfoot/footer');
    }

    public function detail_article($slug) {
        $notShow = "WHERE id NOT IN ('2', '3', '4', '5', '7', '11')";
        $showing = "WHERE id IN ('2', '3', '4', '5', '7', '11')";
        $data['lainnya'] = $this->front->getKategoriList($notShow);
        $data['kategori'] = $this->front->getKategoriList($showing);
        
        $data['article'] = $this->front->getDetailArticle($slug)->row();
        $this->load->view('headfoot/header', $data);
        $this->load->view('detail-article');
        $this->load->view('headfoot/footer');
    }

}

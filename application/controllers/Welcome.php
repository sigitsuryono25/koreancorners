<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $notShow = "WHERE id NOT IN ('1','2', '3', '4', '5', '7')";
        $showing = "WHERE id IN ('1','2', '3', '4', '5', '7')";
        $data['lainnya'] = $this->front->getKategoriList($notShow);
        $data['kategori'] = $this->front->getKategoriList($showing);

        $data['first_new'] = $this->front->getRecentArticle("LIMIT 0,1")->row();
        $data['second__third_new'] = $this->front->getRecentArticle("LIMIT 1,2")->result();
        $data['drama'] = $this->front->getKontenByKategori('drama-movie', "LIMIT 0,10")->result();
        $data['idol'] = $this->front->getKontenByKategori('idol-celebrity', "LIMIT 0,4")->result();
        $data['random'] = $this->front->getRandArticle()->result();
        $data['news'] = $this->front->getKontenByKategori('news', "LIMIT 0,3")->result();
        $data['music'] = $this->front->getKontenByKategori('music-video', "LIMIT 0,3")->result();
        $data['variety'] = $this->front->getKontenByKategori('variety-show', "LIMIT 0,3")->result();
        $data['food'] = $this->front->getKontenByKategori('food', "LIMIT 0,2")->result();
        $data['fashion'] = $this->front->getKontenByKategori('fashion-beauty', "LIMIT 0,2")->result();
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

    public function getArticleByKategori($slugCategory = null) {
        $skip = 0 * 10;
        $limit = "LIMIT $skip, 10";

        $notShow = "WHERE id NOT IN ('2', '3', '4', '5', '7', '11')";
        $showing = "WHERE id IN ('2', '3', '4', '5', '7', '11')";
        $data['lainnya'] = $this->front->getKategoriList($notShow);
        $data['kategori'] = $this->front->getKategoriList($showing);

        $data['content'] = $this->front->getKontenByKategori($slugCategory, $limit)->result();
        $this->load->view('headfoot/header', $data);
        $this->load->view('kategori-list', $data);
        $this->load->view('headfoot/footer');
    }

}

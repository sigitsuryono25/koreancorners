<?php

class Api extends CI_Controller {

    function getListKategoriBySource($source) {
        $kategori = $this->front->getKategoriSource($source);
        $data['data'] = [];
        if ($kategori->num_rows() > 0) {
            foreach ($kategori->result() as $key => $k) {
                $tmp = [];
                $tmp['nama'] = $k->nama;
                $tmp['id'] = $k->id_kategori_source;
                $tmp['id_source'] = $k->id_source;
                $tmp['slug'] = $k->slug;
                $tmp['base_url'] = $k->base_url;

                array_push($data['data'], $tmp);
            }

            $data['message'] = "data found";
            $data['code'] = 200;

            echo json_encode($data);
        } else {
            echo json_encode(['message' => "no data found", 'code' => 404]);
        }
    }

    function getKategori() {
        $kategori = $this->front->getAllKategori();
        $data['data'] = [];
        if ($kategori->num_rows() > 0) {
            foreach ($kategori->result() as $key => $k) {
                $tmp = [];
                $tmp['nama'] = $k->nama;
                $tmp['id'] = $k->id;
                $tmp['id_source'] = $k->id_source;
                $tmp['slug'] = $k->slug;

                array_push($data['data'], $tmp);
            }

            $data['message'] = "data found";
            $data['code'] = 200;

            echo json_encode($data);
        } else {
            echo json_encode(['message' => "no data found", 'code' => 404]);
        }
    }

    function getSource() {
        $source = $this->front->getAllSource();
        $data['data'] = [];
        if ($source->num_rows() > 0) {
            foreach ($source->result() as $key => $k) {
                $tmp = [];
                $tmp['source_name'] = $k->source_name;
                $tmp['id'] = $k->id;
                $tmp['base_url'] = $k->base_url;

                array_push($data['data'], $tmp);
            }

            $data['message'] = "data found";
            $data['code'] = 200;

            echo json_encode($data);
        } else {
            echo json_encode(['message' => "no data found", 'code' => 404]);
        }
    }

    function getPost($limit = 10) {
        $post = $this->front->getLatestPost($limit);
        $data['data'] = [];
        if ($post->num_rows() > 0) {
            foreach ($post->result() as $key => $k) {
                $tmp = [];
                $tmp['title'] = $k->title;
                $tmp['content'] = $k->content;
                $tmp['thumbnail'] = $k->thumbnail;
                $tmp['date_post'] = $k->date_post;
                $tmp['slug_title'] = $k->slug_title;
                $tmp['original_link'] = $k->original_link;

                array_push($data['data'], $tmp);
            }

            $data['message'] = "data found";
            $data['code'] = 200;

            echo json_encode($data);
        } else {
            echo json_encode(['message' => "no data found", 'code' => 404]);
        }
    }

    function getPostDetail($slug) {
        $post = $this->front->getDetailArticle($slug);
        $data['data'] = [];
        if ($post->num_rows() > 0) {
            foreach ($post->result() as $key => $k) {
                $tmp = [];
                $tmp['title'] = $k->title;
                $tmp['content'] = $k->content;
                $tmp['thumbnail'] = $k->thumbnail;
                $tmp['date_post'] = $k->date_post;
                $tmp['slug_title'] = $k->slug_title;
                $tmp['original_link'] = $k->original_link;

                array_push($data['data'], $tmp);
            }

            $data['message'] = "data found";
            $data['code'] = 200;

            echo json_encode($data);
        } else {
            echo json_encode(['message' => "no data found", 'code' => 404]);
        }
    }

    function insertContent() {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $category = $this->input->post('category');
        $thumbnail = $this->input->post('thumbnail');
        $addedBy = $this->input->post('addedby');
        $datePost = $this->input->post('date_post');
        $slugTitle = $this->input->post('slug_title');
        $originalLink = $this->input->post('original_link');

        $dataInsert = [
            'title' => $title,
            'content' => $content,
            'thumbnail' => $thumbnail,
            'added_by' => $addedBy,
            'category' => $category,
            'date_post' => $datePost,
            'slug_title' => $slugTitle,
            'original_link' => "https:".$originalLink,
        ];

        $res = $this->front->insertArticle('tb_post', $dataInsert);
        if ($res) {
            $data['message'] = "insert berhasil";
            $data['code'] = 200;
            echo json_encode($data);
        } else {
            echo json_encode(['message' => "insert gagal", 'code' => 404]);
        }
    }

}

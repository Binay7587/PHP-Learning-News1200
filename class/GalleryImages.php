<?php
    class GalleryImages extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('gallery_images');
        }

        public function addImages($data){
            return $this->insert($data);
        }

        public function getImagesByGalleryId($gallery_id){
            $args = array(
                'where' => array(
                    'gallery_id' => $gallery_id
                )
            );

            return $this->select($args);
        }

        public function getImageByName($name){
            $args = array(
                'where' => array(
                    'image_name' => $name
                )
            );

            return $this->select($args);
        }

        public function deleteImageByName($name){
            $args = array(
                'where' => array(
                    'image_name' => $name
                )
            );

            return $this->delete($args);
        }
    }
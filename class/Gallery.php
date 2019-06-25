<?Php

    final class Gallery extends Database{
        public function __construct()
        {
            Database::__construct();
            $this->table('gallery');
        }

        public function addGallery($data){
            return $this->insert($data);
        }

        public function getAllGallery(){
            return $this->select();
        }

        public function getGalleryById($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->select($args);
        }

        public function deleteCate($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->delete($args);
        }

        public function updateGallery($data, $gallery_id){
            $args = array(
                'where' => array(
                    'id' => $gallery_id
                )
            );

            return $this->update($data, $args);
        }
    }
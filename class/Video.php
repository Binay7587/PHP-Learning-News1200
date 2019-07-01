<?php
    final class Video extends Database{
        public function __construct()
        {
            Database::__construct();
            $this->table('videos');
        }

        public function addVideo($data){
            return $this->insert($data);
        }

        public function getAllVideo(){
            return $this->select();
        }

        public function getVideos($limit){
            $args = array(
                'where' => array(
                    'status' => 'active'
                ),
                'order_by' => 'id DESC',
                'limit' => ' 0, '.$limit
            );

            return $this->select($args);
        }

        public function getVideoById($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->select($args);
        }

        public function deleteVideo($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->delete($args);
        }

        public function updateVideo($data, $video_id){
            $args = array(
                'where' => array(
                    'id' => $video_id
                )
            );

            return $this->update($data, $args);
        }
    }
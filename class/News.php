<?Php

    final class News extends Database{
        public function __construct()
        {
            Database::__construct();
            $this->table('news');
        }

        public function addNews($data){
            return $this->insert($data);
        }

        public function getAllNews(){
            return $this->select();
        }

        public function getNewsById($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->select($args);
        }

        public function deleteNews($id){
            $args = array(
                'where' => array(
                    'id' => $id
                )
            );

            return $this->delete($args);
        }

        public function updateNews($data, $news_id){
            $args = array(
                'where' => array(
                    'id' => $news_id
                )
            );

            return $this->update($data, $args);
        }
    }
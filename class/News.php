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
                'fields' => 'news.*, users.name, categories.title as cat_title',
                'where' => 'news.id = '.$id,
                'join' => ' LEFT JOIN users ON users.id = news.reporter LEFT JOIN categories ON news.cat_id = categories.id'
            );

            return $this->select($args);
        }

        public function getRelatedNews($cat_id, $id){
            $args = array(
                'fields' => 'id, title, summary, image, location',
                'where' => ' cat_id = '.$cat_id.' AND status = "active"  AND id != '.$id,
                'order_by' => 'id DESC',
                'limit' => ' 0, 4'
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

        public function getNewsByCatId($cat_id, $limit){
            // SELECT * FROM news WHERE cat_id = $cat_id AND status = 'active' ORDER BY id DESC LIMIT 0, $limit

            $args = array(
                'fields' => 'id, title, summary, image, location',
                'where' => array(
                    'cat_id' => $cat_id,
                    'status' => 'active'
                ),
                'order_by' => 'id DESC',
                'limit' => ' 0, '.$limit
            );

            return $this->select($args);
        }
    }
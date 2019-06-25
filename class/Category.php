<?Php

    final class Category extends Database{
        public function __construct()
        {
            Database::__construct();
            $this->table('categories');
        }

        public function addCategory($data){
            return $this->insert($data);
        }

        public function getAllCategory(){
            return $this->select();
        }

        public function getCategoryById($id){
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

        public function updateCategory($data, $cat_id){
            $args = array(
                'where' => array(
                    'id' => $cat_id
                )
            );

            return $this->update($data, $args);
        }

        public function getMenuCategory(){
            $args = array(
                'where' => array(
                    'status' => 'active'
                ),
                'order_by'  => 'title ASC'
            );
            return $this->select($args);
        }
    }
<?php 
    abstract class Database{
        protected $conn = null;
        protected $sql = null;
        protected $stmt = null;
        protected $table = null;

        public function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER,DB_PWD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // SET NAMES utf8

                $this->sql = "SET NAMES utf8";
                $this->stmt = $this->conn->prepare($this->sql);
                $this->stmt->execute();
                
            } catch(PDOException $e){
                // 2019-06-12 12:10 PM: connection, PDO exception
                $msg = date('Y-m-d h:i A').": Connection (PDO), ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                // 2019-06-12 12:10 PM: connection, PDO exception
                $msg = date('Y-m-d h:i A').": Connection (General), ".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }

        final protected function table($_table){
            $this->table = $_table;
        }

        final protected function select($args = array(), $is_debug=false){
            try{
                /**
                 * SELECT fields FROM table
                 * LEFT/RIGHT JOIN
                 * WHERE 
                 * GROUP BY
                 * ORDER BY
                 * LIMIT start, count 
                 */

                $this->sql = "SELECT ";

                if(isset($args, $args['fields']) && !empty($args['fields'])){
                    if(is_array($args['fields'])){
                        $this->sql .= implode(", ", $args['fields']);
                    } else {
                        $this->sql .=  $args['fields'];
                    }
                } else {
                    $this->sql .= " * ";
                }

                $this->sql .= " FROM ";

                if(!isset($this->table)){
                    throw new Exception('Table not set');
                }

                $this->sql .= $this->table;
                
                // Join statement
                // Join statement

                // Where condition
                if(isset($args['where'])){
                    if(is_string($args['where'])){
                        $this->sql .= " WHERE ".$args['where'];
                    } else {
                        $temp = array();
                        foreach($args['where'] as $column_name => $value){
                            $str = $column_name." = :".$column_name;
                            $temp[] = $str;
                        }

                        $this->sql .= " WHERE ".implode(' AND ', $temp);
                    }
                }
                // Where condition

                
                // Group by condition
                // Group by condition

                // order by condition
                // order by condition

                // Limit condition
                // Limit condition


                if($is_debug){
                    debug($args);
                    debug($this->sql, true);
                }

                $this->stmt = $this->conn->prepare($this->sql);
                
                // Value binding
                if(isset($args, $args['where']) && !empty($args['where']) && is_array($args['where'])){
                    foreach($args['where'] as $column_name => $value){
                        if(is_integer($value)){
                            $param = PDO::PARAM_INT;
                        } else if(is_bool($value)){
                            $param = PDO::PARAM_BOOL;
                        } else {
                            $param = PDO::PARAM_STR;
                        }

                        if(isset($param)){
                            $this->stmt->bindValue(':'.$column_name, $value, $param);
                        }
                    }
                }
                
                $this->stmt->execute();
                $data = $this->stmt->fetchAll(PDO::FETCH_OBJ);
                return $data;


            } catch(PDOException $e){
                // 2019-06-12 12:10 PM: select, PDO exception
                $msg = date('Y-m-d h:i A').": Select (PDO), (".$this->sql.")".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            } catch(Exception $e){
                // 2019-06-12 12:10 PM: Select, PDO exception
                $msg = date('Y-m-d h:i A').": Select (General), (".$this->sql.")".$e->getMessage()."\r\n";
                error_log($msg, 3, ERROR_LOG);
                return false;
            }
        }
    }
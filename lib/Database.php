<?php
class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __contruct(){
        //Set DSN
        $dsn = "mysql:host=".$this->host . ";dbname=" . $this->dbname;

        //Set Options
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // PDO Intance
        try{
            $this->dbh = new PDO($dsn,$this->user, $this->pass,$options);
        } catch(PDOEception $e){
            $this->error =$e->getMessage();
        }
    }
        public function query($query){
            $this->stms = $this->dbh->prepare($query);
        }

        public function bind($param,$value, $type = null){
            if(is_null($type)){
               switch(true){
                        case is_int ($value) :
                            $type = PDO::PARAM_INT;
                            break;
                        case is_int ($value) :
                            $type = PDO::PARAM_BOOL;
                            break;  
                        case is_int ($value) :
                            $type = PDO::PARAM_NULL;
                            break;  
                        default:
                            $type = PDO::PARAM_STR;
               } 
            }
        }
    }
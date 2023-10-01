<?php

    class DBConnect {
        private $db;
        public $proto = "Location: /";

        const DB_SERVER = "localhost";
        const DB_USER = "root";
        const DB_PASSWORD = "";
        const DB_NAME = "wedding_point";

        public function __construct() {
            $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;
            try {
                $this->db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
            } catch (PDOException $e) {
                throw new IllegalArgumentException('Connection failed: ' .$e->getMessage());
            }
            return $this->db;
        }
        
        public function metaData(){
            $stmt = $this->db->prepare("SELECT * FROM meta_data");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function heroSec(){
            $stmt = $this->db->prepare("SELECT * FROM hero_sec");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function gallerySec(){
            $stmt = $this->db->prepare("SELECT * FROM gallery_sec");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function footerSec(){
            $stmt = $this->db->prepare("SELECT * FROM footer_sec");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function authLogin(){
            session_start();
            if(isset($_SESSION['username'])){
                header($this->proto."home.php");
            }
        }

        public function authRedirectLogin(){
            session_start();
            if(!isset($_SESSION['username'])){
                header($this->proto."login.php");
            }
        }

        public function auth(){
            session_start();
            if(!isset($_SESSION['username'])){
                header($this->proto);
            }       
        }
        
        public function login($username, $password){
            $stmt = $this->db->prepare("SELECT * FROM user WHERE username=? AND password=?");
            $stmt->execute([$username, $password]);
            if($stmt->rowCount() > 0){
                session_start();
                $retVal = $stmt->fetchAll();
                foreach($retVal as $val){
                    $_SESSION['username'] = $username;
                }
                header($this->proto."home.php");
            } else {
                return "Username Or Password Was Incorrect!";
            }
        }

        public function searchPofile($gender, $ageFrom, $ageTo, $religion, $motherTongue){
            $stmt = $this->db->prepare("SELECT * FROM profiles WHERE age BETWEEN ? AND ? AND gender=? AND mother_tongue=? AND religion=?");
            $stmt->execute([$ageFrom, $ageTo, $gender, $motherTongue, $religion]);
            if($stmt->rowCount() > 0){
                return $stmt->fetchAll();
            }else{
                return False;
            }
        }

        public function searchPofileSingle($searchParam){
            $stmt = $this->db->prepare("SELECT * FROM profiles WHERE name=?");
            $stmt->execute([$searchParam]);
            if($stmt->rowCount() > 0){
                return $stmt->fetchAll();
            }else{
                return False;
            }
        }

        public function profileUpload($profileImageName, $dataGet){
            $stmt = $this->db->prepare("INSERT INTO profiles (name, gender, age, religion, mother_tongue, profile_img, education, uplodedBy) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->execute([$dataGet['nameFldProfile'],$dataGet['genderFldProfile'],$dataGet['ageFldPPofile'],$dataGet['religionFldPPofile'],$dataGet['motherTongueFldPPofile'], $profileImageName, $dataGet['educationFldProfile'],$_SESSION['username']]);
            return $stmt?True:False;
        }

        public function signupCreate($username, $password){
            $stmt = $this->db->prepare("SELECT * FROM user WHERE username=?");
            $stmt->execute([$username]);
            if($stmt->rowCount() > 0){
                return "Try Different Username!";
            }else{    
                $stmt = $this->db->prepare("INSERT INTO user (username, password) VALUES (?,?)");
                $stmt->execute([$username, $password]);
                return $stmt?"Created Successfully!":"Something Wrong!";
            }
        }

        public function logout(){
            session_start();
            session_destroy();
            header($this->proto);
        }

        public function protocolCheck(){
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                return "https://";
            }else{
                return "http://";
            }
        }

        public function hostname(){
            return $this->protocolCheck().$_SERVER['HTTP_HOST'];
        }

    }

    $db = new DBConnect();

?>
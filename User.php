<?php
$conn =  new mysqli('localhost','root','','hamied');
if ($conn->connect_error) {
    return "DB_ERROR";
} 
    class User{
        private $data = [];
        public function __construct($name='',$email='',$mobile=''){
            
           
            $this->data['name'] = $name;
            $this->data['mobile']  = $mobile;
            $this->data['email'] = $email;
            $this->data = is_array($this->sanitize($this->data))? $this->sanitize($this->data):''; 

        }
        private function sanitize($data):array{
            $data['name'] = filter_var($data['name'],FILTER_SANITIZE_STRING);
            $data['mobile'] = filter_var($data['mobile'],FILTER_SANITIZE_NUMBER_INT);
            $data['email'] = filter_var($data['email'],FILTER_SANITIZE_EMAIL);
            return $data;
        }
        private function validate($data):array{
            $data['name'] = preg_match("/[a-zA-z]{3}+/",$data['name']);
            $data['mobile'] = preg_match("/(1)\d{9}/",$data['mobile']);
            $data['email'] = filter_var($data['email'],FILTER_VALIDATE_EMAIL);
            return $data;
        }
        private function getData(){
            
            return $this->data;
        }
        public function sendData(){
            $data = $this->validate($this->data);
            $name = $this->data['name']; $mobile =$this->data['mobile']; $email = $this->data['email'];
            foreach ($data as $key => $value) {
                if($value != TRUE)
                    return "";
            }
            global $conn;
            $sql = "INSERT INTO users(name,email,mobile) VALUES ('$name','$email','$mobile')";
            if($conn->query($sql) === TRUE){
                return   $this->getData();
            }else{
                return "DB_ERROR";
            }
        }
    }


?>
<?php
    class User {
        private $id, $email, $password, $name, $surname, $pictureurl, $role;

        public function __construct()
        {
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();
    
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        }
        
        public function __construct6($email, $password, $name, $surname, $pictureurl, $role)
        {
            $this->email = $email;
            $this->password = $password;
            $this->name = $name;
            $this->surname = $surname;
            $this->pictureurl = $pictureurl;
            $this->role = $role;
        }
        
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setSurname($surname){
            $this->surname = $surname;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($password){
            $this->password = $password;
        }   

        public function getPassword(){
            return $this->password;
        }
        
        public function setRole($role){
            $this->role = $role;
        }
        
        public function setPictureUrl($pictureurl){
            $this->pictureurl = $pictureurl;
        }
        public function getPictureUrl(){
            return $this->pictureurl;
        }

        public function getRole(){
            return $this->role;
        }
    }
<?php
    class Comment {
        private $id, $content, $user_id;

        public function __construct()
        {
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();
    
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        }
        
        // public function __construct($content, $user_id) {
        //     $this->content = $content;
        //     $this->user_id = $user_id;
        // }

        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        
        public function setContent($content){
            $this->content = $content;
        }
        public function getContent(){
            return $this->content;
        }
        
        public function setUserId($user_id){
            $this->user_id = $user_id;
        }
        public function getUserId(){
            return $this->user_id;
        }
    }
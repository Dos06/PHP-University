<?php
    class Category {
        private $id, $name, $bg_color;

        public function __construct()
        {
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();
    
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        }
        // public function __construct($name, $date, $bg_color) {
        //     $this->name = $name;
        //     $this->date = $date;
        //     $this->bg_color = $bg_color;
        // }

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
        
        public function setBgColor($bg_color){
            $this->bg_color = $bg_color;
        }
        public function getBgColor(){
            return $this->bg_color;
        }
    }
<?php
    class Post {
        private $id, $title, $short_content, $content, $date, $pictureurl, $likes, $category_id;

        public function __construct()
        {
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();
    
            if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            
            }
        }

        // public function __construct($name, $title, $short_content, $content, $pictureurl, $likes, $category_id) {
        //     $this->name = $name;
        //     $this->title = $title;
        //     $this->short_content = $short_content;
        //     $this->content = $content;
        //     $this->pictureurl = $pictureurl;
        //     $this->likes = $likes;
        //     $this->category_id = $category_id;
        // }

        public function setId($id) {
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        
        public function setTitle($title){
            $this->title = $title;
        }
        public function getTitle(){
            return $this->title;
        }
        
        public function setShortContent($short_content){
            $this->short_content = $short_content;
        }
        public function getShortContent(){
            return $this->short_content;
        }
        
        public function setContent($content){
            $this->content = $content;
        }
        public function getContent(){
            return $this->content;
        }
        
        public function setDate($date){
            $this->date = $date;
        }
        public function getDate(){
            return $this->date;
        }
        
        public function setPictureUrl($pictureurl){
            $this->pictureurl = $pictureurl;
        }
        public function getPictureUrl(){
            return $this->pictureurl;
        }
        
        public function setLikes($likes){
            $this->likes = $likes;
        }
        public function getLikes(){
            return $this->likes;
        }
        
        public function setCategoryId($category_id){
            $this->category_id = $category_id;
        }
        public function getCategoryId(){
            return $this->category_id;
        }
    }
<?php
    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;        
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            //$data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipiscing elit fusce facilisis nulla, pretium vestibulum litora potenti et tristique augue sociosqu eu maecenas sodales, gravida nullam cursus aliquam curabitur arcu netus consequat id. Orci turpis dapibus nullam fermentum gravida natoque himenaeos tempus, suspendisse mauris eleifend lectus vehicula non nisi dictum, felis ultricies curabitur nisl morbi nulla consequat. Tellus ante donec in litora duis fusce eget nunc, potenti rhoncus bibendum nisl fringilla pharetra platea, arcu vel facilisis purus dui libero commodo.";
            $this->views->getView($this,"home",$data);
        }
    }
?>
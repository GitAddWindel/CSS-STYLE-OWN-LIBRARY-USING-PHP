<?php
class Background {
    // my properties
    public $body;
    public $color;
    public $elem_color;
    public $navColor;

    // this is for my body background color
    function set_body($body) {
        $this->body = $body;
    }
    
    function set_color($color) {
        $this->color = $color;
    }
    // this is for my p element color
    function set_elem_color($elem_color) {
        $this->elem_color = $elem_color;
    }
    // this is for my navbar color
    function set_navColor($navColor) {
        $this->navColor = $navColor;
    }
    // return the body color
    function get_body() {
        return $this->body;
    }
    // return color
    function get_color() {
        return $this->color;
    }
    // return p element color
    function get_elem_color() {
        return $this->elem_color;
    }
    // return navbar container background color
    function get_navColor() {
        return $this->navColor;
    }
}
    $bodyColor = new Background();
    $textColor = new Background();
    $elem_Color = new Background();
    $navColor = new Background();
    $bodyColor->set_body('<body>');
    $bodyColor->set_body('<p>');
    $bodyColor->set_body('<navbar-container>');
    $textColor->set_color('background-color: #000;');
    $elem_Color->set_color('color: red;');
    $navColor->set_navColor('background-color: Dodgerblue; padding: 20px;');
?>

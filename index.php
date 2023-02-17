<?php
interface Machine {
    public function clacTasks();
}
class Circle implements Machine {
    public $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function clacTasks(){
       return $this->radius*$this->radius*pi();
    }
}
$my_circle = new circle(3);
echo $my_circle-> clacTasks();
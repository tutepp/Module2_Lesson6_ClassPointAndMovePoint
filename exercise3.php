<?php
class Point {
    public $x = 0;
    public $y = 0;
    public $xy = [];

    public function __construct($x,$y)
    {
        $this-> x = $x;
        $this-> y =$y;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function setXy($x , $y): void
    {
        $this->x = $x;
        $this->y =$y;
    }

    public function getXy(): array
    {
        return [$this->x,$this->y];
    }

    public function __toString()
    {
        return ($this->x." ".$this->y);
        
    }
}

class MoveablePoint extends Point {
    public $xSpeed = 0;
    public $ySpeed = 0;
    public $speed = [];
    public function __construct ($x,$y,$xSpeed,$ySpeed){
    parent::__construct($x,$y);
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
    }

    public function setXSpeed(int $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function setYSpeed(int $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed(): int
    {
        return $this->xSpeed;
    }

    public function getYSpeed(): int
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed , $ySpeed): void
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed(): array
    {
        return [$this->xSpeed , $this->ySpeed];
    }

    public function __toString()
    {
        return  "(x,y) = (".$this->x.",".$this->y."),speed = (".$this->xSpeed.",".$this->ySpeed.")";
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }
}
$point = new Point(2,3);
echo $point."<br>";
$point->setXY(4,5);
echo $point."<br>";

$movePoint = new MoveablePoint(3,4,5,6);
echo $movePoint."<br>";
$movePoint->move();
echo $movePoint."<br>";
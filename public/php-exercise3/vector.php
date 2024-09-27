<?php
class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function add(Vector $vector)
    {
        $x = $this->x + $vector->x;
        $y = $this->y + $vector->y;
        return new Vector($x, $y);
    }
}

$a = new Vector(3, 4);
$b = new Vector(1, 2);
$c = $a->add($b);

echo $c->x . '<br>';
echo $c->y . '<br>';
?>
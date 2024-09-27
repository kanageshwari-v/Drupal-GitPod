<?php
class Quark
{
    public $color;
    public $flavor;
    public $baryon_number;

    public function __construct($color, $flavor)
    {
        $this->color = $color;
        $this->flavor = $flavor;
        $this->baryon_number = 1 / 3;
    }

    public function interact($quark)
    {
        $temp = $this->color;
        $this->color = $quark->color;
        $quark->color = $temp;
    }
}
?>
<?php


namespace LPolygonIO;

use PolygonIO\rest\Rest;

class RestIO extends Rest
{
    public function reference(){return $this->reference;}

    public function stocks(){return $this->stocks;}

    public function forex(){return $this->forex;}

    public function crypto(){return $this->crypto;}
}

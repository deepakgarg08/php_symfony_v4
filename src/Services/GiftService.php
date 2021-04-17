<?php 

namespace App\Services;

class GiftService{

    public $gifts = ['car','bike', 'scooter', 'piano'];

    public function __construct()
    {
        
        shuffle($this->gifts);
    }

}


?>
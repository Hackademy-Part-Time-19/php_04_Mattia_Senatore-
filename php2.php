<?php

class Animal
{
    protected $classification;

    public function __construct($classification)
    {
        $this->classification = $classification;
    }

    protected function printSpecialization()
    {
        echo "Sono un animale {$this->classification}";
    }
}

class Vertebrate extends Animal
{
    protected $bloodType;

    public function __construct($classification, $bloodType)
    {
        parent::__construct($classification);
        $this->bloodType = $bloodType;
    }

    protected function printSpecialization()
    {
        parent::printSpecialization();
        echo " {$this->bloodType}";
    }
}

class WarmBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct('Vertebrato', 'a Sangue Caldo');
    }

    protected function printSpecialization()
    {
        parent::printSpecialization();
    }
}

class ColdBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct('Vertebrato', 'a Sangue Freddo');
    }

    protected function printSpecialization()
    {
        parent::printSpecialization();
    }
}

class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
    }

    public function printResult()
    {
        $this->printSpecialization();
        echo " Splash";
    }
}

// Utilizzo
$magikarp = new Fish();
$magikarp->printResult();
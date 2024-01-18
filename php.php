<?php
class Continent{
public $nameContinent;
public $Country;
public $Region;
public $Province;
public $City;
public $Street;

public function  __construct($continent, $country, $region, $province, $city, $street)
{
    $this->nameContinent = $continent;
    $this->Country = $country;
    $this->Region = $region;
    $this->Province = $province;
    $this->City = $city;
    $this->Street = $street;
}

public function getMyCurrentLocation()
{
    return "Mi trovo in $this->nameContinent, $this->Country, $this->Region, $this->Province, $this->City, $this->Street\n";
}
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent, $country, '', '', '', '');
        $this->nameCountry = $country;
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country, $region, '', '', '');
        $this->nameRegion = $region;
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region, $province, '', '');
        $this->nameProvince = $province;
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province, $city, '');
        $this->nameCity = $city;
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city, $street);
        $this->nameStreet = $street;
    }
}

$addres1 = new Continent("EU","Italy","Lazio","Roma","Roma","Via Giacinto Bruzzesi, 3a");
$addres2 = new Continent("EU","Italy","Piemonte","Asti","Asti","Via Emanuele Filiberto, 13");
$addres3 = new Continent("EU","Italy","Puglia","Brindisi","Brindisi","Via Roma, 43");
$addres4 = new Continent("EU","Italy","Liguria","Genoa","Genoa","Via Francia, 30");
$addres5 = new Continent("EU","Italy","Lombardia","Cremona","Cremona","Via Fabio Filzi, 42");
$addres6 = new Continent("EU","Italy","Toscana","Siena","Siena","Via di San Donato, 10");


$myLocation = [$addres1,$addres2,$addres3,$addres4,$addres5,$addres6,];

foreach ($myLocation as $home) {
   echo $home -> getMyCurrentLocation();
}
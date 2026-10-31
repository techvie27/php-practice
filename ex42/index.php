<?php

require 'vendor/autoload.php';

use App\Car;
use App\Bike;
use App\Models\Truck;
use Carbon\Carbon;

$car = new Car();
$bike = new Bike();
$truck = new Truck();

echo $car->drive() . "\n";
echo $bike->ride() . "\n";
echo $truck->carry() . "\n";
echo Carbon::now('Asia/Kolkata')->format('d-m-Y H:i') . "\n";
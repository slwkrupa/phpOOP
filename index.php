<?php

class PlanBudynku
{
    public $ilosc_okien = 0;

    /*public function __construct(){
        echo "Powstałem z projektu ". __CLASS__ . "<br>";
    }

    public function __destruct(){
        echo "Zniszczono z projektu ". __CLASS__ . "<br>";
    }*/

    public function ustaw_ilosc_okien($nowa_ilosc_okien){
        $this->ilosc_okien = $nowa_ilosc_okien;
    }

    public function pobierz_ilosc_okien(){
        return $this->ilosc_okien;
    }
}

class PlanGarazu extends PlanBudynku
{
    public $ilosc_miejsc_postojowych = 1;
}

$budynek1 = new PlanBudynku;
$budynek2 = new PlanBudynku;
$budynek3 = new PlanGarazu;
$budynek4 = new PlanGarazu;

$budynek1->ustaw_ilosc_okien(10);
$budynek2->ustaw_ilosc_okien(15);
$budynek3->ustaw_ilosc_okien(64);
$budynek4->ustaw_ilosc_okien(254);

echo 'Budynek 1 ma '.$budynek1->pobierz_ilosc_okien().' okien<br>';
echo 'Budynek 2 ma '.$budynek2->pobierz_ilosc_okien().' okien<br>';
echo 'Budynek 3 ma '.$budynek3->pobierz_ilosc_okien().' okien i  garaz na '.$budynek3->ilosc_miejsc_postojowych.' miejsc postowjowych<br>';
echo 'Budynek 4 ma '.$budynek4->pobierz_ilosc_okien().' okien<br>';

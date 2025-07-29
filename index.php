<?php

    require_once "Modeli/zivotinja.php";

    $zivotina = new Zivotinja();
    {
        $zivotina->tezina = 10;
    }  

    echo $zivotina->tezina;

    require_once "Modeli/kopnena.php";
    $kopnenaZivotinja = new Kopnena();
    {
        $kopnenaZivotinja->tezina = 10;
        $kopnenaZivotinja->brojNogu = 2;
    }

    echo $kopnenaZivotinja->brojNogu;

    require_once "Modeli/vodena.php";
    $vodenaZivotinja = new Vodena();
    {
        $vodenaZivotinja->tezina = 6;
        $vodenaZivotinja->vrstaVode = "Slatka";
    }
    
    echo $vodenaZivotinja->vrstaVode;

    require_once "Modeli/meduza.php";
    $belaMeduza = new Vodena();
    {
        $belaMeduza->tezina = 11;
        $belaMeduza->vrstaVode = "Slana";
        $belaMeduza->duzinaPipaka = 4;
    }
    
    echo $belaMeduza->duzinaPipaka;

    require_once "Modeli/riba.php";
    $pastrmka = new Vodena();
    {
        $pastrmka->tezina = 6;
        $pastrmka->vrstaVode = "Slatka";
        $pastrmka->krljust = true;
    }

    echo $pastrmka->vrstaVode;

    require_once "Modeli/kokoska.php";
    $koka = new Kopnena();
    {
        $koka->tezina = 9;
        $koka->brojNogu = 2;
        $koka->bojaPerija = "Narandzasta";
    }

    echo $koka->bojaPerija;

    require_once "Modeli/pas.php";
    $pudlica = new Kopnena();
    {
        $pudlica->tezina = 1;
        $pudlica->brojNogu = 4;
        $pudlica->agresvian = true;
        $pudlica->ujeda = true;
    }

    echo $pudlica->tezina." kg pudlica koja ima ".$pudlica->brojNogu." nogu";

//prvo mi je delovalo malo zbunjujuce oko ucitavanja fajlova mislim na require_once
//ali kad sam se dobro skencentrisao sam razumeo kako sve ovo funkcionise
//msm da nije nesto previse komplikovano samo trebamo gledati da se ne pogubimo u svim ovim klasama

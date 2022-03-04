<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Raport;

class RaportFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i < 5; $i++){
            $lokals = ["Lokal 01", "Lokal 02", "Lokal 01", "Lokal 04", "Lokal 05"];
            $s = rand(0, 5);
            $date = new \DateTime(Date("Y-m-d", strtotime("-$s day")));
            $raport = new Raport();
            $raport->setName(sprintf("Somename %s", rand(1, 5)));
            $raport->setLokal($lokals[rand(0, count($lokals) - 1)]);
            $raport->setGodzina(
                date(
                    "H:i:s", strtotime(sprintf("-%s hour", rand(0, 5)))
                )
            );
            $raport->setUsytkovnik(md5(rand(0,1000)));
            $raport->setData($date);
            $manager->persist($raport);
            $manager->flush();
        }
    }
}

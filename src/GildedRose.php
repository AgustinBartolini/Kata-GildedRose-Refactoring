<?php

declare(strict_types=1);

namespace App;

class GildedRose
{
    public static function updateQuality($items)
    {
        for ($i = 0; $i < count($items); $i++) {

            if ("Some Item" == $items[$i]->getName()) {
                $items[$i]->setQuality($items[$i]->getQuality() - 1);
                $items[$i]->setSellIn($items[$i]->getSellIn() - 1);
                if ($items[$i]->getSellIn() <= 0) {
                    $items[$i]->setQuality($items[$i]->getQuality() - 1);
                }
            }

            if ("Aged Brie" == $items[$i]->getName()) {
                $items[$i]->setQuality($items[$i]->getQuality() + 1);
            }

            if ("Backstage passes to a TAFKAL80ETC concert" == $items[$i]->getName()) {
                $items[$i]->setQuality($items[$i]->getQuality() + 1);
                
                if ($items[$i]->getSellIn() < 11) {
                    $items[$i]->setQuality($items[$i]->getQuality() + 1);
                }
                if ($items[$i]->getSellIn() < 6) {
                    $items[$i]->setQuality($items[$i]->getQuality() + 1);
                }
                if ($items[$i]->getSellIn() <= 0) {
                    $items[$i]->setQuality (0);
                }
            }

            if ("Sulfuras, Hand of Ragnaros" == $items[$i]->getName()) {
                return;      
            }

            if ($items[$i]->getQuality() < 0) {
                $items[$i]->setQuality(0);
            }
            if ($items[$i]->getQuality() > 50) {
                $items[$i]->setQuality(50);
            }
        }
    }
}

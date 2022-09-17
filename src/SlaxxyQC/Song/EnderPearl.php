<?php

namespace SlaxxyQC\Song;

use pocketmine\entity\Location;
use pocketmine\entity\projectile\Throwable;
use pocketmine\item\EnderPearl as PMEnderPearl;
use pocketmine\player\Player;

class EnderPearl extends PMEnderPearl {

    /**
     * @param Location $location
     * @param Player $thrower
     * @return Throwable
     */
    protected function createEntity(Location $location, Player $thrower) : Throwable {
        return new EnderPearlProjectile($location, $thrower);
    }

}
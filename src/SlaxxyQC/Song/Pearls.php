<?php

namespace SlaxxyQC\Song;

use pocketmine\data\bedrock\EntityLegacyIds;
use pocketmine\entity\EntityDataHelper;
use pocketmine\entity\EntityFactory;
use pocketmine\event\Listener;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ItemIds;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;

class Pearls extends PluginBase implements Listener {

    /**
     * @return void
     */
    protected function onEnable() : void {
        $this->getLogger()->notice("SongEnderPearl By SlaxxyQC");
        ItemFactory::getInstance()->register(new EnderPearl(new ItemIdentifier(ItemIds::ENDER_PEARL, 0), "Ender Pearl"), true);
        EntityFactory::getInstance()->register(EnderPearlProjectile::class, function(World $world, CompoundTag $nbt) : EnderPearlProjectile {
            return new EnderPearlProjectile(EntityDataHelper::parseLocation($nbt, $world), null, $nbt);
        }, ['ThrownEnderpearl', 'minecraft:ender_pearl'], EntityLegacyIds::ENDER_PEARL);
    }

}
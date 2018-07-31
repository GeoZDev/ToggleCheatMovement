<?php

namespace Varion;

use pocketmine\event\player\cheat\PlayerCheatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat as T;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info(T::AQUA . "AntiMovementLag by Varion");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable()
    {
        $this->getLogger()->info(T::AQUA . "AntiMovementLag by Varion disattivato");
    }

    public function onMovement(PlayerCheatEvent $e)
    {
        $e->setCancelled();
    }
}
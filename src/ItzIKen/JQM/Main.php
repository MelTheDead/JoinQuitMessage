<?php

namespace ItzIKen\JQM;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable()
    {
        $this->getServer()->getLogger()->notice(" Attivo JoinQuitMessage by ItzIKen aka MelTheDead");
    }

    public function onDisable()
    {
        $this->getServer()->getLogger()->notice(" Disattivato JoinQuitMessage by ItzIKen aka MelTheDead");
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $event->setJoinMessage("§a+§r" . $player->getName() . "!");

    }

    public function onQuit(PlayerQuitEventEvent $event) {
        $player = $event->getPlayer();
        $event->setQuitMessage("§c-§r" . $player->getName() . "!");
    }
}
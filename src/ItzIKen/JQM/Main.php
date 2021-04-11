<?php

namespace ItzIKen\JQM;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveConfig();
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $message = str_replace("{player}", $player->getDisplayName(), $this->getConfig()->get("JoinMessage"));
        $event->setJoinMessage($message);
    }

    public function onQuit(PlayerQuitEvent $event) {
        $player = $event->getPlayer();
        $message = str_replace("{player}", $player->getDisplayName(), $this->getConfig()->get("QuitMessage"));
        $event->setQuitMessage($message);
    }
}
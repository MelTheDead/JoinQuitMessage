<?php

namespace ItzIKen\JQM;

use ItzIKen\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class EventListener implements Listener {

    private $fts;

    public function __construct(Main $main) {
        $this->plugin = $main;
    }

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $message = str_replace("{player}", $player->getDisplayName(), $this->plugin->getConfig()->get("JoinMessage"));
        $event->setJoinMessage($message);

    }

    public function onQuit(PlayerQuitEvent $event) {
        $player = $event->getPlayer();
        $message = str_replace("{player}", $player->getDisplayName(), $this->plugin->getConfig()->get("QuitMessage"));
        $event->setJoinMessage($message);
    }
}
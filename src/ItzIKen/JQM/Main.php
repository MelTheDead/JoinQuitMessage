<?php

namespace ItzIKen\JQM;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getLogger()->info("JQM Enable");
        $this->saveDefaultConfig();
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, array $args) : bool{
        switch($cmd->getName()) {
            case "rand":
                if($sender instanceof Player){
                    $sender->sendMessage("ยง7JQM by ItzIKen");
                }
                return true;
        }
        return true;
    }
}

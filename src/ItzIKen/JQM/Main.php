<?php

declare(strict_types=1);

namespace ItzIKen\JQM;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onEnable()
    {
        $this->getLogger()->info("Plugin by ItzIKen: enable");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {

        if($cmd->getName() == "jqm") {
            $sender->sendMessage("§c---§4JoinQuitMessage§c---\n§4 Plugin Author:§c ItzIken\n §4github: §chttps://github.com/MelTheDead\n §c---§4JoinQuitMessage§c---");
        }
        return true;
    }
}

<?php

namespace towo;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\player;

class Main extends PluginBase implements Listener {
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
public function onCommand(CommandSender $player, Command $cmd, $label, array $args):bool {
	switch ($cmd->getName ()) {
		case "채팅청소" :
			if (! isset ( $args [0] )) {
				$player->sendMessage ( "§f[ §a서버 §f] 채팅청소 명령어 도움말" );
				$player->sendMessage ( "§f[ §a서버 §f] /채팅청소 - 채팅청소 명령어를 확인합니다" );
				$player->sendMessage ( "§f[ §a서버 §f] /채팅청소 실행 - 채팅청소를 실행합니다" );
				return true;
				}
			if ($args [0] == "실행" && $player->isOp()) {
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage(" \n");
				$this->getServer()->BroadCastMessage("§f[ §a서버 §f] 채팅청소가 완료되었습니다.");
				return true;
			}else if(!$player->isOp()){
				$player->sendMessage("§f[ §a서버 §f] 당신은 OP가 아닙니다.");
				return true;
			}
	 	  }
	}
}?>
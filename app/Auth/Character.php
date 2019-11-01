<?php
namespace app\Auth;

use app\Packet\PacketHandler;
use app\Packet\ServerState;
use core\query\DB;

/**
 *  英雄角色
 */
class Character
{
	//查询角色
	public static function QueryCharacter($serv, $fd, $data = null)
	{

	}

	//创建
	public static function NewCharacter($serv, $fd, $data = null)
	{
		$param = ToStr($data);
		$param = gbktoutf8($param);
		var_dump($param);
	}
}
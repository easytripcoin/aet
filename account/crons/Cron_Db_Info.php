<?php

namespace Cron\Db\Info;

interface Cron_Db_Info
{
	public const HOST = 'localhost';
	public const USERNAME = 'root';
	public const PASSWORD = '';
	public const DATABASE = 'aet_db';

	public static function connect();
}
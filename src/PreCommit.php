<?php

/**
 * Git Hooks Plugins
 *
 * @package Arifrh\GitHooks
 * @author  Arif Rahman Hakim <arifrahmanhakim.net@gmail.com>
 * @license MIT
 */

namespace Arifrh\GitHooks;

/**
 * Install
 */
class PreCommit
{
	/**
	 * Pre-commit template for validating commit using PSR2
	 *
	 * @var string PSR2
	 */
	const PSR2 = 'validate-psr2';

	/**
	 * Pre-commit template for validating commit using CodeIgniter4-standard
	 *
	 * @var string CI4
	 */
	const CI4 = 'validate-ci4standard';

	/**
	 * Install Pre Commit
	 *
	 * @param  string $type
	 * @return void
	 */
	public static function install(string $type)
	{
		 $bash = __DIR__.'/../bin/';

		if ($type === 'CI4') 
		{
			$bash .= static::CI4
		}
		else
		{
			$bash .= static::PSR2;
		}

		passthru('cp ' . $bash . ' .git/hooks/pre-commit');
		passthru('chmod +x .git/hooks/pre-commit');
	}

	/**
	 * Install pre commit with PSR2 coding standard
	 *
	 * @return void
	 */
	public static function PSR2()
	{
		self::install('PSR2');
	}

	/**
	 * Install pre commit with CodeIgniter4 coding standard
	 *
	 * @return void
	 */
	public static function CI4()
	{
		self::install('CI4');
	}
}
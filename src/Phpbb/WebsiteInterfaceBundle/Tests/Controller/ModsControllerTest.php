<?php
/**
 *
 * @package PhpbbWebsiteInterfaceBundle
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author MichaelC
 *
 */

namespace Phpbb\WebsiteInterfaceBundle\Tests\Controller;

use Phpbb\WebsiteInterfaceBundle\Tests\Controller;

class ModsControllerTest extends BootstrapTestSuite
{
	public function testModsMain()
	{
		$objs = $this->setupTest('/mods/');
		$crawler = $objs['crawler'];

		// Title Check
		$this->assertTrue(strpos(($crawler->filter('title')->first()->text()), 'Modifications') !== false, 'Title contains Modifications');

		// Content Check
		$this->assertTrue($crawler->filter('html:contains("This page contains links to tools and information of interest to MOD authors and users that wish to install modifications.")')->count() > 0, 'Mods Home Content Check');

		// Standard All Page Checks
		$this->globalTests();
	}
}

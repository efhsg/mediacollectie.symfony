<?php
/**
 * Created by PhpStorm.
 * User: esg
 * Date: 3-5-18
 * Time: 3:02
 */

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerTest extends WebTestCase
{

    public function testNumberAction()
    {
        $client = static::createClient();

        $client->request('GET', '/lucky/number');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }
}

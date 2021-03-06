<?php
/**
 * MODX Revolution
 *
 * Copyright 2006-2014 by MODX, LLC.
 * All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modx-test
 */
/**
 * Tests related to the modRestClient class.
 *
 * @package modx-test
 * @subpackage modx
 * @group Model
 * @group REST
 * @group modRestClient
 */
class modRestClientTest extends MODxTestCase {
    /**
     * Assert that modRestClient.getConnection loads the client
     */
    public function testGetConnection() {
        /** @var modRestClient $rest */
        $rest = $this->modx->getService('rest','rest.modRestClient');
        $success = $rest->getConnection();

        $this->assertTrue($success);
    }

    /**
     * Assert that modRestClient.setResponseType actually sets the response type
     */
    public function testSetResponseType() {
        /** @var modRestClient $rest */
        $rest = $this->modx->getService('rest','rest.modRestClient');
        $rest->setResponseType('json');

        $this->assertEquals($rest->responseType,'json');
    }
}

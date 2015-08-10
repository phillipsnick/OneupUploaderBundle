<?php

namespace Oneup\UploaderBundle\Tests\Uploader\Response;

use Oneup\UploaderBundle\Uploader\Response\EmptyResponse;

class TestEmptyResponse extends \PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $response = new EmptyResponse();
        $assembled = $response->assemble();

        $this->assertTrue(is_array($assembled));
        $this->assertCount(0, $assembled);
    }

    public function testWithItems()
    {
        $response = new EmptyResponse();

        // fill in some data
        $response['cat'] = 'grumpy';
        $response['dog'] = 'has no idea';

        $assembled = $response->assemble();

        $this->assertTrue(is_array($assembled));
        $this->assertCount(2, $assembled);
    }

    public function testStatusCode()
    {
        $response = new EmptyResponse();

        $this->assertNull($response->getStatusCode());
        $this->assertFalse($response->hasStatusCode());

        $response->setStatusCode(415);
        $this->assertEquals(415, $response->getStatusCode());
        $this->assertTrue($response->hasStatusCode());
    }
}

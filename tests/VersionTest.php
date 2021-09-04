<?php

class VersionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVersion()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
}

<?php namespace Mrcore\VueComponents;

use TestCase;
use Mockery as m;

class AAAPlayTest extends TestCase
{
    public function init()
    {
        #$this->someLib = $this->app->make('Some\Lib');
    }

    protected function play()
    {
        // Run with: myapp test play
        dump("Test Play Here");
    }

    protected function playOther()
    {
        // Run with: myapp test play-other
        dump("Test Play Other");
    }

    public function testEmpty()
    {
    }
    public function tearDown()
    {
        m::close();
    }
    public function setUp()
    {
        parent::setUp();
        $this->init();
        foreach ($_SERVER['argv'] as $arg) {
            if (str_contains($arg, 'play')) {
                $method = "play".studly_case(substr($arg, 5));
                $this->$method();
                exit();
            }
        }
    }
}

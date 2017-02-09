<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class easytest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
	{
	    $foo = true;
	    $this->assertTrue($foo);
	}
}

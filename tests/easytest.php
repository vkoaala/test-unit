<?php

namespace vkoaala\test-unit;

use PHPUnit\Framework\TestCase;

class easytest extends \PHPUnit_Framework_TestCase
{
    public function testExceptionIsRaisedForInvalidConstructorArguments()
    {
        new Money(null, new Currency('EUR'));
    }
}

<?php

use QR\Charsets\CharsetNumeric;

require_once __DIR__ . '/../../../src/QR/QR.php';

class CharsetNumericTest extends PHPUnit_Framework_TestCase {
    public $charset;
    
    public function SetUp() {
        $this->charset = new CharsetNumeric();
    }
    
    public function testMatches() {
        $this->assertTrue($this->charset->matches('0123456789'));
        $this->assertFalse($this->charset->matches('OOPS'));
    }
}
<?php

use QR\Charsets\CharsetAlpha;

require_once __DIR__ . '/../../../src/QR/QR.php';

class CharsetAlphaTest extends PHPUnit_Framework_TestCase {
    public $charset;
    
    public function SetUp() {
        $this->charset = new CharsetAlpha;
    }
    
    public function testMatches() {
        $this->assertTrue($this->charset->matches('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ $%*+-./:'));
        $this->assertFalse($this->charset->matches('Oops!'));
    }
}
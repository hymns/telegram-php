<?php

class TestDiffieHellman extends PHPUnit_Framework_TestCase {

    public function testConstruction()
    {
        $crypt = new Crypt_DiffieHellman(533, 5, 9);
        $this->assertInstanceOf('Crypt_DiffieHellman', $crypt);
    }

}
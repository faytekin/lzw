<?php

namespace Faytekin\LZW\Test;

use Faytekin\LZW\LZW;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    /**
     * @var LZW
     */
    public $object;

    public function setUp(): void
    {
        $this->object = new LZW();

        parent::setUp();
    }

    public function getCompressionString(): array
    {
        return [
            ['ABC', '65,66,67'],
            ['foobar foobar foobar', '102,111,111,98,97,114,32,256,258,260,262,257,259,114'],
            [
                'somespecialchars !"§$%&/()=?+~#\',.-;:_',
                '115,111,109,101,115,112,101,99,105,97,108,99,104,97,114,115,32,33,34,167,36,37,38,47,40,41,61,63,43,126,35,39,44,46,45,59,58,95'
            ],
        ];
    }
}

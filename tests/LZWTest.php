<?php

namespace Faytekin\LZW\Test;

class LZWTest extends TestCase
{
    public function testCompress(): void
    {
        $data = $this->getCompressionString();

        foreach ($data as $datum) {
            $result = $this->object->compress($datum[0]);
            $this->assertSame($datum[1], $result);
        }
    }

    public function testDecompress(): void
    {
        $data = $this->getCompressionString();

        foreach ($data as $datum) {
            $result = $this->object->decompress($datum[1]);
            $this->assertSame($datum[0], $result);
        }
    }
}

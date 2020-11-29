<?php

namespace Faytekin\LZW;

class LZW
{
    public function compress(string $uncompress): string
    {
        $dictSize = 256;
        $dictionary = [];

        for ($i = 0; $i < 256; $i++) {
            $dictionary[$this->uniChr($i)] = $i;
        }

        $w = '';
        $result = [];

        for ($i = 0; $i < strlen($uncompress); $i++) {
            $c = $this->charAt($uncompress, $i);
            $wc = $w.$c;

            if (isset($dictionary[$wc])) {
                $w = $wc;
            } else {
                array_push($result, $dictionary[$w]);

                $dictionary[$wc] = $dictSize++;
                $w = strval($c);
            }
        }

        if ($w != '') {
            array_push($result, $dictionary[$w]);
        }

        return implode(',', $result);
    }

    public function charAt(string $string, int $index): ?string
    {
        if ($index < mb_strlen($string)) {
            return mb_substr($string, $index, 1, 'UTF-8');
        }

        return null;
    }

    public function uniChr(int $u): string
    {
        return mb_convert_encoding('&#' . intval($u) . ';', 'UTF-8', 'HTML-ENTITIES');
    }
}

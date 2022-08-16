<?php

namespace EKichigin\OtusComposerPackage;

class StringProcessor
{
    public function getLength(string $string): int
    {
        return mb_strlen($string);
    }
}
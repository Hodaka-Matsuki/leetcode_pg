<?php

class Solution
{

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine)
    {
        if (preg_match('/.*' . $ransomNote . '.*/', $magazine)) {
            return true;
        }
        return false;
    }
}

$a = new Solution();
var_dump($a->canConstruct('aa', 'baab'));
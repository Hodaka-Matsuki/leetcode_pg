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
        $magazineArray = array_count_values(str_split($magazine));
        $ransomNoteArray = array_count_values(str_split($ransomNote));
        foreach ($ransomNoteArray as $key => $letter) {
            if ($letter > $magazineArray[$key]) {
                return false;
            }
        }

        return true;
    }
}

$a = new Solution();
var_dump($a->canConstruct('aa', 'aba'));
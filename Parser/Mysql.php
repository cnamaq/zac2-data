<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Parser;

class Mysql implements ParserInterface
{
    /**
     * @param string $rawData
     * @return array
     */
    public function parse($rawData)
    {
        $result = array();
        foreach ($rawData as $row) {
            $result[] = $row;
        }

        return $result;
    }

}
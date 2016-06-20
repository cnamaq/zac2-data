<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Request;


interface FilterInterface
{
    /**
     * @param  Adapter $dataSource
     * @return mixed
     */
    public function filter(Adapter $dataSource);
}

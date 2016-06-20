<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Client;

use Zac2\Data\Request\Adapter;

interface ReaderInterface
{
    /**
     * @param Adapter $request
     * @return mixed
     */
    public function read(Adapter $request);
}
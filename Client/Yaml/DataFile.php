<?php
namespace Zac2\Data\Client\Soap;

use Zac2\Data\Client\ReaderInterface;
use Zac2\Data\Request\Adapter;

/**
 * @author Denis Fohl
 */
class DataFile implements ReaderInterface
{

    /**
     * @param  Adapter $request
     * @return mixed
     */
    public function read(Adapter $request)
    {
        $this->params['requete'] = $request->getRequest();

        return $this->getSoapClient()->Requeteur($this->getParams());
    }

}

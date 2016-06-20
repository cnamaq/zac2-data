<?php
/**
 * @author Denis Fohl
 */
namespace Zac2\Data\Client\Mysql;


use Zac2\Data\Client\ReaderInterface;
use Zac2\Data\Request\Adapter;

class ZF2 implements ReaderInterface
{
    public function read(Adapter $request)
    {
        $sql    = $request->getDataSourceAdapter();
        $select = $request->getSelect();

        return $sql->prepareStatementForSqlObject($select)->execute();
    }
}
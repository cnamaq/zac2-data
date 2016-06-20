<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Request;


use Zac2\Common\Field;

class SqlString extends Adapter
{
    /**
     * @var string
     */
    protected $sql;

    /**
     * @param string $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->sql;
    }

    public function from($source)
    {
        // TODO: Implement from() method.
    }

    public function in(Field $field)
    {
        // TODO: Implement in() method.
    }

    public function notIn(Field $field)
    {
        // TODO: Implement notIn() method.
    }

    public function like(Field $field)
    {
        // TODO: Implement like() method.
    }

    public function notLike(Field $field)
    {
        // TODO: Implement notLike() method.
    }

    public function isNull(Field $field)
    {
        // TODO: Implement isNull() method.
    }

    public function isNotNull(Field $field)
    {
        // TODO: Implement isNotNull() method.
    }

    public function equalTo(Field $field)
    {
        // TODO: Implement equalTo() method.
    }

    public function notEqualTo(Field $field)
    {
        // TODO: Implement notEqualTo() method.
    }

    public function lessThan(Field $field)
    {
        // TODO: Implement lessThan() method.
    }

    public function lessThanOrEqualTo(Field $field)
    {
        // TODO: Implement lessThanOrEqualTo() method.
    }

    public function greaterThan(Field $field)
    {
        // TODO: Implement greaterThan() method.
    }

    public function greaterThanOrEqualTo(Field $field)
    {
        // TODO: Implement greaterThanOrEqualTo() method.
    }

}
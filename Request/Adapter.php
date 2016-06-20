<?php
/**
 * @author Denis Fohl
 */
namespace Zac2\Data\Request;

use Zac2\Common\Field;

abstract class Adapter
{
    /**
     * @var mixed
     */
    protected $dataSourceAdapter;

    /**
     * @param  mixed $source
     * @return mixed
     */
    abstract public function from($source);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function in(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function notIn(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function like(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function notLike(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function isNull(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function isNotNull(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function equalTo(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function notEqualTo(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function lessThan(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function lessThanOrEqualTo(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function greaterThan(Field $field);

    /**
     * @param  Field $field
     * @return mixed
     */
    abstract public function greaterThanOrEqualTo(Field $field);

    /**
     * @return mixed
     */
    public function getDataSourceAdapter()
    {
        return $this->dataSourceAdapter;
    }

    /**
     * @return mixed
     */
    abstract public function getRequest();

}

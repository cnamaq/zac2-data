<?php
/**
 * @author Denis Fohl
 */

namespace Zac2\Data\Request;

use Zac2\Common\Field;
use Zend\Db\Sql\Select;
use Zend\Db\Sql\Sql;

class ZF2 extends Adapter
{
    /**
     * @var Select
     */
    protected $select;

    /**
     * Test constructor.
     * @param Sql $sqlComponent
     */
    public function __construct(Sql $sqlComponent)
    {
        $this->dataSourceAdapter = $sqlComponent;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        if (is_null($this->select)) {
            $this->select = $this->getDataSourceAdapter()->select();
        }

        return $this->select;
    }

    /**
     * @param  mixed $source
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function from($source)
    {
        return $this->getSelect()->from($source);
    }

    public function order($order)
    {
        return $this->getSelect()->order($order);
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function in(Field $field)
    {
        $values = $field->getFilteredValue();
        if (!is_array($values) && is_scalar($values)) {
            $values = array($values);
        }
        return $this->getSelect()->where->in($field->getKey(), $values);
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function notIn(Field $field)
    {
        $values = $field->getFilteredValue();
        if (!is_array($values) && is_scalar($values)) {
            $values = array($values);
        }
        return $this->getSelect()->where->notIn($field->getKey(), $values);
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function like(Field $field)
    {
        return $this->getSelect()->where->like($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function notLike(Field $field)
    {
        return $this->getSelect()->where->notLike($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function isNull(Field $field)
    {
        return $this->getSelect()->where->isNull($field->getKey());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function isNotNull(Field $field)
    {
        return $this->getSelect()->where->isNotNull($field->getKey());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function equalTo(Field $field)
    {
        return $this->getSelect()->where->equalTo($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function notEqualTo(Field $field)
    {
        return $this->getSelect()->where->notEqualTo($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function lessThan(Field $field)
    {
        return $this->getSelect()->where->lessThan($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function lessThanOrEqualTo(Field $field)
    {
        return $this->getSelect()->where->lessThanOrEqualTo($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function greaterThan(Field $field)
    {
        return $this->getSelect()->where->greaterThan($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @param  Field $field
     * @return \Zend\Db\Sql\AbstractPreparableSql
     */
    public function greaterThanOrEqualTo(Field $field)
    {
        return $this->getSelect()->where->greaterThanOrEqualTo($field->getKey(), $field->getFilteredValue());
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->getSelect()->getSqlString();
    }

    public function join($tableName, $on, $columns = null, $joinType = null)
    {
        return $this->getSelect()->join($tableName, $on, $columns, $joinType);
    }

}

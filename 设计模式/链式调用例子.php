<?php


/**
 * class SQL
 */
class Sql
{
    protected $fields = array();
    protected $from = array();
    protected $where = array();
    public function select(array $fields = array())
    {
        $this->fields = $fields;
        return $this;
    }
    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }
    public function where($condition)
    {
        $this->where[] = $condition;
        return $this;
    }
    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
                . ' FROM ' . implode(',', $this->from)
                . ' WHERE ' . implode(' AND ', $this->where);
    }
}

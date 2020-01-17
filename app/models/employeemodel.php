<?php
namespace PHPMVC\Models;


class EmployeeModel extends AbstractModel
{
    public $id;
    private $name ;
    private $age ;
    private $address ;
    private $salary ;
    private $tax ;

    protected static $primaryKey = 'id';
    protected static $tableName = 'employees';
    protected static $tableSchema = array(
        'name'     => self::DATA_TYPE_STR,
        'age'      => self::DATA_TYPE_INT,
        'address'  => self::DATA_TYPE_STR,
        'salary'   => self::DATA_TYPE_DECIMAL,
        'tax'      => self::DATA_TYPE_DECIMAL
    );

    public function __construct($name , $age , $address , $salary , $tax)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address ;
        $this->salary = $salary ;
        $this->tax = $tax ;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function getTableName()
    {
        return self::$tableName;
    }
}
<?php
namespace PHPMVC\Controllers;


use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController
{

    public function defaultAction()
    {
        $this->_data['employees']  = EmployeeModel::getAll();
        $this->_view();
    }

    public function editAction()
    {
        echo 'Edit Action';
    }

    public function deleteAction()
    {
        echo 'Delete Action';
    }
}
<?php

namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\EmployeeModel;


class EmployeeController extends AbstractController
{
    use InputFilter;
    use Helper;

    public function defaultAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('employee.default');
        $this->_data['employees']  = EmployeeModel::getAll();
        $this->_view();
    }

    public function addAction()
    {
        $this->_language->load('template.common');
        if (isset($_POST['submit'])) {
            $name = $this->filterString($_POST['name']);
            $age = $this->filterInt($_POST['age']);
            $address = $this->filterString($_POST['address']);
            $salary = $this->filterFloat($_POST['salary']);
            $tax = $this->filterFloat($_POST['tax']);

            $newEmp = new EmployeeModel($name, $age, $address, $salary, $tax);

            if ($newEmp->save()) {
                $_SESSION['message'] = "Employee Added Successfully";
                $this->redirect('/employee');
            }
        }
        $this->_view();
    }

    public function editAction()
    {
        $this->_language->load('template.common');
        $id = $this->getParams()[0];
        $emp = EmployeeModel::getByPK($id);
        if ($emp === false) {
            $this->redirect('/employee');
        }
        $this->_data['employee'] = $emp;
        if (isset($_POST['submit'])) {
            $name = $this->filterString($_POST['name']);
            $age = $this->filterInt($_POST['age']);
            $address = $this->filterString($_POST['address']);
            $salary = $this->filterFloat($_POST['salary']);
            $tax = $this->filterFloat($_POST['tax']);

            $emp->setName($name);
            $emp->setAge($age);
            $emp->setAddress($address);
            $emp->setSalary($salary);
            $emp->setTax($tax);

            if ($emp->save()) {
                $_SESSION['message'] = "Employee Updated Successfully";
                $this->redirect('/employee');
            }
        }
        $this->_view();
    }

    public function deleteAction()
    {
        $this->_language->load('template.common');
        $id = $this->getParams()[0];
        $emp = EmployeeModel::getByPK($id);
        if ($emp === false) {
            $this->redirect('/employee');
        }

        if ($emp->delete()) {
            $_SESSION['message'] = "Employee Deleted Successfully";
            $this->redirect('/employee');
        }
    }
}

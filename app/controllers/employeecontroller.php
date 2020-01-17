<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\EmployeeModel;
use function Sodium\add;

class EmployeeController extends AbstractController
{

    use InputFilter;
    use Helper;

    public function defaultAction()
    {
        $this->_data['employees']  = EmployeeModel::getAll();
        $this->_view();
    }

    public function addAction()
    {

        if(isset($_POST['submit']))
        {
            $name = $this->filterString($_POST['name']);
            $age = $this->filterInt($_POST['age']);
            $address = $this->filterString($_POST['address']);
            $salary = $this->filterFloat($_POST['salary']);
            $tax = $this->filterFloat($_POST['tax']);

            $newEmp = new EmployeeModel($name, $age, $address, $salary, $tax);

            if($newEmp->save()) {
                $_SESSION['message'] = "Employee Added Successfully";
                $this->redirect('/employee');
            }
        }
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
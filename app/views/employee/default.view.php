<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .wrapper{
        width: 80%;
        margin: 0 auto;
    }

    .wrapper h1 {
        text-align: center;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<div class="wrapper">
    <h1>Our Employees</h1>
    <a href="/employee/add">Add new Employee</a>

    <?php if(isset($_SESSION['message'])){ ?>
        <p class="message"><?= $_SESSION['message'] ?></p>
        <?php
        unset($_SESSION['message']);
        }
        ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Tax</th>
                <th>Control</th>
            </tr>
        </thead>

        <tbody>
           <?php
            if(isset($employees)) {
                if (false !== $employees) {
                    foreach ($employees as $employee) {
                        ?>
                        <tr>
                            <td><?= $employee->name ?></td>
                            <td><?= $employee->age ?></td>
                            <td><?= $employee->address ?></td>
                            <td><?= $employee->salary ?></td>
                            <td><?= $employee->tax ?></td>
                            <td><a href="/employee/edit/<?=$employee->id?>" > Edit</a> |
                                <a href="/employee/delete/<?=$employee->id?>" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <td colspan="5"><p>No emp</p></td>
                    <?php
                }
            }
           ?>
        </tbody>

    </table>
</div>

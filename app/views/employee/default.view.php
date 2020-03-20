<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .wrapper {
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

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<div class="wrapper">
    <h1><?= $text_table_employee ?> </h1>
    <a href="/employee/add"><?= $text_add_new_employee ?></a>

    <?php if (isset($_SESSION['message'])) { ?>
        <p class="message"><?= $_SESSION['message'] ?></p>
    <?php
        unset($_SESSION['message']);
    }
    ?>
    <table>
        <thead>
            <tr>
                <th><?= $text_table_employee_name ?></th>
                <th><?= $text_table_employee_age ?></th>
                <th><?= $text_table_employee_address ?></th>
                <th><?= $text_table_employee_salary ?></th>
                <th><?= $text_table_employee_tax ?></th>
                <th><?= $text_table_control ?></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($employees)) {
                if (false !== $employees) {
                    foreach ($employees as $employee) {
            ?>
                        <tr>
                            <td><?= $employee->name ?></td>
                            <td><?= $employee->age ?></td>
                            <td><?= $employee->address ?></td>
                            <td><?= $employee->salary ?></td>
                            <td><?= $employee->tax ?></td>
                            <td><a href="/employee/edit/<?= $employee->id ?>"> <?= $text_employee_edit ?></a> |
                                <a href="/employee/delete/<?= $employee->id ?>" onclick="return confirm('<?= $text_delete_confirm ?>');"> <?= $text_employee_delete ?></a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <td colspan="5">
                        <p>No emp</p>
                    </td>
            <?php
                }
            }
            ?>
        </tbody>

    </table>
</div>
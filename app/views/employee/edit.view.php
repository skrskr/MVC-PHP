<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .wrapper2 {
        width: 70%;
        margin: 0 auto;
    }

    .wrapper2 h1 {
        text-align: center;
        font-weight: bold;
    }

    input[type=text],
    input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

<div class="wrapper2">
    <h1>Edit Employee</h1>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $employee->getName() ?>" placeholder="Your name...">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" step="0.1" value=<?= $employee->getAge() ?> placeholder="Your age...">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="<?= $employee->getAddress() ?>" placeholder="Your address...">

        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" step="0.01" value=<?= $employee->getSalary() ?> placeholder="Your salary...">

        <label for="tax">Tax</label>
        <input type="number" id="tax" name="tax" step="0.01" value=<?= $employee->getTax() ?> placeholder="Your tax...">

        <input type="submit" name="submit" value="Save">
    </form>
</div>
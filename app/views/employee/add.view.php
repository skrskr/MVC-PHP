<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .wrapper{
        width: 70%;
        margin: 0 auto;
    }

    .wrapper h1 {
        text-align: center;
        font-weight: bold;
    }
    input[type=text], input[type=number]{
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

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<div class="wrapper">
    <h1>New Employee</h1>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name...">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" step="0.1" placeholder="Your age...">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your address...">

        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" step="0.01" placeholder="Your salary...">

        <label for="tax">Tax</label>
        <input type="number" id="tax" name="tax" step="0.01" placeholder="Your tax...">

        <input type="submit" name="submit" value="Save">
    </form>
</div>

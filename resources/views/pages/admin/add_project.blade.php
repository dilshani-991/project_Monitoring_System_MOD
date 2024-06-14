<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Container</title>
    <link rel="stylesheet" href="styles.css">

</head>
<style>
    /* styles.css */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f8f9fa;
    }

    .container {
        width: 8in;
        height: 5in;
        background-color: white;
        border: 1px solid #ddd;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    form {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .form-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 10px;
        display: flex;
        flex-direction: column;
    }

    .form-group.half-width {
        width: 48%;
    }

    .form-group.full-width {
        width: 100%;
    }

    .btn-primary {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .text-center {
        text-align: center;
    }
</style>
<body>


    <div class="container">
        <form>
            <div class="form-row">
                <div class="form-group half-width">
                    <label for="inputState">Category</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Army</option>
                        <option>Navy</option>
                        <option>Airforce</option>
                    </select>
                </div>
                <div class="form-group half-width">
                    <label for="inputProjectID">Project ID</label>
                    <input type="text" class="form-control" id="inputProjectID" placeholder="Project ID">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group half-width">
                    <label for="inputProjectName">Project Name</label>
                    <input type="text" class="form-control" id="inputProjectName" placeholder="Project Name">
                </div>
                <div class="form-group half-width">
                    <label for="inputSubmitter">Submitted By</label>
                    <input type="text" class="form-control" id="inputSubmitter" placeholder="Enter name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group half-width">
                    <label for="inputSubmitDate">Submitted Date</label>
                    <input type="date" class="form-control" id="inputSubmitDate">
                </div>
                <div class="form-group half-width">
                    <label for="inputCloseDate">Closing Date</label>
                    <input type="date" class="form-control" id="inputCloseDate">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group full-width">
                    <label for="inputStatus">Update Status</label>
                    <select id="inputStatus" class="form-control">
                        <option selected>Choose...</option>
                        <option>Status 1</option>
                        <option>Status 2</option>
                        <option>Status 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

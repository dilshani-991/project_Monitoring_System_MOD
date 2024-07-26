<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #eef1f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1000px;
}

.hedline {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 15px;
    flex: 1;
    padding: 0 10px;
}

.form-group.col-md-6 {
    flex: 0 0 48%;
}

.form-group.col-md-12 {
    flex: 0 0 100%;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.text-center {
    text-align: center;
}

.btn {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="hedline">Add Project Form</h2>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif




        <form action="{{route('project.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCategory">Category</label>
                    <select class="form-control" id="inputCategory" name="category" required>
                        <option value="">Choose...</option>
                        <option value="Army">Army</option>
                        <option value="AirForce">AirForce</option>
                        <option value="Navy">Navy</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="projectId"><b>Project ID</b></label>
                    <input type="text" class="form-control" id="projectId" name="projectId" placeholder="Type Here" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="projectName"><b>Project Name</b></label>
                    <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Type Here" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="submitBy"><b>Submitted By</b></label>
                    <input type="text" class="form-control" id="submitBy" name="submitBy" placeholder="Type Here" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="submitDate"><b>Approval Date</b></label>
                    <input type="date" class="form-control" id="submitDate" name="submitDate" placeholder="Type Here" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="closeDate"><b>Due  Date</b></label>
                    <input type="date" class="form-control" id="closeDate" name="closeDate" placeholder="Type Here" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Update Status</label>
                    <select class="form-control" id="inputStatus" name="status" required>
                        <option value="">Choose...</option>
                        <option value="new">New</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="complete">Complete</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary ml-2">Cancel</button>
            </div>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

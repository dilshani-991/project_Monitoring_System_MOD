<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APPLICATION FOR PROJECTS</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .form-container {
      height: 6in;
      width: 13in;
      padding: 20px;
      border: 1px solid #ccc;
      overflow-y: auto;
      margin: auto;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      width: 900px;
      margin-top: 20px;
      gap: 10px;
      margin-left: 200px;

    }

    .button-container button {
      flex: 1;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">

        <!-- TYPE HERE TO YOUR CONTENT -->
        <div class="form-group mt-3">
          <label for="strategy"><strong>10. Project Impacts, Outcomes and Outputs/ Results Framework of the Project/ Performance Framework of the Project:</strong></label>
          <div class="form-group mt-3">
            <label for="economicImpacts"><strong>10.1 Project Impacts</strong></label>
            <div>
              <label for="economicImpacts">Economic</label>
              <textarea class="form-control" id="economicImpacts" name="economicImpacts" rows="2" placeholder="e.g., No. of Jobs created/ Export Import volume/ increase in production / foreign exchange savings"></textarea>
            </div>
            <div>
              <label for="environmentalImpacts">Environment</label>
              <textarea class="form-control" id="environmentalImpacts" name="environmentalImpacts" rows="2" placeholder="e.g., Emission reduction"></textarea>
            </div>
            <div>
              <label for="socialImpacts">Social</label>
              <textarea class="form-control" id="socialImpacts" name="socialImpacts" rows="2" placeholder="e.g., Poverty reduction/increase of household income"></textarea>
            </div>
          </div>
        </div>

        <div class="form-group mt-3">
          <label for="outcomes"><strong>10.2 Project Outcomes</strong></label>
          <table class="table table-bordered" id="outcomesTable">
            <thead>
              <tr>
                <th>Outcome</th>
                <th>Indicator/ KPI</th>
                <th>Unit of Measure</th>
                <th>Source of Data</th>
                <th>Baseline Data & Year</th>
                <th>Target</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="outcome[]" class="form-control" required></td>
                <td><input type="text" name="indicator[]" class="form-control" required></td>
                <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                <td><input type="text" name="baselineData[]" class="form-control" required></td>
                <td><input type="text" name="target[]" class="form-control" required></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outcomesTable')">Remove</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" onclick="addOutcomeRow()">Add Outcomes</button>
          <div class="container mt-5">
            <p><i>KPI: Key Performance Indicator</i></p>
          </div>
        </div>

        <div class="form-group mt-3">
          <label for="outputs"><strong>10.3 Project Outputs</strong></label>
          <table class="table table-bordered" id="outputsTable">
            <thead>
              <tr>
                <th>Output</th>
                <th>Indicator/ KPI</th>
                <th>Unit of Measure</th>
                <th>Source of Data</th>
                <th>Baseline Data & Year</th>
                <th>Target</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="output[]" class="form-control" required></td>
                <td><input type="text" name="indicator[]" class="form-control" required></td>
                <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                <td><input type="text" name="baselineData[]" class="form-control" required></td>
                <td><input type="text" name="target[]" class="form-control" required></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outputsTable')">Remove</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" onclick="addOutputRow()">Add Outputs</button>
        </div>
      </div>


    </div>
    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Back</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/relationship';
    });
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/aling-project';
    });


    </script>

  </form>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function addOutcomeRow() {
      const table = document.getElementById("outcomesTable").getElementsByTagName('tbody')[0];
      const newRow = table.insertRow();
      const cols = ["outcome[]", "indicator[]", "unitOfMeasure[]", "sourceOfData[]", "baselineData[]", "target[]"];
      cols.forEach(name => {
        const newCell = newRow.insertCell();
        const input = document.createElement("input");
        input.type = "text";
        input.className = "form-control";
        input.name = name;
        input.required = true;
        newCell.appendChild(input);
      });
      const actionCell = newRow.insertCell();
      const button = document.createElement("button");
      button.type = "button";
      button.className = "btn btn-danger";
      button.textContent = "Remove";
      button.onclick = function () {
        deleteRow(this, 'outcomesTable');
      };
      actionCell.appendChild(button);
    }

    function addOutputRow() {
      const table = document.getElementById("outputsTable").getElementsByTagName('tbody')[0];
      const newRow = table.insertRow();
      const cols = ["output[]", "indicator[]", "unitOfMeasure[]", "sourceOfData[]", "baselineData[]", "target[]"];
      cols.forEach(name => {
        const newCell = newRow.insertCell();
        const input = document.createElement("input");
        input.type = "text";
        input.className = "form-control";
        input.name = name;
        input.required = true;
        newCell.appendChild(input);
      });
      const actionCell = newRow.insertCell();
      const button = document.createElement("button");
      button.type = "button";
      button.className = "btn btn-danger";
      button.textContent = "Remove";
      button.onclick = function () {
        deleteRow(this, 'outputsTable');
      };
      actionCell.appendChild(button);
    }

    function deleteRow(btn, tableId) {
      const table = document.getElementById(tableId).getElementsByTagName('tbody')[0];
      const row = btn.parentNode.parentNode;
      table.removeChild(row);
    }
  </script>
</body>

</html>

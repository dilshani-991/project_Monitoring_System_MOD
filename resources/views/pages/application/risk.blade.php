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
      margin-left: 100px;
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
  <form action="{{ route('risk') }}" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">
        <p><strong>14.</strong></p>
        <div class="form-group">


          <div class="form-group mt-3">
            <label for="policy2">i.	What are the identified disaster risks, if any?</label>
            <textarea class="form-control" id="policy2" name="policy2" rows="5"></textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="form-group mt-3">
            <label for="sector1">ii.	What are the required mitigation activities/resilience features?</label>
            <textarea class="form-control" id="sector1" name="sector1" rows="5"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="sector2">iii.	Additional cost required to accommodate the above-mentioned mitigation measures/resilient features (Rs.mn).

                (Yes/No). If not, reasons for non-inclusion and submission of the project proposal</label>
            <textarea class="form-control" id="sector2" name="sector2" rows="5"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="sector3">iv.	What are the socio-economic benefits to be achieved through mainstreaming the DRR?  </label>
            <textarea class="form-control" id="sector3" name="sector3" rows="5"></textarea>
          </div>
        </div>

        <div class="form-group mt-3">
           <div class="headline-1">
            <label for="strategy"><strong>15. Project Monitoring and Evaluation Plan:

            </strong></label></div>

            <label for="strategy"><strong>15.1 Project Monitoring Plan:</strong></label>
            <table class="table table-bordered" id="outcomesTable">
                <thead>
                    <tr>
                        <th>Result</th>
                        <th>Indicator/ KPI</th>
                        <th>Unit of Measure</th>
                        <th>Source of Data</th>
                        <th>Means of verification</th>
                        <th>Frequency</th>
                        <th>Responsibility</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="result[]" class="form-control" required></td>
                        <td><input type="text" name="indicator[]" class="form-control" required></td>
                        <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                        <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                        <td><input type="text" name="verification[]" class="form-control" required></td>
                        <td><input type="text" name="frequency[]" class="form-control" required></td>
                        <td><input type="text" name="responsibility[]" class="form-control" required></td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outcomesTable')">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addOutcomeRow()">Add Outcomes</button>

        </div>



        <div class="form-group mt-3">

            <table class="table table-bordered" id="outputsTable">
                <thead>
                    <tr>
                        <th>Result</th>
                        <th>Indicator/ KPI</th>
                        <th>Unit of Measure</th>
                        <th>Source of Data</th>
                        <th>Means of verification</th>
                        <th>Frequency</th>
                        <th>Responsibility</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="result[]" class="form-control" required></td>
                        <td><input type="text" name="indicator[]" class="form-control" required></td>
                        <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                        <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                        <td><input type="text" name="verification[]" class="form-control" required></td>
                        <td><input type="text" name="frequency[]" class="form-control" required></td>
                        <td><input type="text" name="responsibility[]" class="form-control" required></td>

                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outputsTable')">Remove</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addOutputRow()">Add Outputs</button>
              </div>

        <p><strong>15.2 Project Evaluation Plan:</strong> </p>
        <div class="form-group">
          <div class="form-group mt-3">
            <label for="sector1">15.2.1 Whether previous evaluation lessons of similar projects considered in the formulation of the project or not. If yes please describe.</label>
            <textarea class="form-control" id="sector1" name="sector1" rows="5"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="sector2">15.2.2 Please submit On-going/ Ex-post Evaluation Plan with the specified time line for Medium, Large and Mega scale projects, if any.

            </label>
            <textarea class="form-control" id="sector2" name="sector2" rows="5"></textarea>
          </div>




        </div>
      </div>

    </div>
    <div class="container">
        <div class="button-container">
            <button type="button" class="btn btn-primary" id="previousButton">Previous</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
        </div>
    </div>

    <script>
        document.getElementById('previousButton').addEventListener('click', function() {
            window.location.href = '/aling-project';
        });

        document.getElementById('nextButton').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '/financing-plan';
        });
    </script>
  </form>

  <script>
    function addOutcomeRow() {
        const table = document.getElementById('outcomesTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.innerHTML = `
            <td><input type="text" name="result[]" class="form-control" required></td>
                        <td><input type="text" name="indicator[]" class="form-control" required></td>
                        <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                        <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                        <td><input type="text" name="verification[]" class="form-control" required></td>
                        <td><input type="text" name="frequency[]" class="form-control" required></td>
                        <td><input type="text" name="responsibility[]" class="form-control" required></td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outcomesTable')">Remove</button></td>
        `;
    }

    function addOutputRow() {
        const table = document.getElementById('outputsTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.innerHTML = `
            <td><input type="text" name="result[]" class="form-control" required></td>
                        <td><input type="text" name="indicator[]" class="form-control" required></td>
                        <td><input type="text" name="unitOfMeasure[]" class="form-control" required></td>
                        <td><input type="text" name="sourceOfData[]" class="form-control" required></td>
                        <td><input type="text" name="verification[]" class="form-control" required></td>
                        <td><input type="text" name="frequency[]" class="form-control" required></td>
                        <td><input type="text" name="responsibility[]" class="form-control" required></td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this, 'outputsTable')">Remove</button></td>
        `;
    }

    function deleteRow(button, tableId) {
        const row = button.parentNode.parentNode;
        const table = document.getElementById(tableId).getElementsByTagName('tbody')[0];
        table.removeChild(row);
    }
</script>


  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function addStakeholderRow() {
      const table = document.getElementById("stakeholdersTable").getElementsByTagName('tbody')[0];
      const newRow = table.insertRow();
      const cols = ["stakeholder_agency[]", "stakeholder_intervention[]", "stakeholder_status[]", "stakeholder_include[]"];
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
        deleteRow(this);
      };
      actionCell.appendChild(button);
    }

    function addPartnerRow() {
      const table = document.getElementById("partnersTable").getElementsByTagName('tbody')[0];
      const newRow = table.insertRow();
      const cols = ["partner_agency[]", "partner_intervention[]", "partner_status[]", "partner_include[]"];
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
        deleteRow(this);
      };
      actionCell.appendChild(button);
    }

    function deleteRow(btn) {
      const row = btn.parentNode.parentNode;
      row.parentNode.removeChild(row);
    }
  </script>
</body>

</html>

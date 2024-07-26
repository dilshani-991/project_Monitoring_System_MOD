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
    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
.text{
    width: 50px;
}
  </style>
</head>

<body>
  <form action="{{ route('relationship') }}" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">
        <p><strong>16. Project Budget:</strong></p>
        <div class="form-group">
          <label for="policy1"><strong>16.1 Cost Breakdown</strong></label>
          <div class="form-group mt-3">
            <table>
                <tr>
                    <th rowspan="2">Cost Component</th>
                    <th colspan="3">Cost for project period (Rs. Mn)</th>
                    <th rowspan="2">Total Cost (Rs. Mn)</th>
                </tr>
                <tr>
                    <th>Year 1</th>
                    <th>Year 2</th>
                    <th>Year 3</th>
                </tr>
                <tr>
                    <td>i. Initial project preparation</td>
                    <td><input type="text" name="IPP" ></td>
                    <td><input type="text" name="IPP" ></td>
                    <td><input type="text" name="IPP" ></td>
                    <td><input type="text" name="IPP" ></td>
                </tr>
                <tr>
                    <td>ii. Land Acquisition</td>
                    <td><input type="text" name="LA" ></td>
                    <td><input type="text" name="LA" ></td>
                    <td><input type="text" name="LA" ></td>
                    <td><input type="text" name="LA" ></td>
                </tr>
                <tr>
                    <td>iii. Resettlement Activities</td>
                    <td><input type="text" name="RA" ></td>
                    <td><input type="text" name="RA" ></td>
                    <td><input type="text" name="RA" ></td>
                    <td><input type="text" name="RA" ></td>
                </tr>
                <tr>
                    <td>iv. Construction/establishment *</td>
                    <td><input type="text" name="construction" ></td>
                    <td><input type="text" name="construction" ></td>
                    <td><input type="text" name="construction" ></td>
                    <td><input type="text" name="construction" ></td>
                </tr>
                <tr>
                    <td>v. Purchase of equipment *</td>
                    <td><input type="text" name="p_equipment" ></td>
                    <td><input type="text" name="p_equipment" ></td>
                    <td><input type="text" name="p_equipment" ></td>
                    <td><input type="text" name="p_equipment" ></td>
                </tr>
                <tr>
                    <td>vi. Purchase of vehicles *</td>
                    <td><input type="text" name="p_vehical" ></td>
                    <td><input type="text" name="p_vehical" ></td>
                    <td><input type="text" name="p_vehical" ></td>
                    <td><input type="text" name="p_vehical" ></td>
                </tr>
                <tr>
                    <td>vii. Training – Local</td>
                    <td><input type="text" name="training_local" ></td>
                    <td><input type="text" name="training_local" ></td>
                    <td><input type="text" name="training_local" ></td>
                    <td><input type="text" name="training_local" ></td>
                </tr>
                <tr>
                    <td>viii. Training – Foreign</td>
                    <td><input type="text" name="training_foreign" ></td>
                    <td><input type="text" name="training_foreign" ></td>
                    <td><input type="text" name="training_foreign" ></td>
                    <td><input type="text" name="training_foreign" ></td>
                </tr>
                <tr>
                    <td>ix. Supervision Consultancy – Local</td>
                    <td><input type="text" name="Supervision_local" ></td>
                    <td><input type="text" name="Supervision_local" ></td>
                    <td><input type="text" name="Supervision_local" ></td>
                    <td><input type="text" name="Supervision_local" ></td>
                </tr>
                <tr>
                    <td>x. Supervision Consultancy – Foreign</td>
                    <td><input type="text" name="Supervision_foreign" ></td>
                    <td><input type="text" name="Supervision_foreign" ></td>
                    <td><input type="text" name="Supervision_foreign" ></td>
                    <td><input type="text" name="Supervision_foreign" ></td>
                </tr>
                <tr>
                    <td>xi. O & M and Management</td>
                    <td><input type="text" name="management" ></td>
                    <td><input type="text" name="management" ></td>
                    <td><input type="text" name="management" ></td>
                    <td><input type="text" name="management" ></td>
                </tr>
                <tr>
                    <td>xii. Tax and duties</td>
                    <td><input type="text" name="tax" ></td>
                    <td><input type="text" name="tax" ></td>
                    <td><input type="text" name="tax" ></td>
                    <td><input type="text" name="tax" ></td>
                </tr>
                <tr>
                    <td>xiii. Disaster risk reduction</td>
                    <td><input type="text" name="risk" ></td>
                    <td><input type="text" name="risk" ></td>
                    <td><input type="text" name="risk" ></td>
                    <td><input type="text" name="risk" ></td>
                </tr>
                <tr>
                    <td>xiv. Mitigatory measures (identified at Item No.12)</td>
                    <td><input type="text" name="Mitigatory" ></td>
                    <td><input type="text" name="Mitigatory" ></td>
                    <td><input type="text" name="Mitigatory" ></td>
                    <td><input type="text" name="Mitigatory" ></td>
                </tr>
                <tr>
                    <td>xv. Other (specify)</td>
                    <td><input type="text" name="other" ></td>
                    <td><input type="text" name="other" ></td>
                    <td><input type="text" name="other" ></td>
                    <td><input type="text" name="other" ></td>
                </tr>
                <tr>
                    <td >Total Cost</td>
                    <td><input type="text" name="TC" ></td>
                    <td><input type="text" name="TC" ></td>
                    <td><input type="text" name="TC" ></td>
                    <td><input type="text" name="TC" ></td>
                </tr>
            </table>
          </div>

        </div>

        <p><strong>16.2 Details of the Activities (Construction, Purchase of Equipment and Vehicles)</strong> </p>
        <div class="form-group">
            <div class="form-group mt-3">
                <table class="table table-bordered" id="activityTable">
                    <thead>
                        <tr>
                            <th rowspan="2" align="center">Activity</th>
                            <th rowspan="2">Cost (Rs.mn)</th>
                            <th rowspan="2">No of Units (km, sq mt, no.)</th>
                            <th rowspan="2">Unit Cost (Rs.)</th>
                            <th colspan="2">Standard Cost (Rs.)</th>
                            <th rowspan="2">Action</th>
                        </tr>
                        <tr>
                            <th>National</th>
                            <th>International</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="activity[]" class="form-control"></td>
                            <td><input type="text" name="cost[]" class="form-control"></td>
                            <td><input type="text" name="units[]" class="form-control"></td>
                            <td><input type="text" name="unitCost[]" class="form-control"></td>
                            <td><input type="text" name="nationalCost[]" class="form-control"></td>
                            <td><input type="text" name="internationalCost[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addActivityRow()">Add More Activity</button>
            </div>

            <script>
                function addActivityRow() {
                    const table = document.getElementById('activityTable').getElementsByTagName('tbody')[0];
                    const newRow = table.insertRow();

                    newRow.innerHTML = `
                        <td><input type="text" name="activity[]" class="form-control"></td>
                        <td><input type="text" name="cost[]" class="form-control"></td>
                        <td><input type="text" name="units[]" class="form-control"></td>
                        <td><input type="text" name="unitCost[]" class="form-control"></td>
                        <td><input type="text" name="nationalCost[]" class="form-control"></td>
                        <td><input type="text" name="internationalCost[]" class="form-control"></td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                    `;
                }

                function deleteRow(button) {
                    const row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }

            </script>





        </div>


















        <p><strong>17. Financing Plan:</strong></p>
        <div class="form-group">
          <label for="policy1"><strong>17. 1 Method of Financing</strong></label>
          <div class="form-group mt-3">
            <table>
                <tr>
                    <th >Financial Source</th>
                    <th >Amount (Rs. Mn)</th>

                </tr>

                <tr>
                    <td>Domestic Fund</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>


                </tr>

                <tr>
                    <td rowspan="2">External Source
                        <p>-	Loan</p>
                        -	Grant
                        </td>
                    <td rowspan="2"><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr></tr>
                <tr>

                    <td>Proponent Funding</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr>
                    <td>Beneficiary Contribution</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr>
                    <td>Co-financing (please specify the agency/ source)</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr>
                    <td>Public Private Partnership (PPP)</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr>
                    <td>Other (specify)</td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <td><input type="text" name="IPP" style="width: 300px;"></td>

                </tr>







            </table>
          </div>

        </div>

        <p><strong>
            17.2 Revenue Forecast
            </strong> </p>
        <div class="form-group">
            <div class="form-group mt-3">
                <table class="table table-bordered" id="componentTable">
                    <tr>
                        <th >Components</th>
                        <th >Year 1</th>
                        <th >Year 2</th>
                        <th >Year 3</th>
                        <th >Year 4</th>
                        <th >Year 5</th>
                        <th >Total(Rs. mn)</th>
                        <th ></th>
                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" name="components[]" class="form-control"></td>
                            <td><input type="text" name="year1[]" class="form-control"></td>
                            <td><input type="text" name="year2[]" class="form-control"></td>
                            <td><input type="text" name="year3[]" class="form-control"></td>
                            <td><input type="text" name="year4[]" class="form-control"></td>
                            <td><input type="text" name="year5[]" class="form-control"></td>
                            <td><input type="text" name="total[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addActivityRow()">Add More Components</button>

            <script>
                function addActivityRow() {
                    const table = document.getElementById('componentTable').getElementsByTagName('tbody')[0];
                    const newRow = table.insertRow();

                    newRow.innerHTML = `
                        <td><input type="text" name="components[]" class="form-control"></td>
                        <td><input type="text" name="year1[]" class="form-control"></td>
                        <td><input type="text" name="year2[]" class="form-control"></td>
                        <td><input type="text" name="year3[]" class="form-control"></td>
                        <td><input type="text" name="year4[]" class="form-control"></td>
                        <td><input type="text" name="year5[]" class="form-control"></td>
                        <td><input type="text" name="total[]" class="form-control"></td>
                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                    `;
                }

                function deleteRow(button) {
                    const row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }

            </script>

            </div>





        </div>
        <p><strong>
            17.3 Project Operation and Maintenance Costs after Completion
            </strong> </p>
        <div class="form-group">
            <div class="form-group mt-3">
                <table>
                    <tr>
                        <th >Components</th>
                        <th >Source of Funds</th>
                        <th >Year 1</th>
                        <th >Year 2</th>
                        <th >Year 3</th>
                        <th >Year 4</th>
                        <th >Year 5</th>
                        <th >Total(Rs. mn)</th>
                    </tr>

                    <tr>
                        <td>Capital</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>i.</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>ii.</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Recurrent</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>i.</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>ii</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>


                </table>
              </div>





        </div>
      </div>
    </form>
    <div class="container">
        <div class="button-container">
            <button type="button" class="btn btn-primary" id="previousButton">Previous</button>
            <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
        </div>
    </div>

    <script>
        document.getElementById('previousButton').addEventListener('click', function() {
            window.location.href = '/risk'; // Change to your risk page URL
        });

        document.getElementById('nextButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent form submission if it's inside a form
            window.location.href = '/implementation'; // Change to your financing plan page URL
        });
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

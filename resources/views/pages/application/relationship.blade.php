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
  <form action="{{ route('relationship') }}" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">
        <p><strong>8. Relationship of the Project to National Policies and Strategies:</strong></p>
        <div class="form-group">
          <label for="policy1"><strong>8.1 Relationship of project to National Policy Framework</strong></label>
          <div class="form-group mt-3">
            <label for="policy1">8.1.1 Policy elements of the Framework most relevant to the project</label>
            <textarea class="form-control" id="policy1" name="policy1" rows="1"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="policy2">8.1.2 Contribution that can be made from the project to each of the above mentioned policy elements</label>
            <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>
          </div>
        </div>

        <p><strong>8.2 Relationship to the Sectoral Master Plan</strong> (of the Ministry, sub-sector or the sector)</p>
        <div class="form-group">
          <div class="form-group mt-3">
            <label for="sector1">8.2.1 Details of the relevant sectoral master plan approved by the Cabinet of Ministers</label>
            <textarea class="form-control" id="sector1" name="sector1" rows="1"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="sector2">8.2.2 Has the project been included as a high priority project to the master plan? (Yes/No). If not, reasons for non-inclusion and submission of the project proposal</label>
            <textarea class="form-control" id="sector2" name="sector2" rows="1"></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="sector3">8.2.3 Has the project been included as a project to the master plan? (Yes/No). If not, reasons for non-inclusion and submission of the project proposal</label>
            <textarea class="form-control" id="sector3" name="sector3" rows="1"></textarea>
          </div>
        </div>
        <div class="form-group mt-3">
          <label for="strategy"><strong>8.3 What is the sector strategy relevant to the project?</strong></label>
          <textarea class="form-control" id="strategy" name="strategy" rows="1"></textarea>
        </div>

        <div class="mt-5">
          <p><strong>9. Coordination with Stakeholders and Partners for Implementation of the Project:</strong></p>
          @if(session('success'))
          <div class="alert alert-success">
            <!-- Add success message here -->
          </div>
          @endif
          <h4>Stakeholders</h4>
          <table class="table table-bordered" id="stakeholdersTable">
            <thead>
              <tr>
                <th>Name of the agency</th>
                <th>Nature of Intervention</th>
                <th>Current status of intervention</th>
                <th>Include in project? (Yes/No)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="stakeholder_agency[]" class="form-control" required></td>
                <td><input type="text" name="stakeholder_intervention[]" class="form-control" required></td>
                <td><input type="text" name="stakeholder_status[]" class="form-control" required></td>
                <td><input type="text" name="stakeholder_include[]" class="form-control" required></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" onclick="addStakeholderRow()">Add Stakeholder</button>
          <div class="container mt-5">
          <p><b><i>Stakeholders : </b>Individuals, people, organizations or groups who can influence the implementation of the Project or achievement of its result. Stakeholders may include: Project clients and non-beneficiaries from the target group, those who can influence the decisions of the Project, project/ministry staff associations; those with an interest in the Project (advocacy group, central agencies); and those who are adversely or unintentionally affected by the Project. </i></p>
          </div>
          <h4>Partners</h4>
          <table class="table table-bordered" id="partnersTable">
            <thead>
              <tr>
                <th>Name of the agency</th>
                <th>Nature of Intervention</th>
                <th>Current status of intervention</th>
                <th>Include in project? (Yes/No)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="partner_agency[]" class="form-control" required></td>
                <td><input type="text" name="partner_intervention[]" class="form-control" required></td>
                <td><input type="text" name="partner_status[]" class="form-control" required></td>
                <td><input type="text" name="partner_include[]" class="form-control" required></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" onclick="addPartnerRow()">Add Partner</button>
        </div>
        <div class="container mt-5">
          <p><b><i>Partner: </b>The partner is the parties who join the executor in implementing the Project. The partners often undertaken some components of the Project. E.g. Ministry of Health (MoH) in a Rural Water Supply Project where MoH implements the health and hygienic education component of the Project.   </i></p>
          </div>
      </div>

    </div>
    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Back</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/project_objective';
    });
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/project-impacts';
    });


    </script>
  </form>

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

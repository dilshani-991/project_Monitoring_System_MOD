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
        <div class="form-group mt-3">
          <label for="strategy"><strong>11. Aligning the project objective/s with the Relevant Sustainable Development Goal/s</strong></label>
          <table class="table table-bordered" id="stakeholdersTable">
            <thead>
              <tr>
                <th>Sustainable Development Goal/s</th>
                <th>Sustainable Development Target/s</th>
                <th>Directly related</th>
                <th>Indirectly related</th>
                <th>If directly related, measurable indicator/s</th>
                <th>Expected contribution to the achievement (%)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="sustainable_development_goal[]" class="form-control" required></td>
                <td><input type="text" name="sustainable_development_target[]" class="form-control" required></td>
                <td><input type="text" name="directly_related[]" class="form-control" required></td>
                <td><input type="text" name="indirectly_related[]" class="form-control" required></td>
                <td><input type="text" name="measurable_indicator[]" class="form-control" required></td>
                <td><input type="text" name="expected_contribution[]" class="form-control" required></td>
                <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn btn-primary" onclick="addStakeholderRow()">Add Sustainable Development Goal/s</button>
        </div>
        <div class="form-row">
          <p><b>12. Potential Negative Impact on Socio Economic Activities and Environment by the Project</b></p>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Yes</th>
                  <th>No</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Residences</td>
                  <td><input type="radio" name="residences" value="yes" id="residences-yes"><label for="residences-yes"></label></td>
                  <td><input type="radio" name="residences" value="no" id="residences-no"><label for="residences-no"></label></td>
                </tr>
                <tr>
                  <td>Schools</td>
                  <td><input type="radio" name="schools" value="yes" id="schools-yes"><label for="schools-yes"></label></td>
                  <td><input type="radio" name="schools" value="no" id="schools-no"><label for="schools-no"></label></td>
                </tr>
                <tr>
                  <td>Hospitals</td>
                  <td><input type="radio" name="hospitals" value="yes" id="hospitals-yes"><label for="hospitals-yes"></label></td>
                  <td><input type="radio" name="hospitals" value="no" id="hospitals-no"><label for="hospitals-no"></label></td>
                </tr>
                <tr>
                  <td>Build-up areas</td>
                  <td><input type="radio" name="build_up_areas" value="yes" id="build-up-areas-yes"><label for="build-up-areas-yes"></label></td>
                  <td><input type="radio" name="build_up_areas" value="no" id="build-up-areas-no"><label for="build-up-areas-no"></label></td>
                </tr>
                <tr>
                  <td>Home-gardens</td>
                  <td><input type="radio" name="home_gardens" value="yes" id="home-gardens-yes"><label for="home-gardens-yes"></label></td>
                  <td><input type="radio" name="home_gardens" value="no" id="home-gardens-no"><label for="home-gardens-no"></label></td>
                </tr>
                <tr>
                  <td>Paddy fields/ farmlands</td>
                  <td><input type="radio" name="paddy_fields" value="yes" id="paddy-fields-yes"><label for="paddy-fields-yes"></label></td>
                  <td><input type="radio" name="paddy_fields" value="no" id="paddy-fields-no"><label for="paddy-fields-no"></label></td>
                </tr>
                <tr>
                  <td>Other agricultural lands</td>
                  <td><input type="radio" name="other_agricultural_lands" value="yes" id="other-agricultural-lands-yes"><label for="other-agricultural-lands-yes"></label></td>
                  <td><input type="radio" name="other_agricultural_lands" value="no" id="other-agricultural-lands-no"><label for="other-agricultural-lands-no"></label></td>
                </tr>
                <tr>
                  <td>Archaeological sites</td>
                  <td><input type="radio" name="archaeological_sites" value="yes" id="archaeological-sites-yes"><label for="archaeological-sites-yes"></label></td>
                  <td><input type="radio" name="archaeological_sites" value="no" id="archaeological-sites-no"><label for="archaeological-sites-no"></label></td>
                </tr>
                <tr>
                  <td>Archeological Clearance (If necessary)</td>
                  <td><input type="radio" name="archeological_clearance" value="yes" id="archeological-clearance-yes"><label for="archeological-clearance-yes"></label></td>
                  <td><input type="radio" name="archeological_clearance" value="no" id="archeological-clearance-no"><label for="archeological-clearance-no"></label></td>
                </tr>
                <tr>
                  <td>Religious places</td>
                  <td><input type="radio" name="religious_places" value="yes" id="religious-places-yes"><label for="religious-places-yes"></label></td>
                  <td><input type="radio" name="religious_places" value="no" id="religious-places-no"><label for="religious-places-no"></label></td>
                </tr>
                <tr>
                  <td>Rivers/ Streams</td>
                  <td><input type="radio" name="rivers_streams" value="yes" id="rivers-streams-yes"><label for="rivers-streams-yes"></label></td>
                  <td><input type="radio" name="rivers_streams" value="no" id="rivers-streams-no"><label for="rivers-streams-no"></label></td>
                </tr>
                <tr>
                  <td>Lagoons</td>
                  <td><input type="radio" name="lagoons" value="yes" id="lagoons-yes"><label for="lagoons-yes"></label></td>
                  <td><input type="radio" name="lagoons" value="no" id="lagoons-no"><label for="lagoons-no"></label></td>
                </tr>
                <tr>
                  <td>Mangrove</td>
                  <td><input type="radio" name="mangrove" value="yes" id="mangrove-yes"><label for="mangrove-yes"></label></td>
                  <td><input type="radio" name="mangrove" value="no" id="mangrove-no"><label for="mangrove-no"></label></td>
                </tr>
                <tr>
                  <td>Coastal Scrub</td>
                  <td><input type="radio" name="coastal_scrub" value="yes" id="coastal-scrub-yes"><label for="coastal-scrub-yes"></label></td>
                  <td><input type="radio" name="coastal_scrub" value="no" id="coastal-scrub-no"><label for="coastal-scrub-no"></label></td>
                </tr>
                <tr>
                  <td>Watersheds/ Catchment areas</td>
                  <td><input type="radio" name="watersheds_catchment_areas" value="yes" id="watersheds-catchment-areas-yes"><label for="watersheds-catchment-areas-yes"></label></td>
                  <td><input type="radio" name="watersheds_catchment_areas" value="no" id="watersheds-catchment-areas-no"><label for="watersheds-catchment-areas-no"></label></td>
                </tr>
                <tr>
                  <td>Scrub forest</td>
                  <td><input type="radio" name="scrub_forest" value="yes" id="scrub-forest-yes"><label for="scrub-forest-yes"></label></td>
                  <td><input type="radio" name="scrub_forest" value="no" id="scrub-forest-no"><label for="scrub-forest-no"></label></td>
                </tr>
                <tr>
                  <td>Other (Specify)</td>
                  <td><input type="radio" name="other_specify" value="yes" id="other-specify-yes"><label for="other-specify-yes"></label></td>
                  <td><input type="radio" name="other_specify" value="no" id="other-specify-no"><label for="other-specify-no"></label></td>
                </tr>
              </tbody>
            </table>
            <p align="center"><i>Note: If “Yes” please provide measures that project plans to implement to mitigate these negative impacts</i></p>
          </div>
        </div>
      <div class="form-group mt-3">
          <label for="strategy"><strong>13. Risk and Assumptions:</strong></label>
          <div >
            <label for="strategy">i.	What are major assumptions?</label>
          <textarea class="form-control" id="strategy" name="strategy" rows="2"  placeholder="Type Here"></textarea>
          </div>
          <div >
            <label for="strategy">ii.	What are the risks and mitigation measures?  </label>
          <textarea class="form-control" id="strategy" name="strategy" rows="2"  placeholder="Type Here"></textarea>
          </div>
          <div >
            <label for="strategy">iii.	Are these mitigation measures included in project activities?  (Please elaborate).</label>
          <textarea class="form-control" id="strategy" name="strategy" rows="2"  placeholder="Type Here"></textarea>
          </div>
        </div>
      </div>

    </div>
    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Back</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/project-impacts';
    });
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/risk';
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
      const cols = ["sustainable_development_goal[]", "sustainable_development_target[]", "directly_related[]", "indirectly_related[]", "measurable_indicator[]", "expected_contribution[]"];
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

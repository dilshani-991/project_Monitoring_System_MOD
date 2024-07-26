<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APPLICATION FOR PROJECTS</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
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
      overflow-y: auto; /* Optional: Add scrollbar if content overflows */
      margin: auto;
    }

    .table-responsive {
      font-size: 14px;
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin: auto;
    }

    .button-container {
      display: flex;
      justify-content: space-between; /* Distribute buttons to left and right */
      width: 900px;
      margin-top: 20px;
      gap: 10px;
      margin-left: 200px;
    }

    .button-container button {
      flex: 1; /* Equal width for buttons */
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
<form action="{{ route('view.Activity') }}" method="POST">
    <div class="container">
      <h2>ADD PROJECT</h2>
      <div class="form-container">
        <div class="form-row">
      <p><b>05. Project Preliminary Activities:</b></p>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Item</th>
              <th>Yes</th>
              <th>No</th>
              <th>Not Necessary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pre-Feasibility</td>
              <td><input type="radio" name="Pre-Feasibility" value="yes" id="pre-feasibility-yes"><label for="pre-feasibility-yes"></label></td>
              <td><input type="radio" name="Pre-Feasibility" value="no" id="pre-feasibility-no"><label for="pre-feasibility-no"></label></td>
              <td><input type="radio" name="Pre-Feasibility" value="not-necessary" id="pre-feasibility-not-necessary"><label for="pre-feasibility-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Feasibility</td>
              <td><input type="radio" name="feasibility" value="yes" id="feasibility-yes"><label for="feasibility-yes"></label></td>
              <td><input type="radio" name="feasibility" value="no" id="feasibility-no"><label for="feasibility-no"></label></td>
              <td><input type="radio" name="feasibility" value="not-necessary" id="feasibility-not-necessary"><label for="feasibility-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Detailed Design</td>
              <td><input type="radio" name="detailed-design" value="yes" id="detailed-design-yes"><label for="detailed-design-yes"></label></td>
              <td><input type="radio" name="detailed-design" value="no" id="detailed-design-no"><label for="detailed-design-no"></label></td>
              <td><input type="radio" name="detailed-design" value="not-necessary" id="detailed-design-not-necessary"><label for="detailed-design-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Strategic Environmental Assessment (SEA)</td>
              <td><input type="radio" name="sea" value="yes" id="sea-yes"><label for="sea-yes"></label></td>
              <td><input type="radio" name="sea" value="no" id="sea-no"><label for="sea-no"></label></td>
              <td><input type="radio" name="sea" value="not-necessary" id="sea-not-necessary"><label for="sea-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Initial Environmental Assessment (IEE)</td>
              <td><input type="radio" name="iee" value="yes" id="iee-yes"><label for="iee-yes"></label></td>
              <td><input type="radio" name="iee" value="no" id="iee-no"><label for="iee-no"></label></td>
              <td><input type="radio" name="iee" value="not-necessary" id="iee-not-necessary"><label for="iee-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Environmental Impact Assessment (EIA)</td>
              <td><input type="radio" name="eia" value="yes" id="eia-yes"><label for="eia-yes"></label></td>
              <td><input type="radio" name="eia" value="no" id="eia-no"><label for="eia-no"></label></td>
              <td><input type="radio" name="eia" value="not-necessary" id="eia-not-necessary"><label for="eia-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Disaster Risk Assessment</td>
              <td><input type="radio" name="disaster-risk" value="yes" id="disaster-risk-yes"><label for="disaster-risk-yes"></label></td>
              <td><input type="radio" name="disaster-risk" value="no" id="disaster-risk-no"><label for="disaster-risk-no"></label></td>
              <td><input type="radio" name="disaster-risk" value="not-necessary" id="disaster-risk-not-necessary"><label for="disaster-risk-not-necessary"></label></td>
            </tr>
            <tr>
              <td>NBRO Clearance (If necessary)</td>
              <td><input type="radio" name="nbro-clearance" value="yes" id="nbro-clearance-yes"><label for="nbro-clearance-yes"></label></td>
              <td><input type="radio" name="nbro-clearance" value="no" id="nbro-clearance-no"><label for="nbro-clearance-no"></label></td>
              <td><input type="radio" name="nbro-clearance" value="not-necessary" id="nbro-clearance-not-necessary"><label for="nbro-clearance-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Archeological Clearance (If necessary)</td>
              <td><input type="radio" name="archeological-clearance" value="yes" id="archeological-clearance-yes"><label for="archeological-clearance-yes"></label></td>
              <td><input type="radio" name="archeological-clearance" value="no" id="archeological-clearance-no"><label for="archeological-clearance-no"></label></td>
              <td><input type="radio" name="archeological-clearance" value="not-necessary" id="archeological-clearance-not-necessary"><label for="archeological-clearance-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Land Clearance from relevant parties</td>
              <td><input type="radio" name="land-clearance" value="yes" id="land-clearance-yes"><label for="land-clearance-yes"></label></td>
              <td><input type="radio" name="land-clearance" value="no" id="land-clearance-no"><label for="land-clearance-no"></label></td>
              <td><input type="radio" name="land-clearance" value="not-necessary" id="land-clearance-not-necessary"><label for="land-clearance-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Social Impact Assessment</td>
              <td><input type="radio" name="social-impact" value="yes" id="social-impact-yes"><label for="social-impact-yes"></label></td>
              <td><input type="radio" name="social-impact" value="no" id="social-impact-no"><label for="social-impact-no"></label></td>
              <td><input type="radio" name="social-impact" value="not-necessary" id="social-impact-not-necessary"><label for="social-impact-not-necessary"></label></td>
            </tr>
            <tr>
              <td>Other (specify)</td>
              <td><input type="radio" name="other" value="yes" id="other-yes"><label for="other-yes"></label></td>
              <td><input type="radio" name="other" value="no" id="other-no"><label for="other-no"></label></td>
              <td><input type="radio" name="other" value="not-necessary" id="other-not-necessary"><label for="other-not-necessary"></label></td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        <p align="center"><i>Note: If above reports are available, please attach. NBRO: National Building Research Organization</i></p>
      </div>
        </div>
      </div>


    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Back</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/project_details';
    });
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/project_objective';
    });


    </script>












    </form>
  </div>
  <!-- Add Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

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
      height: 5.5in;

      width: 105%;
      max-width: 2000px;


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
      width: 100%; /* Ensure buttons fill the container width */
      margin-top: 20px;
    }

    .button-container button {
      flex: 1; /* Equal width for buttons */
    }
    .button-container {
            gap: 20px;
            padding-left: 100px;
        }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="{{ route('project_objective') }}" method="POST">
    @csrf
    <div class="container">
      <h2>ADD PROJECT</h2>
      <div class="form-container">
        <div class="form-row">
          <div class="form-group col-md-12">
            <p><b>6. Project Objectives: </b></p>
            <label for="objective1">Objective i.</label>
            <textarea class="form-control" id="objective1" name="objective1" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="objective2">Objective ii.</label>
            <textarea class="form-control" id="objective2" name="objective2" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="objective3">Objective iii.</label>
            <textarea class="form-control" id="objective3" name="objective3" rows="1"></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <p><b>7. Rationale of Project:</b></p>
            <label for="problem1"><b>7.1 Specific problems and needs to be addressed by project</b></label>
          </div>
          <div class="form-group col-md-12">
            <label for="problem1">7.1.1 What is the problem, need or the existing gap/ deficiency?</label>
            <textarea class="form-control" id="problem1" name="problem1" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="problem2">7.1.2 What are the root-causes, underlying causes and immediate causes that contribute to the problem or the need that the project intends to address?</label>
            <textarea class="form-control" id="problem2" name="problem2" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="problem3">7.1.3 How does this project contribute to fulfilling the existing gap in the sector?</label>
            <textarea class="form-control" id="problem3" name="problem3" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="intervention">7.1.4 Mode of intervention of this project in addressing the gap?</label>
            <textarea class="form-control" id="intervention" name="intervention" rows="1"></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="alternatives">7.1.5 Other alternative modes of interventions, if any.</label>
            <textarea class="form-control" id="alternatives" name="alternatives" rows="1"></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <p><b>7.2 Target Beneficiaries</b></p>
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Type of Beneficiaries</th>
                  <th>No. of Beneficiaries</th>
                  <th>Gender Ratio</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                  <td><input type="text" name="type_of_beneficiaries[]" class="form-control" required></td>
                  <td><input type="number" name="no_of_beneficiaries[]" class="form-control" required></td>
                  <td><input type="text" name="gender_ratio[]" class="form-control" required></td>
                </tr>
                @endfor
              </tbody>
            </table>
            <div class="form-group col-md-12">
                <label for="intervention">Type of Beneficiaries</label>
                <textarea class="form-control" id="intervention" name="intervention" rows="1"></textarea>
              </div>
              <div class="form-group col-md-12">
                <label for="intervention">7.1.4 Mode of intervention of this project in addressing the gap?</label>
                <textarea class="form-control" id="intervention" name="intervention" rows="1"></textarea>
              </div>
              <div class="form-group col-md-12">
                <label for="intervention">7.1.4 Mode of intervention of this project in addressing the gap?</label>
                <textarea class="form-control" id="intervention" name="intervention" rows="1"></textarea>
              </div>
          </div>
        </div>
      </div>
      <div class="button-container">
        <button type="button" class="btn btn-primary">Previous</button>
        <button type="submit" class="btn btn-primary">Next</button>
      </div>
    </div>
  </form>
  <!-- Add Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

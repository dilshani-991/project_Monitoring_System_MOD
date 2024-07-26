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

            <div class="form-group mt-3">
                <label for="policy2"><b>18. Resettlement Activities (if applicable):</b></label>

            </div>

            <div class="table">
                <table class="table table-bordered" id="componentTable">
                    <tr>
                        <th >Components</th>
                        <th >Number/ Location</th>

                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" name="components[]" class="form-control"></td>
                            <td><input type="text" name="location[]" class="form-control"></td>

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
                        <td><input type="text" name="location[]" class="form-control"></td>

                        <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                    `;
                }

                function deleteRow(button) {
                    const row = button.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                }

            </script>
                <div>
                    <p class="pharagarph " >
                        <p><i> If the project entails more resettlement activities, in addition to the above- mentioned activities, please specify in detail with cost breakdown.</i></p>
                    </p>
                </div>
            </div>


        <p><strong>19. Gender Perspectives:</strong></p>
        <div class="form-group">


            <div class="form-group mt-3">
                <label for="policy2">19.1 Does the project identify any gender gaps? If so describe.</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="5"></textarea>
            </div>

            <div class="form-group">
                <div class="form-group mt-3">
                   <label for="sector1">19.2 Which project strategies will address the gender imbalance?

                   </label>
                   <textarea class="form-control" id="sector1" name="sector1" rows="5"></textarea>
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <label for="sector2"><b>20. Differently Abled Persons Perspectives:</b></label>
            <div>
              <label>  20.1 Does the project identify needs of differently abled persons? If so describe the relevant activities (Cost of these activities should be part of the total project cost)</label>
              <textarea class="form-control" id="sector2" name="sector2" rows="5"></textarea>
            </div>


        </div>
      </div>

  </form>
  <div class="button-container">
    <button type="button" class="btn btn-primary" id="previousButton">Previous</button>
    <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
</div>


<script>
document.getElementById('previousButton').addEventListener('click', function() {
    window.location.href = '/financing-plan';
});

document.getElementById('nextButton').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = '/implementation-arrangements';
});
</script>







</body>

</html>

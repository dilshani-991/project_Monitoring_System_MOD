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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .table-header th {
            background-color: #e0e0e0;
            font-weight: bold;
        }

  </style>
</head>

<body>
  <form action="{{ route('risk') }}" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">

        <p><strong>21. Implementation Arrangements:</strong></p>



        <div class="form-group mt-3">
            <label for="policy2">21.1. Executing Agency - </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="5"></textarea>


            <div class="form-group">
                <div class="form-group mt-3">
                   <label for="sector1">21.2. Implementing Agency -  </label>
                   <textarea class="form-control" id="sector1" name="sector1" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group mt-3">
                 <label for="sector2">21.3. Details of Implementation mechanism (E.g. PMU, or implemented by existing agency, steering
                committees, composition of steering committees, Partnerships / PPPs etc.) </label>
                <textarea class="form-control" id="sector1" name="sector1" rows="5"></textarea>
            </div>
            <div class="form-group mt-3">
              <label>  21.4. Staff Requirement for the implementation of the project;</label>


                <table >
                    <thead>
                        <tr>
                            <th rowspan="2">Staff Category</th>
                            <th colspan="2">National</th>
                            <th colspan="2">International</th>
                        </tr>
                        <tr>
                            <th>Existing</th>
                            <th>New Recruitments</th>
                            <th>Existing</th>
                            <th>New Recruitments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Executive/ Management</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Consultancy</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Technical</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Non-technical</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Other (specify)</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                    </tbody>
                </table>
            </div>



        </div>
        <p><strong>22. Arrangements for Sustainability, Operation and Maintenance after completion</strong></p>
        <div class="form-group">
            <table>
                <thead>
                    <tr class="table-header">
                        <th rowspan="2">Covered by the project</th>
                        <th colspan="2">Covered by the project</th>
                        <th rowspan="2">Responsible Agency</th>
                    </tr>
                    <tr class="table-header">
                        <th>Yes</th>
                        <th>No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Operation and Maintenance</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Equipment and Furniture</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Regulatory mechanism</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                    <tr>
                        <td>Other</td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                        <td><input type="text" name="" ></td>
                    </tr>
                </tbody>
            </table>


            <div class="form-group mt-3">
                <label for="policy2">22.1 If not covered by the project, please explain the arrangement plan with the responsible agency for the sustainability.  </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="4"></textarea>
            </div>

            <div class="form-group">
                <div class="form-group mt-3">
                   <label for="sector1"><b>22.2 For Operation and Maintenance of the project after completion (if applicable)</b></label>

                </div>
                <table >
                    <thead>
                        <tr>
                            <th rowspan="2">Staff Category</th>
                            <th colspan="2">National</th>
                            <th colspan="2">International</th>
                        </tr>
                        <tr>
                            <th>Existing</th>
                            <th>New Recruitments</th>
                            <th>Existing</th>
                            <th>New Recruitments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Executive/ Management</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Consultancy</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Technical</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Non-technical</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                        <tr>
                            <td>Other (specify)</td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                            <td><input type="text" name="" ></td>
                        </tr>
                    </tbody>
                </table>


            </div>


        </div>

        <div class="form-group mt-3">
            <label for="sector2"> <b>23. Findings of the Economic and Financial Analysis:</b></label>
            <div>
              <label> EIRR / FIRR</label>
              <textarea class="form-control" id="policy2" name="policy2" rows="2"></textarea>
            </div>
            <div>
                <label>ENPV / FNPV</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="2"></textarea>
            </div>
            <div>
                <label>Payback Period</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="2"></textarea>
            </div>
            <div>
                <label>Cost Benefit Ratio</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="2"></textarea>
            </div>
            <div>
                <label>Cost Effectiveness Analysis especially for social infrastructure projects</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="2"></textarea>
            </div>



            </div>


        </div>
    </div>

    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Previous</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/implementation';
    });

    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/applicant-information';
    });
    </script>
  </form>








</body>

</html>

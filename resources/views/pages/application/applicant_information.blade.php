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
    <style>

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
            background-color: #aae6e9;
            font-weight: bold;
        }
    </style>
  </style>
</head>

<body>
  <form action="{{ route('risk') }}" method="POST">
    @csrf
    <div class="container">
      <h2>Add Project</h2>
      <div class="form-container">

        <p><strong>24. Applicant’s Information:</strong></p>



        <div class="form-group mt-3">
            <label for="policy2"><b>24.1 Project Proponent </b></label>

            <div class="sub-form">
                <label for="policy2">	24.1.1	Name of the Agency</label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.1.2	Address </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.1.3 Phone  </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.1.4	Fax  </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <table class="table table-bordered" id="personTable">
                    <tr>
                        <th>Person</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>E-mail</th>
                            <th>Action</th>
                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" name="title[]" class="form-control"></td>
                            <td><input type="text" name="name[]" class="form-control"></td>
                            <td><input type="text" name="designation[]" class="form-control"></td>
                            <td><input type="text" name="phone[]" class="form-control"></td>
                            <td><input type="text" name="fax[]" class="form-control"></td>
                            <td><input type="text" name="email[]" class="form-control"></td>
                            <td><input type="text" name="action[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addPersonRow()">Add new preson</button>

            <script>
                function addPersonRow() {
                    const table = document.getElementById('personTable').getElementsByTagName('tbody')[0];
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



        <div class="form-group mt-3">
            <label for="policy2"><b>24.2	Forwarding Ministry/ Provincial Council

            </b></label>

            <div class="sub-form">
                <label for="policy2">	24.2.1	Name </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.2.2	Address </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.2.3 Phone  </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <label for="policy2">	24.2.4	Fax  </label>
                <textarea class="form-control" id="policy2" name="policy2" rows="1"></textarea>

                <table class="table table-bordered" id="personTable2">
                    <tr>
                        <th>Person</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>E-mail</th>
                            <th>Action</th>
                    </tr>

                    <tbody>
                        <tr>
                            <td><input type="text" name="title[]" class="form-control"></td>
                            <td><input type="text" name="name[]" class="form-control"></td>
                            <td><input type="text" name="designation[]" class="form-control"></td>
                            <td><input type="text" name="phone[]" class="form-control"></td>
                            <td><input type="text" name="fax[]" class="form-control"></td>
                            <td><input type="text" name="email[]" class="form-control"></td>
                            <td><input type="text" name="action[]" class="form-control"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteRow(this)">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addPersonRow()">Add new preson</button>

            <script>
                function addPersonRow() {
                    const table = document.getElementById('personTable2').getElementsByTagName('tbody')[0];
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




  </form>
</div>
<div class="button-container">
    <button type="button" class="btn btn-primary" id="previousButton">Previous</button>
    <button type="submit" class="btn btn-primary" id="nextButton">Submit</button>
</div>


<script>
document.getElementById('previousButton').addEventListener('click', function() {
    window.location.href = '/implementation-arrangements';
});

document.getElementById('nextButton').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = '';
});
</script>
<script>
    let personCount = 1;

    function addPerson() {
        personCount++;
        let table = document.getElementById("contactsTable").getElementsByTagName('tbody')[0];
        let newRow = table.insertRow();
        newRow.innerHTML = `
            <td>Contact Person ${personCount}</td>
            <td><input type="text" class="text" name=""></td>
            <td><input type="text" class="text" name=""></td>
            <td><input type="text" class="text" name=""></td>
            <td><input type="text" class="text" name=""></td>
            <td><input type="text" class="text" name=""></td>
            <td><input type="text" class="text" name=""></td>
            <td><button onclick="removeRow(this)">Remove</button></td>
        `;
    }

    function removeRow(button) {
        let row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>







</body>

</html>

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
  <form action="{{ route('show_project_form') }}" method="POST">
    <div class="container">
      <h2>ADD PROJECT</h2>
      <div class="form-container">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputtitle"><b>01. Project Title</b></label>
            <input type="text" class="form-control" id="inputtitle" placeholder="Type Here">
          </div>
          <div class="form-group col-md-6">
            <label for="inputsector"><b>02. Sector</b></label>
            <input type="text" class="form-control" id="inputsector" placeholder="Type Here">
          </div>
        </div>
        <p><b>03. Project Location:</b></p>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputprovince">Province</label>
            <select class="form-control" id="inputprovince">
              <option>Choose...</option>
              <option>Northern</option>
              <option>North Western</option>
              <option>Western</option>
              <option>North Central</option>
              <option>Central</option>
              <option>Sabaragamuwa</option>
              <option>Eastern</option>
              <option>Uva</option>
              <option>Southern</option>
              <!-- Add more provinces as needed -->
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="inputdistrict">District</label>
            <select class="form-control" id="inputdistrict">
              <option>Choose...</option>
              <option>Ampara</option>
              <option>Anuradhapura</option>
              <option>Badulla</option>
              <option>Batticaloa</option>
              <option>Colombo</option>
              <option>Galle</option>
              <option>Gampaha</option>
              <option>Hambantota</option>
              <option>Jaffna</option>
              <option>Kalutara</option>
              <option>Kandy</option>
              <option>Kegalle</option>
              <option>Kilinochchi</option>
              <option>Kurunegala</option>
              <option>Mannar</option>
              <option>Matale</option>
              <option>Matara</option>
              <option>Monaragala</option>
              <option>Mullaitivu</option>
              <option>Nuwara Eliya</option>
              <option>Polonnaruwa</option>
              <option>Puttalam</option>
              <option>Ratnapura</option>
              <option>Trincomalee</option>
              <option>Vavuniya</option>
              <!-- Add more districts as needed -->
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="inputgsdivision">GS Division</label>
            <textarea class="form-control" id="landArea" rows="1"></textarea>
          </div>
          <div class="form-group col-md-3">
            <label for="inputgndivision">GN Division</label>
            <textarea class="form-control" id="landArea" rows="1"></textarea>
          </div>
        </div>
        <p><b>04. Land requirement for the Project (if relevant):</b></p>
        <div class="form-group">
          <label for="landArea">4.1 What is the total area / extent of land required for the project?</label>
          <textarea class="form-control" id="landArea" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="landLocation">4.2 Has the land been identified? If so, please mention the location of the land</label>
          <textarea class="form-control" id="landLocation" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="ownershipDetails">4.3 Ownership details of the land</label>
          <textarea class="form-control" id="ownershipDetails" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="landPurchase">4.4 Does the proposed land need to be purchased or acquired?</label>
          <textarea class="form-control" id="landPurchase" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="landCost">4.5 Please state the cost of land if it is to be purchased/ acquired?</label>
          <textarea class="form-control" id="landCost" rows="2"></textarea>
        </div>
      </div>

    </div>
    <div class="button-container">
        <button type="button" class="btn btn-primary" id="previousButton">Back</button>
        <button type="submit" class="btn btn-primary" id="nextButton">Next</button>
    </div>


    <script>
    document.getElementById('previousButton').addEventListener('click', function() {
        window.location.href = '/user-dashboard';
    });
    document.getElementById('nextButton').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = '/Preliminary_Activities';
    });


    </script>
  </form>



  <!-- Add Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

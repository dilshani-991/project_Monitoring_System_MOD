<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>APPLICATION FOR PROJECTS</title>
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
      height: 4.5in;
      width: 10.5in;
      padding: 20px;
      border: 1px solid #ccc;
      overflow-y: auto;
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
      justify-content: space-between;
      width: 90%;
      margin-top: 20px;
    }

    .button-container button {
      flex: 1;
      margin: 0 5px;
    }

    .form-row .form-group {
      margin-bottom: 1rem;
    }

    h2 {
      text-align: center;
    }

    .instruction {
      margin-top: 20px;
      margin-bottom: 10px;
      font-style: italic;
    }
  </style>
</head>


<body>
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  
  <form action="{{ route('project_form.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <h2>ADD PROJECT</h2>
      <div class="form-container">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputtitle"><b>Project Title</b></label>
            <input type="text" class="form-control" id="inputtitle" name="project_title" placeholder="Type Here" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputsector"><b>Sector</b></label>
            <input type="text" class="form-control" id="inputsector" name="sector" placeholder="Type Here" required>
          </div>
        </div>
        <p><b>Project Location:</b></p>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputprovince">Category</label>
            <select class="form-control" id="inputprovince" name="category" required>
              <option value="">Choose...</option>
              <option value="Army">Army</option>
              <option value="AirForce">AirForce</option>
              <option value="Navy">Navy</option>
            </select>
          </div>
          <div class="form-group col-md3">
            <label for="inputdistrict">District</label>
            <select class="form-control" id="inputdistrict" name="district" required>
              <option value="">Choose...</option>
              <option value="Ampara">Ampara</option>
              <option value="Anuradhapura">Anuradhapura</option>
              <option value="Badulla">Badulla</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Colombo">Colombo</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambantota">Hambantota</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Kalutara">Kalutara</option>
              <option value="Kandy">Kandy</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Mannar">Mannar</option>
              <option value="Matale">Matale</option>
              <option value="Matara">Matara</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Mullaitivu">Mullaitivu</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Puttalam">Puttalam</option>
              <option value="Ratnapura">Ratnapura</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Vavuniya">Vavuniya</option>
            </select>
          </div>
        </div>
        <div class="instruction">
          <p>Please download the project submission form and upload the completed document.</p>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <button type="button" class="btn btn-success btn-block" onclick="downloadDoc()">Download Application Form</button>
          </div>
        </div>
        <div class="form-row col-md-4">
          <input type="file" class="form-control-file" id="fileUpload" name="fileUpload" required>
        </div>
      </div>
    </div>
    <div class="button-container">
      <button type="button" class="btn btn-primary">Cancel</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function downloadDoc() {
      const link = document.createElement('a');
      link.href = "{{ asset('assets/document/Project Submission Format.docx') }}";
      link.download = 'Project Submission Format.docx';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  </script>
</body>
</html>

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
    }

    .container {
      max-width: 80%;
    }

    .table-responsive {
      font-size: 14px;
    }

    .table {
      width: 100%;
      max-width: 100%;
      margin: auto;
    }
  </style>
</head>

<body>
  <form>
    <div class="container">
      <h2 class="text-center">ADD PROJECT</h2>
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
          <select class="form-control" id="inputgsdivision">
            <option>Choose...</option>
            <option>GS Division 1</option>
            <option>GS Division 2</option>
            <option>GS Division 3</option>
            <!-- Add more GS divisions as needed -->
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="inputgndivision">GN Division</label>
          <select class="form-control" id="inputgndivision">
            <option>Choose...</option>
            <option>GN Division 1</option>
            <option>GN Division 2</option>
            <option>GN Division 3</option>
            <!-- Add more GN divisions as needed -->
          </select>
        </div>
      </div>
      <p><b>04. Land requirement for the Project (if relevant):</b></p>
      <div class="form-group">
        <label for="landArea">4.1 What is the total area / extent of land required for the project?</label>
        <textarea class="form-control" id="landArea" rows="1"></textarea>
      </div>
      <div class="form-group">
        <label for="landLocation">4.2 Has the land been identified? If so, please mention the location of the land</label>
        <textarea class="form-control" id="landLocation" rows="1"></textarea>
      </div>
      <div class="form-group">
        <label for="ownershipDetails">4.3 Ownership details of the land</label>
        <textarea class="form-control" id="ownershipDetails" rows="1"></textarea>
      </div>
      <div class="form-group">
        <label for="landPurchase">4.4 Does the proposed land need to be purchased or acquired?</label>
        <textarea class="form-control" id="landPurchase" rows="1"></textarea>
      </div>
      <div class="form-group">
        <label for="landCost">4.5 Please state the cost of land if it is to be purchased/ acquired?</label>
        <textarea class="form-control" id="landCost" rows="1"></textarea>
      </div>
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
              <td><input type="radio" name="Pre-Feasibility" value="yes"></td>
              <td><input type="radio" name="Pre-Feasibility" value="no"></td>
              <td><input type="radio" name="Pre-Feasibility" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Feasibility</td>
              <td><input type="radio" name="feasibility" value="yes"></td>
              <td><input type="radio" name="feasibility" value="no"></td>
              <td><input type="radio" name="feasibility" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Detailed Design</td>
              <td><input type="radio" name="detailed-design" value="yes"></td>
              <td><input type="radio" name="detailed-design" value="no"></td>
              <td><input type="radio" name="detailed-design" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Strategic Environmental Assessment (SEA)</td>
              <td><input type="radio" name="sea" value="yes"></td>
              <td><input type="radio" name="sea" value="no"></td>
              <td><input type="radio" name="sea" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Initial Environmental Assessment (IEE)</td>
              <td><input type="radio" name="iee" value="yes"></td>
              <td><input type="radio" name="iee" value="no"></td>
              <td><input type="radio" name="iee" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Environmental Impact Assessment (EIA)</td>
              <td><input type="radio" name="eia" value="yes"></td>
              <td><input type="radio" name="eia" value="no"></td>
              <td><input type="radio" name="eia" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Disaster Risk Assessment</td>
              <td><input type="radio" name="disaster-risk" value="yes"></td>
              <td><input type="radio" name="disaster-risk" value="no"></td>
              <td><input type="radio" name="disaster-risk" value="not-necessary"></td>
            </tr>
            <tr>
              <td>NBRO Clearance (If necessary)</td>
              <td><input type="radio" name="nbro-clearance" value="yes"></td>
              <td><input type="radio" name="nbro-clearance" value="no"></td>
              <td><input type="radio" name="nbro-clearance" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Archeological Clearance (If necessary)</td>
              <td><input type="radio" name="archeological-clearance" value="yes"></td>
              <td><input type="radio" name="archeological-clearance" value="no"></td>
              <td><input type="radio" name="archeological-clearance" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Land Clearance from relevant parties</td>
              <td><input type="radio" name="land-clearance" value="yes"></td>
              <td><input type="radio" name="land-clearance" value="no"></td>
              <td><input type="radio" name="land-clearance" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Social Impact Assessment</td>
              <td><input type="radio" name="social-impact" value="yes"></td>
              <td><input type="radio" name="social-impact" value="no"></td>
              <td><input type="radio" name="social-impact" value="not-necessary"></td>
            </tr>
            <tr>
              <td>Other (specify)</td>
              <td><input type="radio" name="other" value="yes"></td>
              <td><input type="radio" name="other" value="no"></td>
              <td><input type="radio" name="other" value="not-necessary"></td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        <p align="center"><i>Note: If above reports are available, please attach. NBRO: National Building Research Organization</i></p>
      </div>
      <p><b>Note: * Guidelines for filling this format are stated in the attached Operational Manual</b></p>
    </div>

    <div class="container mt-5">
    <p><b>6. Project Objectives: </b></p>
      <label for="objective1">Objective i.</label>
      <textarea class="form-control" id="objective1" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="objective2">Objective ii.</label>
      <textarea class="form-control" id="objective2" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="objective3">Objective iii.</label>
      <textarea class="form-control" id="objective3" rows="1"></textarea>
    </div>

    <div class="container mt-5">
    <p><b>7. Rationale of Project:</b></p>
      <label for="problem1"><b>7.1 Specific problems and needs to be addressed by project</b></label>
    </div>
    <div class="container mt-5">
      <label for="problem1">7.1.1 What is the problem, need or the existing gap/ deficiency?</label>
      <textarea class="form-control" id="problem1" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="problem2">7.1.2 What are the root-causes, underline causes and immediate causes that contribute for the problem or the need that the project intends to address?</label>
      <textarea class="form-control" id="problem2" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="problem3">7.1.3 How does this project contribute to fulfill the existing gap in the sector?</label>
      <textarea class="form-control" id="problem3" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="intervention">7.1.4 Mode of intervention of this project in addressing the gap?</label>
      <textarea class="form-control" id="intervention" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="alternatives">7.1.5 Other alternative modes of interventions, if any.</label>
      <textarea class="form-control" id="alternatives" rows="1"></textarea>
    </div>
    <div class="container mt-5">
    <p><b>7.2 Target Beneficiaries</b></p>
    @if(session('success'))
        <div class="alert alert-success">
        </div>
    @endif
    <form action="#" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Type of Beneficiaries</th>
                    <th>No. of Beneficiaries</th>
                    <th>Gender Ratio</th>
                </tr>
            </thead>
                @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td><input type="text" name="type_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="number" name="no_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="text" name="gender_ratio[]" class="form-control" required></td>
                    </tr>
                @endfor
        </table>
  </div>
<div class="container mt-5">
    <p><b>8. Relationship of the Project to National Policies and Strategies:</b></p>
      <label for="problem1"><b>8.1 Relationship of project to National Policy Framework</b></label>
    </div>
    <div class="container mt-5">
      <label for="problem1">8.1.1 Policy elements of the Framework most relevant to the project </label>
      <textarea class="form-control" id="problem1" rows="1"></textarea>
    </div>
  <div class="container mt-5">
      <label for="problem2">8.1.2 Contribution that can be made from the project to each of the above mentioned policy elements </label>
      <textarea class="form-control" id="problem2" rows="1"></textarea>
    </div>

    <div class="container mt-5">
    <p><b>8.2 Relationship to the Sectoral Master Plan </b> (of the Ministry, sub-sector or the sector)</p>
    </div>
    <div class="container mt-5">
      <label for="problem1">8.2.1 Details of the relevant sectoral master plan approved by the Cabinet of Ministers </label>
      <textarea class="form-control" id="problem1" rows="1"></textarea>
    </div>
  <div class="container mt-5">
      <label for="problem2">8.2.2. Has the project been included as a high priority project to the master plan? (Yes/No). If not,
reasons for non-inclusion and submission of the project proposal
 </label>
      <textarea class="form-control" id="problem2" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="problem2">8.2.3 Has the project been included as a project to the master plan? (Yes/No). If not, reasons for
non-inclusion and submission of the project proposal
 </label>
      <textarea class="form-control" id="problem2" rows="1"></textarea>
    </div>
    <div class="container mt-5">
      <label for="problem2"><b>8.3. What is the sector strategy relevant to the project?</b>
 </label>
      <textarea class="form-control" id="problem2" rows="1"></textarea>
    </div>
<div class="container mt-5">
    <p><b>9. Coordination with Stakeholders and Partners for Implementation of the Project:</b></p>
    @if(session('success'))
        <div class="alert alert-success">
        </div>
    @endif
    <form action="{{route('submit.form')}}" method="POST">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name of the agency (Stakeholders)</th>
                    <th>Nature of Intervention </th>
                    <th>Current status of intervention</th>
                    <th>Does the proposed project include this development activity? (Yes/No)</th>
                </tr>
            </thead>
                @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td><input type="text" name="type_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="text" name="no_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="text" name="gender_ratio[]" class="form-control" required></td>
                        <td><input type="text" name="development_activity" class="form-control" required></td>
                    </tr>
                @endfor
        </table>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name of the agency (Partner)</th>
                    <th>Nature of Intervention </th>
                    <th>Current status of intervention</th>
                    <th>Does the proposed project include this development activity? (Yes/No)</th>
                </tr>
            </thead>
                @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td><input type="text" name="type_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="text" name="no_of_beneficiaries[]" class="form-control" required></td>
                        <td><input type="text" name="gender_ratio[]" class="form-control" required></td>
                        <td><input type="text" name="development_activity" class="form-control" required></td>
                    </tr>
                @endfor
        </table>
  </div>
  <div class="container mt-5">
      <p><b><i>Stakeholders - </b>Individuals, people, organizations or groups who can influence the implementation of the Project or achievement of its result. Stakeholders may include: Project clients and non-beneficiaries from the target group, those who can influence the decisions of the Project, project/ministry staff associations; those with an interest in the Project (advocacy group, central agencies); and those who are adversely or unintentionally affected by the Project. </i></p>
      <p><b><i>Stakeholders - </b></i></p>
    </div>

  </form>
  <!-- Add Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

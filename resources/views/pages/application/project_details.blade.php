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
            background-color: #EEF5FF;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-left: 5px;
            padding-right: 10px;
        }

        .form-container {
            height: 6in;
            width: 13in;
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
            width: 100%;
            margin-top: 20px;
        }

        .button-container button {
            flex: 1;
        }

        h2 {
            text-align: center;
        }

        .button-container {
            gap: 20px;
            padding-left: 100px;
        }
    </style>
</head>

<body>
    <form action="{{ route('store_project_details') }}" method="POST">
        @csrf

        <div class="container">
            <h2>ADD PROJECT</h2>
            <div class="form-container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputtitle"><b>01. Project Title</b></label>
                        <input type="text" class="form-control" id="inputtitle" name="title" placeholder="Type Here" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputsector"><b>02. Sector</b></label>
                        <input type="text" class="form-control" id="inputsector" name="sector" placeholder="Type Here" required>
                    </div>
                </div>
                <p><b>03. Project Location:</b></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputprovince">Province</label>
                        <select class="form-control" id="inputprovince" name="province" required>
                            <option value="">Choose...</option>
                            <option value="Northern">Northern</option>
                            <option value="North Western">North Western</option>
                            <option value="Western">Western</option>
                            <option value="North Central">North Central</option>
                            <option value="Central">Central</option>
                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                            <option value="Eastern">Eastern</option>
                            <option value="Uva">Uva</option>
                            <option value="Southern">Southern</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
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
                    <div class="form-group col-md-3">
                        <label for="inputgsdivision">GS Division</label>
                        <textarea class="form-control" id="inputgsdivision" name="gs_division" rows="1" required></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputgndivision">GN Division</label>
                        <textarea class="form-control" id="inputgndivision" name="gn_division" rows="1" required></textarea>
                    </div>
                </div>
                <p><b>04. Land requirement for the Project (if relevant):</b></p>
                <div class="form-group">
                    <label for="landArea">4.1 What is the total area / extent of land required for the project?</label>
                    <textarea class="form-control" id="landArea" name="land_area" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="landLocation">4.2 Has the land been identified? If so, please mention the location of the land</label>
                    <textarea class="form-control" id="landLocation" name="land_location" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="ownershipDetails">4.3 Ownership details of the land</label>
                    <textarea class="form-control" id="ownershipDetails" name="ownership_details" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="landPurchase">4.4 Does the proposed land need to be purchased or acquired?</label>
                    <textarea class="form-control" id="landPurchase" name="land_purchase" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="landCost">4.5 Please state the cost of land if it is to be purchased/ acquired?</label>
                    <textarea class="form-control" id="landCost" name="land_cost" rows="2" required></textarea>
                </div>
                <div class="button-container">
                    <button type="button" class="btn btn-primary" onclick="window.history.back();">Previous</button>
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Consultation Form</title>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Consultation Form</h2>
  <form>
    <div class="form-group">
      <label for="consultationPlace">Consultation Place</label>
      <input type="text" class="form-control" id="consultationPlace" placeholder="Enter consultation place">
    </div>

    <div class="form-group">
      <label for="consultationGender">Consultation Gender</label>
      <select class="form-control" id="consultationGender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="consultationPurpose">Consultation Purpose</label>
      <input type="text" class="form-control" id="consultationPurpose" placeholder="Enter consultation purpose">
    </div>

    <div class="form-group">
      <label for="consultationDescription">Consultation Description</label>
      <textarea class="form-control" id="consultationDescription" rows="3" placeholder="Enter consultation description"></textarea>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="consultationDate">Consultation Date</label>
        <input type="date" class="form-control" id="consultationDate">
      </div>
      <div class="form-group col-md-6">
        <label for="consultationTime">Consultation Time</label>
        <input type="time" class="form-control" id="consultationTime">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Manage User</h2>
        <form action="{{ url('manageuser') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user_data['name'] }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user_data['email'] }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $user_data['phone'] }}" required>
            </div>
            <div class="form-group">
                <label for="birth">Birth</label>
                <input type="date" name="birth" id="birth" class="form-control" value="{{ $user_data['birth'] }}">
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" name="citizenship" id="citizenship" class="form-control" value="{{ $user_data['citizenship'] }}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $user_data['address'] }}">
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" name="education" id="education" class="form-control" value="{{ $user_data['education'] }}">
            </div>
            <div class="form-group">
                <label for="income">Income</label>
                <input type="text" name="income" id="income" class="form-control" value="{{ $user_data['income'] }}">
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control" value="{{ $user_data['nationality'] }}">
            </div>
            <div class="form-group">
                <label for="employSector">Employment Sector</label>
                <input type="text" name="employSector" id="employSector" class="form-control" value="{{ $user_data['employSector'] }}">
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" id="occupation" class="form-control" value="{{ $user_data['occupation'] }}">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" value="{{ $user_data['age'] }}">
            </div>
            <div class="form-group">
                <label for="marriageStatus">Marriage Status</label>
                <input type="text" name="marriageStatus" id="marriageStatus" class="form-control" value="{{ $user_data['marriageStatus'] }}">
           
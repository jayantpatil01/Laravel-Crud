<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Student Management System</h1>
    <div class="container mt-5">
        <a href="{{ url('/view-students') }}">
            <button type="button" class="btn btn-info">View Students</button>
        </a>
        <h2 class="text-center">{{ $title }}</h2>
        <form method="post" action="{{ $url }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter your name" value="{{ $student->name ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Enter your email" value="{{ $student->email ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control form-control-sm" id="age" name="age" placeholder="Enter your age" value="{{ $student->age ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control form-control-sm" id="mobile" name="mobile" placeholder="Enter your mobile number" value="{{ $student->mobile ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Enter your password" value="{{ $student->password ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ (isset($student) && $student->gender == 'male') ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ (isset($student) && $student->gender == 'female') ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{ (isset($student) && $student->gender == 'other') ? 'checked' : '' }}>
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+pm5iY5a1n6j9e6i5Fh5d7bUmg75s" crossorigin="anonymous"></script>
</body>
</html>

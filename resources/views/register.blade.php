<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CampusBook - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5" style="max-width: 480px;">
        <h1 class="h3 mb-1">CampusBook</h1>
        <p class="text-muted mb-4">Create your account</p>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Campus email</label>
                    <input type="email" class="form-control" placeholder="name@campus.ac.id">
                </div>
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">NRP/NIP</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select class="form-select">
                        <option>Student</option>
                        <option>Lecturer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <button class="btn btn-primary w-100">Register</button>
            </div>
        </div>
    </div>
</body>

</html>
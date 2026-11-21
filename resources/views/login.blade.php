<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CampusBook - Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5" style="max-width: 480px;">
        <h1 class="h3 mb-1">CampusBook</h1>
        <p class="text-muted mb-4">Log in to your account</p>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Email or NRP/NIP</label>
                    <input type="text" class="form-control" placeholder="name@campus.ac.id">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <button class="btn btn-primary w-100">Log In</button>
                <p class="text-center mt-3 mb-1"><a href="#">Forgot password?</a></p>
                <p class="text-center mb-0">No account yet? <a href="{{ url('/register') }}">Register</a></p>
            </div>
        </div>
    </div>
</body>

</html>
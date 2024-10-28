<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('post-register')}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="registerName">Name</label>
                                <input type="text" class="form-control" id="registerName" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="registerEmail">Email address</label>
                                <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="registerPassword">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <label for="registerConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Confirm your password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

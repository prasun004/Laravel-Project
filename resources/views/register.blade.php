<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="./resources/js/app.js"></script>


    <title>Register Form </title>
</head>

<body>
    {{-- @csrfto prevent page expired --}}
            <div class="card-body">
                <form method="post"  class="form" action="{{route('register')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group container">
                        <div class="card">
                            <div class="card-head">
                                <h1>Registration Form</h1>
                            </div>
                            <div class="card-body">
                                <form method="post"  class="form" action="{{route('register')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <input class="form-control" type="text" name="full-name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Contact</label>
                                        <input class="form-control" type="text" name="contact">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Profile</label>
                                        <input class="form-control" type="file" name="profile">
                                    </div>
                                    <input class="btn btn-primary btn-small" type="submit" value="submit">
                                </form>

                            </div>

                        </div>
                    </div>
</body>

</html>

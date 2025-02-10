<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col">
                        <label for="">Name</label>
                        <input type="text" name="name" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" name="email" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" name="password" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Age</label>
                        <input type="number" name="age" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">City</label>
                        <input type="text" name="city" id="">
                    </div>
                </div>

                <input type="submit">
        </form>
    </div>

</body>
</html>

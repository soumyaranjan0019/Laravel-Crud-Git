<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('user.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col">
                        <label for="">Name</label>
                        <input type="text" value="{{ $users->name }}" name="name" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" value="{{ $users->email }}" name="email" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" value="{{ $users->password }}" name="password" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">Age</label>
                        <input type="number" value="{{ $users->age }}" name="age" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="">City</label>
                        <input type="text" value="{{ $users->city }}" name="city" id="">
                    </div>
                </div>

                <input type="submit">
        </form>
    </div>

</body>
</html>


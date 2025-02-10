<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent ORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col" align="right">
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-md mx-1">Create</a>
        </div>
    </div>
    <table class="table">

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>

            <th scope="col">Age</th>
            <th scope="col">City</th>
            <th scope="col">View</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>

        @foreach($users as $user)

        <tbody>
          <tr>
            <th>{{ $user->id }}</th>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>

            <td>{{ $user->age}}</td>
            <td>{{ $user->city}}</td>
            <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-success">View</a></td>
            <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Update</a></td>
            <td>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this record ?');">Delete</button></form>
            </td>

          </tr>
        </tbody>

        @endforeach
      </table>

{{-- Pagination --}}
      <div class="mt-3">
        {{ $users->links() }}
      </div>

</body>
</html>

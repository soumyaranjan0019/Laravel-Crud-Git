{{-- @extends('layouts.app') --}}

@section('content')
    View User
@endsection

    @foreach ($users as $user)

        <h1>ID : {{ $user->id }}</h1>
        <h1>Name : {{ $user->name }}</h1>
        <h1>Email : {{ $user->email }}</h1>
        <h1>Age : {{ $user->age }}</h1>
        <h1>City : {{ $user->city }}</h1>

    @endforeach

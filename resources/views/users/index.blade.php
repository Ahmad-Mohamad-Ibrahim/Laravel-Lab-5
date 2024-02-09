@extends("layouts.main")

@section("title" , "index")

@section("content")
@parent

<table class="table">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
@foreach ($users as $user)
    <tr id={{ $user->id }} >
        <td>{{ $user->id }}</td>
        <td><a href={{ "/users/" . $user->id }}>{{ $user->name }}</a></td>
        <td>{{ $user->email }}</td>
        <td>
            <a class="btn btn-info" role="button" href={{ route('users.edit', ['id' => $user->id]) }}>Edit</a>
            <a class="btn btn-danger" role="button" href={{ route('users.delete', ['id' => $user->id]) }}>Delete</a>
        </td>
    </tr>
@endforeach
</table>
@endsection

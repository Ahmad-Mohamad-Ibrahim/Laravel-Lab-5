@extends("layouts.main")

@section("title" , "create")

@section("content")
@parent

<h1>Creating New User</h1>
    <form method="post" action="/users">
        

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input name="username" type="text" class="form-control" id="username">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">            
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
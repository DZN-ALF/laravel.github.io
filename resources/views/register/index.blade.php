@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-7">
        <main class="form-registration">
            <form>
            <h1 class="d-block text-center h3 fw-normal">Registration Form</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        
            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

            </form>
        </main>
    </div>
</div>   
@endsection
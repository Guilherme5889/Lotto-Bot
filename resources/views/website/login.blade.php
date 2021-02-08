
@extends('layouts.website')
@section('title','Lotto | Login')
@section('content')

<div class="container-fluid">
    <div class="row" style="background-color:white">
       <div class="col-12 p-4  ">
         
        <form>
        
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="email" placeholder="Type your username"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" placeholder="Type your password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn bg-purple text-light">Login</button>
            
          </form>
         
       </div>
    </div>
 </div>
@endsection


@extends('layouts.website')
@section('title','Lotto | Ranking')
@section('content')

    <div class="container-fluid">
          <div class="row m-2 mt-2">
             <div class="row bg-purple rounded ">
                 <p class="text-light mt-3">Ranking dos mais fodas</p>
             </div>
          </div>
          <div class="container-fluid d-flex justify-content-around flex-wrap">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Level</th>
                    <th scope="col">Exp</th>
                    <th scope="col">Vip</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><a  href="">Mark</a></td>
                    <td>10</td>
                    <td>576/1000</td>
                    <td><span class="badge bg-success">VIp</span></td>
                  </tr>
              

                </tbody>
              </table>
          </div>
         
       </div>
    </div>
 </div>
@endsection
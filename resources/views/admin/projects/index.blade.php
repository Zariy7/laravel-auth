@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Stack</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects_db as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->desc}}</td>
                            <td>{{ ucwords(implode(', ', explode('/', $project->stack)))}}.</td>
                          </tr>                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
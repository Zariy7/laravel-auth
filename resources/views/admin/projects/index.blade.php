@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered my-3">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Stack</th>
                        <th scope="col">Functions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects_db as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->slug}}</td>
                            <td>{{$project->desc}}</td>
                            <td>{{ ucwords(implode(', ', explode('/', $project->stack)))}}.</td>
                            <td>
                                <a href=" {{ route('admin.projects.show', $project->id) }} " class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href=" {{ route('admin.projects.update', $project->id) }} " class="btn btn-warning">
                                    <i class="fa-solid fa-gear"></i>
                                </a>
                                <a href=" {{ route('admin.projects.destroy', $project->id) }} " class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>                            
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 pb-3">
                <a href=" {{ route('admin.projects.create') }} " class="btn btn-primary">
                    Add One More
                </a>
            </div>
        </div>
    </div>
@endsection
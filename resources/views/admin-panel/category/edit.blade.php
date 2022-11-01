@extends('admin-panel.master')
@section('title', 'Book Store')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-center text-light">Category list Edit Form</h4>
                    </div>
                     
                    <form action="{{url('admin/categories/'.$category->id)}}" method="POST">
                        @csrf @method('PATCH')
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ $category->name}}">
                                @error('name')
                                    <span class="text-danger"> {{$message}}</span>
                                 @enderror
                            </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success"> Sửa kênh</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('authors.index')}}" class="btn btn-primary float-end">Danh sach keenh</a>
                </div>
            </div>
        </div>
        <div class="card-body">
       
            <form action="{{route('authors.update', $author->id)}}" method="post">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                    <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Ma tacgia</button>
                            <input type="text" class="form-control" name ="name" value="{{$author->id}}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Teen tacgia</button>
                            <input type="text" class="form-control" name ="name" value="{{$author->name}}">
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3"> Update</button>
                
            </form>
        </div>
       
    </div>
</div>
 @endsection


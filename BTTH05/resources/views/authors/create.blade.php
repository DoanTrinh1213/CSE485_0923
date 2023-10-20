@extends('layout.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success"> Thêm tac gia</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('authors.index')}}" class="btn btn-primary float-end">Danh sach </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('authors.store')}}" method="post">
                @csrf 
                <div class="row">
                    <div class="col-md-8">
                        
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Teen tacgia</button>
                            <input type="text" class="form-control" name ="name">
                        </div>
                        
                </div>
                <button type="submit" class="btn btn-success mt-3"> save</button>
                
            </form>
        </div>
    </div>
</div>
 @endsection


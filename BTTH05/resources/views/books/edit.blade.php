@extends('layout.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success"> Sửa thong tin sach</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('books.index')}}" class="btn btn-primary float-end">Danh sach </a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">
       
            <form action="{{route('books.update', $book->id)}}" method="post">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Mã sách</button>
                            <input type="text" class="form-control" name="name" value="{{ $book->id }}" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Mã tác giả</button>
                            <select name="author_id" class="form-control">
                                     <!-- trung với author bên controller edit -->
                                @foreach($author as $aut) 
                                <option value="{{ $aut->id }}" @if($aut->id == $book->author_id) selected
                                    @endif>{{ $aut->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Tiêu đề</button>
                            <input type="text" class="form-control" name="name" value="{{$book->title}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3"> Update</button>
                
            </form>
        </div>
       
    </div>
</div>
 @endsection


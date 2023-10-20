@extends('layout.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success"> Thêm tác giả</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('books.index')}}" class="btn btn-primary float-end">Danh sách </a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('books.store')}}" method="post">
                @csrf 
                <div class="row">
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Mã tác giả</button>
                            <select name="author_id" class="form-control">
                                @foreach($authors as $aut)
                                    <option value="{{ $aut->id }}" @if($aut->id ) selected @endif>
                                        {{ $aut->author_id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Tiêu đề</button>
                            <input type="text" class="form-control" name ="title">
                        </div>
                    </div>  
                </div>
                <button type="submit" class="btn btn-success mt-3"> save</button>
                
            </form>
        </div>
    </div>
</div>
 @endsection


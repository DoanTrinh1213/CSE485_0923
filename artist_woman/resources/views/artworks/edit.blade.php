@extends('layouts.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success">SỬA THÔNG TIN</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('artworks.index')}}" class="btn btn-primary float-end">Danh sách </a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('artworks.update', $artwork->id)}}" method="post">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                       
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Teen  </button>
                            <input type="text" class="form-control" name ="artist_name" value="{{$artwork->artist_name}}">
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Mô tả </button>
                            <input type="text" class="form-control" name ="description" value="{{$artwork->description}}">
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">thể loại</button>
                            <select name="art_type" class="from-control">
                                <option value="vanhoc" {{$artwork->art_type == 'vanhoc' ? 'selected': '' }}>vanhoc</option>
                                <option value="hoihoa" {{$artwork->art_type == 'hoihoa' ? 'selected': '' }}>hoihoa</option>
                                <option value="amnhac" {{$artwork->art_type == 'amnhac' ? 'selected': '' }}>amnhac</option>
                                
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Lien kết</button>
                            <input type="url" class="form-control" name ="media_link" value="{{$artwork->media_link}}" required>
                        </div>
                        
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Chọn ảnh</button>
                            <input type="file" class="form-control" name="cover_image" id="picture-input"  value="{{$artwork->cover_image}}" required>
                        </div>
                        
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3"> save</button>
                
            </form>
        </div>
    </div>
</div>
 @endsection


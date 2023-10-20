@extends('layouts.base')
@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success"> Thêm moi </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('artworks.index')}}" class="btn btn-primary float-end">Danh sách </a>
                    
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('artworks.store')}}" method="post" enctype ="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col-md-8">
                        
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Teen </button>
                            <input type="text" class="form-control" name ="artist_name" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Mô tả</button>
                            <input type="text" class="form-control" name ="description" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Theẻ loại</button>
                            <select name="art_type" class="from-control">
                                <option selected> Chon thể loại </option>
                                <option value="hoihoa">hội họa</option >
                                <option value="amnhac">âm nhạc</option>
                                <option value="vanhoc">Văn học</option>
                                
                            </select>
                        </div>
                       
                       
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Liên kết</button>
                            <input type="text" class="form-control" name ="media_link" required>
                        </div>
                       
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Chọn ảnh</button>
                            <input type="file" class="form-control" name="cover_image" id="picture-input" accept="image/pic" required>
                        </div>
                        
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3"> save</button>
                
            </form>
        </div>
    </div>
</div>
 @endsection


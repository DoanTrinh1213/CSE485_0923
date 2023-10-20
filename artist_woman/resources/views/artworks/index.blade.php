@extends('layouts.base')
@section('title','Artwork')
@section('main')
    <div class="container-build">
        <div class="card">
            <div class="card-header" style="background-color: #FFC0CB;">
            <center >
                <h3 class="text-success">ARTTIST</h3>
            </center>
                <div class="mt-2">
                    <div>
                        <a type="submit" href="{{route('artworks.create')}}" class="btn btn-success mb-3 fw-b">Thêm mới </a>
                    </div> 
                </div>
            </div>
            
            <div class="card-body">
             @if( Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <table class="table table-bordered ">
                    <thead class="table table-primary ">
                        <tr>
                           
                            <th>Mã Artwork</th>
                            <th>Tên Artwork</th>
                            <th>Mô tả</th>
                            <th>Thể loại</th>
                            <th>Liên kết</th>
                            <th>Hình ảnh</th>
                            <th>Sửa </th>
                            <th>xoa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artworks as $artwork)
                        <tr>
                            <td>{{$artwork->id}}</td>
                        <td>{{$artwork->artist_name}}</td>
                          <td>{{$artwork->description}}</td>
                          <td>{{$artwork->art_type}}</td>
                          <td>{{$artwork->media_link}}</td>
                          
                          <!-- <td><img src="{{asset($artwork->cover_image)}}" alt=""></td> -->
                          <td> {{$artwork->cover_image}}</td>
                            <td>
                            <a href="{{route('artworks.edit',$artwork->id)}}" class="btn btn-success">  <i class="bill-trash">  sửa</i></a>
                                
                            <td>
                                <form action="{{ route('artworks.destroy', $artwork->id) }}" method="post"
                                    onclick=" return confirmDelete('{{ $artwork->id }}')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-4 btn btn-warning" >Xóa</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>
    <script>
        function  confirmDelete(idch){
        if(confirm("Are u sure DELETe? ")){
            $.ajax({
                url: "{{ route ('artworks.destroy','')}}" + "/"+idch,
                type:'DELETE',
                data:{
                    _token:"{{csrf_token()}}"
                },
                success: function(data){
                    location.reload();
                },
                error:function(data){
                    alert('co loi xay ra trong qt xoa');
                }
            });
        }else {
        return false;
    }
    }
    </script>
    
   {{$artworks->links()}} 
@endsection

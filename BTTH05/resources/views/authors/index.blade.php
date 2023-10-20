
@extends('layout.base')
@section('title','Author')
@section('main')
    <div class="container-build">
        <div class="card">
            <div class="card-header">
                <center class=" h3 text-success">QUẢN LÝ TÁC GIẢ </center>
                <div class="mt-2">
                    <div>
                        <a type="submit" href="{{route('authors.create')}}" class="btn btn-success mb-3 fw-b">Thêm mới </a>
                    </div> 
                </div>
            </div>
            <div class="card-body">
               
                <table class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <th>mA TAC GIA</th>
                            <th>Tên TÁC GIẢ</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$author->name}}</td>
                          
                            <td>
                            <a href="{{route('authors.edit',$author->id)}}" class="btn btn-success"> sua</a>
                            </td>
                            <td>
                                <form action="{{route('authors.destroy',$author->id)}}" nethod="post">
                                     @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" 
                                        onclick ="confirmDelete('{{$author->id}}')">  Xoa
                                    </button>
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
        if(confirm("ban chan chan muon xoa kenh")){
            $.ajax({
                url: "{{ route ('authors.destroy','')}}" + "/"+idch,
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
        }
    }
    </script>
   {{$authors->links()}} 
@endsection

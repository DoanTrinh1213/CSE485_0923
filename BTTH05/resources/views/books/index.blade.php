
@extends('layout.base')
@section('title','Book')
@section('main')
    <div class="container-build">
        <div class="card">
            <div class="card-header">
                <center class=" h3 text-success">QUẢN LÝ SACHS </center>
                <div class="mt-2">
                    <div>
                        <a type="submit" href="{{route('books.create')}}" class="btn btn-success mb-3 fw-b">Thêm mới </a>
                    </div> 
                </div>
            </div>
            
            <div class="card-body">
                
            @if( Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                           
                            <th>mA Tsách</th>
                            <th>ma tac gia</th>
                            <th>Tieeu ddeef</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$book->author_id}}</td>
                          <td>{{$book->title}}</td>
                            <td>
                            <a href="{{route('books.edit',$book->id)}}" class="btn btn-success">  <i class="bill-trash">  sửa</i></a>
                                </form>
                            </td>
                            <td><form action="{{route('books.destroy',$book->id)}}" method="post">
                                   
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" ml-4 btn btn-danger " 
                                        onclick ="confirmDelete('{{$book->id}}')">
                                    Xoas
                                    </button>
                                
                                </form></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        
    </div>
    <script>
        function  confirmDelete(idch){
        if(confirm("ban chan chan muon xoa ")){
            $.ajax({
                url: "{{ route ('books.destroy','')}}" + "/"+idch,
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
   {{$books->links()}} 
@endsection

@extends('Admin.master')

@section('content')


<div class="col-12">
 


    <div class="card">
      <div class="card-header">
          

        <div style="float: left">
          <a href="{{Route('slider.create')}}" class="btn btn-info btn-xs  " style="font-family:iransans">افزودن<i class="fa fa-plus" style="margin-top:5px"></i></a>
        </div>
{{-- 
        <form class="form-inline ml-3" action="{{route('search.content')}}">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="جستجو" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div> --}}


  
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <tbody><tr>
            <th>شماره</th>
            <th>عکس</th>
            <th>عنوان</th>
            <th>تنظیمات</th>

          </tr>
          @foreach ($rows as $row)
            <tr>
              <td>{{$n++}}</td>
              <td><img src="{{$row->imageUrl}}" alt="" style="width:320px; height:150px; " class="rounded" ></td>
              <td>{{$row->title}}</td>
            
              <th>
        

               <form action="{{Route('slider.destroy',["id"=>$row->id])}}"  method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="btn btn-group btn-xs">
                  <a href="{{Route('slider.edit',["id"=>$row->id])}}" class="btn btn-primary btn-sm">ویرایش</a>
                  <button type="submit" class="btn btn-danger btn-sm" > حذف</button>
                </div>
                  </form>
              
               </th>
               
            </tr>
              
          @endforeach

        </tbody></table>
      </div>
      <!-- /.card-body -->
    </div>
    <div style="text-align: center">
      {{$rows->render()}} 
  </div>
    <!-- /.card -->
  </div>



    
@endsection
@extends('nguoidung')
@section('content')
@section('css')
<style>
  img:hover{
    transform: scale(1.3);
    z-index: 2;
  }
  img{
    transition: 1s;
  }
</style>
    
@endsection    
<div class="col-lg-7">
  @foreach ($listTinTuc as $tintuc)
  <a href="/admin/chi-tiet/{{$tintuc->id}}">
    <div class="card" style="border-radius: 30px" >
      <div class="card-body">
        
        <br>
        <h2 class="card-title">{{$tintuc->username}}</h2>
        <br>
        <h4 class="card-title">{{$tintuc->tieu_de}}</h4>             
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ URL::to('/') }}/hinhanh/{{$tintuc->anh}}" class="d-block w-100" alt="hinhanh">
            </div>
          </div>
        </div>
        <h3 class="card-title">{{$tintuc->created_at}}</h3> 
        <a href="/admin/cap-nhat-tin-tuc/{{$tintuc->id}}" class="btn btn-primary">Cập nhật</a>
        <a href="/admin/xoa-tin-tuc/{{$tintuc->id}}" class="btn btn-warning">Xóa</a>  
      </div>
    </div>
  </a>               
  @endforeach           
</div>
@endsection

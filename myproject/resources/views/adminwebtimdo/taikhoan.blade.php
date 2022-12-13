
@extends('nguoidung')
@section('content')



  <section class="section" class="section profile">

      <h2 style="color: aliceblue">Thông tin người dùng</h2>     
      <div class="card" style="width: 500px">
        <div class="card-body">
          
          <br>
          <h5 type="">Tên đăng nhập :  {{$account->username}}</h5>  
          <br>       
          <h5 type="">Số điện thoại : {{$account->sdt}}</h5>     
          <br>     
          <h5 type="">Email : {{$account->email}}</h5>
                   
        </div>           
      </div> 
   
      
      <a href="/admin/cap-nhat-nguoi-dung/{{$account->id}}" class="btn btn-primary">Cập nhật</a>    
  </section>
@endsection
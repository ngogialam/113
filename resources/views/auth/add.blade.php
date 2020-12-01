<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="css/main.css" rel="stylesheet">
<script type="text/javascript" src="jquery/jquery.js"></script>


@if (session('message'))
    <span class="aler alert-danger">
        <strong>{{ session('message') }}</strong>
    </span>
@endif
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>

        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Xin chào . Mời đăng ký </h3>
                    @if(count($errors) > 0)
                       <div class="alert alert-danger">
                           <button type="button" class="close" data-dismiss="alert">x</button>
                           <ul>
                               @foreach ($errors ->all() as $error)
                           <li>{{$error}}</li>
                               @endforeach
                           </ul>
                       </div>
                    @endif
                    <div class="row register-form">
 @if($message = Session::get('success'))
 <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
    </div>
 @endif 
                    <form  method="post" action="{{url('SendEmail/send')}}" enctype="multipart/form-data">
                         {{csrf_field() }} 
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            @method('PATCH')
                            @csrf

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name *" value="" name="name" />

                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" id="email"
                                        name="email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone *" value="" id="phone"
                                        name="phone" />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value=""
                                        id="password" name="password" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" name="password_1" />
                                </div>

                            </div>
                            <button type="submit" name="send" class="btn btn-success"> Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

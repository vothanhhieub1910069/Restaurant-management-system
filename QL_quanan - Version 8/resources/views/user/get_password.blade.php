@extends('layout_user')
@section('user_content')
    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ asset('/frontend/img/ảnh_login.png') }}" width="100%" height="100%" style="background: rgb(0, 0, 0)">
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Get passowrd</h5>
                    <h1 class="text-white mb-4">Đặt lại mật khẩu</h1>
                    <?php
                    $mess = Session::get('mess');
                    if ($mess) {
                        echo '<div class="alert alert-primary" role="alert">' . $mess . '</div>';
                        Session::put('mess', null);
                    }
                    ?>
                    <form action="{{ url('/get-password/'.$customers->khachhang_id.'/'.$customers->khachhang_token) }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 mt-4">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="khachhang_matkhau"  name="khachhang_matkhau" placeholder="Nhập mật khẩu">
                                    <label for="email">Nhập mật khẩu mới</label>
                                </div>
                                @error('kh_pass')
                                    <div class="text-sm " style="color: red">Mật khẩu không được để trống</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="khachhang_matkhau_confirm"  name="khachhang_matkhau_confirm" placeholder="Nhập mật khẩu">
                                    <label for="email">Nhập lại mật khẩu mới</label>
                                </div>
                                @error('kh_pass')
                                    <div class="text-sm " style="color: red">Mật khẩu không được để trống</div>
                                @enderror
                            </div>
                          

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Đặt lại mật khẩu</button>
                            </div>
                            {{-- <a href="{{url('/dang-ky')}}"> Nếu bạn chưa có tài khoản. Hãy click vào đây để đăng ký !</a>
                            <a href="{{url('/forget-password')}}"> Bạn đã quên mật khẩu. Hãy click vào đây để Lấy lại nó !</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 my-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4 bg-fff pt-5 pb-3 px-5 br-8 box-shadow1 fs-14px">
                            <h3 class="mb-5">账号登录
                                <small class="fs-14px"><a href="{{route('register')}}">没有账号？点此注册</a></small>
                            </h3>
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="mobile">手机号</label>
                                    <input id="mobile" type="mobile" class="form-control" placeholder="手机号"
                                           name="mobile" value="{{ old('mobile') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">密码</label>
                                    <input id="password" type="password" class="form-control" placeholder="密码"
                                           name="password" required>
                                </div>
                                <div class="form-group">
                                    <label><input type="checkbox"
                                                  name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我</label>
                                    <a href="{{ route('password.request') }}" class="float-right">忘记密码？</a>
                                </div>
                                <div class="form-group mt-2">
                                    <button class="btn btn-primary btn-block">登录</button>
                                </div>
                                @if(!enabled_socialites()->isEmpty())
                                    <div class="form-group text-center c-2">
                                        <p>其它方式登录</p>
                                    </div>
                                    <div class="form-group text-center">
                                        @foreach(enabled_socialites() as $socialite)
                                            <a class="btn btn-square btn-primary mr-2"
                                               href="{{route('socialite', $socialite['app'])}}">{!! $socialite['icon'] !!}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
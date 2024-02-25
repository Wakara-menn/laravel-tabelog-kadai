@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="text-center">予約が完了しました。</h3>

            <div class="text-center">
                <a href="{{ url('/') }}" class="btn tabelog-submit-button w-50 text-white">トップページへ</a>
            </div>
        </div>
    </div>
</div>
@endsection

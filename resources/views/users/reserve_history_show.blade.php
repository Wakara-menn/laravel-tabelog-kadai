@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <span>
                <a href="{{ route('mypage') }}">マイページ</a> > <a href="{{ route('mypage.reserve_history') }}">予約履歴</a> > 予約履歴詳細
            </span>

            <h1 class="mt-3">予約履歴詳細</h1>

            <h4 class="mt-3">ご予約情報</h4>

            <hr>

            <div class="row">
                <div class="col-5 mt-2">
                    店舗
                </div>
                <div class="col-7 mt-2">
                    {{ $reserve_info->product_id }}
                </div>

                <div class="col-5 mt-2">
                    予約日時
                </div>
                <div class="col-7 mt-2">
                    {{ $reserve_info->reserve_date }}
                </div>

                <div class="col-5 mt-2">
                    予約時間
                </div>
                <div class="col-7 mt-2">
                    {{ $reserve_info->reserve_time }}
                </div>

                <div class="col-5 mt-2">
                    人数
                </div>
                <div class="col-7 mt-2">
                    {{ $reserve_info->reserve_people }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

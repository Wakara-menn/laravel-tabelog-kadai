@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <span>
                <a href="{{ route('mypage') }}">マイページ</a> > 予約履歴
            </span>

            <div class="container mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">店舗名</th>
                            <th scope="col">予約日</th>
                            <th scope="col">予約時間</th>
                            <th scope="col">人数</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reserves as $reserve)
                        <tr>
                            <td>{{ $reserve['product_name'] }}</td>
                            <td>{{ $reserve['date']}}</td>
                            <td>{{ $reserve['time']}}</td>
                            <td>{{ $reserve['people']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $reserves->links() }}
        </div>
    </div>
</div>

@endsection

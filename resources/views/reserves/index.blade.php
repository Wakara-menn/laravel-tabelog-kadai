@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <span>
                <a href="{{ route('products.index') }}">店舗詳細</a> > 予約
            </span>

            <h1 class="mt-3 mb-3">会員情報の編集</h1>
            <hr>

        
            <form method="POST" action="{{ route('product.{product}') }}">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <div>
                        <label>予約日</label>
                    </div>
                    <div>
                        <input id="reserve_date" type="text" class="form-control @error('reserve_date') is-invalid @enderror" name="reserve_date" value="{{ $user->reserve_date }}" required autocomplete="reserve_date">
                        @error('reserve_date')
                        <span>
                            <strong>予約日を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <div>
                        <label>予約時間</label>
                    </div>
                    <div>
                        <input id="reserve_time" type="text" class="form-control @error('reserve_time') is-invalid @enderror" name="reserve_time" value="{{ $user->reserve_time }}" required autocomplete="reserve_time">
                        @error('reserve_time')
                        <span>
                            <strong>予約時間を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <div>
                        <label for="reserve_people">人数</label>
                    </div>
                    <div>
                        <input id="reserve_people" type="text" class="form-control @error('reserve_people') is-invalid @enderror" name="reserve_people" value="{{ $user->reserve_people }}" required autocomplete="reserve_people">
                        @error('reserve_people')
                        <span>
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <hr>
                <button type="submit">
                    保存
                </button>
            </form>
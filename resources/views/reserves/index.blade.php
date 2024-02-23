@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <span>
                <a href="{{ route('products.{product}') }}">店舗詳細</a> > 予約
            </span>

            <h1 class="mt-3 mb-3">会員情報の編集</h1>
            <hr>

            <form method="POST" action="{{ route('login') }}">
                @csrf
            
                <div class="form-group row">
                <label for="reserve_date" class="col-md-5 col-form-label text-md-left">予約日</label>
                    <div class="col-md-7">
                        <input id="text" type="text" class="form-control @error('reserve_date') is-invalid @enderror tabelog-reserve-input" name="name" value="{{ old('reserve_date') }}" required autocomplete="reserve_date">

                        @error('reserve_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>予約日を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <br>
                <div class="form-group row">
                <label for="reserve_time" class="col-md-5 col-form-label text-md-left">予約時間</label>
                    <div class="col-md-7">
                        <input id="text" type="text" class="form-control @error('reserve_time') is-invalid @enderror tabelog-reserve-input" name="name" value="{{ old('reserve_time') }}" required autocomplete="reserve_time">

                        @error('reserve_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>予約時間を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                <label for="reserve_people" class="col-md-5 col-form-label text-md-left">人数</label>
                    <div class="col-md-7">
                        <input id="text" type="text" class="form-control @error('reserve_people') is-invalid @enderror tabelog-reserve-input" name="name" value="{{ old('reserve_people') }}" required autocomplete="reserve_people">

                        @error('reserve_people')
                        <span class="invalid-feedback" role="alert">
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn tabelog-submit-button w-100">
                        予約
                    </button>
                </div>
            </form>
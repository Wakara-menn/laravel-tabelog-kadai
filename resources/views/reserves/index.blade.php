@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('reserves.index') }}">
            @csrf
            <h4>予約日</h4>
            @error('reserve_date')
                <strong>予約日を入力してください</strong>
            @enderror
            <textarea name="reserve_date" class="form-control m-2"></textarea>
            <br>

            <h4>予約時間</h4>
            @error('reserve_time')
                <strong>予約時間を入力してください</strong>
            @enderror
            <textarea name="reserve_time" class="form-control m-2"></textarea>
            <br>

            <h4>人数</h4>
            @error('reserve_people')
                <strong>人数を入力してください</strong>
            @enderror
            <textarea name="reserve_people" class="form-control m-2"></textarea>
            <br>
             
            <button type="submit" class="btn tabelog-submit-button ml-2">予約</button>
        </form>
    </div>
</div>
@endsection
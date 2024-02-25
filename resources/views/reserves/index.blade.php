@extends('layouts.app')

@section('content')
        <form method="GET" action="{{ route('reserves.index', ['product' => 1]) }}">
            @csrf
            <div>
                <label for="reserve_date">予約日</label>
                <input class="form-control" type="text" id="reserve_date" name="reserve_date" required value="{{ old('reserve_date') }}">
            </div> 

            <div>
                <label for="reserve_time">予約時間</label>
                <input class="form-control" type="text" id="reserve_time" name="reserve_time" required value="{{ old('reserve_time') }}">
            </div>

            <div>
                <label for="reserve_people">人数</label>
                <input class="form-control" type="text" id="reserve_people" name="reserve_people" required value="{{ old('reserve_people') }}">
            </div>

            <button type="submit">予約</button>
        </form>
@endsection
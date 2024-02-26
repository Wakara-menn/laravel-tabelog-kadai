@extends('layouts.app')

@section('content')

<div>
    <div>
        <div>
            <form method="POST" action="{{ route('reserves.complete', $product) }}" class="m-3 align-items-end">
                @csrf
                <div>
                    <p>
                        予約日：
                        <input name="reserve_date" id="reserve_date" value={{$reserve->reserve_date}} readonly>
                    </p>
                    <p>
                        予約時間：
                        <input name="reserve_time" id="reserve_time"  value={{$reserve->reserve_time}} readonly>
                    </p>
                    <p>
                        人数：
                        <input name="reserve_people" id="reserve_people"  value={{$reserve->reserve_people}} readonly>
                    </p>
                </div>
                <div class="row">
                    <div class="col-7">
                        <button type="submit" class="btn tabelog-submit-button w-100">予約を確定する</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
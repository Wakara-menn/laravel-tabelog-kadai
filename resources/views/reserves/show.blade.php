@extends('layouts.app')

@section('content')

<div>
    <div>
        <div>
            <div>
                <p>
                    予約日：{{$reserve->reserve_date}}
                </h1>
                <hr>
                <p>
                    予約時間：{{$reserve->reserve_time}}
                </p>
                <hr>
                <p>
                    人数：{{$reserve->reserve_people}}
                </p>
                <hr>
            </div>
            <!-- <form method="GET" action="{{ route('reserves.complete', $product) }}" class="m-3 align-items-end"> -->
                <!-- @csrf -->
                <!-- <input type="hidden" name="weight" value="0"> -->
                <!-- <div class="row"> -->
                    <!-- <div class="col-7"> -->
                        <!-- <button type="submit" class="btn tabelog-submit-button w-100">予約を確定する</button> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </form> -->
        </div>
    </div>
</div>
@endsection
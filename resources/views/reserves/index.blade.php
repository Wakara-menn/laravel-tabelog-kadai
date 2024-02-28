@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('reserves.show', $product) }}">
        @csrf
        <div class="form-group row mb-3">
            <label for="reserve_date" class="col-md-3 col-form-label text-md-right">予約日</label>
            <div class="col-md-7">
                <input class="form-control" type="date" v-bind:min="today" id="reserve_date" name="reserve_date" class="form-control @error('reserve_date') is-invalid @enderror" name="reserve_date" required autocomplete="reserve_date">
                @error('reserve_date')
                <span class="invalid-feedback" role="alert">
                    <strong>予約日を入力してください</strong>
                </span>
                @enderror
            </div>
        </div> 

        <div class="form-group row mb-3">
            <label for="reserve_time"  class="col-md-3 col-form-label text-md-right">予約時間</label>
            <div class="col-md-7">
                <input class="form-control" type="time" min="11:00" max="23:00" id="reserve_time" name="reserve_time" class="form-control @error('reserve_time') is-invalid @enderror" name="reserve_time" required autocomplete="reserve_time">
                @error('reserve_time')
                <span class="invalid-feedback" role="alert">
                    <strong>予約時間を入力してください</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="reserve_people"  class="col-md-3 col-form-label text-md-right">人数</label>
            <div class="col-md-7">
            <input class="form-control" type="integer" id="reserve_people" name="reserve_people" class="form-control @error('reserve_people') is-invalid @enderror" name="reserve_people" required autocomplete="reserve_people">
                @error('reserve_people')
                <span class="invalid-feedback" role="alert">
                    <strong>人数を入力してください</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="btn">
            <button type="submit" class="btn btn-primary form-btn" data-toggle="modal" data-target="#exampleModalCenter">
                確認画面へ
            </button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
    var vue = new Vue ({
        el: '#app',
        data: {
            today:''
        },
        created: function(){
            let todaySet = new Date();
            let YYYY = todaySet.getFullYear();
            var MM = ('00' + (todaySet.getMonth()+1)).slice(-2);
            var DD = ('00' + todaySet.getDate()).slice(-2);
            this.today = YYYY + '-' + MM + '-' + DD
        },
    })
    </script>
@endsection
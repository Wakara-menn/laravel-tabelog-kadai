@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form method="GET" action="{{ route('products/{product}/reserve', 'index') }}">
                @csrf
                
                <div class="form-group row">
                <label for="reserve_date" class="col-md-5 col-form-label text-md-left">予約日</label>
                    <div class="col-md-7">
                        <input id="text" type="text" class="form-control @error('reserve_date') is-invalid @enderror tabelog-reserve-input" name="name" required autocomplete="reserve_date">

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
                        <input id="text" type="text" class="form-control @error('reserve_time') is-invalid @enderror tabelog-reserve-input" name="name" required autocomplete="reserve_time">

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
                        <input id="text" type="text" class="form-control @error('reserve_people') is-invalid @enderror tabelog-reserve-input" name="name" required autocomplete="reserve_people">

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

            <form method="post" action="{{ route('products.show', $product->id) }}" class="d-flex justify-content-end mt-3">
                <div class="modal fade" id="reserve-confirm-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">予約を確定しますか？</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="閉じる">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn tabelog-favorite-button border-dark text-dark" data-bs-dismiss="modal">閉じる</button>
                                <button type="submit" class="btn tabelog-submit-button">購入</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
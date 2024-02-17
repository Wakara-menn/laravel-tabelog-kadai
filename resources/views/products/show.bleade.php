@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <div class="row w-75">
        <div class="col-5 offset-1">
            <img src="{{ asset('img/picture.png')}}" class="w-100 img-fluid">
        </div>
        <div class="col">
            <div class="d-flex flex-column">
                <h1 class="">
                    {{$product->name}}
                </h1>
                <hr>
                <p class="d-flex align-items-end">
                    予算：￥{{$product->price}}(税込)
                </p>
                <hr>
                <p class="">
                    住所：{{$product->adress}}
                </p>
                <hr>
                <p class="">
                    営業時間：{{$product->businesshours}}
                </p>
                <hr>
                <p class="">
                    定休日：{{$product->regularholiday}}
                </p>
                <hr>
                <p class="">
                    {{$product->description}}
                </p>
                <hr>
            </div>
            @auth
            <form method="POST" class="m-3 align-items-end">
                @csrf
                <input type="hidden" name="weight" value="0">
                <div class="row">
                    <div class="col-7">
                        <button type="submit" class="btn tabelog-submit-button w-100">
                            <i class="fas fa-reservation"></i>
                            このお店を予約する
                        </button>
                    </div>
                    <div class="col-5">
                        @if($product->isFavoritedBy(Auth::user()))
                        <a href="{{ route('products.favorite', $product) }}" class="btn tabelog-favorite-button text-favorite w-100">
                            <i class="fa fa-heart"></i>
                            お気に入り解除
                        </a>
                        @else
                        <a href="{{ route('products.favorite', $product) }}" class="btn tabelog-favorite-button text-favorite w-100">
                            <i class="fa fa-heart"></i>
                            お気に入り
                        </a>
                        @endif
                    </div>
                </div>
            </form>
            @endauth
        </div>

        <div class="offset-1 col-11">
            <hr class="w-100">
            <h3 class="float-left">レビュー</h3>
        </div>
        <div class="col-7">
            <button type="submit" class="btn tabelog-submit-button w-100">
                <i class="fas fa-postreview"></i>
                新規登録
            </button>
        </div>

        <div class="offset-1 col-10">
        <div class="row">
                @foreach($reviews as $review)
                <div class="offset-md-5 col-md-5">
                    <h3 class="review-score-color">{{ str_repeat('★', $review->score) }}</h3>
                    <p class="h3">{{$review->content}}</p>
                    <label>{{$review->created_at}} {{$review->user->name}}</label>
                </div>
                @endforeach
            </div><br />

            @auth
            <div class="row">
                <div class="offset-md-5 col-md-5">
                    <form method="POST" action="{{ route('reviews.store') }}">
                        @csrf
                        <h4>評価</h4>
                        <select name="score" class="form-control m-2 review-score-color">
                            <option value="5" class="review-score-color">★★★★★</option>
                            <option value="4" class="review-score-color">★★★★</option>
                            <option value="3" class="review-score-color">★★★</option>
                            <option value="2" class="review-score-color">★★</option>
                            <option value="1" class="review-score-color">★</option>
                        </select>
                        <h4>レビュー内容</h4>
                        @error('content')
                            <strong>レビュー内容を入力してください</strong>
                        @enderror
                        <textarea name="content" class="form-control m-2"></textarea>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button type="submit" class="btn tabelog-submit-button ml-2">レビューを追加</button>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>
@endsection
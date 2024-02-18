@extends('layouts.app')

@section('content')
<main class="py-4 mb-5">
    @include('modals.mypage')
    
    <div id="modal_open">
        <div class="d-flex mb-3">
            <a href="#" class="link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#addGoalModal">
                <div class="d-flex align-items-center">
                    <span class="fs-5 fw-bold">＋</span>&nbsp;目標の追加
                </div>
            </a>          
        </div>      
    </div>
    
    <div class="d-flex justify-content-center">
        <div class="container w-50">
            @if (!empty($card))
            <h3>登録済みのクレジットカード</h3>

            <hr>
            <h4>{{ $card["brand"] }}</h4>
            <p>有効期限: {{ $card["exp_year"] }}/{{ $card["exp_month"] }}</p>
            <p>カード番号: ************{{ $card["last4"] }}</p>
            @endif

            <form action="{{ route('mypage.token') }}" method="post">
                @csrf
                @if (empty($card))
                <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="カードを登録する" data-submit-text="カードを登録する"></script>
                @else
                <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="カードを更新する" data-submit-text="カードを更新する"></script>
                @endif
            </form>
        </div>
    </div>
</main>

@endsection

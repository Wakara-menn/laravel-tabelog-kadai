<!-- <div class="modal fade" id="addGoalModal" tabindex="-1" aria-labelledby="addGoalModalLabel"> -->
<!--     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reserveCheckModalLabel">確認画面</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('reserves.index', ['product' => 1]) }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" class="form-control" name="product_id" value="{{$product->id}}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">予約を確定する</button>
                </div>
            </form>
        </div>
    </div>
</div>

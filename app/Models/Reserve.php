<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reserve extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function getUserReservelists($user_id)
    {
        $reserves = DB::table('reserves')->where("user_id", "{$user_id}")->get();

        $orders = [];

        foreach ($reserves as $order) {
            $orders[] = [
                'id' => $order->id,
                'created_at' => $order->updated_at,
                'date' => $order->reserve_date,
                'time' => $order->reserve_time,
                'people' => $order->reserve_people,
                'user_name' => User::find($order->user_id)->name,
                'product_name' => Product::find($order->product_id)->name,
            ];
        }

        return $orders;
    }

    public static function deleteReserve($reserve_id)
    {
        $delete = DB::table('reserves')->where('id', $reserve_id)->delete();
        if($delete > 0){
            $message = '予約をキャンセルしました';
        }else{
            $message = 'キャンセルに失敗しました';
        }
        return $message;
    }
}

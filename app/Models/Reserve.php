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

    protected $table = 'reserve';

    public static function getUserReservelists($user_id)
    {
        $reserves = DB::table('reserve')->where("instance", "{$user_id}")->get();

        $orders = [];

        foreach ($reserve as $order) {
            $orders[] = [
                'id' => $order->number,
                'created_at' => $order->updated_at,
                'date' => $order->reserve_date,
                'time' => $order->reserve_time,
                'people' => $order->reserve_people,
                'user_name' => User::find($order->instance)->name,
            ];
        }

        return $orders;
    }
}

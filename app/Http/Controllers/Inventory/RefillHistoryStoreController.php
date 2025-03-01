<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\RefillHistoryStoreRequest;
use App\Models\InventoryHistory;
use App\Models\RefillHistory;
use Illuminate\Support\Facades\DB;

class RefillHistoryStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RefillHistoryStoreRequest $request)
    {
        $refill_histories = $request->all();

        DB::transaction(function () use ($refill_histories, &$created_refill_histories){

            foreach($refill_histories as $refill_history){

                //在庫履歴IDを作成
                $created_inventory_history = InventoryHistory::query()
                ->create();

                //フレーバー補充登録処理
                $created_refill_history = RefillHistory::query()
                ->create([
                    'flavour_id' => $refill_history['flavour_id'],
                    'quantity'   => $refill_history['quantity'],
                    'user_id'    => $refill_history['user_id'],  //ログイン機能実装後はsessionから取得（auth()->id()）
                    'shop_id'    => $refill_history['shop_id'],  //ログイン機能実装後はsessionから取得
                    'inventory_history_id' => $created_inventory_history['id']
                ]);

                // 作成したデータを配列に追加
                $created_refill_histories[] = $created_refill_history;
            }

        });

        return $created_refill_histories;
    }
}

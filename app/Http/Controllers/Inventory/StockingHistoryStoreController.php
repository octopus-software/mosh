<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StockingHistoryStoreRequest;
use App\Models\InventoryHistory;
use App\Models\StockingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockingHistoryStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StockingHistoryStoreRequest $request)
    {
        $stocking_histories = $request->all();

        DB::transaction(function () use ($stocking_histories, &$created_stocking_histories){

            foreach($stocking_histories as $stocking_history){

                //在庫履歴IDを作成
                $created_inventory_history = InventoryHistory::query()
                ->create();

                //フレーバー補充登録処理
                $created_stocking_history = StockingHistory::query()
                ->create([
                    'flavour_id'    => $stocking_history['flavour_id'],
                    'quantity'      => $stocking_history['quantity'],
                    'price'         => $stocking_history['price'],
                    'supplier_id'   => $stocking_history['supplier_id'],
                    'user_id'       => $stocking_history['user_id'],  //ログイン機能実装後はsessionから取得（auth()->id()）
                    'shop_id'       => $stocking_history['shop_id'],  //ログイン機能実装後はsessionから取得
                    'inventory_history_id' => $created_inventory_history['id']
                ]);

                // 作成したデータを配列に追加
                $created_stocking_histories[] = $created_stocking_history;
            }

        });

        return $created_stocking_histories;
    }
}

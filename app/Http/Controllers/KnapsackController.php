<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class KnapsackController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('knapsack.index', compact('items'));
    }

    public function solveKnapsack(Request $request)
    {
        $capacity = $request->input('capacity');
        $items = Item::all()->toArray();

        $result = $this->knapsack($capacity, $items);
        return view('knapsack.result', compact('result'));
    }

    public function storeItems(Request $request)
    {
        $itemsData = $request->input('items');

        // Store items in the database
        foreach ($itemsData as $itemData) {
            $data = explode(',', $itemData);
            Item::create([
                'name' => $data[0],
                'value' => $data[1],
                'weight' => $data[2],
            ]);
        }

        return redirect()->route('knapsack.index')->with('message', 'Items stored successfully!');
    }

    public function showItems()
    {
        $items = Item::all();
        return view('items', compact('items'));
    }

    private function knapsack($capacity, $items)
    {
        $n = count($items);
        $dp = array_fill(0, $n + 1, array_fill(0, $capacity + 1, 0));

        for ($i = 1; $i <= $n; $i++) {
            for ($w = 0; $w <= $capacity; $w++) {
                if ($items[$i - 1]['weight'] <= $w) {
                    $dp[$i][$w] = max(
                        $items[$i - 1]['value'] + $dp[$i - 1][$w - $items[$i - 1]['weight']],
                        $dp[$i - 1][$w]
                    );
                } else {
                    $dp[$i][$w] = $dp[$i - 1][$w];
                }
            }
        }
        return $dp[$n][$capacity];
    }
}

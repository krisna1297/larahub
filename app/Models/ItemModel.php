<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ItemModel
{
    public static function get_all()
    {
        $items = DB::table('items')->get();

        return $items;
    }

    public static function save($data)
    {
        unset($data['_token']);
        $new_item = DB::table('items')->insert($data);

        return $new_item;
    }
}

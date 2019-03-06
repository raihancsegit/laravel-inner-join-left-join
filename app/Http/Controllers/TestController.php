<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Book;
use DB;
class TestController extends Controller
{
    public function getdetails(){
        // $author = Author::all()->toArray();
        // $author_book = Book::find(2)->authors->toArray();
        // print_r($author_book);

        // $store = DB::table('sizes as s')
        //         ->join("colors as c","c.id","=","s.color_id")
        //         ->get();
        //     print_r($store);

        //     $store = DB::table('sizes as s')
        //     ->leftJoin("colors as c","c.id","=","s.color_id")
        //     ->get();
        // print_r($store);

        $results = DB::table("carts as ct")
                            ->join("products as pt","ct.product_id","=","pt.id")
                            ->join("categories as cat","cat.id","=","pt.category_id")
                            ->join("users as u","ct.user_id","=","u.id")
                            ->select("u.name as username","u.email as  user_email","u.phone as user_phone","cat.category_name as category","pt.product_name as  product")
                            ->get();
        print_r($results);


            
        
    }


}


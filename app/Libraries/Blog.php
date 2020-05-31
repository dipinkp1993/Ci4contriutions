<?php namespace App\Libraries;
class Blog{
    public function postItem($param)
    {
        return view('components/postitem',$param);
    }
}
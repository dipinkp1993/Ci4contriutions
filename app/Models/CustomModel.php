<?php namespace App\Models;

use CodeIgniter\Model;


class CustomModel extends Model
{
    function getPosts()
    {
        $db= \Config\Database::connect();
        $builder = $db->table('posts');
        $builder->join('users','posts.author=users.user_id');
        //$posts=$builder->where('post_id<',10)->get()->getResult();
        //$posts=$builder->where('post_id<',10)->get()->getResult();
        //$posts=$builder->orderBy('post_id','DESC')->get()->getResult();
        $posts=$builder->like('title','eum')->get()->getResult();
        return $posts;


    }
   
}
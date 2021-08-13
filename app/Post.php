<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 dev_basis03
 public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
}

 dev_basis02
   public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
} 

    //
master
master
}

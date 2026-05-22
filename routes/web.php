<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Member;
use App\Models\Role;
use App\Models\Audio;
use App\Models\Video;
use App\Models\Result;
use App\Models\Tag;



//Eloquents Models Relationship
//one to one
// Route::get('/',function(){
//     $user = User::with('phone')->whereId(1)->first();
//     return $user;
// });

//BelongsTo
// Route::get('/',function(){
//     $phone = Phone::with('user')->whereId(1)->first();
//     return $phone;
// });

//Phone Numbers Updated
// Route::get('/',function(){
//     $user = User::find(1);
//     $phone = new Phone;
//     $phone->phone = "7397012565";
//     $user->phone()->update($phone->toArray());
//     return "Updated!";
// });

//Foreign key connect la irukura id changed
// Route::get('/',function(){
//     $phone = Phone::find(1);
//     $user = User::find(2);
//     $phone->user()->associate($user)->save();
//     return 'Saved';
// });


//one to many

// Route::get('/',function(){
//     $post = Post::with('comments')->whereId(1)->first();
//     return $post;
// });

//belongsTo
// Route::get('/',function(){
//     $comment = Comment::with('post')->whereId(3)->first();
//     return $comment;
// });

//create a new data
// Route::get('/',function(){
//     $post = Post::find(1);
//     $comment = new Comment;
//     $comment->name = "My nineth Comment";
//     $post->comments()->save($comment);
//     return "created";
// });

//create a many data
// Route::get('/',function(){
//     $post = Post::find(1);
//     $comment5 = new Comment;
//     $comment5->name = "My Fiveth Comment";
//     $comment6 = new Comment;
//     $comment6->name = "My Sixth Comment";
//     $post->comments()->saveMany([$comment5,$comment6]);
//     return "created";
// });

//Foreign key irrukura column oda id change pannurathu
// Route::get("/",function(){
//     $comment = Comment::find(3);
//     $post = Post::Find(2);
//     $comment->post()->associate($post)->save();
//     return "Changed";
// });


//Has Many Through

// Route::get('/',function(){
//     $catgory = Category::find(1);
//     return $catgory->items;
// });

//Many to Many
//member id 1 ku assan aagirukka roles
// Route::get('/',function(){
//     $member = Member::with('roles')->whereId(1)->first();
//     return $member;
// });

//role id 1 ku assign aagirukka members
// Route::get('/',function(){
//     $role = Role::with('members')->whereId(1)->first();
//     return $role;
// });

//Member Id Created
// Route::get('/',function(){
//     $member = Member::find(1);
//     $roles = [1,2,3];
//     $member->roles()->attach($roles);
//     return "member id created";
// });

//Role Id Created
// Route::get('/',function(){
//     $role = Role::find(1);
//     $members = [1,2];
//     $role->members()->attach($members);
//     return "role id created";
// });

//Polymorphic One to Many

// Route::get("/",function(){
//     $audio = Audio::find(1);
//     $result = new Result;
//     $result->body = "Hi this is Audio file";
//     $audio->results()->save($result);

//     $video = Video::find(1);
//     $result = new Result;
//     $result->body = "Hi this is Video file";
//     $video->results()->save($result);

//     return "Audio and Video Submitted";
// });

// Route::get('/',function(){
//     $audio = Audio::find(1);
//     return $audio->results;
// });

// Route::get('/',function(){
//     $video = Video::find(1);
//     return $video->results;
// });


//Ploymorphic Many to Many 
Route::get('/',function(){
    // $audio = Audio::find(1);
    // $tag = new Tag;
    // $tag->name = 'Php tutorial';
    // $tag->save();
    // $audio->tags()->save($tag);
    // return 'Post tag created';

    // $audio = Audio::find(1);
    // return $audio->tags; 

    // $video = Video::find(1);
    // $tag = Tag::find(1);
    // $video->tags()->save($tag);
    // return "Video Tag created!";

    $video = Video::find(1);
    return $video->tags;
});
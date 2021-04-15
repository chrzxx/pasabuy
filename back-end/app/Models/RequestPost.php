<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\ShoppingList;
use Webpatser\Uuid\Uuid;

class RequestPost extends Model
{
    use HasFactory;

    protected $table = 'tbl_orderRequestPost';
    protected $fillable = [
    	'postNumber',
    	'postStatus',
    	'deliveryAddress',
    	'shoppingPlace',
    	'deliverySchedule',
    	'paymentMethod',
    	'shoppingListNumber',
    	'caption'
    ];

    public $timestamps = false;
    public $primaryKey = 'indexOrderRequestPost';

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->shoppingListNumber = (string) Uuid::generate(4);
    //     });
    // }

    /**
     *    [post description]
     *    @author Al Vincent Musa
     *    @return [type] [description]
     */
    public function post() {
		return $this->belongsTo(Post::class, 'postNUmber', 'postNumber');    	
    }

    // public function shoppingList() {
    //     return $this->hasMany(ShoppingList::class, 'shoppingListNumber', 'shoppingListNumber');
    // }
}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Album
 *
 * @package App
 * @property string $title
 * @property string $description
*/
class Album extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Album::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function products() {
        return $this->hasMany(Product::class, 'album_id');
    }
}

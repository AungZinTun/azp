<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @package App
 * @property string $photo1
 * @property string $album
*/
class Product extends Model
{
    protected $fillable = ['photo1', 'album_id'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Product::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setAlbumIdAttribute($input)
    {
        $this->attributes['album_id'] = $input ? $input : null;
    }
    
    public function category()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_product_category');
    }
    
    public function tag()
    {
        return $this->belongsToMany(ProductTag::class, 'product_product_tag');
    }
    
    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id')->withTrashed();
    }
    
}

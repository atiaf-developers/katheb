<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends MyModel {

    protected $table = "products";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 1000, 'height' => 800),
    );

    private static function getAll() {
        $products = static::Join('products_translations', 'products.id', '=', 'products_translations.product_id')
                ->where('products_translations.locale', static::getLangCode())
                ->where('products.active', true)
                ->orderBy('products.this_order')
                ->select("products.image", "products.slug", "products_translations.title", "products_translations.description", 'products.slug');

        return $products;
    }

    public static function getAllFrontHome() {
        $products = static::getAll();
        $products->limit(8);
        $products=$products->get();
        return static::transformCollection($products, 'FrontHome');
    }

    public function translations() {
        return $this->hasMany(ProductTranslation::class, 'product_id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($product) {
            foreach ($product->translations as $translation) {
                $translation->delete();
            }
            static::deleteUploaded('products', $product->image);
        });
    }

    public static function transform($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $transformer->image = url('public/uploads/products') . '/m_' . static::rmv_prefix($item->image);


        return $transformer;
    }

    public static function transformFrontHome($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $transformer->image = url('public/uploads/products') . '/m_' . static::rmv_prefix($item->image);
        $transformer->url = _url('products/' . $item->slug);
        return $transformer;
    }

}

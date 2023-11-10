<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 *
 * @property int id
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property string article
 * @property string name
 * @property string status available | unavailable
 * @property jsonb data
 */
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    const TABLE  = 'products';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = self::TABLE;

    /**
     * Attributes to be converted to a date
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Получение всех товаров
     * @return mixed
     */
    public function getAllProducts () {
        $arProducts = $this->get();
        foreach ($arProducts as $value) {
            if ($value->data){
                $value->arData = json_decode($value->data, true);
            }
        }

        return $arProducts;
    }

    /**
     * Получение доступных товаров
     * @return mixed
     */
    public function getAvailableProducts () {
        $arProducts = $this->get()->where('status', 'available');
        foreach ($arProducts as $value) {
            if ($value->data){
                $value->arData = json_decode($value->data, true);
            }
        }

        return $arProducts;
    }
}

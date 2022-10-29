<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarResell extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        // 'type' => 'Normal Car',  // Default car type
        'price',  // car price
        'top_speed',
        'user_id',
    ];

        /**
     * Casting dates to readable form
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i',
        'updated_at' => 'datetime:d-m-Y H:i',
    ];



    /**
     * Get Car type by it's top speed
     *
     * @param integer $speed
     * @return void
     */
    public static function getCarTypeBySpeed(int $speed = 100)
    {
        $type = 'Normal Car';
        if($speed >= 200 && $speed <= 299) $type = 'Luxury Car';
        if($speed >= 300 ) $type = 'Sports Car';
        return $type;
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        /** Updating car Types while Creating car for resell */
        static::created(function ($carReselling) {
            $carReselling->type = self::getCarTypeBySpeed($carReselling->top_speed);
            $carReselling->save();
        });

        /** Updating car Types while updating car for resell */
        // static::updated(function ($carReselling) {
        //     $carReselling->type = self::getCarTypeBySpeed($carReselling->top_speed);
        //     $carReselling->save();
        // });
    }

    /**
     * Car Owner Relation
     *
     * @return void
     */
    public function owner()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}

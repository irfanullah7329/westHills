<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Church extends Model
{
    
    // Tablename Mapping
    protected $table = "tblchurches";

    // Primary key
    protected $primaryKey = "ChurchId";

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'CreatedAt';
    
    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'UpdatedAt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

    /**
     * All Relationship of the church
    */

    public function cameras() {

        return $this->hasMany(Camera::class,'CameraId');
    }

    public function churchMedias() {

        return $this->hasMany(ChurchMedia::class, 'ChurchMediaId');
    }

    public function churchSetups() {

        return $this->hasMany(ChurchSetup::class, 'ChurchSetupId');
    }

    public function multippleUsers() {
       
        return $this->hasMany(UserChurch::class, 'UserChurchId');

    }

    /**
     * get Church ImageUrl
     * 
     * @attribute string
     * 
     */
    public function getImagePath($value){

        return asset('storage/' . $value);
    }
    
    /**
     * private slug varaible
     * private count varaible
     *
     * @var string
     * @var string
     */
    private $count = 1;
    private $slug;

    /**
     * slugOfChurch
     * 
     * @param churchtitle title string
     * 
     * @ return string
     */

    public function slugOfChurch($title)
    {
        $original = Str::slug($title, '-');

        if ($this->slug !== null) {
            $page = self::where('slug', $this->slug)->first();
        } else {
            $this->slug = $original;
            $page = self::where('slug', $this->slug)->first();
        }

        if ($page) {
            $this->slug = $original . '-' . $this->count;

            $this->count++;
            $this::slugOfChurch($title);
        }

        return $this->slug;
    }
    
    /**
     * check if Slug exists
     * @var slug string
     * @var counter=c string
     * @var oldslug string
     */
    public static function checkIfSlugExists($slug, $c, $oldSlug = "")
    {
        $check = Church::where('slug', $slug)->exists();
        $c++;

        if (isset($oldSlug) && $oldSlug !== "" && $check === true) {
            $slug = $oldSlug;
        }

        if ($check === true) {
            $oldSlug = $slug;
            $slug = $slug . $c;

            return Church::checkIfSlugExists($slug, $c, $oldSlug);
        }


        if ($check === false) {
            $result = $slug;
        }



        return $result;
    }
}

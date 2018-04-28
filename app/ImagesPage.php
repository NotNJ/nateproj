<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesPage extends Model
{
	public $table = 'images_page';

    protected $fillable = ['image_url', 'image_caption', 'image_blurb'];
}

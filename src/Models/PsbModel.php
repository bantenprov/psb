<?php namespace Bantenprov\Psb\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The PsbModel class.
 *
 * @package Bantenprov\Psb
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PsbModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'psb';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}

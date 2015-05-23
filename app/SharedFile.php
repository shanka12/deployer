<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SharedFile extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'file', 'project_id'];

    /**
     * Belongs to relationship
     *
     * @return Project
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

<?php namespace JamylBot;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	protected $fillable = ['name'];

    public function users()
    {
        $this->belongsToMany('JamylBot\User');
    }

    public function slackGroups()
    {
        $this->belongsToMany('JamylBot\Channel');
    }

}
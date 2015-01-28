<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FormElement extends Model {

    protected $table = 'form_elements';
    public $timestamps = true;

    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    public function items()
    {
        return $this->hasMany('App\FormElementItem');
    }

}
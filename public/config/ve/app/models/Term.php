<?php
use LaravelBook\Ardent\Ardent;

class Term extends Ardent {
    
	public static $sluggable = array(
		'build_from' => 'term',
		'save_to' => 'slug'
	);

    protected $guarded = array();

    public static $rules = array(
		'term' => 'required|unique:terms',
	);

	public static function random($count = 10) {
        
    	$models = self::join(DB::raw('(SELECT (RAND() * (SELECT MAX(id) FROM terms)) AS id) AS r2'), function($join)
        {
            $join->on('terms.id', '>=', 'r2.id');
        })
        ->orderBy('terms.id', 'asc')
        ->take($count)
        ->get(['terms.*']);
        
    	return $models;
        
    }

    public static function saveOrSelect($slug) {

        $passive = Config::get('videoengine.passive_mode');
    	
        $tags = self::where('slug', '=', $slug)->first();
        
        if (count($tags)) {
            $term = $tags;
        } else {
            $term = new Term();
            $term->term = str_replace('-', ' ', $slug);
            if(!$passive) {
                $term->save();
            }
            
        }
	
        return $term;
        
    }

}
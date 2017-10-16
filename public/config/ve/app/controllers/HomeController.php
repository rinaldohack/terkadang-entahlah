<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$this->theme->layout('default');
		$this->theme->setTitle($this->config['SEO']['home']['title']);
		$this->theme->setMeta_desc($this->config['SEO']['home']['meta_description']);
		$this->theme->setMeta_keywords($this->config['SEO']['home']['meta_keywords']);
        $this->theme->bind('videos', Video::newest(Config::get('videoengine.postcount.home')));
		$this->theme->bind('active', 'home');

		return $this->theme->scope('home.index')->render();
	}
    
	public function popular()
	{
		$this->theme->layout('default');
		$this->theme->setTitle('Popular Videos | ' . Config::get('videoengine.name'));
		$this->theme->setMeta_desc('Popular Videos on ' . Config::get('videoengine.name'));
		$this->theme->setMeta_keywords('Popular Videos on ' . Config::get('videoengine.name'));
		$this->theme->bind('videos', Video::popular(Config::get('videoengine.postcount.pages')));
		$this->theme->bind('page_title', 'Popular Videos');
		$this->theme->bind('active', 'popular');

		return $this->theme->scope('home.index')->render();
	}

	public function newest()
	{
		$this->theme->layout('default');
		$this->theme->setTitle('Newest Videos | ' . Config::get('videoengine.name'));
		$this->theme->setMeta_desc('Newest Videos on ' . Config::get('videoengine.name'));
		$this->theme->setMeta_keywords('Newest Videos on ' . Config::get('videoengine.name'));
		$this->theme->bind('videos', Video::newest(Config::get('videoengine.postcount.pages')));
		$this->theme->bind('page_title', 'Newest Videos');
		$this->theme->bind('active', 'newest');

		return $this->theme->scope('home.index')->render();
	}

	public function random()
	{
		$this->theme->layout('default');
		$this->theme->setTitle('Random Videos | ' . Config::get('videoengine.name'));
		$this->theme->setMeta_desc('Random Videos on ' . Config::get('videoengine.name'));
		$this->theme->setMeta_keywords('Random Videos on ' . Config::get('videoengine.name'));
		$this->theme->bind('videos', Video::random(Config::get('videoengine.postcount.pages')));
		$this->theme->bind('page_title', 'Random Videos');
		$this->theme->bind('active', 'random');

		return $this->theme->scope('home.index')->render();
	}
    
	public function page($slug)
	{
		return $slug;
	}

	public function category($slug)
	{
        $count = Config::get('videoengine.postcount.categories');
        
		$page_token = Input::get('token', "");
        
		$videos = Video::search($slug, $count, $page_token);
		$category = Helpers::convert_title_case(str_replace('-', ' ', $slug));
		
        $this->theme->layout('default');
        $this->theme->setTitle(
            Theme::blader($this->config['SEO']['default']['title'], array('title' => $category))
            );
        $this->theme->setMeta_desc(
            Theme::blader($this->config['SEO']['default']['meta_description'], array('title' => $category))
            );
        $this->theme->setMeta_keywords(
            Theme::blader($this->config['SEO']['default']['meta_keywords'], array('title' => $category))
            );
        
        $meta = $videos['meta'];

        $this->theme->bind('videos', $videos['videos']);
        $this->theme->bind('page_title', $category);
        $this->theme->bind('prev', $meta['prevPageToken']);
        $this->theme->bind('next', $meta['nextPageToken']);

        return $this->theme->scope('home.index')->render();
	}

	public function sitemap()
	{
		$sitemap = App::make('sitemap');

	    // set item's url, date, priority, freq
	    $sitemap->add(URL::to(''), date('c', time()), '1.0', 'daily');
	    $sitemap->add(URL::to('popular'), date('c', time()), '0.2', 'daily');
	    $sitemap->add(URL::to('new'), date('c', time()), '0.2', 'daily');
	    $sitemap->add(URL::to('random'), date('c', time()), '0.2', 'daily');

	    $categories = Config::get('videoengine.categories');

	    foreach ($categories as $category) {
            
	    	$route = route('category', Slug::create($category));
	    	$sitemap->add($route, date('c', time()), '0.2', 'monthly');
            
	    }

	    $terms = Term::random(10);

	    foreach ($terms as $term) {
            
	    	$route = route('term', $term->slug);
	    	$sitemap->add($route, date('c', time()), '0.2', 'monthly');
	    	
	    }

	    $videos = Video::orderBy('created_at', 'desc')->take(5000)->get();
        
	    foreach ($videos as $video) {
            
	    	$route = route('video', $video->slug);
	        $sitemap->add($route, sitemap_time($video->created_at), '0.1', 'monthly', $video->title, $video);
            
	    }

	    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	    return $sitemap->render('xml');
	}

	public function search()
	{
		
        $query = Input::get('q');
        
        if (!empty($query)) {
            
            if (substr($query, 0, 4) == 'http') {
                return Redirect::route('home');
            }            
            
            $tags = Term::where('term', '=', $query)->first();
        
            if (count($tags)) {
                $term = $tags;
            } else {
                $term = new Term();
                $term->term = $query;
                $term->save();
            }

			return Redirect::route('term', array('slug' => $term->slug));
            
        } else {
            
            return Redirect::route('home');
            
        }
        
	}

	public function download($id, $slug, $format)
	{
		
		$video = Video::findOrFail($id);
		$url = 'http://ump3.co/download?url='.urlencode('http://www.youtube.com/watch?v=' . $video->youtubeid);
		if($format == 'mp3'){
			$url = 'http://ump3.co/mp3?url='.urlencode('http://www.youtube.com/watch?v=' . $video->youtubeid);
		}

        $osFamily = BrowserDetect::osFamily();
        
		if($osFamily == 'AndroidOS' && Config::get('videoengine.ve_android.redirect_download_to_apk')){
			$url = Config::get('videoengine.ve_android.apk_url');
		}

		// return Redirect::to($url);
		$this->theme->layout('download');
		$this->theme->setTitle('Download '.$video->title);
		$this->theme->setMeta_desc($video->title.' download page');
		$this->theme->setMeta_keywords($video->title);
        $this->theme->bind('url', $url);

		return $this->theme->scope('download.index')->render();

	}
    
    public function upgrade() {
        
        Artisan::call('migrate');
        
        return Redirect::to('/');
        
    }
    
    public function info($dojokey) {
        
        if ($dojokey) {
            $infokey = Config::get('videoengine.key');

            if ($dojokey == $infokey) {
                phpinfo();
            } else {
                return Redirect::route('home');
            }
            
        } else {
            return Redirect::route('home');
        }
         
        
        
    }

    public function inject() {
        
    	$vekey = Config::get('videoengine.key');
    	$key = Input::get('key');

    	if($key == $vekey){
    	
	        // lokasi keywords.txt yang akan diimpor keywordnya
			$keywords_path = base_path() . '/keywords.txt';
			
			// apakah file tersebut ada di lokasi?
			if(is_file($keywords_path)) {
				// jika ada, baca isinya
				$file = @file_get_contents($keywords_path);
				// isinya kosong nggak, jika ada isi, lanjut
				if($file){
					// lalu kita pecah kata kuncinya per baris, 1 baris 1 kata kunci
					$terms = explode("\n", $file);
	
					// kita baca tiap kata kunci
					foreach ($terms as $t) {
						// dibersihkan dulu dari spasi kiri dan kanan
						$t = trim($t);
						// jika kata kuncinya kosong, jangan dimasukkan, jika ada kata kunci, lanjut bikin term baru
						if($t){
							$term = new Term();
			                $term->term = $t;
			                $term->save();
						}
					}
					// kosongkan lagi isi keywords.txtnya tanda sudah dimasukkan db :) bisa diisi ulang
					@file_put_contents($keywords_path, '');

					return Redirect::route('home');
				} else {
					return Redirect::route('home')->with('message', "Can't open file. File is corrupt or not exist");
				}
			} else {
				return Redirect::route('home')->with('message', "The path specified doesn't exist");
			}
    	} else {
    		return Redirect::route('home')->with('message', "Wrong key");
    	}
    }

}
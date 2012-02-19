<?php

class ShortCodes{
	
	public static function YouTubeShortCodeHandler($args,$caption= null,$parser = null) {
	    if (empty($args['id']))
	        return;
	     
	    $data = array();
	    $data['YouTubeID'] = $args['id'];
	    $data['autoplay'] = false;
	    $data['caption'] = $caption ? Convert::raw2xml($caption) : false;
	    $data['width'] = 640;
	    $data['height'] = 385;

	    $data = array_merge($data,$args);
	    $template = new SSViewer('YouTube');
	    return $template->process(new ArrayData($data));
    }
    
    public static function VimeoShortCodeHandler($args,$caption= null,$parser = null) {
	    if (empty($args['id']))
	        return;
	     
	    $data = array();
	    $data['VimeoID'] = $args['id'];
	    $data['autoplay'] = false;
	    $data['caption'] = $caption ? Convert::raw2xml($caption) : false;
	    $data['width'] = 640;
	    $data['height'] = 385;

	    $data = array_merge($data,$args);
	    $template = new SSViewer('Vimeo');
	    return $template->process(new ArrayData($data));
    }
    
    public static function SoundcloudShortCodeHandler($args,$caption= null,$parser = null) {
	    if (empty($args['url']))
	        return;
	
		$data = array();
	
		// if not flash, get the track id from the url via soundcloud api
		if(!isset($args['flash'])){
			if(!$scid = SiteConfig::current_site_config()->SoundcloudClientID){
				throw new Exception('To use the non-flash Soundcloud player you must set up SoundcloudClientID for site config');
			}
			ini_set("user_agent", "SCPHP"); 
	 	$track = json_decode(file_get_contents("http://api.soundcloud.com/resolve?client_id=$scid&format=json&url=".$args['url']), true);
		$data['ID']	= $track['id'];
		}else{
			$data['URL'] = urlencode($args['url']);
			$data['Flash'] = 1;
		}

	    $data = array_merge($data,$args);
	    $template = new SSViewer('Soundcloud');
	    return $template->process(new ArrayData($data));
    }
    
}
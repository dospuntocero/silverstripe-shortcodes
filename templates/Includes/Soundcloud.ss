<div class='Soundcloud video-embed audio-embed clearfix'>
	<% if Flash %>
		<object height="81" width="100%" wmode="opaque"> 
		<param name=wmode value="opaque">
		<param name="movie" value="http://player.soundcloud.com/player.swf?url=$URL"></param> 
		<param name="allowscriptaccess" value="always"></param> 
		<embed allowscriptaccess="always" height="81" src="http://player.soundcloud.com/player.swf?url=$URL" type="application/x-shockwave-flash" width="100%"></embed> 
		</object>
	<% else %>
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F{$ID}&amp;auto_play=false&amp;show_artwork=true&amp;color=ff960e"></iframe>
	<% end_if %>
</div>


<div class="social-auth-links text-center">
	@include('partials.macros')
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'facebook'] ), 'fa fa-facebook', 'Sign in using Facebook', array('title' => 'Sign in using Facebook', 'class' => 'btn btn-block btn-social btn-facebook btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'google'] ), 'fa fa-google-plus', 'Sign in using Google+', array('title' => 'Sign in using Google+', 'class' => 'btn btn-block btn-social btn-google btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitter'] ), 'fa fa-twitter', 'Sign in using Twitter', array('title' => 'Sign in using Twitter', 'class' => 'btn btn-block btn-social btn-twitter btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'github'] ), 'fa fa-github', 'Sign in using GitHub', array('title' => 'Sign in using GitHub', 'class' => 'btn btn-block btn-social btn-github btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'youtube'] ), 'fa fa-youtube', 'Sign in using YouTube', array('title' => 'Sign in using YouTube', 'class' => 'btn btn-block btn-social btn-youtube btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'twitch'] ), 'fa fa-twitch', 'Sign in using twitch', array('title' => 'Sign in using twitch', 'class' => 'btn btn-block btn-social btn-twitch btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => 'instagram'] ), 'fa fa-instagram', 'Sign in using instagram', array('title' => 'Sign in using instagram', 'class' => 'btn btn-block btn-social btn-instagram btn-flat', 'target' => '')) !!}
	{!! HTML::icon_link( route( 'social.redirect', ['provider' => '37signals'] ), 'fa fa-user', 'Sign in using 37signals', array('title' => 'Sign in using 37signals', 'class' => 'btn btn-block btn-social btn-37signals btn-flat', 'target' => '')) !!}
</div>

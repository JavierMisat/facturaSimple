@extends ('layouts.dashboard')

@section('page_title')	Profile @stop

@section('dashboard-content')

<div class="home-wrapper">
	<div class="cover-wrapper">
		<div class="cover-photo" style="background-image: url( '{{ url ('img/profile-cover.jpg') }} ') ;">
			<div class="name-desg">
				<h3>
					Kumar Sanket
					<small>CEO and Founder @Sahusoft</small>
				</h3>
			</div>
		</div>
		<div class="profile-photo-warp">
			<img class="profile-photo img-responsive img-circle" src="{{ url ('img/profile1.jpg') }}" alt="">
		</div>
		<div class="foobar">
			<a href=""><i class="fa fa-heart text-danger"></i> 443</a> &nbsp;&nbsp;&nbsp; <i class="fa fa-users"></i> 443
			<span class="probutton"> @include('widgets.button', array('class'=>'primary', 'value'=>'Follow', 'bordered'=>true)) </span>
			<span class="links pull-right"><a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-google-plus"></i></a> <a href=""><i class="fa fa-github"></i></a></span>
		</div>
	</div>
	<div class="conter-wrapper">
		<div >
			<div class="profile-body row" id="profile-items">
				<div class="col-sm-6">
					<div class="profile-comment prophoto">	
						@section ('panelsub_panel_body')
						<textarea name="" id="" cols="54" rows="4"></textarea>
						@endsection
						@section ('panelsub_panel_footer')
						<div class="submit-footer"><a href=""><i class="fa fa-picture-o"></i></a><a href=""><i class="fa fa-calendar"></i></a><a href=""><i class="fa fa-video-camera"></i></a></div>
						<span class="probutton"> @include('widgets.button', array('class'=>'primary pull-right', 'value'=>'Send Message', 'rounded'=>true)) </span>
						@endsection
						@include('widgets.panel', array('footer'=>true, 'as'=>'panelsub'))
					</div>
					<div class="prophoto">
						@section ('panelphoto_panel_title')
						<img class="panel-photo img-responsive img-circle" src="{{ url ('img/profile1.jpg') }}" alt="">
						Kumar Sanket <br /><span class="text-muted">Posted on 3rd March 2014</span> 
						@endsection
						@section ('panelphoto_panel_body')
							<img class="img-responsive" src="{{ url('img/colorful4.jpg') }}" alt="" height="200">
							<div class="comment-links clearfix">
								<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
							</div>
						@endsection
						@include('widgets.panel', array('header'=>true, 'as'=>'panelphoto'))
					</div>
				</div>
				<div class="col-sm-6">
					<div class="prophoto">
						<div class="comment-link">
							@section ('panelcomment_panel_title')
							<img class="panel-photo img-responsive img-circle" src="{{ url ('img/profile1.jpg') }}" alt="">
							Kumar Sanket <br /><span class="text-muted">Posted on 3rd March 2014</span> 
							@endsection
							@section ('panelcomment_panel_body')
							<div class="lorem">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur harum aliquid tempore molestias nemo modi quas repellat. Accusantium praesentium, cupiditate tempore culpa voluptate laboriosam itaque error iste accusamus reprehenderit illum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est saepe voluptas, eligendi necessitatibus adipisci soluta, amet magnam, rerum, iure minima fuga praesentium nobis veniam quisquam illum repellat beatae. Consectetur, asperiores.
							</div>
							<div class="comment-links clearfix">
								<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
							</div>
							<div class="comments-here media">
								<a class="pull-left" href="#">
							      <img class="media-object img-circle img-responsive" src="{{ url ('img/user-icon.png') }}" 
							      alt="Media Object">
							   </a>
							    <div class="media-body">
							      <a href=""><h5 class="media-heading">Kumar Pratik</h5></a>
							      <span class="timely pull-right text-muted"> 3 hours ago</span>
							      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic repudiandae exercitationem provident nihil consectetur.
							      <div class="comment-like"><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a></div>
							   </div>
							</div>
						</div>
						@endsection
						@include('widgets.panel', array('header'=>true, 'as'=>'panelcomment'))
					</div>
				</div>
				<div class=" col-sm-6 ">
					<div class="prophoto">
						@section ('panelphoto_panel_title')
						<img class="panel-photo img-responsive img-circle" src="{{ url ('img/profile1.jpg') }}" alt="">
						Kumar Sanket <br /><span class="text-muted">Posted on 3rd March 2014</span> 
						@endsection
						@section ('panelphoto_panel_body')
						<img class="img-responsive" src="{{ url('img/colorful4.jpg') }}" alt="" height="200">
						<div class="comment-links clearfix">
							<a href=""><i class="fa fa-share-alt"></i>22</a><a href=""><i class="fa fa-comments-o"></i>106</a><a href=""><i class="fa fa-heart text-danger"></i>862</a>
						</div>
						@endsection
						@include('widgets.panel', array('header'=>true, 'as'=>'panelphoto'))
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>

@stop





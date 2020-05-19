<div class="stat panel striped-bg">

	<a href="{{(isset($link) ? $link : '#')}}" target="_self">
	<div class="row">
		<div class="col-md-3 bg-{{$color}} icon-col striped-bg">
			<i class="fa fa-{{ $icon }} fa-4x"></i>
		</div>
		<div class="col-md-9 text-col">
			<i class="fa fa-{{ $icon }} fa-5x"></i>
			<h2>{{ $value }}</h2>
			<p>{{ $header }}</p>
		</div>
	</div></a>
</div>
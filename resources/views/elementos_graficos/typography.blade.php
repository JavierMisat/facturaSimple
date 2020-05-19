@extends('layouts.dashboard')

@section('page_title')	Typography @stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section('page_heading', 'Typography')
@section('dashboard-content')
<div class="row">
	<div class="col-lg-8 col-md-6"> 
		@section ('typo1_panel_title','Typography')
		@section ('typo1_panel_body')
			<h1>Heading 1 <small>Sub-heading</small> </h1> 
			<h2>Heading 2 <small>Sub-heading</small> </h2> 
			<h3>Heading 3 <small>Sub-heading</small> </h3> 
			<h4>Heading 4 <small>Sub-heading</small> </h4>
			<h5>Heading 5 <small>Sub-heading</small> </h5> 
			<h6>Heading 6 <small>Sub-heading</small> </h6>
			<p class="lead">This is an example of lead body copy.</p>
			<p>This is an example of standard paragraph text. This is an example of <a href="#">link anchor text</a> within body copy.</p> 
			<p> <small>This is an example of small, fine print text.</small> </p> 
			<p> <strong>This is an example of strong, bold text.</strong> </p> 
			<p> <em>This is an example of emphasized, italic text.</em> </p> <br> 
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'header'=>true,'controls'=>true,  'as'=>'typo1'))

		@section ('typo5_panel_title','Blockquotes')
		@section ('typo5_panel_body')
			<h4>Default Blockquote</h4> 
			<blockquote> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
			</blockquote> 
			<h4>Blockquote with Citation</h4> 
			<blockquote> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
				<small>Someone famous in <cite title="Source Title">Source Title</cite> </small> 
			</blockquote> 
			<h4>Right Aligned Blockquote</h4>
			<blockquote class="pull-right"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
			</blockquote> 
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'typo5'))

		@section ('typo95_panel_title','Wells')
		@section ('typo95_panel_body')
			<div class="well">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam perferendis molestias, quibusdam veritatis laborum eius ex. Quaerat harum voluptatibus recusandae consequatur? Id, repudiandae! Dolor blanditiis voluptate porro, perferendis voluptas, ad!
			</div>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'typo95'))

		@section ('typo8_panel_title','Code')
		@section ('typo8_panel_body') 
			<p>This is an example of an inline code element within body copy. Wrap inline code within a <code>&lt;code&gt;...&lt;/code&gt;</code>tag.</p>
			<pre>This is an example of preformatted text.</pre>
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'typo8'))		

	</div>
	<div class="col-lg-4 col-md-6"> 
		
		@section ('typo28_panel_title','Unordered Lists')
		@section ('typo28_panel_body')
		<ul> 
			<li>Lorem ipsum dolor sit amet, consectetur </li> 
			<li>elit. Necessitatibus quidem similique</li> 
			<li>lorem ipsum dolor sit amet<ul> 
					<li>on debitis</li> 
					<li>error odio</li> 
					<li> n dolore magni</li> 
				</ul>
			</li> 
			<li>List Item</li> 
		</ul> 
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'typo28'))

		@section ('typo58_panel_title','Ordered Lists')
		@section ('typo58_panel_body')
		<ol> 
			<li>List Item lorem ipsum dolor</li> 
			<li>List Item lorem ipsum dolor</li> 
			<li>List Item lorem ipsum dolor</li> 
			<li>List Item lorem ipsum dolor</li> 
		</ol> 
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'typo58'))

		@section ('typo52_panel_title','Unstyled List')
		@section ('typo52_panel_body')
		<ul class="list-unstyled"> 
			<li>List Item lorem ipsum</li> 
			<li>List Item lorem ipsum</li> 
			<li>List Item lorem ipsum</li> 
		</ul>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'typo52'))
		
		@section ('typo62_panel_title','Inline List')
		@section ('typo62_panel_body')
			<ul class="list-inline"> 
				<li>List Item</li> 
				<li>List Item</li> 
				<li>List Item</li> 
			</ul>
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'typo62'))

		@section ('typo3_panel_title','Emphasis Classes')
		@section ('typo3_panel_body')
			<p class="text-muted">This is an example of muted text.</p> 
			<p class="text-primary">This is an example of primary text.</p> 
			<p class="text-success">This is an example of success text.</p> 
			<p class="text-info">This is an example of info text.</p> 
			<p class="text-warning">This is an example of warning text.</p> 
			<p class="text-danger">This is an example of danger text.</p> 
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'typo3'))

		@section ('typo35_panel_title','Alignment Helpers')
		@section ('typo35_panel_body')
			<p class="text-left">Left aligned text.</p> 
			<p class="text-center">Center aligned text.</p> 
			<p class="text-right">Right aligned text.</p> 
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'typo35'))

	</div>
</div>
@stop
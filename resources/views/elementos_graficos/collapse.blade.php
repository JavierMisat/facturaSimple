@extends ('layouts.dashboard')

@section('page_title')	Collapse @stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section ('page_heading', 'Collapse')
@section('dashboard-content')
	<div class="row">
		<div class="col-md-6">
			@section ('collapse_panel_title', 'Collapse')
			@section ('collapse_panel_body')
				<div class="panel-group" id="accordion">
					@include('widgets.collapse', array('id'=>'1', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
					@include('widgets.collapse', array('id'=>'2', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
					@include('widgets.collapse', array('id'=>'3', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
				</div>
			@endsection
			@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'elementos_graficos.collapse'))
		</div>
		<div class="col-md-6">
			@section ('collapse2_panel_title', 'Collapse')
			@section ('collapse2_panel_body')
				<div class="panel-group" id="accordion">
					@include('widgets.collapse', array('class'=>'primary', 'id'=>'4', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
					@include('widgets.collapse', array('class'=>'primary', 'id'=>'5', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
					@include('widgets.collapse', array('class'=>'primary', 'id'=>'6', 'header'=> 'Click here for Collapse', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
				</div>
			@endsection
			@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'collapse2'))
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			@section ('tabs_panel_title', 'Tabs')
			@section ('tabs_panel_body')
			<div role="tabpanel">
				<ul class="nav nav-tabs tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>&nbsp;Home</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>&nbsp;Settings</a></li>
				</ul>
				<div class="tab-content panel-body">
					<div role="tabpanel" class="tab-pane active" id="home">loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum commodi, placeat voluptates quisquam accusantium corporis ipsa, distinctio, consequuntur explicabo aliquid illo doloremque. Ut, nam, cum saepe repellat cumque eaque... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda dolore unde, eos. Fugit aut officiis, et modi debitis, eum, qui praesentium ducimus dolores perferendis aliquam temporibus! Velit, tenetur, corporis?
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa et, suscipit non nihil voluptates, maxime ad dignissimos vitae. Quaerat nulla dolore, explicabo vero veritatis possimus deserunt ipsum rerum ad? Cumque!...
					</div>
					<div role="tabpanel" class="tab-pane" id="messages">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dignissimos earum aut consectetur amet consequuntur libero sint consequatur tempora perferendis hic, error quibusdam odit nulla officiis sit perspiciatis fuga excepturi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rerum veniam adipisci consectetur, perferendis quibusdam, nisi voluptate quod ipsa aliquid, nihil assumenda tenetur voluptates soluta ipsum dicta voluptatem corporis cum....
					</div>
					<div role="tabpanel" class="tab-pane" id="settings">Random settings
					</div>
				</div>
			</div>
			@endsection
			@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'tabs'))
		</div>
		<div class="col-md-6">
			@section ('tabs2_panel_title', 'Tabs')
			@section ('tabs2_panel_body')
			<div role="tabpanel">
				<ul class="nav nav-tabs tabs primary-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-target="#home2" data-toggle="tab"><i class="fa fa-home"></i>&nbsp;Home</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-target="#profile2" data-toggle="tab"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-target="#messages2" data-toggle="tab"><i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
					<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-target="#settings2" data-toggle="tab"><i class="fa fa-cog"></i>&nbsp;Settings</a></li>
				</ul>
				<div class="tab-content panel-body">
					<div role="tabpanel" class="tab-pane active" id="home2">loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum commodi, placeat voluptates quisquam accusantium corporis ipsa, distinctio, consequuntur explicabo aliquid illo doloremque. Ut, nam, cum saepe repellat cumque eaque... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda dolore unde, eos. Fugit aut officiis, et modi debitis, eum, qui praesentium ducimus dolores perferendis aliquam temporibus! Velit, tenetur, corporis?
					</div>
					<div role="tabpanel" class="tab-pane" id="profile2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa et, suscipit non nihil voluptates, maxime ad dignissimos vitae. Quaerat nulla dolore, explicabo vero veritatis possimus deserunt ipsum rerum ad? Cumque!...
					</div>
					<div role="tabpanel" class="tab-pane" id="messages2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dignissimos earum aut consectetur amet consequuntur libero sint consequatur tempora perferendis hic, error quibusdam odit nulla officiis sit perspiciatis fuga excepturi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rerum veniam adipisci consectetur, perferendis quibusdam, nisi voluptate quod ipsa aliquid, nihil assumenda tenetur voluptates soluta ipsum dicta voluptatem corporis cum....
					</div>
					<div role="tabpanel" class="tab-pane" id="settings2">Random settings
					</div>
				</div>
			</div>
			@endsection
			@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'tabs2'))
		</div>
	</div>



@stop




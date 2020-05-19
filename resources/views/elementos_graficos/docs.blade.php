@extends ('layouts.dashboard')

@section('page_title') Docs @stop
@section('page_heading') Documentation @stop
@section('page_subtitle') Dashy Theme Documentation @stop

@section('dashboard-content')
<div class="row">
	<div class="container">
				<div class="docs-content">
				<div id="installation">
				<h3>Installation</h3>
					<div class="subject-content">
						To use the Dashy Laravel 5 theme, you need to make sure you have <code>bower</code>, <code>npm</code>, <code>gulp</code> and <code>composer</code> globally installed. Now navigate to your app directory (<code>$ cd myLaravelApp/</code>) and run the following terminal commands :
						<ul>
							<li>
								<code>$ bower install</code>
							</li>
							<li>
								<code>$ npm install</code>
							</li>
							<li>
								<code>$ composer install</code>
							</li>
							<li>
								<code>$ gulp watch</code>
							</li>
						</ul>
						You have now succesfully set up Dashy Laravel 5 theme!
					</div>
				</div>
				<div id="basics">
					<h3>Features</h3>
					<div class="subject-content">
						<div class="subject-content">
							Dashy is a lightweight and feature rich admin template which is clean and easy to use. 
							Current release comes with the following features:
							<ul class="features-list">
								<li>
									4 Different theme colors
								</li>
								<li>
									Responsive design based on Bootstrap 3.3.2
								</li>
								<li>
									Custom elements and plugins including:
									<ul class="features-list-extended">
										<li>
											Pure CSS3 checkbox, radio and On/Off switch elements
										</li>
										<li>
											 Wysiwig editor
										</li>
										<li>
											User Profile
										</li>
										<li>
											Email-template
										</li>
										<li>
											Customizable widgets in different colors and styles
										</li>
									</ul>
								</li>
								<li>
									Boostrap, jQuery UI and third party plugins and elements including:
									<ul class="features-list-extended">
										<li>
											Dynamic Charts
										</li>
										<li>
											Tables
										</li>
										<li>
											Form validation
										</li>
										<li>
											Date Picker
										</li>
										<li>
											DateRange Picker
										</li>
										<li>
											Time Picker
										</li>
										<li>
											Carousel for Gallery
										</li>
										<li>
											Full Calendar
										</li>
										<li>
											Progress Bars
										</li>
										<li>
											Labels and Badges
										</li>
										<li>
											Collapse
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="widgets">
					<h3>Widgets</h3>
					<div class="subject-content">
						The following widgets have been used in Dashy Laravel 5 theme :
						<div class="widget-docs">
							<div class="well">
								<h4>Panels</h4>
								<div class="widgets-docs-elements">
									<div class="panel panel-primary">
		  								<div class="panel-heading">
											<h3 class="panel-title">Primary Panel		  
											</h3>
										</div>
										<div class="panel-body">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation.
										</div>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 


	$content = <<<EOD
@section ('panel5_panel_title', 'Primary Well')
@section ('panel5_panel_body')
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation.
@endsection
@include('widgets.panel', array('controls'=>true, 'class'=>'primary', 'header'=>true, 'as'=>'panel5'))
EOD;


?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'controls'=> boolean, 'header'=> boolean, 'footer'=> boolean</code>
							</div>
							<div class="well">
								<h4>Buttons</h4>
								<div class="widget-docs-elements">
									<button type="button" class="btn btn-success btn-rounded">Success Button</button>
								</div>
								<div class="widget-docs-code">
								<pre>
<?php 
$content = <<<EOD
@include('widgets.button', array('class'=>'success', 'value'=>'Success Button', 'rounded'=>true))
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'value'=> 'string', 'size'=> 'string', 'rounded'=>boolean, 'bordered'=>boolean</code>
							</div>
							<div class="well">
								<h4>Dropdowns</h4>
								<div class="widget-docs-elements">
									<div class="btn-group">
										<button type="button" class="btn btn-danger btn-bordered">Action</button>
										<button type="button" class="btn btn-danger dropdown-toggle haha btn-bordered" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu" role="menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 
$content = <<<EOD
@include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Actions'))
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'value'=> 'string', 'size'=> 'string', 'rounded'=>boolean, 'bordered'=>boolean, 'split'=> boolean (for multi button dropdown)</code>
							</div>
							<div class="well">
								<h4>Labels</h4>
								<div class="widget-docs-elements">
									<span class="label label-info">Label</span>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 
$content = <<<EOD
@include('widgets.labels', array('class'=>'info', 'value'=> 'Label'))
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'value'=> 'string'</code>
							</div>
							<div class="well">
								<h4>Progress Bars</h4>
								<div class="widgets-docs-elements">
									<div class="progress">
									  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
									    <span class="sr-only"></span>
									  </div>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 
$content = <<<EOD
@include('widgets.progress', array('animated'=> true, 'value'=>'65'))
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'value'=> 'string', 'animated'=> boolean, 'striped'=> boolean</code>
							</div>
							<div class="well">
								<h4>Alerts</h4>
								<div class="widgets-docs-elements">
									<div class="alert alert-warning  alert-dismissable " role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  My alert message.
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 
$content = <<<EOD
@include('widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'))
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Available array arguments : 'class'=> 'string', 'message'=> 'string', 'link'=>'string', 'dismissable'=> boolean</code>
							</div>
							<div class="well">
								<h4>Loader</h4>
								<div class="widgets-docs-elements">
									<div class="panel panel-success">
										<div class="panel-heading">
											<h3 class="panel-title">Horizontal Form		  
												<div class="panel-control pull-right">
													<a class="panelButton"><i class="fa fa-refresh"></i></a>
													<a class="panelButton"><i class="fa fa-minus"></i></a>
													<a class="panelButton"><i class="fa fa-remove"></i></a>
												</div>
											</h3>

										</div>

										<div class="panel-body">
											<div class="loader-block">
												<span class="loader-inner line-scale">
													<div></div>
													<div></div>
													<div></div>
													<div></div>
												</span>
											</div>			
											<form class="form-horizontal">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-10">
														<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
													</div>
												</div>
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
													<div class="col-sm-10">
														<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<div class="checkbox">
															<label>
																<input type="checkbox"> Remember me
															</label>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<button type="submit" class="btn btn-default">Sign in</button> &nbsp; 
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>
<?php 
$content = <<<EOD
@include('widgets.loader-block')
EOD;
?>
{{$content}}
</pre>
								</div>
								<code>Make sure to set position: relative; of the parent div for the block loader.</code>
							</div>
							<div class="well">
								<h4>Tooltip & Popover</h4>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left Tooltip</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"&gt;Left Tooltip&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top Tooltip</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"&gt;Top Tooltip&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom Tooltip</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"&gt;Bottom Tooltip&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right Tooltip</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"&gt;Right Tooltip&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
								 Left Popover
								</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""&gt;Left Popover&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
								 Top Popover
								</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""&gt;Top Popover&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
								 Bottom Popover
								</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""&gt;Bottom Popover&lt;/button&gt;</pre>
								</div>
								<div class="widgets-docs-elements">
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
								 Right Popover
								</button>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""&gt;Right Popover&lt;/button&gt;</pre>
								</div>
							</div>
							<div class="well">
								<h4>Pagination</h4>
								<div class="widgets-docs-elements">
									<div class="clearfix">
										<ul class="pagination no-m-t">
											<li>
										    	<a href="#" aria-label="Previous">
										        	<span aria-hidden="true">«</span>
										      	</a>
										    </li>
										    <li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
										      <a href="#" aria-label="Next">
										        <span aria-hidden="true">»</span>
										      </a>
										    </li>
										</ul>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;div class="clearfix"&gt;
&lt;ul class="pagination no-m-t"&gt;
	&lt;li&gt;
    	&lt;a href="#" aria-label="Previous"&gt;
        	&lt;span aria-hidden="true"&gt;«&lt;/span&gt;
      	&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;
      &lt;a href="#" aria-label="Next"&gt;
        &lt;span aria-hidden="true"&gt;»&lt;/span&gt;
      &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</pre>
								</div>	
							</div>
							<div class="well">
								<h4>Collapse</h4>
								<div class="widgets-docs-elements">
									<div class="panel-group" id="accordion">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
														Click here for Collapse
													</a>
												</h4>
											</div>
											<div id="collapse4" class="panel-collapse collapse ">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
												</div>
											</div>
										</div>					<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
														Click here for Collapse
													</a>
												</h4>
											</div>
											<div id="collapse5" class="panel-collapse collapse ">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
												</div>
											</div>
										</div>					<div class="panel panel-primary">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
														Click here for Collapse
													</a>
												</h4>
											</div>
											<div id="collapse6" class="panel-collapse collapse ">
												<div class="panel-body">
													Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
												</div>
											</div>
										</div>				</div>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;div class="panel-group" id="accordion"&gt;
&lt;div class="panel panel-primary"&gt;
&lt;div class="panel-heading"&gt;
&lt;h4 class="panel-title"&gt;
&lt;a data-toggle="collapse" data-parent="#accordion" href="#collapse4"&gt;
Click here for Collapse
&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id="collapse4" class="panel-collapse collapse "&gt;
&lt;div class="panel-body"&gt;
Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;					
&lt;div class="panel panel-primary"&gt;
&lt;div class="panel-heading"&gt;
&lt;h4 class="panel-title"&gt;
&lt;a data-toggle="collapse" data-parent="#accordion" href="#collapse5"&gt;
Click here for Collapse
&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id="collapse5" class="panel-collapse collapse "&gt;
&lt;div class="panel-body"&gt;
Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;					
&lt;div class="panel panel-primary"&gt;
&lt;div class="panel-heading"&gt;
&lt;h4 class="panel-title"&gt;
&lt;a data-toggle="collapse" data-parent="#accordion" href="#collapse6"&gt;
Click here for Collapse
&lt;/a&gt;
&lt;/h4&gt;
&lt;/div&gt;
&lt;div id="collapse6" class="panel-collapse collapse "&gt;
&lt;div class="panel-body"&gt;
Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;				
&lt;/div&gt;</pre>
			</div>
			<code>The collapse group class can be changed by using panel-info/panel-warning/panel-danger instead of panel-primary</code>
							</div>
							<div class="well">
							<h4>Tabs</h4>
								<div class="widgets-docs-elements">
									<div role="tabpanel">
										<ul class="nav nav-tabs tabs" role="tablist">
											<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">&nbsp;Home</a></li>
											<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;Profile</a></li>
											<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;Messages</a></li>
											<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;Settings</a></li>
										</ul>
										<div class="tab-content panel-body">
											<div role="tabpanel" class="tab-pane active" id="home">loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum commodi, placeat voluptates quisquam accusantium corporis ipsa, distinctio.
											</div>
											<div role="tabpanel" class="tab-pane" id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa et, suscipit non nihil .
											</div>
											<div role="tabpanel" class="tab-pane" id="messages">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dignissimos earum aut consectetur amet consequuntur libero sint consequatur tempora perferendis hic.
											</div>
											<div role="tabpanel" class="tab-pane" id="settings">Random settings
											</div>
										</div>
									</div>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;div role="tabpanel"&gt;
&lt;ul class="nav nav-tabs tabs" role="tablist"&gt;
&lt;li role="presentation" class="active"&gt;&lt;a href="#home" aria-controls="home" role="tab" data-toggle="tab"&gt;&nbsp;Home&lt;/a&gt;&lt;/li&gt;
&lt;li role="presentation"&gt;&lt;a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"&gt;&nbsp;Profile&lt;/a&gt;&lt;/li&gt;
&lt;li role="presentation"&gt;&lt;a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"&gt;&nbsp;Messages&lt;/a&gt;&lt;/li&gt;
&lt;li role="presentation"&gt;&lt;a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"&gt;&nbsp;Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content panel-body"&gt;
&lt;div role="tabpanel" class="tab-pane active" id="home"&gt;loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum commodi, placeat voluptates quisquam accusantium corporis ipsa, distinctio.
&lt;/div&gt;
&lt;div role="tabpanel" class="tab-pane" id="profile"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa et, suscipit non nihil .
&lt;/div&gt;
&lt;div role="tabpanel" class="tab-pane" id="messages"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dignissimos earum aut consectetur amet consequuntur libero sint consequatur tempora perferendis hic.
&lt;/div&gt;
&lt;div role="tabpanel" class="tab-pane" id="settings"&gt;Random settings
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</pre>
								</div>
							</div>
							<div class="well">
							<h4>Icons</h4>
								<div class="widgets-docs-elements">
									<i class="fa fa-glass"></i> &nbsp;&nbsp; <i class="fa fa-bar-chart-o"></i>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;i class="fa fa-glass">&lt;/i&gt;
&lt;i class="fa fa-bar-chart-o"&gt;&lt;/i&gt;</pre>
								</div>
							</div>
							<div class="well">
								<div class="widgets-docs-elements">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Address</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>john@gmail.com</td>
												<td>London, UK</td>
											</tr>
											<tr>
												<td>Andy</td>
												<td>andygmail.com</td>
												<td>Merseyside, UK</td>
											</tr>
											<tr>
												<td>Frank</td>
												<td>frank@gmail.com</td>
												<td>Southampton, UK</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="widget-docs-code">
									<pre>&lt;table class="table table-bordered"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Name&lt;/th&gt;
			&lt;th&gt;Email&lt;/th&gt;
			&lt;th&gt;Address&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;John&lt;/td&gt;
			&lt;td&gt;john@gmail.com&lt;/td&gt;
			&lt;td&gt;London, UK&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Andy&lt;/td&gt;
			&lt;td&gt;andygmail.com&lt;/td&gt;
			&lt;td&gt;Merseyside, UK&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Frank&lt;/td&gt;
			&lt;td&gt;frank@gmail.com&lt;/td&gt;
			&lt;td&gt;Southampton, UK&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;</pre>
								</div>
								<code>The table classes can be changed using table-bordered/table-hover/table-condensed classes. </code>
							</div>
							<div class="well">
							<h4>Switch</h4>
								<div class="widgets-docs-elements">
									<div class="onoffswitch">
									  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch3" checked="">
									  <label class="onoffswitch-label" for="switch3">
									    <span class="onoffswitch-inner"></span>
									    <span class="onoffswitch-switch"></span>
									  </label>
									</div>
								</div>
								<div class="widget-docs-code">

									<pre>
<?php 
$content = <<<EOD
@include('widgets.switch', array('id'=> 'switch'))
EOD;
?>
{{$content}}
</pre>
								</div>
							</div>
							<div class="well">
								<h4>Form Elements</h4>
								<div class="widgets-docs-elements">
									<form>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control underline" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control underline" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="checkbox">
													<label>
														<input type="checkbox"> Remember me
													</label>
												</div>
										<button type="submit" class="btn btn-default">Submit</button>
									</form>
								</div>
								<div class="widget-docs-code">
<pre>&lt;form&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
&lt;input type="email" class="form-control underline" id="exampleInputEmail1" placeholder="Enter email"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
&lt;input type="password" class="form-control underline" id="exampleInputPassword1" placeholder="Password"&gt;
&lt;/div&gt;
&lt;div class="checkbox"&gt;
&lt;label&gt;
&lt;input type="checkbox"&gt; Remember me
&lt;/label&gt;
&lt;/div&gt;
&lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="add-widgets">
					<h3>Plugins</h3>
					<div class="subject-content">
						<div class="well">
						<h4>Calendar</h4>
							<div class="widgets-docs-elements">
								<div id="calendar2"></div>
							</div>	
							<div class="widget-docs-code">
							<pre>&lt;div id="calendar2"&gt;&lt;/div&gt;
&lt;script&gt;
$('#calendar2').fullCalendar({ 
	});
&lt;/script&gt;</pre>
							</div>
						</div>
						<div class="well">
							<h4>Charts</h4>
							<div class="widgets-docs-elements">
								<div id="piechart"></div>
							</div>
							<div class="widget-docs-code">
								<pre>&lt;div id="piechart"&gt;&lt;/div&gt;
&lt;script&gt;var chart2 = c3.generate({
	   bindto: '#piechart',
	    data: {
	         
	        // iris data from R
	        columns: [
	            ['data1', 30],
	            ['data2', 120],
	        ],
	        type : 'pie',
	        onclick: function (d, i) { console.log("onclick", d, i); },
	        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
	        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});
&lt;/script&gt;</pre>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>


</div>	
@stop

@section('js')

	@parent
	<script type="text/javascript">

		$(function(){
			$('#calendar2').fullCalendar({ 
			});

			var chart2 = c3.generate({
			   bindto: '#piechart',
			    data: {
			         
			        // iris data from R
			        columns: [
			            ['data1', 30],
			            ['data2', 120],
			        ],
			        type : 'pie',
			        onclick: function (d, i) { console.log("onclick", d, i); },
			        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
			        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
			    },
			    color: {
			        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
			    }
			});
		});


	</script>

@endsection

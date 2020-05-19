@extends ('layouts.dashboard')

@section('page_title') Form Components @stop
@section('page_heading') Form Components @stop
@section('page_subtitle') Bootstrap Form Components @stop

@section('dashboard-content')
<div class="row">
	<div class="col-md-12">
		@section ('components_panel_title', 'Components')
		@section ('components_panel_body')
		<form class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Normal</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputemail3">
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3">
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputtext" class="col-sm-2 control-label">Help Text</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="help">
					<p class="help-block">Example block-level help text here.</p>
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputtext" class="col-sm-2 control-label">Placeholder</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="placeholder" placeholder="Placeholder">
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputtext" class="col-sm-2 control-label">Rounded</label>
				<div class="col-sm-10">
					<input type="text" class="form-control rounded" id="rounded">
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputtext" class="col-sm-2 control-label">Line</label>
				<div class="col-sm-10">
					<input type="text" class="form-control underline" id="underline" placeholder="Underlined">
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label for="inputtext" class="col-sm-2 control-label">Disabled</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="disabled" placeholder="Disabled Input here" disabled>
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label class="col-sm-2 control-label">Static</label>
				<div class="col-sm-10">
					<p class="form-control-static">email@example.com</p>
				</div>
			</div>
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Checkbox and Radio</label>
				<div class="col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Option one is this and that&mdash;be sure to include why it's great
						</label>
					</div>
					<div class="checkbox disabled">
						<label>
							<input type="checkbox" value="" disabled>
							Option two is disabled
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Option one is this and that&mdash;be sure to include why it's great
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Option two can be something else and selecting it will deselect option one
						</label>
					</div>
					<div class="radio disabled">
						<label>
							<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
							Option three is disabled
						</label>
					</div>
				</div>
			</div>
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Custom Checkboxes and Radio Buttons</label>
				<div class="col-sm-10">
					<label class="checkbox1" for="Option"> 
						<input id="Option" type="checkbox" class="">
						<span></span>
					</label>
					<label class="radio1" for="Option1"> 
						<input id="Option1" name ="one" type="radio" class="">
						<span></span>
					</label>
					<label class="radio1" for="Option2"> 
						<input id="Option2" name ="one" type="radio" class="">
						<span></span>
					</label>
					<label class="radio1" for="Option3"> 
						<input id="Option3" name ="one" type="radio" class="">
						<span></span>
					</label>
				</div>
			</div> 
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Switch</label>
				<div class="col-sm-10">
					@include('widgets.switch', array('id'=> 'switch3'))
				</div>
			</div>
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Select</label>
				<div class="col-sm-10">
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
					<br />
					<select multiple class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<hr />
			
			<div class="form-group has-success">
			<label class="control-label col-sm-2" for="inputSuccess1">Input with success</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="inputSuccess1">
			</div>
			</div>
			<hr />
			<div class="form-group has-warning">
				<label class="control-label col-sm-2" for="inputWarning1">Input with warning</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="inputWarning1">
			</div>
			</div>
			<hr />
			<div class="form-group has-error">
				<label class="control-label col-sm-2" for="inputError1">Input with error</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="inputError1">
			</div>
			</div>
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Control Sizing</label>
				<div class="col-sm-10">
				<input class="form-control input-lg" type="text" placeholder=".input-lg"><br />
					<input class="form-control" type="text" placeholder="Default input"><br />
					<input class="form-control input-sm" type="text" placeholder=".input-sm">
				</div>
			</div>
			<hr />
			<div class="row">
				<label for="inputtext" class="col-sm-2 control-label">Column Sizing</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" placeholder=".col-sm-2">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" placeholder=".col-sm-3">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" placeholder=".col-sm-4">
				</div>
			</div>
			<hr />
			<div class="form-group"> 
				<label class="col-sm-2 control-label">Input groups</label>
				<div class="col-sm-10"> 
					<div class="input-group mb-10"> 
						<span class="input-group-addon">@</span> 
						<input type="text" class="form-control" placeholder="Username"> 
					</div> <br />
					<div class="input-group mb-10"> 
						<input type="text" class="form-control"> 
						<span class="input-group-addon">.00</span> 
					</div> <br />
					<div class="input-group mb-10"> 
						<span class="input-group-addon">$</span> 
						<input type="text" class="form-control"> 
						<span class="input-group-addon">.00</span> 
					</div> 
				</div>
			</div>
			<hr />	
			<div class="form-group">
				<label class="col-sm-2 control-label">Button addons</label>
				<div class="col-sm-10"> 
					<div class="input-group mb-10"> 
						<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span> 
						<input type="text" class="form-control"> 
					</div> <br /> 
					<div class="input-group"> 
						<input type="text" class="form-control"> 
						<span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button></span>
					</div> 
				</div> 
			</div>
			<hr />
			<label class="col-sm-2 control-label">Date Picker</label>
			<div class="col-sm-10">
				<div class="form-group">
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" />
						<span class="input-group-addon">
							<span class="fa fa-calendar"></span>
						</span>
					</div>
				</div>
			</div>
		</form>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'elementos_graficos.components'))
	</div>
</div>	
@stop

@section('js')

	@parent
	<script type="text/javascript">

		$(function () {
			$('.date').datetimepicker();
		});

	</script>

@endsection

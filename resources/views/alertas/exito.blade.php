@if(Session::has('mensaje'))
    @include('widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> Session::get('mensaje'), 'style' => 'display:block'))
@endif
@extends('elementos_graficos.inbox')
@section ('fixed1')

<div class="message-actions wrap-options">
	<ul class="nav nav-pills">
		<li class="no-padding">
			<a href="#" class="repall">
				Reply &nbsp;<i class="fa fa-reply"></i>
			</a>
		</li>
		<li>
			<a href="#" class="repall">
				Reply all &nbsp;<i class="fa fa-reply-all"></i>
			</a>
		</li>
		<li>
			<a href="#" class="repall"> &nbsp;<i class="fa fa-share"></i>
				Forward
			</a>
		</li>
		<li>
			<a href="#" class="print">
				Print &nbsp;<i class="fa fa-print"></i>
			</a>
		</li>
		<li>
			<a href="#" class="del">
				Delete &nbsp;<i class="fa fa-trash-o"></i>
			</a>
		</li>
	</ul>
</div>
<div class="wrap-message">	
	<div class="message-header">
		<img class="icon" alt="John Stark" width="120" height="125" src="{{ url ('assets/img/user.png') }}">
			<div class="message-time">
				05/25/2014 <br />at 12:07AM
			</div>
		<div class="message-from">
			John Stark &lt;stark@example.com&gt;
		</div>
		<hr />
			<div class="message-to">
				To: Peter Clark
			</div>
	</div>
		<div class="message-subject">
			Reference Request - Nicole Bell
		</div>
	<hr />
	<div class="message-content"><p>Hi Peter, <br>Thanks for the e-mail. It is always nice to hear from people, especially from you, Scott.</p> <p>I have not got any reply, a positive or negative one, from Seibido yet.<br>Let's wait and hope that it will make a BOOK.</p> <p>Have you finished your paperwork for Kaken and writing academic articles?<br>If you have some free time in the near future, I want to meet you and explain to you our next project.</p> <p>Why not drink out in Hiroshima if we are accepted?<br>We need to celebrate ourselves, don't we?<br>Let's have a small end-of-the-year party!</p> <p>Sincerely, K. Nakagawa</p>
	</div>
</div>



@stop
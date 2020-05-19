@extends('elementos_graficos.inbox')
@section ('fixed')

<div class="col-sm-4">
	<div class="wrap-list">
		<div class="wrap-options" id="wrap-options" toggleable="" active-class="search-open">
			<div class="messages-search">
				<form class="ng-pristine ng-valid">
					<input type="text" class="form-control underline" placeholder="Search messages...">
				</form>
			</div>
		</div>
			<hr />
	</div>
	<div class="messages-list">
		<ul>
			<li class="messages-item">
				<a href="">
					<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
					<img alt="John Stark" width="40" height="40" src="{{ url ('assets/img/user.png') }}"> <span class="name">John Stark</span>
						<div class="messages-item-time">
							<span class="text">05/25/2014 at 12:07AM</span>
						</div>
					<span class="messages-item-subject"> Reference Request - Nicole Bell</span>
					<span class="messages-item-content"><p>Hi Peter, Thanks for the e-mail. It is always nice to hear from people, especially…</p></span>
				</a>
			</li>
			<li class="messages-item starred">
				<span title="Remove star"<i class="fa fa-star text-muted"></i></span>
				<img alt="James Pattersowidth" width="40" height="40" src="{{ url ('assets/img/user.png') }}">
				<span class="name">James Patterson</span>
					<div class="messages-item-time">
						<span class="text">05/25/2014 at 12:07AM</span>
					</div>
				<span class="messages-item-subject"> Position requirements</span>
				<span class="messages-item-content"><p>Dear Mr. Clarks I am interested in the Coordinator position advertised on XYZ. My resume…</p></span>
			</li>
			<li class="messages-item">
				<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
				<img alt="Mary Ferguson" width="40" height="40"  src="{{ url ('assets/img/user.png') }}">
				<span class="name">Mary Ferguson</span>
					<div class="messages-item-time">
						<span class="text">05/25/2014 at 12:07AM</span>
					</div>
				<span class="messages-item-subject"> Employer's job requirements</span>
				<span class="messages-item-content"><p>Dear Mr. Clarks In response to your advertisement in the Milliken Valley Sentinel for Vice…</p></span>
			</li>
			<li class="messages-item">
				<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
				<img alt="Jane Fieldston" width="40" height="40" src="{{ url ('assets/img/user.png') }}">
				<span class="name">Jane Fieldstone</span>
					<div class="messages-item-time">
						<span class="text">05/25/2014 at 12:07AM</span>
					</div>
				<span class="messages-item-subject">  Job Offer</span>
				<span class="messages-item-content"><p>Dear Mr. Clarks, As we discussed on the phone, I am very pleased to accept…</p></span>
			</li>
			<li class="messages-item">
				<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
				<img alt="Steven Thompson" width="40" height="40"   src="{{ url ('assets/img/user.png') }}">
				<span class="name">Steven Thompson</span>
					<div class="messages-item-time">
						<span class="text">05/25/2014 at 12:07AM</span>
					</div>
				<span class="messages-item-subject"> Personal invitation</span>
				<span class="messages-item-content"><p>Dear Peter, Good Day! We would like to invite you to the coming birthday party…</p></span>
			</li>
			<li class="messages-item">
				<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
				<img alt="Nicole Bell" width="40" height="40" src="{{ url ('assets/img/user.png') }}">
				<span class="name">Nicole Bell</span>
					<div class="messages-item-time">
						<span class="text">05/25/2014 at 12:07AM</span>
					</div>
				<span class="messages-item-subject">Congratulations </span>
				<span class="messages-item-content"><p>Dear friend Peter,I am feeling very happy today to congratulate you as you got promotion.…</p></span>
			</li>
			<li class="messages-item">
				<span title="Mark as starred"<i class="fa fa-star text-muted"></i></span>
				<img alt="Kenneth Ross" width="40" height="40"  src="{{ url ('assets/img/user.png') }}">
				<span class="name">Kenneth Ross</span>
					<div class="messages-item-time">
						<span class="text">03/10/2015 at 4:38PM</span>
					</div>
				<span class="messages-item-subject"> Sincere request to keep in touch.</span>
				<span class="messages-item-content"><p>Dear Mr. Clarks,I was shocked to see my letter after having just left and part…</p></span>
			</li>
		</ul>
	</div>	
</div>	

	{{-- <div class="message-actions wrap-options">
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
</div> --}}





@stop
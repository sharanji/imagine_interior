<div class="fixed-newbars">
	<div class="newbar">
		<a href="<?php echo url("manage-expense.html");?>"><i class="fa fa-usd" aria-hidden="true"></i> Expense</a>
		<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> To Do List</a>
		<a href="#"><i class="fa fa-trophy" aria-hidden="true"></i> Goals</a>
		<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Locations</a>
		<a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Finance</a>
		<a href="{{route('companySetting')}}"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
		<a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Tickets</a>
	</div>
	
	<div class="sec-newbar">
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown1">
				<a href="{{route('manageStudents')}}">
					<i class="fa fa-graduation-cap" aria-hidden="true"></i> Students
				</a>
			</button>
		</div>
		
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown">
				<i class="fa fa-clock-o" aria-hidden="true"></i> Attendance
				<div class="dropdown-content01 dropdown-list">
					<a href="#">Attendance</a>
					<a href="#">Self Check-In</a>
					<a href="#">Appointment</a>
				</div>
			</button>
		</div>
		
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i> Store
				<div class="dropdown-content01 dropdown-list">
					<a href="{{url('manage-store-membership.html')}}">Membership</a>
					<a href="{{url('manage-school-membership.html')}}">School Membership</a>
					<a href="{{url('manage-store-shop.html')}}">Shop</a>
					<a href="{{url('manage-store-testing.html')}}">Testing</a>
				</div>
			</button>
		</div>
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown">
				<i class="fa fa-envelope" aria-hidden="true"></i> Email
				<div class="dropdown-content01 dropdown-list">
					<a href="{{url('create-email.html')}}">Compose</a>
					<a href="{{url('nurturing-email.html')}}">Nurturing</a>
					<a href="{{url('system-email.html')}}">System</a>
					<a href="{{url('custom-email.html')}}">Custom</a>
					<a href="{{url('library-email.html')}}">Library</a>
					<a href="{{url('scheduled-email.html')}}">Scheduled</a>
					<a href="{{url('send-email.html')}}">Send</a>
					<a href="{{url('new-email.html')}}">Add New</a>
				</div>
			</button>
		</div>
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown">
				<i class="fa fa-file-text-o" aria-hidden="true"></i> Text
				<div class="dropdown-content01 dropdown-list">
					<a href="{{url('nurturing-text.html')}}">Nurturing</a>
					<a href="{{url('system-text.html')}}">System</a>
					<a href="{{url('custom-text.html')}}">Custom</a>
					<a href="{{url('library-text.html')}}">Library</a>
				</div>
			</button>
		</div>
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown1">
				<a href="{{url('manage-reports.html')}}">
					<i class="fa fa-file" aria-hidden="true"></i> Reports
				</a>
			</button>
		</div>
		<div class="dropdown01">
			<button class="dropbtn01 sec-header-dropdown1">
				<a href="{{url('manage-library.html')}}">
					<i class="fa fa-book" aria-hidden="true"></i> Library
				</a>
			</button>
		</div>
	</div>
</div>
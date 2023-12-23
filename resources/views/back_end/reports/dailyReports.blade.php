@extends('back_end.template')
@section('content')
<!-- Calendar Start here -->
<link rel="stylesheet" type="text/css" href="{{asset('public/back_end/app-assets/fullcalendar/fullcalendar.min.css')}}">
<script src="{{asset('public/back_end/app-assets/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/fullcalendar/fullcalendar.min.js')}}"></script>
<!-- breadcrumb start-->
<div class="content-header row">
    <div class="content-header-left col-md-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-md-6">
                <h2 class="content-header-title float-left mb-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?php
                                 $pageTitle = "Daily Report";
                            ?>
                            <a href="{{url('manage-dailyReport.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
                        </li>
                    </ol>
                </h2>
            </div>
            <div class="col-md-6 text-right">
                
            </div>
        </div>
    </div>
</div>

<!-- Full calendar start -->
<section id="basic-examples">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
						<div class="cal-category-bullets d-none">
                            <div class="bullets-group-1 mt-2">
                                <div class="category-business mr-1">
                                    <span class="bullet bullet-success bullet-sm mr-25"></span>
                                    Business
                                </div>
                                <div class="category-work mr-1">
                                    <span class="bullet bullet-warning bullet-sm mr-25"></span>
                                    Work
                                </div>
                                <div class="category-personal mr-1">
                                    <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                    Personal
                                </div>
                                <div class="category-others">
                                    <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                    Others
                                </div>
                            </div>
							<div class="calculation-result text-right">
								<span>Current Month Sales : ₹ 0.00</span><br>
								<span>Profit : ₹ 0.00</span>
							</div>
                        </div>
                        <div id='calendar'></div>
					</div>
                </div>
            </div>
        </div>
		<div class="col-md-12">
			<div --id="calendar"></div>
		</div>
    </div>
	
    <!-- calendar Modal starts-->
    <div class="modal fade text-left modal-calendar" tabindex="-1" role="dialog" aria-labelledby="cal-modal" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-text-bold-600" id="cal-modal">Add Event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <div class="d-flex justify-content-between align-items-center add-category">
                            <div class="chip-wrapper"></div>
                            <div class="label-icon pt-1 pb-2 dropdown calendar-dropdown">
                                <i class="feather icon-tag dropdown-toggle" id="cal-event-category" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cal-event-category">
                                    <span class="dropdown-item business" data-color="success">
                                        <span class="bullet bullet-success bullet-sm mr-25"></span>
                                        Business
                                    </span>
                                    <span class="dropdown-item work" data-color="warning">
                                        <span class="bullet bullet-warning bullet-sm mr-25"></span>
                                        Work
                                    </span>
                                    <span class="dropdown-item personal" data-color="danger">
                                        <span class="bullet bullet-danger bullet-sm mr-25"></span>
                                        Personal
                                    </span>
                                    <span class="dropdown-item others" data-color="primary">
                                        <span class="bullet bullet-primary bullet-sm mr-25"></span>
                                        Others
                                    </span>
                                </div>
                            </div>
                        </div>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control" id="cal-event-title" placeholder="Event Title">
                            <label for="cal-event-title">Event Title</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control pickadate" id="cal-start-date" placeholder="Start Date">
                            <label for="cal-start-date">Start Date</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control pickadate" id="cal-end-date" placeholder="End Date">
                            <label for="cal-end-date">End Date</label>
                        </fieldset>
                        <fieldset class="form-label-group">
                            <textarea class="form-control" id="cal-description" rows="5" placeholder="Description"></textarea>
                            <label for="cal-description">Description</label>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary cal-add-event waves-effect waves-light" disabled>
                            Add Event</button>
                        <button type="button" class="btn btn-primary d-none cal-submit-event waves-effect waves-light" disabled>submit</button>
                        <button type="button" class="btn btn-flat-danger cancel-event waves-effect waves-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-flat-danger remove-event d-none waves-effect waves-light" data-dismiss="modal">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- calendar Modal ends-->
</section>
<script>
	$(document).ready(function () 
	{
		var calendar = $('#calendar').fullCalendar({
		
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			buttonText: {
				today: 'today',
				month: 'month',
				week: 'week',
				day: 'day'
			},
			//Random default events
			events: [
					<?php foreach ($sales as $value) { ?>
						{
							title: 'Sales : <?php echo CURRENCY_SYMBOL." ".$value->total; ?>',
							start: '<?php echo $value->date; ?>',
							color: 'green'				
						},
					<?php } ?>
					<?php foreach ($sales_return as $value) { ?>
						{
							title: 'Sales Return: <?php echo CURRENCY_SYMBOL." ".$value->total; ?>',
							start: '<?php echo $value->date; ?>',
							color: 'red'		
						},
					<?php } ?>
					<?php foreach ($day_profit as $value) { ?>
						{
							title: 'Profit: <?php echo CURRENCY_SYMBOL." ".$value->profit; ?>',
							start: '<?php echo $value->date; ?>',
							color: 'blue'			
						},
					<?php } ?>
				]
		});//Calendar end
	});//Document Ready function end
</script>
<!-- Full calendar end -->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('public/back_end/app-assets/js/scripts/extensions/fullcalendar.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/calendar/extensions/daygrid.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/calendar/extensions/timegrid.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/calendar/extensions/interactions.min.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('public/back_end/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- END: Page Vendor JS-->

<script src="{{asset('public/back_end/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>


@endsection


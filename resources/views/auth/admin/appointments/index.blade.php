@extends('layouts.admin')

@section('content')
<br><br><br>
    <h3 class="page-title">@lang('quickadmin.appointments.title')</h3>
    @can('appointment_create')
        <p>
            <a href="{{ route('admin.appointments.create') }}"
               class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

        </p>

                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_id', 'Doctor*', ['class' => 'control-label']) !!}
					<select name="employee_id" id="calendar_location_id" value="{{ old('employee_id') }}" class="form-control" required>
						<option value="">Please select</option>
						@foreach($employees as $employee)
						<option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
						@endforeach
					</select>
                    <p class="help-block"></p>
                    @if($errors->has('employee_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_id') }}
                        </p>
                    @endif
                </div>

    @endcan

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <div id='calendar' style='width: 500px;'></div>

    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($appointments) > 0 ? 'datatable' : '' }} @can('appointment_delete') dt-select @endcan">
                <thead>
                <tr>
                    @can('appointment_delete')
                        <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>
                    @endcan

                    <th>@lang('quickadmin.appointments.fields.client')</th>
                    <th>@lang('quickadmin.clients.fields.last-name')</th>
                    <th>@lang('quickadmin.clients.fields.phone')</th>
                    <th>@lang('quickadmin.clients.fields.email')</th>
                    <th>@lang('quickadmin.appointments.fields.employee')</th>
                    <th>@lang('quickadmin.employees.fields.last-name')</th>
                    <th>@lang('quickadmin.appointments.fields.start-time')</th>
                    <th>@lang('quickadmin.appointments.fields.finish-time')</th>
                    <th>@lang('quickadmin.appointments.fields.comments')</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                @if (count($appointments) > 0)
                    @foreach ($appointments as $appointment)
                        <tr data-entry-id="{{ $appointment->id }}">
                            @can('appointment_delete')
                                <td></td>
                            @endcan

                            <td>{{ $appointment->client->first_name or '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>
                            <td>{{ $appointment->employee->first_name or '' }}</td>
                            <td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                            <td>{{ $appointment->start_time }}</td>
                            <td>{{ $appointment->finish_time }}</td>
                            <td>{!! $appointment->comments !!}</td>
                            <td>
                                @can('appointment_view')
                                    <a href="{{ route('admin.appointments.show',[$appointment->id]) }}"
                                       class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                @endcan
                                @can('appointment_edit')
                                    <a href="{{ route('admin.appointments.edit',[$appointment->id]) }}"
                                       class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                @endcan
                                @can('appointment_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.destroy', $appointment->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('appointment_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.appointments.mass_destroy') }}';
        @endcan

    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                customButtons: {
            datePickerButton: {
                text: '📅',
                themeIcon:'circle-triangle-s',

                click: function () {

                    var $btnCustom = $('.fc-datePickerButton-button'); // name of custom  button in the generated code
                    $btnCustom.after('<input type="hidden" id="hiddenDate" class="datepicker"/>');

                    $("#hiddenDate").datepicker({
                        showOn: "button",

                        dateFormat:"yy-mm-dd",
                        onSelect: function (dateText, inst) {
                            $('#calendar').fullCalendar('changeView', 'agendaDay');
                            $('#calendar').fullCalendar('gotoDate', dateText);
                            $('.fc-highlight').css('background', 'red');

                        },
                    });

                    var $btnDatepicker = $(".ui-datepicker-trigger"); // name of the generated datepicker UI
                    //Below are required for manipulating dynamically created datepicker on custom button click
                    $("#hiddenDate").show().focus().hide();
                    $btnDatepicker.trigger("click"); //dynamically generated button for datepicker when clicked on input textbox
                    $btnDatepicker.hide();
                    $btnDatepicker.remove();
                    $("input.datepicker").not(":first").remove();//dynamically appended every time on custom button click

                    }
                }
            },

                header: {
                    left: 'prev,datePickerButton,next',
                    center: 'title',
                    right: 'today,month,agendaDay',
                },

                allDaySlot: false,
                minTime: "09:00:00",
                maxTime: "17:00:00",
                selectOverlap: false,
                eventOverlap: false,
                firstDay: 1,
                eventColor: "#FAA732",
                selectable: true,
                selectHelper: true,
//                editable: true,
                unselectAuto: false,
                displayEventTime: false,

                businessHours: [{
                dow: [1, 2, 3, 4, 5, 6, 7], // Monday - Friday
                start: '08:00',
                end: '12:00',
                }, {
                dow: [1, 2, 3, 4, 5, 6, 7], // Monday - Friday (if adding lunch hours)
                start: '13:00',
                end: '17:00',
                }],

                selectConstraint: "businessHours",

                events : [
                        @foreach($appointments as $appointment)
                    {
                        title : '{{ $appointment->client->first_name . ' ' . $appointment->client->last_name }}',
                        start : '{{ $appointment->start_time }}',
                        id : '{{ $appointment->employee->id }}',
                        @if ($appointment->finish_time)
                                end: '{{ $appointment->finish_time }}',
                        @endif
                        url : '{{ route('admin.appointments.edit', $appointment->id) }}'
                    },
                    @endforeach
                ],

                select: function(start, end, allDays, info) {
                    var str_date = moment(start).format('MM-DD-YYYY H:mm');
                    var str_time = moment(end).format('H:mm');
                    var str_end = moment(end).format('MM-DD-YYYY H:mm');
//                    document.getElementById("demo").innerHTML = str_date+ " to " +str_time;
                },

                eventRender: function eventRender(event, element, view) {
                // Check location AND provider id selection
                return ['all', event.id].indexOf($('#calendar_location_id option:selected').val()) >= 0 ;
                },

                dayClick: function(date, jsEvent, view) {
                    /*past date*/
                    if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment())) {
                        $('#calendar').fullCalendar('changeView', 'agendaDay');
                        $('#calendar').fullCalendar('gotoDate', date);
                    } else {
                        // Else part is for past dates
                    }
                },

                selectAllow: function(event)
                {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');

                    //since we're only interested in whole days, set all times to the start/end of their respective day
                    selectInfo.start.startOf("day");
                    selectInfo.end.startOf("day");

                    var evts = $("#calendar").fullCalendar("clientEvents", function(evt) {
                        var st = evt.start.clone().startOf("day");
                        if (evt.end) { var ed = evt.end.clone().startOf("day"); }
                        else { ed = st; }

                        //return true if the event overlaps with the selection
                        return (selectInfo.start.isSameOrBefore(ed) && selectInfo.end.isSameOrAfter(st));
                    });

                    //return true if there are no events overlapping that day
                    return evts.length == 0;
                },

                dayRender: function (date, cell) {
                    var today = new Date();
                    if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment())) {
                    }
                    /*if (moment().format('YYYY-MM-DD') === date.format('YYYY-MM-DD') || date.isAfter(moment().add(3, 'days'))) {
                        cell.css("background-color", "#0275d8");
                    }*/
                    else {
                        cell.css("background-color", "#B2BEB5");
                    }
                },

            })

                        // Trigger event rerendering on provider_id change too
            $('#calendar_location_id, #calendar_provider_id').change(function() {
                $('#calendar').fullCalendar('rerenderEvents');
            });

        });
    </script>
@endsection

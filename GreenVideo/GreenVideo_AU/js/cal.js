// Responsible for the implementation of the interactive date-picker with in-built date disabling functionality and live calendar display.

// create an array of days which need to be disabled
var disabledDays = ["12-2-2018","12-7-2018","12-15-2018","12-27-2018","1-5-2019","1-23-2019","2-12-2019","3-19-2019","3-20-2019","4-8-2019"];

// utility functions
function nationalDays(date) {
	var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
	for (i = 0; i < disabledDays.length; i++)
		if(ArrayContains(disabledDays,(m+1) + '-' + d + '-' + y) || new Date() > date)
			return [false];
	return [true];
}
function noWeekendsOrHolidays(date) {
	var noWeekend = jQuery.datepicker.noWeekends(date);
	return noWeekend[0] ? nationalDays(date) : noWeekend;
} 

function ArrayIndexOf(array,item,from){
	var len = array.length;
	for (var i = (from < 0) ? Math.max(0, len + from) : from || 0; i < len; i++)
		if (array[i] === item) return i;
	return -1;
}

function ArrayContains(array,item,from){
	return ArrayIndexOf(array,item,from) != -1;
}

var max_Date = new Date();
max_Date.setDate(max_Date.getDate() + 30);

// create datepicker
jQuery(document).ready(function() {
	jQuery('#date').datepicker({
		minDate: new Date(),
		maxDate: max_Date,
		dateFormat: 'd / MM / yy - DD',
		constrainInput: true,
		beforeShowDay: noWeekendsOrHolidays
	});
	jQuery('#date').keydown(function(e){
    	e.preventDefault();
	});
});
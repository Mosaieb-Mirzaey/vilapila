
// *** Persian Calendar ***


$('#input-arrival-time').MdPersianDateTimePicker({
    targetTextSelector: '#arrival-time',
    fromDate: true,
    enableTimePicker: true,
    groupId: 'rangeSelector1',
    dateFormat: 'yyyy/MM/dd',
    textFormat: 'yyyy/MM/dd',
});
$('#input-departure-time').MdPersianDateTimePicker({
    targetTextSelector: '#departure-time',
    toDate: true,
    groupId: 'rangeSelector1',
    placement: 'top',
    enableTimePicker: true,
    dateFormat: 'yyyy/MM/dd',
    textFormat: " dddd dd MMMM yyyy ",
    isGregorian: false,
    modalMode: false,
    englishNumber: false


});


$('#textbox').MdPersianDateTimePicker('setDatePersian', {
    year: 1397, month: 1, day: 1, hour: 0, minute: 0, second: 0
});
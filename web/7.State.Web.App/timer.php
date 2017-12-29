<p> Countdown <span id="countdowntimer">5 </span> Seconds</p>

<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
    },1000);
</script>
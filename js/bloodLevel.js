$(document).ready(function ()
{
    $("#form1").submit(function () {
        var reading = $("[name=reading]").val();
        var message = "";
        var time = $("#time  option:selected").val();
        
        message += "Your Reading entered after " + time + " " + reading + " mmol/L\n";
        
        if (reading <= 7.8) {
            message += "Suger Level is: Normal";
        } else if (reading > 7.8 && reading <= 11.0) {
            message += "Suger Level is: Elevated";
        } else {
            message += "Suger Level is: High";
        }

        message += "\nProceed to submit Readings?\n\n";
        
        if (confirm(message)) {
            return true;
        } else {
            return false;
        }
    });
});



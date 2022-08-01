$.ajax({
    url: "getReading.php",
    type: "POST",
    cache: false,
    success: function (data) {
        $('#table1').html(data);
    }
});
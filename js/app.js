$().ready(function(){
    $("#calculate").click(function(){
        var value1 = $("#value1").val();
        var value2 = $("#value2").val();
        var op = $("#operation").val();


        var js = {values: {x: value1, y: value2}, operation: op};
        console.log(js.values);
        var js = JSON.stringify(js);
    $.ajax({
        type: "POST",
        url: "api.php",
        datatype: "string",
        data: "request=" + js,
        success: function(data) {
            var response = JSON.parse(data);
            if(response.status != "ERROR"){
                $("#result").text("Result: "+response.result);
            }else{
                $("#result").text("ERROR");
            }
        }
    });




    })

});

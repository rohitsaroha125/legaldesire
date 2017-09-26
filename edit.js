$("#edit-name").click(function()
{
    if($("#nameboxfn").css("display")=="none" && $("#nameboxln").css("display")=="none")
    {
        $("#nameboxfn").css('display','inline-block');
        $("#nameboxln").css('display','inline-block');
    }
    else
    {
        $("#nameboxfn").css('display','none');
        $("#nameboxln").css('display','none');
    }
})

$("#edit-email").click(function()
{
    if($("#emailbox").css("display")=="none")
        {
         $("#emailbox").css('display','block');   
        }
    else
        {
            $("#emailbox").css('display','none');
        }
})

$("#seemap").click(function()
{
    var address=$("#address").val();
    var city=$("#city").val();
    var state=$("#state").val();
    
    if(city=="" || state=="")
    {
        alert("City and state can't be null");
        $("#city").css('border-color','red');
        $("#state").css('border-color','red');
    }
    else
    {
        $("#city").css('border-color','');
        $("#state").css('border-color','');
        if(address=="")
            {
                $("#showmap").html('<center><iframe width="80%" height="500px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDrYddpZE4B64DUhBuC1rGiF0wlWkpEz4o&q='+city+'+'+state+'" allowfullscreen></iframe><br>Set my location:<b>'+address+' ,'+city+' ,'+state+'</b></center>');
            }
        else
            {
                $("#showmap").html('<center><iframe width="80%" height="500px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDrYddpZE4B64DUhBuC1rGiF0wlWkpEz4o&q=<b>'+address+','+city+'+'+state+'" allowfullscreen></iframe><br>Set my location:<b>'+address+' ,'+city+' ,'+state+'</b></center>');
            }
    }
})

$("#edit-address").click(function()
{
    if($("#addressbox").css('display')=="none")
        {
         $("#addressbox").css('display','block');   
        }
    else
        {
            $("#addressbox").css('display','none');
        }
})

$("#senddata").click(function(e){
    if(($("#nameboxfn").val()!="" && $("#nameboxln").val()=="") || ($("#nameboxfn").val()=="" && $("#nameboxln").val()!=""))
        {
            e.preventDefault();
            alert("Both first name and last name should be inserted for the name change");
            if($("#nameboxfn").val()=="")
                {
                    $("#nameboxfn").css('border-color','red');
                }
            else
                {
                    $("#nameboxfn").css('border-color','red');
                }
            
            if($("#nameboxln").val()=="")
                {
                    $("#nameboxln").css('border-color','red');
                }
            else
                {
                    $("#nameboxln").css('border-color','');
                }
        }
    
    if(($("#city").val()=="" && $("#state").val()!="") || ($("#city").val()!="" && $("#state").val()==""))
        {   
            if($("#city").val()=="")
                {
                    $("#city").css('border-color','red');
                }
            else
                {
                    $("#city").css('border-color','');
                }
            
            if($("#state").val()=="")
                {
                    $("#state").css('border-color','red');
                }
            else
                {
                    $("#state").css('border-color','');
                }
        }
    
})
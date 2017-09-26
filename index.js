//hiding login if signup is clciked, hiding signup if login is clicked

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  var target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
    $(target).fadeIn(600)
});

//validating form for signup

$("#signup-button").click(function(e)
{
    //make border red if any feild is empty
    // if not empty remove red color
    if($("#fn").val()=="")
        {
            e.preventDefault();
            $("#fn").css('border-color','red');
            $("#info").html("Please enter all the fields");
        }
    else
        {
            $("#fn").css('border-color','');
        }
    
    if($("#ln").val()=="")
        {
            e.preventDefault();
            $("#ln").css('border-color','red');
            $("#info").html("Please enter all the fields");
        }
    else
        {
            $("#ln").css('border-color','');
        }
    
    if($("#email").val()=="")
        {
            e.preventDefault();
            $("#email").css('border-color','red');
            $("#info").html("Please enter all the fields");
        }
    else
        {
            $("#email").css('border-color','');
        }
    
    if($("#pass").val()=="")
        {
            e.preventDefault();
            $("#pass").css('border-color','red');
            $("#info").html("Please enter all the fields");
        }
    else
        {
            $("#pass").css('border-color','');
        }
    
    if($("#confirm").val()=="")
        {
            e.preventDefault();
            $("#confirm").css('border-color','red');
            $("#info").html("Please enter all the fields");
        }
    else
        {
            $("#confirm").css('border-color','');
        }
    
    if($("#confirm").val()!=$("#pass").val())
        {
            e.preventDefault();
            $("#confirm").css('border-color','red');
            $("#info").html("The confimed password doesn't match");
        }
    else
        {
            $("#confirm").css('border-color','');
        }
    
    var email=$("#email").val();
    $.post("check_email.php",{email:email},function(data)
           {
                if(data!="")
                {
                    e.preventDefault();
                    $("#info").html(data);
                }
           })
})
//checking if email already exist or not when user focus out of email input box
$("#email").focusout(function()
{
    var email=$("#email").val();
    $.post("check_email.php",{email:email},function(data){
           $("#info").html(data)
           })
})

//validating form for login

$("#login-button").click(function(e)
{
    if($("#login-email").val()=="")
        {
            e.preventDefault();
            $("#login-email").css('border-color','red');
            $("#login-info").html("Both email and password are required for login");
        }
    else
        {
            $("#login-email").css('border-color','');
        }
    
    if($("#login-pass").val()=="")
        {
            e.preventDefault();
            $("#login-pass").css('border-color','red');
            $("#login-info").html("Both email and password are required for login");
        }
    else
        {
            $("#login-pass").css('border-color','');
        }
})
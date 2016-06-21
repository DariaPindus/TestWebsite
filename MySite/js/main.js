$(document).ready(function(){
    $('.icon-menu').click(function(){
        $('.menu').animate({
            left: '0%'}, 200);
        $('.icon-menu img').css({'visibility':'hidden'});
    });
    $('.icon-close').click(function(){
        $('.menu').animate({left: '-20%'}, 200);
        $('.icon-menu img').css({'visibility':'visible'})
    });
    $('#wthoutAuth').click(function(){
        alert("You have to be authorized to watch following content! \n Please, log in.");
        return false;
    })
    $("#done").click(function(){
        var name = $("#name_fb").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail = "";
        if (name.length<3) 
            fail = "Name should consist more than 3 symbols!";
        else if (email.split('@').length-1 == 0 || email.split('.').length-1 == 0)
                 fail = "You've entered wrong email";
        else if (subject.length < 5) {
            fail = "Subject should be longer than 5 symbols";
        }
        else if (message.length < 20) {
            fail = "Message should be longer than 20 symbols";
        }
        if (fail != "") {
            //$('#messageShow').html (fail + "<div class='clear'><br></div>");
            //$('#messageShow').show();
            alert(fail);
            return false;
        }
        $.ajax({
            url: '/ajax/feedback.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'email': email, 'subject': subject, 'message':message},
            dataType: 'html',
            success: function (data){
                alert(data);
                }
        });
    });
});

$(function(){
    $('.wrapper').hover(function(){
         $(this).children().stop().animate({marginTop: '100%', opacity: 0}, 500);},
         function(){$(this).children().stop().animate({marginTop: '0%', opacity: 1}, 500);})});

//function AuthorisationError(){
//    alert("You have to be authorized to watch following content! \n Please, log in.");
//    return false;
//}
function LoggingOut(){
    alert("You've been logged out");
}
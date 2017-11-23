$(document).ready(function(){
    //var phonel=$("#phonelogin").val();
    //var passwordl=$("#Passwordlogin").val();
  /* var card=$(".mb-4");
    var signup=$("#sgnup");
     var signin=$("#sgnin");
    $("#signup").click(function(){
        signup.css("display","block");
        card.html(signup);
        signup.css("display","none");
    });   
    $("#signin").click(function(){
        signin.css("display","block");
        card.html(signin);
        signin.css("display","none");
    });*/
    //handle signup
    $("#submitsignup").click(function(){
         var email=$("#email").val();
     var phone=$("#phone").val();
    var password=$("#Password").val();
        if(email!="" &&phone!="" &&password!=""){
        //$("#submitsignup").html("loading signup..........").css("background-color","red");
        $.ajax({
            method:'post',
            url:'postsignup.php',
            data:$("#signupform").serialize(),
            success:function(data){
                $(".modal-body").html(data);
            }
        });
        }else{
            alert("all fields are required!");
        }
    });
    //handle login
    $("#submitlogin").click(function(){
           $.ajax({
               method:'post',
               url:'login.php',
               data:$("#loginform").serialize(),
               success:function(data){
                   alert(data);
               }
           });
    });
});
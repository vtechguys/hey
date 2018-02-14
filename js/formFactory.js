app.factory("formFactory",function(){
    var object={
        register(email,password,matchPasswordStatus){
            console.log("email is",email);
            console.log("password is",password);
           if(matchPasswordStatus){
            return true;
           }

        },
        matchPassword(password,confirmPassword){
            console.log("matchpassword",password,confirmPassword);
        if(password===confirmPassword){
            return true;
        }
        
        }
    }
    return object;
});
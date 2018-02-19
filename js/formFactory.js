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
        
        },
        passwordStrengthAcceptance(password){
         var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,20})");
            if(password===strongRegex){
                return 1;
            }
            else
                return 0;
//             if(password===mediumRegex){
//                 return 1;
//             }
//             if(password===weakRegex){
//                 return    
//             }
            
            
            
        }
    }
    return object;
});

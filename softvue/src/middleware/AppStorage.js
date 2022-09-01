class AppStorage{
    storeToken(token){
       localStorage.setItem('token', token);
    }

    storeUser(user){
        localStorage.setItem('user', user);
     }

     storeMobile(mobile){
        localStorage.setItem('phone', mobile);
     }

     storeExpaire(expaire){
      localStorage.setItem('expaire', expaire);
      }

      storeRole(role){
         if(role){
         localStorage.setItem('role_name', role);
            }
         }

         storeRolev(rolev){
            if(rolev){
            localStorage.setItem('role_value', rolev);
               }
            }

        


     store(user, token, mobile, expaire, role, rolev){
      this.storeToken(token);
      this.storeUser(user);
      this.storeMobile(mobile);
      this.storeExpaire(expaire);
      this.storeRole(role);
      this.storeRolev(rolev);
     }

     clear(){
        localStorage.removeItem('token');
        localStorage.removeItem('user');
        localStorage.removeItem('phone');
        localStorage.removeItem('expaire');
        localStorage.removeItem('role_name');
        localStorage.removeItem('role_value');

     }

     getToken(){
       return localStorage.getItem('token');

     }

     getUser(){
        return localStorage.getItem('user');
     }

     getAdmin(){
      return localStorage.getItem('role_name');
   }

}

export default AppStorage = new AppStorage();
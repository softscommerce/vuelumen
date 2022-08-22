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



     store(user, token, mobile, expaire){
      this.storeToken(token);
      this.storeUser(user);
      this.storeMobile(mobile);
      this.storeExpaire(expaire);
     }

     clear(){
        localStorage.removeItem('token');
        localStorage.removeItem('user');
        localStorage.removeItem('phone');
        localStorage.removeItem('expaire');

     }

     getToken(){
       return localStorage.getItem('token');

     }

     getUser(){
        return localStorage.getItem('user');
     }

}

export default AppStorage = new AppStorage();
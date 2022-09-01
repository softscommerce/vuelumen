import User from './User.js';

export default function auth({next, router}){
    console.log('middleware auth test');
    const account_auth = User.logedIn();
    if(!account_auth){
        console.log('you are not login')
        return router.push('/login');
    }
    return next();

}
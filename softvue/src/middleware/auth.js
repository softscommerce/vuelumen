import User from './User.js';

export default function auth({next, router}){
    console.log('middleware auth test');
    const account_auth = User.logedIn();
    if(!account_auth){
        return router.push('/login');
    }
    return next();
}
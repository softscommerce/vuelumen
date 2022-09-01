import User from './User.js';

export default function auth({next, router}){
    const account_auth = User.admin();
    console.log(account_auth+'ok')
    if(!account_auth){
        console.log('you are not admin');
       router.push('/');
    }
    return next();

}
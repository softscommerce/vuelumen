import {reactive} from 'vue';
const errorMsg = reactive([])
const Validations = reactive([]);

    
       Validations['text'] = (value, message, message1, limit = 0,)=> {
        if(value != ''){
          if(value.length > limit){
            errorMsg['product_name'] = '';
          }else{
            errorMsg['product_name'] =message1;
            return false;
          }
        }else{
            
             errorMsg['product_name'] = message;
             return false;
        }
    }

    Validations['description'] = (value, message, message1, limit = 0)=> {
        if(value != ''){
          if(value.length > limit){
            errorMsg['product_description'] = '';
          }else{
            errorMsg['product_description'] =message1;
            return false;
          }
        }else{
            
             errorMsg['product_description'] = message;
             return false;
        }
    }

   Validations['unit'] = (value, message)=> {
        if(value != ''){
            errorMsg['unit'] = ''
        }else{
            
             errorMsg['unit'] = message;
             return false;
        }
    }

    Validations['rprice'] = (value, message)=> {
        if(value != ''){
            errorMsg['rprices'] = ''
        }else{
            
             errorMsg['rprices'] = message;
             return false;
        }
    }

    Validations['sprice'] = (value, message)=> {
        if(value != ''){
            errorMsg['sprices'] = ''
        }else{
            
             errorMsg['sprices'] = message;
             return false;
        }
    }

    Validations['category'] = (value)=> {
        if(value != 0){
            errorMsg['category'] = ''
        }else{
            
             errorMsg['category'] = 'Category is Requried';
             return false;
        }
    }

    Validations['product'] = (value)=> {
        if(value != 0){
            errorMsg['product'] = ''
        }else{
            
             errorMsg['product'] = 'Product is Requried';
             return false;
        }
    }

    Validations['brand'] = (value)=> {
        if(value != 0){
            errorMsg['brand'] = ''
        }else{
            
             errorMsg['brand'] = 'Brand is Requried';
             return false;
        }
    }



    Validations['email'] = (value, message) =>{
        if(value != ''){
         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value))
            {
                    errorMsg['email'] = '';
            } else{
                    errorMsg['email']  = 'Invalid Email Address';
                    return false;
            } 
              
        }else{
            
             errorMsg['email'] = message;
             return false;
        }
    }


    Validations['checkbox'] =(value, message)=>{
        if(value != false){
            
              
        }else{
            
             errorMsg['checkbox'] = message;
             return false;
        }
    }

    Validations['phone'] = (value, message, message1, limit=11) =>{
        if(value != false){
            if(value.length >= limit){
                if(/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/.test(value)){
                     errorMsg['phone'] = '';
                }else{
                     errorMsg['phone'] = 'Phone Number is invalid';
                     return false;
                }
               
            }else{
                 errorMsg['phone'] = message1;
                 return false;
            }
              
        }else{
            
             errorMsg['phone'] = message;
             return false;
        }
    }

    Validations['password'] = (value, message, message1, message2, limit=4) =>{
        if(value != false){
            let difference = limit - value.length;
                if (value.length<limit) {
                    errorMsg['password'] = 'Must be '+limit+' characters! '+ difference + ' characters left' ;
                } else {
                    if(value.length<4 && value.length> 8){
                        errorMsg['password'] = message1 ;
                    }else{
                         errorMsg['password'] = message2 ;
                    }
                }
              
        }else{
            
             errorMsg['phone'] = message;
             return false;
        }
    }

const Validation = () =>{
    return { Validations,  errorMsg}
}

export default Validation;
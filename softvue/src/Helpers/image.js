
import {ref} from 'vue';
const error = ref(null);
const f2 = ref('');
const Img = (event) => {
    error.value = null;  
    try{
            const f = event.target.files[0];
                const fileName = f.name.split('.')[0];
                console.log(f.size);
                const img = new Image();
                console.log(img.src);
                img.src = URL.createObjectURL(f);
                if(f.size >=  100006){
                     img.onload = function(){
                    var canvas = document.createElement('canvas');
                    canvas.width = img.width - 100;
                    canvas.height = img.height - 100;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0);
                    canvas.toBlob(function(blob){
                            console.info(blob.size);
                            f2.value = new File([blob], fileName + ".webp");
                    //   return f2;
                    console.log(f2.value)
                      
                    }, 'image/webp', 0.00001);
                }
                }else{
                     img.onload = function(){
                    var canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    var ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0);
                    canvas.toBlob(function(blob){
                     console.info(blob.size);
                      f2.value = new File([blob], fileName + ".webp");
                    //   return f2
                    console.log(f2.value)
                       
                    }, 'image/webp', 0.5);
                    }
                }


       if(!res){
        throw new Error('Image Not Found');
       }
       return f2;
    }catch(err){
        console.log(err.message);
        error.value = err.message;

    }

}

const Image = () => {
    return {error, Img, f2};
}

export default Image;
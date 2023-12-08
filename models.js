function openMenu() {
    document.getElementById("sideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("sideMenu").style.width = "0";
}


let i = 0;

    let imgArray = ['911.jpg', '911.2.jpg', '911.3.jpg', '911.4.jpg', '911.5.jpg'];

    
    function changeImg(){
        document.getElementById('slideshow').src = imgArray[i];

        if(i<imgArray.length-1){
            i++;
        }else{
            i=0
        }
       
    } document.addEventListener(onload, changeImg())


    let n = 0;

    let imgArray1 = ['panamera.jpg', 'panamera1.jpg', 'panamera2.jpg', 'panamera3.jpg', 'panamera4.jpg'];

    function changeImg1(){
        document.getElementById('slideshow1').src = imgArray1[n];

        if(n<imgArray1.length-1){
            n++;
        }else{
            n=0
        }
       
    } document.addEventListener(onload, changeImg1())


    let d = 0;

    let imgArray2 = ['718.jpg', '718.1.jpg', '718.2.jpg', '718.3.jpg', '718.5.jpg'];

    function changeImg2(){
        document.getElementById('slideshow2').src = imgArray2[d];

        if(d<imgArray2.length-1){
            d++;
        }else{
            d=0
        }
       
    } document.addEventListener(onload, changeImg2())


    let e = 0;

    let imgArray3 = ['taycan.jpg', 'taycan1.jpg', 'taycan2.jpg', 'taycan3.jpg', 'taycan4.jpg'];

    function changeImg3(){
        document.getElementById('slideshow3').src = imgArray3[e];

        if(e<imgArray3.length-1){
            e++;
        }else{
         e=0
        }
       
    } document.addEventListener(onload, changeImg3())

    let f = 0;

    let imgArray4 = ['macan.jpg', 'macan1.jpg', 'macan2.jpg', 'macan3.jpg', 'macan4.jpg'];

    function changeImg4(){
        document.getElementById('slideshow4').src = imgArray4[f];

        if(f<imgArray4.length-1){
            f++;
        }else{
            f=0
        }
       
    } document.addEventListener(onload, changeImg4())

    let g = 0;

    let imgArray5 = ['cay.jpg', 'cay1.jpg', 'cay2.jpg', 'cay3.jpg', 'cay4.jpg'];

    function changeImg5(){
        document.getElementById('slideshow5').src = imgArray5[g];

        if(g<imgArray5.length-1){
            g++;
        }else{
            g=0
        }
       
    } document.addEventListener(onload, changeImg5())
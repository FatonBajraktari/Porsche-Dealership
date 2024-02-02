function openMenu() {
    document.getElementById("sideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("sideMenu").style.width = "0";
}

let i = 0;

    // let imgArray = ['assets/911.jpg', 'assets/911.2.jpg', 'assets/911.3.jpg', 'assets/911.4.jpg', 'assets/911.5.jpg'];

    
    function changeImg1(){
        document.getElementById('slideshow1').src = imgArray1[i];

        if(i<imgArray1.length-1){
            i++;
        }else{
            i=0
        }
       
    } document.addEventListener(onload, changeImg1())


    let n = 0;

    // let imgArray1 = ['assets/panamera.jpg', 'assets/panamera1.jpg', 'assets/panamera2.jpg', 'assets/panamera3.jpg', 'assets/panamera4.jpg'];

    function changeImg2(){
        document.getElementById('slideshow2').src = imgArray2[n];

        if(n<imgArray2.length-1){
            n++;
        }else{
            n=0
        }
       
    } document.addEventListener(onload, changeImg2())


    let d = 0;

    // let imgArray2 = ['assets/718.jpg', 'assets/718.1.jpg', 'assets/718.2.jpg', 'assets/718.3.jpg', 'assets/718.5.jpg'];

    function changeImg3(){
        document.getElementById('slideshow3').src = imgArray3[d];

        if(d<imgArray3.length-1){
            d++;
        }else{
            d=0
        }
       
    } document.addEventListener(onload, changeImg3())


    let e = 0;

    // let imgArray3 = ['assets/taycan.jpg', 'assets/taycan1.jpg', 'assets/taycan2.jpg', 'assets/taycan3.jpg', 'assets/taycan4.jpg'];

    function changeImg4(){
        document.getElementById('slideshow4').src = imgArray4[e];

        if(e<imgArray4.length-1){
            e++;
        }else{
         e=0
        }
       
    } document.addEventListener(onload, changeImg4())

    let f = 0;

    // let imgArray4 = ['assets/macan.jpg', 'assets/macan1.jpg', 'assets/macan2.jpg', 'assets/macan3.jpg', 'assets/macan4.jpg'];

    function changeImg5(){
        document.getElementById('slideshow5').src = imgArray5 [f];

        if(f<imgArray5.length-1){
            f++;
        }else{
            f=0
        }
       
    } document.addEventListener(onload, changeImg5())

    let g = 0;

    // let imgArray5 = ['assets/cay.jpg', 'assets/cay1.jpg', 'assets/cay2.jpg', 'assets/cay3.jpg', 'assets/cay4.jpg'];

    function changeImg6(){
        document.getElementById('slideshow6').src = imgArray6[g];

        if(g<imgArray6.length-1){
            g++;
        }else{
            g=0
        }
       
    } document.addEventListener(onload, changeImg6())
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

    let imgArray2 = ['panamera.jpg', 'panamera1.jpg', 'panamera2.jpg', 'panamera3.jpg', 'panamera4.jpg'];

    function changeImg(){
        document.getElementById('slideshow1').src = imgArray[i];

        if(i<imgArray.length-1){
            i++;
        }else{
            i=0
        }
       
    } document.addEventListener(onload, changeImg())


    let d = 0;

    let imgArray3 = ['718.jpg', '718.1.jpg', '718.2.jpg', '718.3.jpg', '718.5.jpg'];

    function changeImg(){
        document.getElementById('slideshow2').src = imgArray[i];

        if(i<imgArray.length-1){
            i++;
        }else{
            i=0
        }
       
    } document.addEventListener(onload, changeImg())
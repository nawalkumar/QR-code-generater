let qrtext=document.getElementById("qrtext");
//console.log(qrtext.value);
let sizes=document.getElementById("sizes");
let generatebtn=document.getElementById("generatebtn");
let downloadbtn=document.getElementById("downloadbtn");
let qrContainer=document.querySelector(".qrbody");
let size=sizes.value;
generatebtn.addEventListener('click',(e)=>{
    e.preventDefault();
    isEmptytext();
});
sizes.addEventListener('change',(e)=>{
    size=e.target.value;
    isEmptytext();
});
function isEmptytext(){
    if (qrtext.value.length>0)
    {
            generateQRCode();
    }
    else{
        alert("please enter required text");
    }
}
downloadbtn.addEventListener('click', ()=>{
    let img = document.querySelector('.qrbody img');

    if(img !== null){
        let imgAtrr = img.getAttribute('src');
        downloadbtn.setAttribute("href", imgAtrr);
    }
    // else{
    //     downloadbtn.setAttribute("href", `${document.querySelector('canvas').toDataURL()}`);
    // }
});
function generateQRCode(){
    qrContainer.innerHTML = "";
    new QRCode(qrContainer, {
        text:qrtext.value,
        height:size,
        width:size,
        colorLight:"#fff",
        colorDark:"#000",
    });
}
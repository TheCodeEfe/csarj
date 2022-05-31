const icon = document.querySelector("#menuicon");
const menu = document.querySelector(".menuul");

icon.addEventListener('click', ()=>{
    const visiblity = menu.getAttribute("deta-visible");
    console.log(visiblity);
})

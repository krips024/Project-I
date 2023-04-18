document.querySelector("#show-login").addEventListener("Click",function(){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("Click",function(){
    document.querySelector(".popup").classList.remover("active");
});
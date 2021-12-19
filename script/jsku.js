window.addEventListener('scroll',() =>{
    var scrolledNav = window.scrollY;

    if (scrolledNav!=0){
        document.getElementById('myNavbar').classList.add('add-bg');
        document.getElementById('linkedin').classList.add('label');
        document.getElementById('myworks').classList.add('label');
        document.getElementById('aboutme').classList.add('label');
        document.getElementById('mainlogo').classList.replace("whitelogo","blacklogo");
    }else{
        document.getElementById("myNavbar").classList.remove('add-bg');
        document.getElementById('linkedin').classList.remove('label');
        document.getElementById('myworks').classList.remove('label');
        document.getElementById('aboutme').classList.remove('label');
        document.getElementById('mainlogo').classList.replace("blacklogo","whitelogo");
    }
});
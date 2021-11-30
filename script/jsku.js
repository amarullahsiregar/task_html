window.addEventListener('scroll',() =>{
    var scrolledNav = window.scrollY;

    if (scrolledNav!=0){
        document.getElementById('myNavbar').classList.add('add-bg');
    }else{
        document.getElementById("myNavbar").classList.remove('add-bg');
    }
});
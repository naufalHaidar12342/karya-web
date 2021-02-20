/* menyimpan tema kesukaan usernya.
jika user suka light theme, ketika di refresh
tetap menampilkan light theme.

sebaliknya, jika user suka dark theme, ketika di refresh,
tampilan tetap menggunakan dark theme */
if (localStorage.getItem('theme')== 'dark')
    setDarkMode(true)

// hanya icon kacamata yang numpang ditaruh di file saja hehehe    
//👓🕶️ 

/* bagian ini digunakan untuk dark mode nya */
function setDarkMode(){
    let emoticon=''
    let isDark= document.body.classList.toggle('darkmode')    

    if (isDark) {
        emoticon='👓'
        localStorage.setItem('theme', 'dark')
    } else{
        emoticon='🕶️'
        localStorage.removeItem('theme')
    }
    document.getElementById('darkButton').innerHTML= emoticon
}




function navSlide(){
    const menuButton= document.querySelector('.menuButton');
    const nav= document.querySelector('.nav-links');
    const navLinks=document.querySelectorAll('.nav-links li');

    menuButton.addEventListener('click', ()=>{

        //toggle nav
        nav.classList.toggle('nav-active');

        //animasi links
        navLinks.forEach((link,index)=>{
            if(link.style.animation){
                link.style.animation=''
            }else{
                link.style.animation=`navLinkFade 0.5s ease forwards ${index/7+0.3}s`;
            }
            
        });

        //animasi tombol home
        menuButton.classList.toggle('toggle');
    });   
}

navSlide();
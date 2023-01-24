function toggleMenu() {
    let menu = document.getElementById('profile-menu');
    
    if(menu.classList.contains('invisible')) {
        menu.classList.remove('invisible');
    } 
    else {
        menu.classList.add('invisible');
    }
    
   

}
window.onscroll = function() {onActiveSections()};
function onActiveSections() {
    if (screen.width > 1024) {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) document.getElementById("paquetes").classList.add('package-active');
        if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) document.getElementById("servicios").classList.add('about-active');
        if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) document.getElementById("proyectos").classList.add('logos-active');
        if (document.body.scrollTop > 2200 || document.documentElement.scrollTop > 2200) document.getElementById("contacto").classList.add('contact-active');           
    }if (screen.width <= 900 ) {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) document.getElementById("paquetes").classList.add('package-active');
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) document.getElementById("servicios").classList.add('about-active');
        if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) document.getElementById("proyectos").classList.add('logos-active');
        if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) document.getElementById("contacto").classList.add('contact-active');  
    }
    if (screen.width <= 400 ) {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) document.getElementById("paquetes").classList.add('package-active');
        if (document.body.scrollTop > 3000 || document.documentElement.scrollTop > 3000) document.getElementById("servicios").classList.add('about-active');
        if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) document.getElementById("proyectos").classList.add('logos-active');
        if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) document.getElementById("contacto").classList.add('contact-active');  
    }
  }
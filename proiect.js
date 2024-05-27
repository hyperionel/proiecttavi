document.addEventListener('DOMContentLoaded', function() {
const valoaretext = 'Cauta';
let cautare = document.getElementById('caut');
cautare.value = valoaretext;
cautare.addEventListener('focus', function() {
    if (this.value == valoaretext) {
        this.value = '';
    }
});

cautare.addEventListener('blur', function() {
    if (this.value == '') {
        this.value = valoaretext;
    }
});

document.getElementById('caut2').addEventListener('click', function() {
    let searchQuery = document.getElementById('caut').value.trim().toLowerCase();
    redirectToPage(searchQuery);
});

document.getElementById('caut').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        let searchQuery = this.value.trim().toLowerCase();
        redirectToPage(searchQuery);
        event.preventDefault();
    }
});

function redirectToPage(searchQuery) {
    switch (searchQuery) {
        case 'placi video':
            window.location.href = 'placi video.html';
            break;
        case 'coolere':
            window.location.href = 'coolere.html';
            break;
        case 'procesoare':
            window.location.href = 'procesoare.html';
            break;
        default:
            window.location.href = 'paggoal.html';
            break;
    }
}



document.getElementById('btlista').addEventListener('click',function(){
    let lista=document.getElementById('listamea');
    if(lista.classList.contains("ascuns")){
        lista.classList.remove("ascuns");
        lista.classList.add("arata");
    }else{
        lista.classList.remove("arata");
        lista.classList.add("ascuns");
    }
})
document.getElementById('Amdbt2').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd2');
    let intelElements = document.querySelectorAll('.Intel');
    
    amdElements.forEach(element => {
        element.classList.remove('ascuns');
    });
    
    intelElements.forEach(element => {
        element.classList.add('ascuns');
    });
});

document.getElementById('Intelbt').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd2');
    let intelElements = document.querySelectorAll('.Intel');
    
    amdElements.forEach(element => {
        element.classList.add('ascuns');
    });
    
    intelElements.forEach(element => {
        element.classList.remove('ascuns');
    });
});

document.getElementById('Ambelebt2').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd2');
    let intelElements = document.querySelectorAll('.Intel');
    
    amdElements.forEach(element => {
        element.classList.remove('ascuns');
    });
    
    intelElements.forEach(element => {
        element.classList.remove('ascuns');
    });
});
document.getElementById('Amdbt').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd');
    let nvidiaElements = document.querySelectorAll('.Nvidia');
    
    amdElements.forEach(element => {
        element.classList.remove('ascuns');
    });
    
    nvidiaElements.forEach(element => {
        element.classList.add('ascuns');
    });
});

document.getElementById('Nvidiabt').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd');
    let nvidiaElements = document.querySelectorAll('.Nvidia');
    
    amdElements.forEach(element => {
        element.classList.add('ascuns');
    });
    
    nvidiaElements.forEach(element => {
        element.classList.remove('ascuns');
    });
});

document.getElementById('Ambelebt').addEventListener('click', function(){
    let amdElements = document.querySelectorAll('.Amd');
    let nvidiaElements = document.querySelectorAll('.Nvidia');
    
    amdElements.forEach(element => {
        element.classList.remove('ascuns');
    });
    
    nvidiaElements.forEach(element => {
        element.classList.remove('ascuns');
    });
});
});
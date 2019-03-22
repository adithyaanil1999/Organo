console.log('portal Started');
function load_veg() {
    console.log('vegetable');
    let choice_container = document.getElementById('choice-wrapper');
    let veg_container = document.getElementById('veg-wrapper');
    let banner = document.getElementById('top-banner');

    choice_container.style.display = 'none';
    veg_container.style.display = 'flex';
    
    banner.style.opacity = 0;
    setTimeout(function(){
    banner.innerText='Select the Vegetable you want to sell';
    banner.style.opacity = 1;
    },500);
    

}

function load_fruit() {
    console.log('fruit');
    let choice_container = document.getElementById('choice-wrapper');
    let fruit_container = document.getElementById('fruit-wrapper');
    let banner = document.getElementById('top-banner');
    
    choice_container.style.display = 'none';
    fruit_container.style.display = 'flex';

    banner.style.opacity = 0;
    setTimeout(function(){
    banner.innerText='Select the fruit you want to sell';
    banner.style.opacity = 1;
    },500);

}


function back(arg) {
    console.log(arg);
    let choice_container = document.getElementById('choice-wrapper');
    let fruit_container = document.getElementById('fruit-wrapper');
    let veg_container = document.getElementById('veg-wrapper');
    let banner = document.getElementById('top-banner');

    if (arg === 'veg') {
        veg_container.style.display = 'none';
        choice_container.style.display = 'flex';
    }
    else {
        fruit_container.style.display = 'none';
        choice_container.style.display = 'flex';
    }


    banner.style.opacity = 0;
    setTimeout(function(){
    banner.innerText='What would you like to sell?';
    banner.style.opacity = 1;
    },500);
}



let mixerPortfolio = mixitup('.work_container', {
    selectors: {
        target: '.work_card'
    },
    animation: {
        duration: 300
    }
});

const linkWork = document.querySelectorAll('.work_item')

function activeWork(){
    linkWork.forEach(L=> l.classList.remove('active-work'))
    this.classList.add('active-work')
}


function showPopup(el) {
    $("#"+ el).css({'display' :'flex'}).animate({
        'opacity':1,
        'top':0
    },150);
    $("#"+ el).find('.portfolio_popup').css({'display' :'flex'});
}
$('.portfolio_popup-close').click(function() {
    $('.outer').animate({
        'opacity': 0,
        'top':-40
    },150, function() {
        setTimeout(function(){
            $('.outer').hide();
        },150);
    });
});

$(".portfolio_popup").click(function() {
    
    $('.outer').animate({
        'opacity': 0,
        'top':-40
    },150, function() {
        setTimeout(function(){
            $('.outer').hide();
        },150);
    });
});

const modalViews = document.querySelectorAll('.services_modal'),modelBtns = document.querySelectorAll('.services_button'),modalCloses = document.querySelectorAll('.services_modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active_modal')
}

modelBtns.forEach((modelBtn, i) => {
    modelBtn.addEventListener('click', () => {

    })
})

function showPop(al) {
    $("#"+ al).css({'display' :'flex'}).animate({
        'opacity':1,
        'top':0
    },150);
    $("#"+ al).find('.services_modal').css({'display' :'flex'});
}
$('.services_modal-close').click(function() {
    $('.out').animate({
        'opacity': 0,
        'top':-40
    },150, function() {
        setTimeout(function(){
            $('.out').hide();
        },150);
    });
});

$(".services_modal").click(function() {
    
    $('.out').animate({
        'opacity': 0,
        'top':-40
    },150, function() {
        setTimeout(function(){
            $('.out').hide();
        },150);
    });
});
var $win = $(window),
    home = $('.js-home'),
    chosePlyrs = $('.wrap-chose-players'),
    navBurger = $('.burger-nav'),
    sideBar = $('.sidebar'),
    startBtn = $('#startGame'),
    backHome = $('#backHome'),
    w = $win.width(),
    h = $win.height();
    diag = w*w + h*h;
    diag = Math.sqrt(diag),
    wBtn = startBtn.width(),
    hBtn = startBtn.height();



// Click on start button make the player chose screen appears

startBtn.on('click', function() {
    $this = $(this);

    $this.animate({
        height: diag,
        width: diag,
        opacity: 0,
        borderRadius: 1000
    }, 300)

    $this.find('span').add('.title').add('.logo').add('.subtitle').removeClass('moved');

    // $('.js-home').animate({
    //     opacity: 0
    // }, 300)

    home.addClass('hidden-page');
    chosePlyrs.show();

    setTimeout(function(){
        home.hide();
        chosePlyrs.find('h2, ul, > div').removeClass('moved');
        backHome.show().removeClass('opaq');
    }, 300);
})


// Click on back button go back to home
backHome.on('click', function() {
    startBtn.animate({
        height: hBtn,
        width: wBtn,
        opacity: 1,
        borderRadius: 50
    }, 300)


    startBtn.find('span').add('.title').add('.logo').add('.subtitle').addClass('moved');

    backHome.addClass('opaq');
    home.removeClass('hidden-page');
    chosePlyrs.hide();
    home.show();

    setTimeout(function(){
        chosePlyrs.find('h2, ul, > div').addClass('moved');
        backHome.show();
    }, 300);
})

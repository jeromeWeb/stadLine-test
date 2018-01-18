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
    wBtn = startBtn.width();

    // console.log(Math.pow(2, w))

startBtn.on('click', function() {
    $this = $(this);

    $this.animate({
        height: diag,
        width: diag,
    }, 300)

    $this.find('span').addClass('moved');

    // $('.js-home').animate({
    //     opacity: 0
    // }, 300)

    home.addClass('hidden-page');
    chosePlyrs.show();

    setTimeout(function(){
        home.hide();
        chosePlyrs.find('h2, ul').removeClass('moved');
        backHome.show().removeClass('opaq');
    }, 300);

    navBurger.add(sideBar).addClass('reverse');
})

backHome.on('click', function() {
    startBtn.animate({
        height: wBtn,
        width: wBtn,
    }, 300)


    startBtn.find('span').removeClass('moved');

    backHome.addClass('opaq');
    home.removeClass('hidden-page');
    chosePlyrs.hide();
    home.show();

    setTimeout(function(){
        chosePlyrs.find('h2, ul').addClass('moved');
        backHome.show();
    }, 300);

    navBurger.add(sideBar).removeClass('reverse');
})

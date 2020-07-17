// mouse_btn fade out on scrolling
!(function(){
    const main = $("main").first();
    const mouseBtn = $(".mouse_btn").first();
    main.on('scroll', () => {
        if (main.scrollTop() > 20) {
            mouseBtn.fadeOut(200);
        } else {
            mouseBtn.fadeIn(200);
        }
    })
})();
!(function(){
    // mouse_btn fade out on scrolling
    const main = $("main").first();
    const mouseBtn = $(".mouse_btn").first();
    main.on('scroll', () => {
        if (main.scrollTop() > 20) {
            mouseBtn.fadeOut(200);
        } else {
            mouseBtn.fadeIn(200);
        }
    });
    // smooth transition
    main.find("a[href^='#']").on("click", function(e) {
        e.preventDefault();
        let hash = this.hash;
        main.stop().animate({
            scrollTop: $(hash).offset().top
        }, 777);
        return false;
    });
})();
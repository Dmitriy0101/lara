// <------ Scroll-up START ------>
export default function scrollUp() {
    const scrollUp = $("[data-scroll-up]");
    scrollUp.on('click', function (e) {
        window.scrollTo({top: 0, behavior: "smooth"});
    });
}
// <------ Scroll-up END ------>
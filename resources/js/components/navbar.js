export default ({ enableScroll }) => ({
    scrolled: !enableScroll,

    init() {
        if (enableScroll) {
            this.setupScrollListener();
        }
    },

    setupScrollListener() {
        window.addEventListener("scroll", () => {
            this.scrolled = window.scrollY > 40;
        });
    },
});

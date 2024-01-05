$(document).ready(function() {

    var animation = bodymovin.loadAnimation({
        container: document.getElementById("browserGif"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: "https://assets4.lottiefiles.com/packages/lf20_dd9wpbrh.json",
        // path: "../lf20_dd9wpbrh.json",
    });
    var animation = bodymovin.loadAnimation({
        container: document.getElementById("serBannerGif"),
        renderer: "svg",
        loop: true,
        autoplay: true,
        // path: "../lf20_u4jjb9bd.json",
        path: "https://assets9.lottiefiles.com/packages/lf20_u4jjb9bd.json",
    });
});browserGif

var currentURL = window.location.href;
const cursor2 = document.querySelector(".cursor2");
const menu = document.querySelector(".menu-icon");
const aboutli = document.querySelector("#about");
const servicesli = document.querySelector("#services");
const priceli = document.querySelector("#price");
const contactli = document.querySelector("#cont");



// menu auto close

$(".nav-aa").click(function(){ 
    $("#nb").prop('checked', false);
});

$(".nav-aaa").click(function(){ 
    $("#nb").prop('checked', false);
});



// SCROLL TO TOP BUTTON


var scrollToTopBtn = document.getElementById("scrollToTopBtn");
var rootElement = document.documentElement;


window.addEventListener("scroll", function(event) {
    var top = this.scrollY;

    if (top > 300) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }

}, false);


function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}
scrollToTopBtn.addEventListener("click", scrollToTop);




//CURSOR2


document.addEventListener("mousemove", (e) => {
    cursor2.style.left = e.clientX + "px";
    cursor2.style.top = e.clientY + "px";
})


document.getElementById("our-services").addEventListener("mouseover", show);
document.getElementById("our-services").addEventListener("mouseleave", hide);

function show() {
    cursor2.style.display = "block";
}
function hide() {
    cursor2.style.display = "none";
}







// Packages share URL & Packages page url toggle



$(document).ready(function(){
    
    // LOGO COLOR CHANGE

    $("#main-cont").mouseover(function(){
        $('.logo-img').attr('src','/assets/new-ads-r-01-copywhite-01.svg')
    })

    $("#main-cont").mouseleave(function(){
        $('.logo-img').attr('src','/assets/new-ads-r-02.svg')
    })


    $(".container2, .container3, .container4").mouseover(function(){
        $('.logo-img').attr('src','/assets/new-ads-r-02.svg')
    })
    
    $(".container2, .container3, .container4").mouseleave(function(){
        $('.logo-img').attr('src','/assets/new-ads-r-01-copywhite-01.svg')
    })




    $("#seo-p").click(function(){ 
        const seoURL = "https://24x7ads.com/#pricing-seo"
        history.pushState({}, null, seoURL);
        $("#pack-text").text("SEO Packages")
    });

    $("#smo-p").click(function(){
        const smoURL = "https://24x7ads.com/#pricing-smo"
        history.pushState({}, null, smoURL);
        $("#pack-text").text("SMO Packages")
    });

    $("#ppc-p").click(function(){
        const ppcURL = "https://24x7ads.com/#pricing-ppc"
        history.pushState({}, null, ppcURL);
        $("#pack-text").text("PPC Packages")
    });

    $("#web-p").click(function(){
        const webURL = "https://24x7ads.com/#pricing-web"
        history.pushState({}, null, webURL);
        $("#pack-text").text("Web Packages")
    });

    $("#va-p").click(function(){
        const vaURL = "https://24x7ads.com/#pricing-va"
        history.pushState({}, null, vaURL);
        $("#pack-text").text("Virtual Assistant (VA) Packages")
    });


    if (currentURL == 'https://24x7ads.com/#pricing-seo') {
        window.location = "https://24x7ads.com/#pricing"
        history.pushState({}, null, "https://24x7ads.com/#pricing-seo");
        $("#seo-p").prop("checked",true)
        $("#pack-text").text("SEO Packages")

    } else if(currentURL == 'https://24x7ads.com/#pricing-smo') {
        window.location = "https://24x7ads.com/#pricing"
        history.pushState({}, null, "https://24x7ads.com/#pricing-smo");
        $("#smo-p").prop("checked",true) 
        $("#pack-text").text("SMO Packages")

    } 
    else if(currentURL == 'https://24x7ads.com/#pricing-ppc') {
        window.location = "https://24x7ads.com/#pricing" 
        history.pushState({}, null, "https://24x7ads.com/#pricing-ppc");
        $("#ppc-p").prop("checked",true)   
        $("#pack-text").text("PPC Packages")

    } else if(currentURL == 'https://24x7ads.com/#pricing-web') {
        window.location = "https://24x7ads.com/#pricing"
        history.pushState({}, null, "https://24x7ads.com/#pricing-web");
        $("#web-p").prop("checked",true)  
        $("#pack-text").text("Web Packages")

    } else if (currentURL == 'https://24x7ads.com/#pricing-va') {
        window.location = "https://24x7ads.com/#pricing"
        history.pushState({}, null, "https://24x7ads.com/#pricing-va");
        $("#va-p").prop("checked",true)
        $("#pack-text").text("Virtual Assistant (VA) Packages")
        
    }



    // seo
    $(".pricing-toggle-seo").click(function(){
        $("#pricing-toggle1").html(($("#pricing-toggle1").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle2").html(($("#pricing-toggle2").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle3").html(($("#pricing-toggle3").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle4").html(($("#pricing-toggle4").html() == "View Less") ? 'View More' : 'View Less')
        $(".pricing-ul-seo").toggle();
        
    });

    // smo

    $(".pricing-toggle-smo").click(function(){
        $("#pricing-toggle5").html(($("#pricing-toggle5").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle6").html(($("#pricing-toggle6").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle7").html(($("#pricing-toggle7").html() == "View Less") ? 'View More' : 'View Less')
        $(".pricing-ul-smo").toggle();
        
    });

    // ppc

    $(".pricing-toggle-ppc").click(function(){
        $("#pricing-toggle8").html(($("#pricing-toggle8").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle9").html(($("#pricing-toggle9").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle10").html(($("#pricing-toggle10").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle11").html(($("#pricing-toggle11").html() == "View Less") ? 'View More' : 'View Less')
        $(".pricing-ul-ppc").toggle();
        
    });

    // web

    $(".pricing-toggle-web").click(function(){
        $("#pricing-toggle12").html(($("#pricing-toggle12").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle13").html(($("#pricing-toggle13").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle14").html(($("#pricing-toggle14").html() == "View Less") ? 'View More' : 'View Less')
        $("#pricing-toggle15").html(($("#pricing-toggle15").html() == "View Less") ? 'View More' : 'View Less')
        $(".pricing-ul-web").toggle();

    });


});
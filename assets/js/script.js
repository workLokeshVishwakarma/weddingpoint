const navbarToggle = (x) => {
    x.classList.toggle("changeNavbarActive")
}

$(document).ready(() => {
    $(".fade-out-5").fadeOut(5000)
})

$(document).scroll(function() {
    $(".navbar.fixed-top").toggleClass('scrolled', $(this).scrollTop() > $(".navbar.fixed-top").height())
    $(".navbar-nav a").toggleClass('scrolled', $(this).scrollTop() > $(".navbar.fixed-top").height())
})

$('.containerBtnToggleNavbar').click(() => {
    if ($('.navbar').hasClass('btnMediaQureyActive')) {
        $('.navbar').css({ "background": "transparent" })
        $('.navbar').removeClass('btnMediaQureyActive')
        $(".navbar-nav a").css({ "color": "#fff" })
    } else {
        $('.navbar').addClass('btnMediaQureyActive')
        $('.navbar').css({ "background": "#fff" })
        $(".navbar-nav a").css({ "color": "#000" })
    }
})

const triggerClick = () => {
    document.querySelector('#proflePicFldProfil').click()
}

const displayImage = (e) => {
    if (e.files[0]) {
        let reader = new FileReader()
        reader.onload = (e) => {
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result)
        }
        reader.readAsDataURL(e.files[0])
    }
}

$(".closeBtn").click(function() {
    $(".closeBtn").parent().remove()
})
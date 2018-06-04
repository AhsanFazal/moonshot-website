$(window).scroll(function () {
  if ($(this).scrollTop() > 1000) {
    $('.done-text').addClass('visible active')
    console.log($(this).scrollTop())
  }
})

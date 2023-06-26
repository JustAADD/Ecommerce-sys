
//a active
$(document).on('click', 'a', function(){
  $(this).addClass('active').siblings().removeClass('active')

})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e){
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView(
      {
        behavior : "smooth"
      }
    );
  });
});
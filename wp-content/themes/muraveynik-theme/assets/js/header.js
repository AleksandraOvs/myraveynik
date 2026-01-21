jQuery(document).ready(function($)  {

    const headerFront = document.querySelector('.header-front');
    const headerSearch = document.querySelector('.header__actions__search');
    
  // Вверх и показ верхнего меню
    const headerChange = () => {
      const
        mainBlock = document.querySelector('body');

  
       window.addEventListener('scroll', () => {
         if (-mainBlock.getBoundingClientRect().top > 550) {
            headerFront.classList.add('header-scroll');
            headerSearch.classList.add('show');
        
         } else {
            headerFront.classList.remove('header-scroll');
            headerSearch.classList.remove('show');
         }
       })
    }
    headerChange();

   $('.header__search-btn').click(function(){
      $('.header__actions__search').toggleClass('show');
   });

   $('.burger').click(function(event){
      $('.burger, .header-front__bottom__inner-block, .header-st__burger__menu').toggleClass('show');  
   });

   $('.header-st__burger').click(function(event){
      $('.header-st__burger, .header-st__menu').toggleClass('active');
   });

   $('header__inner__right').fadeIn(5000); 


   $(document).mouseup( function(e){ // событие клика по веб-документу
      if( window.innerWidth >= 1200 ){
         $('.header__catalog__link').click(function(event){
            $('.header__catalog').find('.catalog__menu').addClass('open'); 
         });

		   var div = $( ".catalog__menu" ); // тут указываем ID элемента
		      if ( !div.is(e.target) // если клик был не по нашему блоку
		         && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
			      div.removeClass('open'); // скрываем его
		      };

            
      }
	});
})
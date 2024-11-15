import Swiper from 'swiper';
import { Autoplay,EffectFade } from 'swiper/modules';
import 'swiper/swiper-bundle.css';

 new Swiper('.description', {
    
    loop: true,
    effect:"fade",
    grabCursor:true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      modules: [Autoplay,EffectFade],
  });

  new Swiper('.description--second', {
    
    loop: true,
    effect:"fade",
    grabCursor:true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      modules: [Autoplay,EffectFade],
  });

  
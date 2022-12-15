let arrowBtn = document.querySelectorAll('.btn-skin-mini')
let bgInfo = document.querySelectorAll('.bg-info-skin')
let swit = true 
arrowBtn.forEach(item => {
        item.addEventListener('click', (e) => {
            if(swit){
                arrowBtn.forEach(ar => {
                    ar.classList.add('btn-skin-rotate')
                })
                bgInfo.forEach(block => {
                    block.classList.add('show-info-skin')
                })
            swit = false
            }else{
                arrowBtn.forEach(ar => {
                    ar.classList.remove('btn-skin-rotate')
                })
                bgInfo.forEach(block => {
                    block.classList.remove('show-info-skin')
                })
                swit = true
            }
        })
})

const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 20,
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        920: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 640px
        1060: {
          slidesPerView: 2,
          spaceBetween: 20
        }
      },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
  });
  const swiperPrev = document.getElementById('swiperPrev')
const swiperNext = document.getElementById('swiperNext')

swiperPrev.addEventListener('click', () => {
    swiper.slidePrev();
})
swiperNext.addEventListener('click', () => {
    swiper.slideNext();
})
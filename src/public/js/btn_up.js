const btnUp = {
    el: document.querySelector('.footer_btn_up'),
    show() {
      // удалим у кнопки класс footer_btn_up_hide
      this.el.classList.remove('footer_btn_up_hide');
    },
    hide() {
      // добавим к кнопке класс footer_btn_up_hide
      this.el.classList.add('footer_btn_up_hide');
    },
    addEventListener() {
      // при прокрутке содержимого страницы
      window.addEventListener('scroll', () => {
        // определяем величину прокрутки
        const scrollY = window.scrollY || document.documentElement.scrollTop;
        // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
        scrollY > 400 ? this.show() : this.hide();
      });
      // при нажатии на кнопку .footer_btn_up
      document.querySelector('.footer_btn_up').onclick = () => {
        // переместим в начало страницы
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
      }
    }
  }
  
  btnUp.addEventListener();
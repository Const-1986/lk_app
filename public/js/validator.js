// class Validator {

//   //валидация полей формы на пустоту
//   validate(collect) {

//     let counter = 0;

// $(collect).each(function () {
//   //выбрать только те, у которых нет атрибута disable
//   if ($(this).attr('disabled')) {
//     return;
//   }

//   //проверить инпут на пустоту
//   //если все инпуты с данными - вернуть тру
//   //иначе - вернуть фалс

//   if (!$(this).val()) {
//     counter++;
//     //сделать видимым сообщение о предупреждении
//     let next = $(this).next();
//     next.css('border', '2px solid red').slideDown(900);
//     //навесить на каждый элемент обработчик, при котором уведомление о том что поле пустое скрывается . событие фокус
//     $(this).on('focus', function(){
//       next.slideUp();
//       $(this).off('focus');
//     })

//   }

// })

//     return counter;

//   }


// }

//запуск плагина before-after для картинок
(function () {

  $('.slider').slider();

})();



class ValidatorModify {

  constructor(collect, step) {

    this.wrapperElem = {};
    this.step = {};
    this.InptAccess = false;
    this.SlctAccess = false;

  }


  //метод проверят заполненность полей
  //если поле не запонено - создается(или делается видимой скрытая) подсказка
  //при фокусе на незаполненное поле подсказака скрывается
  validate() {

    switch(this.step){
      case 0:
      this.validate_step0();
      break;
      case 1:
      this.validate_step1();
      break;
      case 2:
      this.validate_step2();
      break;
      case 3:
      this.validate_step3();
      break;

    }

    

  }

  setCollectAndStep(wrapperElem, step){
    this.wrapperElem = wrapperElem;
    this.step = step;
  }

  validate_step0(){
    
    let collectInptut = this.wrapperElem.querySelectorAll('input');

    let collectSelect = this.wrapperElem.querySelectorAll('select');

    let name_str = 'stap' + this.step;

    let result = {
      name_str: [],
    }

    for (let i = 0; i < collectInptut.length; i++) {
     
      let elemI = collectInptut[i];
      
      if (elemI.hasAttribute('disabled')) {
        continue;
      }

      if (elemI.value == '') {
        let next = $(elemI).next();
        next.css('border', '2px solid red').slideDown(900);
        //навесить на каждый элемент обработчик, при котором уведомление о том что поле пустое скрывается . событие фокус
        $(elemI).on('focus', function () {
          next.slideUp();
          $(elemI).off('focus');
        })
        this.InptAccess = false;
      }else{
        this.InptAccess = true;
      }

    }
    //из за селект глючит - по идее на совсем пустоту проверить нельзя

    for (let j = 0; j < collectSelect.length; j++){
    
      let elemS = collectSelect[j];
      
      if (elemS.value == '') {
        
        let next = $(elemS).next();
        next.css('border', '2px solid red').slideDown(900);
        $(elemS).on('focus', function () {
          next.slideUp();
          $(elemS).off('focus');
        })
        this.SlctAccess = false;
      }else{
        this.SlctAccess = true
      }
    }

    if (this.InptAccess && this.SlctAccess) {
      return { 'prop': 'prop' }
    } else {
      return false;
    }


  }

  validate_step1(){
    //получить все поля адресов 
    

    //если заполнена textarea то все в отправляемый объект пишем только
    //данные которые введены в textarea и не учитывает то что внесено в поля поиска адреса

    //если галка "скрыть/рскрыть адрес направления документов открыта" - то 

  }

  validate_step2(){
    


  }

  validate_step3(){
    


  }

}


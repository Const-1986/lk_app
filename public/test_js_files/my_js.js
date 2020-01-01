

let elem = document.getElementById('ownerType');
let form_representative = document.getElementById('form_representative');



elem.addEventListener('change', () => {
  hideForms(elem, form_representative);
});

//скрыть - показать форму руководитель/доверенное лицо
function hideForms(elem1, elem2) {
  let data = elem.value;
  if (data == 2) {
    $(elem2).find('input').removeAttr("disabled");
    $(elem2).slideDown(800)
  } else if (data == 1 || data == "") {
    $(elem2).find('input').attr('disabled', true);
    $(elem2).slideUp(800)
  }
}



// let elem_button = document.getElementById('my_button');
//
// elem_button.addEventListener('click', function () {
//   // console.log('я делаю редирект');
//   // document.location.replace('/personal-account');
//
//   $('#test_div').slideToggle(500);
//
// });

//раскрыть - закрыть поле "юрлица"
(function () {

  $('#select_organizational_form').change(function () {

    let id = this.value;

    if (id == 15 || id == 8 || id == 22050018 || id == "") {

      $('#contact_details_head').find('input').attr('disabled', true);
      $('#contact_details_head').slideUp(500);
      $('#org_name').find('input').attr('disabled', true);
      $('#org_name').slideUp(500);

    } else {
      $('#contact_details_head').find('input').removeAttr("disabled");
      $('#contact_details_head').slideDown(500);
      $('#org_name').find('input').removeAttr("disabled");
      $('#org_name').slideDown(500);
    }


  });


})();

//показать форму физического лица
(function () {

  $('#select_organizational_form').change(function () {

    let id = this.value;
    if (id == 15) {
      $('#form_physical_person').find('input').removeAttr("disabled");
      $('#form_physical_person').slideDown(500);
    } else {
      $('#form_physical_person').find('input').attr('disabled', true);
      $('#form_physical_person').slideUp(500);
    }

  });

})();

//индивидуальный предпрениматель
(function () {

  $('#select_organizational_form').change(function () {

    let id = this.value;
    if (id == 8 || id == 22050018) {
      $('#individual_entrepreneur_form').find('input').removeAttr("disabled");
      $('#individual_entrepreneur_form').slideDown(500);
    } else {
      $('#individual_entrepreneur_form').find('input').attr('disabled', true);
      $('#individual_entrepreneur_form').slideUp(500);
    }

  });

})();

//скрыть\показать поле "адрес направления документов"
//шаг 2
(function () {

  let objValidator = new Validator;

  objValidator.hideElem('same_addresses', 'direction_of_documents' );

})();

//переключение формы по шагам в зависимости от результата
//вернуть с сервера true которое означает разрешение на следующий щаг
//повесить обработчик на кнопку
(function(){

  let objValidator = new Validator;
  //если валидатор возвращает true

  let position = 1;
  $('#test_steps').click(function () {

    let step = $('#step1').find('input');

    //если все поля заполенны - то делаем
    let result = objValidator.validate(step);

    console.log(result);

     if (result == 0){

      switch (position) {
        case 1:
          $('#step1').show();
          $('#step2').hide();
          $('#step3').hide();
          $('#step4').hide();
          $('#test_steps').text( 'Кнопка' + position);
          break;
        case 2:
          $('#step1').hide();
          $('#step2').show();
          $('#step3').hide();
          $('#step4').hide();
          $('#test_steps').text( 'Кнопка' + position);
          break;
        case 3:
          $('#step1').hide();
          $('#step2').hide();
          $('#step3').show();
          $('#step4').hide();
          $('#test_steps').text( 'Кнопка' + position);
          break;
        case 4:
          $('#step1').hide();
          $('#step2').hide();
          $('#step3').hide();
          $('#step4').show();
          $('#test_steps').text( 'Кнопка' + position);
          break;
        default:
          $('#step1').show();
          $('#step2').hide();
          $('#step3').hide();
          $('#step4').hide();
          //$('#test_steps').text( 'Кнопка' + position);
          $('#test_steps').text( 'Кнопка');
          position = 1;
      }
      position++;
    }

  });

})();




(function () {

  $('#button_step_1_submit').click(() => {
    //1 - проверить все поля формы на заполненность
    //2 - отправить данные на сервер ( тут большой этап бэкенд организации )
    //3 - скрыть первый шаг, и открыть второй
    let data = $('#form_step_1').serialize();
    $.ajax({
      type: 'POST',
      cache: false,
      dataType: 'html',
      url: '/personal-account/application',
      data: data,
      success: function(data){
        console.log(data);
        $('#resultAJAX').html(data);

        //document.location.replace('/');

      },
      error: function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
      }

    });

  });

})();


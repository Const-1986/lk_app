
(function () {

  class Form {

    constructor() {
      this.toggleCoincidenceWithEegAddr();
      this.toggleSameAddresses();
    }

    hideInputFormsEntity(elem_id, hidden_element, option) {

      $('#' + elem_id).change(function () {

        let elem_id_value = this.value;

        if (!option.includes(elem_id_value)) {
          //console.log('Совпадение');
          $('#' + hidden_element).find('input').removeAttr("disabled");
          $('#' + hidden_element).slideDown(500);
          $('#org_name').find('input').removeAttr("disabled");
          $('#org_name').slideDown(500);

        } else {
          $('#' + hidden_element).find('input').attr('disabled', true);
          $('#' + hidden_element).slideUp(500);
          $('#org_name').find('input').attr('disabled', true);
          $('#org_name').slideUp(500);

        }
      });
    }

    hideInputForms(elem_id, hidden_element, option) {

      $('#' + elem_id).change(function () {

        let elem_id_value = this.value;

        if (option.includes(elem_id_value)) {

          $('#' + hidden_element).find('input').removeAttr("disabled");
          $('#' + hidden_element).slideDown(500);
        } else {
          $('#' + hidden_element).find('input').attr('disabled', true);
          $('#' + hidden_element).slideUp(500);
        }

      });
    }

    hide() {
      let objValidator = new Validator;

      objValidator.hideElem('same_addresses', 'direction_of_documents');
    }

    sendAJAX() {
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
          success: function (data) {
            console.log(data);
            $('#resultAJAX').html(data);

            //document.location.replace('/');
          },
          error: function (xhr, str) {
            alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
      });
    }


    toggleSameAddresses() {

      $('#same_addresses').change(function () {
        $('#direction_of_documents').slideToggle('400');
      });

    }


    toggleCoincidenceWithEegAddr() {

      $('#coincidence_with_reg_addr').on('change', () => {
        $('#KLADR_form2_wrapper').slideToggle('400');
      });
    }

    steps() {

      let objValidator = new Validator;
      //если валидатор возвращает true

      let position = 1;
      $('#test_steps').click(function () {

        let step = $('#step1').find('input');

        //если все поля заполенны - то делаем
        let result = objValidator.validate(step);

        if (result == 0) {

          switch (position) {
            case 1:
              $('#step1').show();
              $('#step2').hide();
              $('#step3').hide();
              $('#step4').hide();
              $('#test_steps').text('Кнопка' + position);
              break;
            case 2:
              $('#step1').hide();
              $('#step2').show();
              $('#step3').hide();
              $('#step4').hide();
              $('#test_steps').text('Кнопка' + position);
              break;
            case 3:
              $('#step1').hide();
              $('#step2').hide();
              $('#step3').show();
              $('#step4').hide();
              $('#test_steps').text('Кнопка' + position);
              break;
            case 4:
              $('#step1').hide();
              $('#step2').hide();
              $('#step3').hide();
              $('#step4').show();
              $('#test_steps').text('Кнопка' + position);
              break;
            default:
              $('#step1').show();
              $('#step2').hide();
              $('#step3').hide();
              $('#step4').hide();
              //$('#test_steps').text( 'Кнопка' + position);
              $('#test_steps').text('Кнопка');
              position = 1;
          }
          position++;
        }

      });
    }

  }

  let objForm = new Form();

//раскрыть - закрыть поле "юрлица"
  objForm.hideInputFormsEntity('select_organizational_form', 'contact_details_head', ['15', '8', '22050018', '']);

//скрыть - показать форму руководитель/доверенное лицо
  objForm.hideInputForms('ownerType', 'form_representative', ['2']);

//показать форму физического лица
  objForm.hideInputForms('select_organizational_form', 'form_physical_person', ['15']);
//индивидуальный предпрениматель
  objForm.hideInputForms('select_organizational_form', 'individual_entrepreneur_form', ['8', '22050018']);

//переключение адресов
  objForm.toggleSameAddresses();

  objForm.steps();

//отправляю AJAX
  // objForm.sendAJAX();

})();



/**
     * @class обработка вырмы select
     * @param {}  - Строка для поиска по названию
     *
     * @returns {Obj}
     */

(function () {


  /**
     * @class Класс реализует выборуку из массива option тега select начиная с двух символов
     * @param {}  - Строка для поиска по названию
     *
     * @returns {Obj}
     */


  class EconomicActivityForm {

    constructor(input, select) {
      this.inputE = document.getElementById(input);
      this.selectE = document.getElementById(select);
    }


    /**
     * На input навешиваем обработчик события которое фильтрует посимфольно массив option
     *
     * @param {} param_name - Строка для поиска по названию
     *
     *
     * @returns {}
     */

    inputElisteners() {
      this.inputE.addEventListener('input', () => {

        let str = this.inputE.value.toLowerCase();
        //получаю дояерние узлы select
        let selectChilds = this.selectE.querySelectorAll('option');
        let resultArr = [];
        for (let i = 0; i < selectChilds.length; i++) {

          //привести к нижнему регистру содержимое option
          let nodeTextContent = selectChilds[i].textContent.toLowerCase();
          if (nodeTextContent.includes(str)) {
            resultArr.push(selectChilds[i]);
          }
        }
        this.selectE.innerHTML = '';
        //врисовать новые
        for (let j = 0; j < resultArr.length; j++) {
          this.selectE.append(resultArr[j]);
        }
      });

    }

    /**
     * На input навешиваем обработчик события которое фильтрует посимвольно массив option -
     * Модифицируемый вариант 
     * @param {} param_name - Строка для поиска по названию
     *
     * @returns {}
     */

    modifyinputElisteners(){

      let optionArray = '';
      //загружаю данные option
      let opt = {
        method: 'POST',
        body : ''
      }
            
      let addEventToInputE = function(optionArray){
              
        this.inputE.addEventListener('input', () => {
          
          if(this.inputE.value.length < 2){
            return;
          }

          this.selectE.style.display = 'block';

          let str = this.inputE.value.toLowerCase();
          
          let resultArr = [];
          
          for (let i = 0; i < optionArray.length; i++) {
  
            //привести к нижнему регистру содержимое option
            let nodeTextContent = optionArray[i].textContent.toLowerCase();
            if (nodeTextContent.includes(str)) {
              resultArr.push(optionArray[i]);
            }
          }

          this.selectE.innerHTML = '';
          //размер выводимого поля
          if(resultArr.length > 10){
            this.selectE.size = '10';
          }else{
            let num = resultArr.length;
            num++;
            this.selectE.size = String(num);
          }

          let option1 = document.createElement('option');
          option1.textContent = '-- выберите из списка --';
          option1.disabled = 'disabled';
          this.selectE.append(option1);

          //рендер новых option
          for (let j = 0; j < resultArr.length; j++) {
            let option = document.createElement('option');
            //option.value = resultArr[j].value;
            option.value = JSON.stringify(resultArr[j]);
            option.textContent = resultArr[j].textContent;
            this.selectE.append(option);
          }
        });
      }.bind(this);

      fetch('/test/searchByLetters', opt)
        .then((response)=>{
          return response.json();
        })
        .then((data)=>{
          optionArray = data;
          addEventToInputE(optionArray);
        })
        .catch((error)=>{
          console.log(error);  
        });
    }

    /**Назначаю обработчик тега select
     * 
     * @param {}
     * @returns {}
     */

    selectEListeners(){
       
      this.selectE.addEventListener('change',()=>{
        console.log(this.selectE.value);
        let value = JSON.parse( this.selectE.value ); 
        this.inputE.value = value.textContent;
        this.selectE.innerHTML = '';
        this.selectE.style.display = 'none';       
      });
    }

    
    /**
     * Тестовый обработчик, который собирает данные масисива
     * option и отправляет на сервер для записи данного JSON 
     * в файл "file/test.txt"
     * @param {} param_name - Строка для поиска по названию
     * @returns {}
     */

    gettoJSON(){

      let arrData = [];
      let nodes =  this.selectE.querySelectorAll('option');

      for(let node of nodes){
        let arr = {'value': node.value, 'textContent' : node.textContent };
        arrData.push(arr);
      }

      let opt = {
        method: 'POST',
        headers: {
          'Content-Type' : 'application/json'
        },
        body: JSON.stringify(arrData)
        //body: JSON.stringify({'test': 'test'})

      };

      fetch('/test/writeToFile',opt).
      then((response)=>{
       return response.text();
      })
      .then((data)=>{
        console.log('результат запроса:');
        console.log(data)
      })
      .catch((err)=>{
        console.log(err);
      })

    }

  }


  //let EcoActFormObj = new EconomicActivityForm('input_okvedId','request_okvedId');

  //EcoActFormObj.inputElisteners();

  let EcoActFormObj2 = new EconomicActivityForm('input_okvedId1','request_okvedId1');

  EcoActFormObj2.modifyinputElisteners();
  EcoActFormObj2.selectEListeners();



})();


(function () {

  class FormNew {

    constructor() {
      this.validator = new ValidatorModify();

      this.wrapper_form = document.getElementById('wrapper_form');

      this.step1 = document.getElementById("step1");

      this.step2 = document.getElementById("step2");

      this.step3 = document.getElementById("step3");

      this.step4 = document.getElementById("step4");

      this.post_data = [];

      this.all_steps = [
        this.step1,
        this.step2,
        this.step3,
        this.step4
      ]

      this.num_step = 0;

      this.active_stage = this.step1;

      this.addAllListeners();
      //скрыть - показать форму руководитель/доверенное лицо
      this.hideInputForms('ownerType', 'form_representative', ['2']);

      //показать форму физического лица
      this.hideInputForms('select_organizational_form', 'form_physical_person', ['15']);
      //индивидуальный предпрениматель
      this.hideInputForms('select_organizational_form', 'individual_entrepreneur_form', ['8', '22050018']);

      this.hideInputFormsEntity('select_organizational_form', 'contact_details_head', ['15', '8', '22050018', '']);

      this.toggleCoincidenceWithEegAddr();

    
    }


    stepBystep() {
      let step_data;

      this.validator.setCollectAndStep(this.active_stage, this.num_step);

      if (step_data = this.validator.validate()) {
        ++this.num_step;
        
        if(this.num_step >= this.all_steps.length ){this.num_step = 0;}

        this.all_steps.forEach((elem, index) => {
          
          if (index == this.num_step ){
            this.active_stage = elem;
            $(elem).show();
          }else{
            $(elem).hide();
          }
        })
              
      }else{
        console.log('нит');
        return;
      }


      
    }

    addAllListeners() {
      let button = document.getElementById('test_steps');
      button.addEventListener('click', () => {
        //this.stepBystep();
      })
    
    }

    toggleSameAddresses() {

      $('#same_addresses').change(function () {
        $('#direction_of_documents').slideToggle('400');
      });

    }


    toggleCoincidenceWithEegAddr() {

      let coincidence_with_reg_addr = document.getElementById('coincidence_with_reg_addr');
      let KLADR_form2_wrapper = document.getElementById('KLADR_form2_wrapper');
      let elem_KLADR_form2 = KLADR_form2_wrapper.querySelectorAll('input');
      coincidence_with_reg_addr.addEventListener('change', ()=>{

        $(KLADR_form2_wrapper).slideToggle('400');
        for(let i = 0; i < elem_KLADR_form2.length; i++){
          elem_KLADR_form2[i].toggleAttribute('disabled');
        }
      });
      
      //toggleAttribute('disabled');

      // $('#coincidence_with_reg_addr').on('change', () => {
      //   $('#KLADR_form2_wrapper').slideToggle('400');
      // });
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



  }

  let wrapper_form = new FormNew();



})();




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
     * Использовал один раз для того что бы сформировать файл массива учреждений
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

  let EcoActFormObj2 = new EconomicActivityForm('input_okvedId1','request_okvedId1');
  EcoActFormObj2.modifyinputElisteners();
  EcoActFormObj2.selectEListeners();



})();

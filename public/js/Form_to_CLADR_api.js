//обработчики формы которая выгружает данные из кладр

(function () {

  class FormForCLADR {

    constructor(form) {
      this.form = document.getElementById(form);
      this.clearButton  = this.form.lastElementChild;
      this.inputElem;
      this.parentInputElem;
      this.parents;
      this.regionId;
      this.districtId;
      this.cityId;
      this.streetId;
      this.buildingId;
      this.clearInputs();

    }


    inputRegion(elem) {

      let inputElem = document.getElementById(elem);
      //let subElem = inputElem.parentElement
      let parentInputElem = (inputElem.parentElement).parentElement;

      //поиск по буквам
      inputElem.addEventListener('input', () => {

        let query = inputElem.value;
        //получаю терр. ед из разметки
        let contentType = inputElem.name;
        this.inputElem = inputElem;
        this.parentInputElem = parentInputElem;

        // метод обработки val - написать функцию, которая будет как то обрабатывать данные val
        let data_query = this.getDataQuery(query, contentType);
        this.sendAJAX(data_query);

        //this.sendAJAX(query, contentType);
      });

      //очистить поле с выборкой
      inputElem.addEventListener('blur', () => {
        //костыльчерез settimeout 
        setTimeout(() => {
          this.parentInputElem.lastElementChild.innerHTML = '';
        }, 350);
      })

    }


    /**
     * Отправляем AJAX
     *
     * @param {string} query - Строка для поиска по названию
     * @param {string} contentType - Тип возвращаемых объектов (region, district, city, street, building)
     *
     * @returns {}
     */

    sendAJAX(data_query) {

      let url = '/test/tocladrform';

      // let myHeaders = new Headers();
      // myHeaders.append("Origin", "http://energolk");

      let opt = {
        method: 'POST',
        headers: {
          //'Content-Type': 'text/html; charset=utf-8',
          //'Content-Type': 'application/x-www-form-urlencoded'
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data_query)
      };

      let promise = fetch(url, opt);

      promise
        .then((response) => {
          //с сервера возвращаю JSON
          //return response.text();
          return response.json();
        })
        .then((data) => {
          //тут отрисовываю новые элементы
          this.renderSelectForm(data.result);
        })
        .catch((err) => {
          console.log(err);
        })
    }

    /**
     * По возвращению AJAX данных функция отрисовывает данные
     *
     * @param {Array} cladr_array - Данные возвращенные из Кладр
     * @param {string} input -  id input
     * @returns {}
     */
    renderSelectForm(cladr_array) {

      if (cladr_array.length <= 1) {
        return;
      }

      let last_div = this.parentInputElem.lastElementChild;
      last_div.innerHTML = '';

      let select = document.createElement('select');
      select.className = 'custom-select custom-select-sm';
      select.size = "7";

      //при выборе значения (район, город, улица ...) поле выборки очищается
      //и выбранные данные помещаются в инпут
      select.addEventListener('change', () => {
        //1. удалить выпадающее меню
        this.clearElem(last_div);
        //console.log(select.value);
        let value = JSON.parse(select.value);
        //сохраняю днанные о родительских элементах полученной терр. единицы
        this.parents = value.parents;
        let row = value.name + ' ' + value.type;
        //устанавливаю id терр. единицы в соответствубщее поле
        let area = value.contentType + 'Id';
        this[area] = value.id;

        //2.значение меню записать в поле инпут
        this.inputElem.value = row;
        //3.Заполнить другие input
        $(this.clearButton).show();
        this.fillEmptyInputs();
      });

      for (let i = 0; i < cladr_array.length; i++) {

        if (i == 0) {
          continue;
        }
        let row = cladr_array[i];
        let option = document.createElement('option');
        option.textContent = row.name + ' ' + row.type;
        let test_row = JSON.stringify(row);
        option.value = test_row;
        select.append(option);
      }
      last_div.append(select);
    }

    /**
     * Принимает данные о запросе к КЛАДР и формирует из них массив для передачи методу AJAX
     *
     * @param {string} query - Строка для поиска по названию
     * @param {string} contentType - Тип возвращаемых объектов (region, district, city, street, building)
     *
     * @returns {Array}
     */
    getDataQuery(query, contentType) {

      let data = {

        'contentType': contentType,
        'query': query,
        'regionId': this.regionId,
        'districtId': this.districtId,
        'cityId': this.cityId
      };

      return data;

    }

    clearElem(elem) {
      elem.innerHTML = '';
    }


    fillEmptyInputs() {
      //функция вызывается при событии change любого из инпутов
      //1. получить все инпуты
      let arr_inputs = this.form.querySelectorAll('input');
      //console.log(arr_inputs.length);
      //2. Определить родительские узлы -
      this.parents.forEach((item, index) => {

      });

      //3. каждый node-узел нужео сравнить с parents
      for (let node of arr_inputs) {
        //если нет значения в node-узеле
        if(node.value == 'street'){
          return;
        }
        if (node.value == ''){
          let parent_type = node.name;
          for(let i = 0; i < this.parents.length; i++ ){

            if(parent_type == this.parents[i].contentType ){
              node.value = this.parents[i].name + ' ' + this.parents[i].type;
              let name = this.parents[i].contentType + 'Id';
              this[name] = this.parents[i].id;
            }
          }
        } else {
          //console.log(node.value + ' Значение есть!')
        }
      }
    }

    clearInputs(){

      this.clearButton.addEventListener('click',()=>{

        let inputsNodes = this.form.querySelectorAll('input');

        for(let node of inputsNodes){
          node.value = '';

        }
        this.regionId='';
        this.districtId='';
        this.cityId='';
        this.streetId='';
        this.buildingId='';

        $(this.clearButton).hide();

      })


    }

  }

  let fObj = new FormForCLADR('KLADR_form');

  fObj.inputRegion('cladr_input_1');

  fObj.inputRegion('cladr_input_2');

  fObj.inputRegion('cladr_input_3');

  fObj.inputRegion("cladr_input_4");

  fObj.inputRegion("cladr_input_5");


  let fObj1 = new FormForCLADR('KLADR_form2');

  fObj1.inputRegion('cladr2_input_1');

  fObj1.inputRegion('cladr2_input_2');

  fObj1.inputRegion('cladr2_input_3');

  fObj1.inputRegion("cladr2_input_4");

  fObj1.inputRegion("cladr2_input_5");

})();

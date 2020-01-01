<p>Форма подгружающая данные из кладр динамически</p>
<div class="container wrapp_ex">
    <div class="form-header" >
        Адрес места жительства (регистрации)
    </div>
    <div class="hold_ex" id="form_with_map">
        <div id="KLADR_form" class="form_ex js-form-address-map" >

            <div id="div_cladr1" class="input_hold">
                <label class="label">Область</label>
                <div class="input">
                    <input id="cladr_input_1" type="text" name="region">
                </div>
                <!-- скрытое поле для вывода результата -->
                <div id="spisok"></div>
            </div>

            <div id="div_cladr2" class="input_hold">
                <label class="label">Регион / район</label>
                <div class="input">
                    <input id="cladr_input_2" type="text" name="district">
                </div>
                <div id="spisok1"></div>
            </div>
            


            <div id="div_cladr3" class="input_hold">
                <label class="label">Город / н. п.</label>
                <div class="input">
                    <input id="cladr_input_3" type="text" name="city" value="">
                </div>
                <div id="spisok1"></div>
            </div>


            <div id="div_cladr4" class="input_hold">
                <label class="label">Улица</label>
                <div class="input">
                    <input id="cladr_input_4" type="text" name="street" value="">
                </div>
                <div id="spisok1"></div>
            </div>


            <div id="div_cladr5" class="input_hold">
                <label class="label">Дом</label>
                <div class="input input_small">
                    <input id="cladr_input_5" type="text" name="building" value="">
                </div>
                <div id="spisok1"></div>
            </div>
            
            <div id="clear_button" class="input_hold" style="display: none">
                <label class="label"></label>
                <div class="input input_small" >
                    <!--<a href="#" id="js-form-address-map-clear" >Сбросить форму</a> -->
                    <button  type="button">Очистить форму</button>
                </div>
            </div>
        </div>

    </div>
    <div id="map" class="map_ex"></div>
</div>
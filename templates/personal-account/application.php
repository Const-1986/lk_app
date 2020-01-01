<div id='wrapper_form' class='container'>

    <div id="step1" class="container">
        <form id="form_step_1" action="/personal-account/application" method="post">

            <div class="container">
                <span>Выберите организационно-правовую форму: <s>*</s></span>
                <select name="select_organizational_form" id="select_organizational_form" class="custom-select custom-select-sm">
                    <option selected value="">-- выберите из списка --</option>
                    <option value="15" data-group="1363">(Физ. лицо) Физическое лицо</option>
                    <option value="8" data-group="12672107">(ИП) Индивидуальный предприниматель</option>
                    <option value="25" data-group="1364">(ОАО) Открытое акционерное общество</option>
                    <option value="26" data-group="1364">(ООО) Общество с ограниченной ответственностью</option>
                    <option value="17" data-group="1364">(ЗАО) Закрытое акционерное общество</option>
                    <option value="22050018" data-group="12672107">(КФХ-ИП) Крестьянское фермерское хозяйство - ИП
                    </option>
                    <option value="29" data-group="1364">(АНО) Автономная некоммерческая организация</option>
                    <option value="7" data-group="1364">(АО) Акционерное общество</option>
                    <option value="18" data-group="1364">(А) Ассоциация</option>
                    <option value="21600561" data-group="1364">(ГК) Государственная компания</option>
                    <option value="20918371" data-group="1364">(ГК) Государственная корпорация</option>
                    <option value="1" data-group="1364">(ГУП) Государственное унитарное предприятие</option>
                    <option value="23" data-group="1364">(ГУ) Государственное учреждение</option>
                    <option value="49640388" data-group="1364">(ЖСНТ) Жилищно-садоводческое некоммерческое товарищество
                    </option>
                    <option value="50288800" data-group="1364">(ЖСК) Жилищно-строительный кооператив</option>
                    <option value="49640608" data-group="1364">(ЗАКП) Закрытая автостоянка коллективного пользования
                    </option>
                    <option value="21600573" data-group="1364">(КО) Казачье общество</option>
                    <option value="20918360" data-group="1364">(КУП) Казенное унитарное предприятие</option>
                    <option value="49804076" data-group="1364">(ГСК) Кооператив (коммерческий)</option>
                    <option value="6" data-group="1364">(ГСК, ПГСК, ПК) Кооператив (некоммерческий)</option>
                    <option value="20918349" data-group="1364">(КФХ-Юр.л.) Крестьянское фермерское хозяйство - Юр.лицо
                    </option>
                    <option value="49640586" data-group="1364">(МРО, МПРО) Местная религиозная организация, Местная
                        Православная
                        Религиозная организация
                    </option>
                    <option value="20918364" data-group="1364">(МКУП) Муниципальное казенное унитарное предприятие
                    </option>
                    <option value="31226288" data-group="1364">(МКУ) Муниципальное казенное учреждение</option>
                    <option value="32" data-group="1364">(МО) Муниципальное образование</option>
                    <option value="20" data-group="1364">(МУП) Муниципальное унитарное предприятие</option>
                    <option value="5" data-group="1364">(МУ) Муниципальное учреждение</option>
                    <option value="35" data-group="1364">(НП) Некоммерческое партнерство</option>
                    <option value="46229104" data-group="1364">(НП) Некоммерческое партнерство - ГСК</option>
                    <option value="46229062" data-group="1364">(НП) Некоммерческое партнерство - Лодочные кооперативы,
                        жилые
                        дома
                    </option>
                    <option value="538914270" data-group="1364">(НАО) Непубличное акционерное общество</option>
                    <option value="27" data-group="1364">(ОО) Общественная организация</option>
                    <option value="20918380" data-group="1364">(ОД) Общественное движение</option>
                    <option value="20918381" data-group="1364">(ОУ) Общественное учреждение</option>
                    <option value="20918386" data-group="1364">(ОРО) Общественные религиозные организации</option>
                    <option value="20918356" data-group="1364">(ОДО) Общество с дополнительной ответственностью</option>
                    <option value="21600568" data-group="1364">(ОМН) Община малочисленных народов</option>
                    <option value="20918389" data-group="1364">(ОКФХ) Объединения крестьянских (фермерских) хозяйств
                    </option>
                    <option value="20918382" data-group="1364">(ООС) Организация общественной самодеятельности</option>
                    <option value="31697938" data-group="1364">(ОИВ) Органы исполнительной власти</option>
                    <option value="20918385" data-group="1364">(ПП) Политическая партия</option>
                    <option value="20918350" data-group="1364">(ПТ,НТ,НФУ) Полное товарищество, простое товарищество,
                        некоммерческое товарищество
                    </option>
                    <option value="21600556" data-group="1364">(ПК) Потребительская кооперация</option>
                    <option value="20918394" data-group="1364">(Представит) Представительство</option>
                    <option value="52416166" data-group="1364">(ПАО) Публичное акционерное общество</option>
                    <option value="51" data-group="1364">(СТ,ОТ,ДТ,СНТ,НСТ,ДНТ,СОТ,НТ) Садоводческие, огороднические и
                        дачные
                        некоммерческие товарищества
                    </option>
                    <option value="49640554" data-group="1364">(СО) Садоводческое общество</option>
                    <option value="49640434" data-group="1364">(СПМД) Собственники помещений в многоквартирном доме
                    </option>
                    <option value="20918374" data-group="1364">(Союз) Союз</option>
                    <option value="20918387" data-group="1364">(ТОС) Территориальные общественное самоуправление
                    </option>
                    <option value="20918352" data-group="1364">(ТВ) Товарищество на вере</option>
                    <option value="38" data-group="1364">(ТСЖ) Товарищество собственников жилья</option>
                    <option value="22" data-group="1364">(ФГУП) Федеральное государственное унитарное предприятие
                    </option>
                    <option value="20918369" data-group="1364">(ФГУ) Федеральное государственное учреждение</option>
                    <option value="20918359" data-group="1364">(ФКУП) Федеральное казенное унитарное предприятие
                    </option>
                    <option value="31387402" data-group="1364">(ФКУ) Федеральное казеное учреждение</option>
                    <option value="56" data-group="1364">(Филиал) Филиал</option>
                    <option value="34" data-group="1364">(Фонд) Фонд</option>
                    <option value="20918367" data-group="1364">(ЧУ) Частное учреждение</option>
                </select>
                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                <br>
                <div>
                    <div class="input-select">
                        <span>Руководитель/Представитель: <s>*</s></span><br>
                        <select id="ownerType" name="ownerType" required="" class="custom-select custom-select-sm">
                            <option selected value="">-- выберите из списка --</option>
                            <option data-group="1" value="1">Руководитель</option>
                            <option data-group="2" value="2">Представитель</option>
                        </select>
                        <!--
                              --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                    </div>
                </div>
                <br>
                <div style="margin-top:-5px; font-size:11px;">
                    Если Вы являетесь Заявителем, то выберите «Руководитель», если Вы являетесь представителем
                    Заявителя, то
                    выберите «Представитель» (в данном случае необходимо наличие доверенности, скан-копию которой Вам
                    необходимо
                    прикрепить на Шаге 4 в поле «Прочее»)
                </div>

            </div>

            <div class="container" id="org_name" style="display: none">
                <div>
                    <span>Наименование организации: <s>*</s></span>
                    <!--
                            --><input type="text" class="form-control-sm" name="organizationname" class="form-control-sm" disabled>
                    <!--
                            --><span class="is-error" class="badge" style="display: none;">Поле обязательно для
                        заполнения</span>
                    <!--
                            --><span class="is-error" class="badge" style="display: none;">Максимальная длина поля
                        симв.</span>
                </div>
            </div>


            <div class="container">
                <div class="container">
                    <div id='form_representative' style="display: none">
                        <div class="form-header">
                            Ф.И.О. представителя
                        </div>

                        <div class="form-row">
                            <div class="input-text">
                                <span>Фамилия:</span>
                                <input type="text" class="form-control-sm" name="surnameAgent" ng-model="formData.surnameAgent" class="form-control-sm" disabled>
                                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-text">
                                <span>Имя:</span>
                                <input type="text" class="form-control-sm" name="nameAgent" ng-model="formData.nameAgent" class="form-control-sm" disabled>
                                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-text">
                                <span>Отчество:</span>

                                <input type="text" class="form-control-sm" name="midnameAgent" ng-model="formData.midnameAgent" class="form-control-sm" disabled>
                                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                            </div>
                        </div>

                        <div class="form-header">
                            Доверенность
                        </div>

                        <div class="form-row">
                            <div class="input-text">
                                <span>Номер:</span>
                                <!--
                                          --><input type="text" class="form-control-sm" name="nomerAgent" ng-model="formData.nomerAgent" class="form-control-sm" disabled>
                                <!--
                                          --><span class="is-error" style="display: none;">Поле обязательно для
                                    заполнения</span>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="input-text">
                                <span>Дата:</span>
                                <input type="date" name="nomerAgentDate" class="form-control-sm" id="dp1573555800818" disabled>
                                <span class="is-error" ng-show="upform21.nomerAgentDate.$error.nomerAgentDate" style="display: none;">Поле
                                    обязательно для заполнения</span>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- форма физлица -->
                <div id="form_physical_person" class="container" style="display: none; ">
                    <div class="form-header">
                        Укажите контактные данные заявителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Фамилия: <s>*</s></span>
                            <input class="form-control-sm" type="text" name="surname" value="" disabled>
                            <span class="is-error" style="display: none;">Поле обязательно для
                                заполнения</span>
                            <span class="is-error" style="display: none;">Максимальная длина поля
                                симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Имя <s>*</s></span>
                            <input class="form-control-sm" type="text" name="name" ng-model="formData.name" disabled>
                            <span class="is-error" ng-show="upform21.name.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <span class="is-error" ng-show="upform21.name.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Отчество: <s>*</s></span>
                            <input class="form-control-sm" type="text" name="midname" ng-model="formData.midname" disabled>
                            <span class="is-error" ng-show="upform21.midname.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <span class="is-error" ng-show="upform21.midname.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-header">
                        Основной документ, удостоверяющий личность гражданина РФ
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Вид документа: <s>*</s></span>
                            <!--
                            --><input class="form-control-sm" type="text" name="passport.title"  class="not-clear ng-pristine ng-valid" disabled>
                            <!--
                            --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Серия: <s>*</s></span>
                            <!--
                            --><input class="form-control-sm" type="text" name="passport.serial" ng-model="formData.passport.serial" ui-mask="'99 99'" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['passport.serial'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер: <s>*</s></span>
                            <!--
                            --><input class="form-control-sm" type="text" name="passport.number" ng-model="formData.passport.number" ui-mask="'999 999'" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['passport.number'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Дата выдачи: <s>*</s></span>
                            <!--
                            --><input class="form-control-sm" type="date" name="passport.date" ng-model="formData.passport.date" id="dp1573555800819" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['passport.date'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Выдан кем: <s>*</s></span>
                            <!--
                            --><input class="form-control-sm" type="text" name="passport.where" ng-model="formData.passport.where" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['passport.where'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                            --><span class="is-error" ng-show="upform21['passport.where'].$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-header">
                        Реквизиты потребителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>ИНН (<a href="https://service.nalog.ru/inn.do" target="_blank">определить</a>):</span>
                            <!--
                            --><input class="form-control-sm" type="text" ui-mask="'999999999999'" name="detail.inn" ng-model="formData.detail.inn" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['detail.inn'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                            --><span class="is-error" ng-show="upform21['detail.inn'].$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>СНИЛС:</span>
                            <!--
                            --><input class="form-control-sm" type="text" ui-mask="'99999999999'" name="detail.snils" ng-model="formData.detail.snils" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform21['detail.snils'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                            --><span class="is-error" ng-show="upform21['detail.snils'].$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                </div>


                <!-- \\форма физлица -->

                <!-- форма ИП -->

                <div id="individual_entrepreneur_form" class="container" style="display: none">

                    <div class="form-header">
                        Укажите контактные данные заявителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Фамилия: <s>*</s></span>
                            <!--
                                    --><input type="text" class="form-control-sm" name="surname" value="" disabled>
                            <!--
                                    --><span class="is-error" style="display: none;">Поле обязательно для
                                заполнения</span>
                            <!--
                                    --><span class="is-error" style="display: none;">Максимальная длина поля
                                симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Имя: <s>*</s></span>
                            <!--
                                    --><input type="text" class="form-control-sm" name="name" ng-model="formData.name" disabled>
                            <!--
                                    --><span class="is-error" ng-show="upform21.name.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                    --><span class="is-error" ng-show="upform21.name.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Отчество: <s>*</s></span>
                            <!--
                                    --><input type="text" class="form-control-sm" name="midname" ng-model="formData.midname" disabled>
                            <!--
                                    --><span class="is-error" ng-show="upform21.midname.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                    --><span class="is-error" ng-show="upform21.midname.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>


                    <div class="form-header">
                        Реквизиты потребителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>ИНН: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" ui-mask="'9999999999'" name="urdetail.inn" ng-model="formData.urdetail.inn" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.inn'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Наименование документа: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.title" ng-model="formData.urdetail.title" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.title'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Дата выдачи: <s>*</s></span>
                            <!--
                            --><input type="date" name="urdetail.date" ng-model="formData.urdetail.date" ui-date="{maxDate:'+0d'}" class="ng-pristine ng-valid hasDatepicker" id="dp1573555800823" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.date'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер ОГРН: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.ogrn" ui-mask="'9-99-99-99-99999-9'" disabled>
                            <!--
                            --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <!-- <input type="hidden" name="urdetail.bik" ng-model="formData.urdetail.bik"  disabled> -->
                            <span>Наименование банка, БИК: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" autocomplete="off" model="formData.urdetail.bik" disabled>
                            <!--
                            --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер расчетного счета: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.account" ng-model="formData.urdetail.account" ui-mask="'9999-9999-9999-9999-9999'" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.account'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                </div>

                <!-- \\форма ИП -->

                <!-- форма юр.лица -->
                <!-- контактные данные руководителя юрлица -->
                <div class="container" id="contact_details_head" style="display: none">
                    <div class="form-header">
                        Укажите контактные данные руководителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Фамилия руководителя: <s>*</s></span>
                            <!--
                                --><input type="text" class="form-control-sm" name="bossLastName" value="" ng-model="formData.bossLastName" disabled>
                            <!--
                                --><span class="is-error" ng-show="upform23.bossLastName.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                --><span class="is-error" ng-show="upform23.bossLastName.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Имя руководителя: <s>*</s></span>
                            <!--
                                --><input type="text" class="form-control-sm" name="bossFirstName" value="" ng-model="formData.bossFirstName" disabled>
                            <!--
                                --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                --><span class="is-error" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Отчество руководителя: <s>*</s></span>
                            <!--
                                --><input type="text" class="form-control-sm" name="bossMidName" value="" ng-model="formData.bossMidName" disabled>
                            <!--
                                --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                --><span class="is-error" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Должность руководителя: <s>*</s></span>
                            <!--
                                --><input type="text" class="form-control-sm" name="bosspost" value="" ng-model="formData.bosspost" disabled>
                            <!--
                                --><span class="is-error" ng-show="upform23.bosspost.$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                            <!--
                                --><span class="is-error" ng-show="upform23.bosspost.$error.len" style="display: none;">Максимальная длина поля симв.</span>
                        </div>
                    </div>

                    <div class="form-header">
                        Реквизиты потребителя
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>ИНН: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" ui-mask="'9999999999'" name="urdetail.inn" ng-model="formData.urdetail.inn" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.inn'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Наименование документа: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.title" ng-model="formData.urdetail.title" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.title'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Дата выдачи: <s>*</s></span>
                            <!--
                            --><input type="date" name="urdetail.date" ng-model="formData.urdetail.date" ui-date="{maxDate:'+0d'}" class="ng-pristine ng-valid hasDatepicker" id="dp1573555800823" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.date'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер ОГРН: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.ogrn" ui-mask="'9-99-99-99-99999-9'" disabled>
                            <!--
                            --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер КПП: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.kpp" ng-model="formData.urdetail.kpp" ui-mask="'99-99-99-999'" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.kpp'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <!-- <input type="hidden" name="urdetail.bik" ng-model="formData.urdetail.bik"  disabled> -->
                            <span>Наименование банка, БИК: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" autocomplete="off" model="formData.urdetail.bik" disabled>
                            <!--
                            --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер расчетного счета: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.account" ng-model="formData.urdetail.account" ui-mask="'9999-9999-9999-9999-9999'" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.account'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-text">
                            <span>Номер ОКВЭД: <s>*</s></span>
                            <!--
                            --><input type="text" class="form-control-sm" name="urdetail.okved" ng-model="formData.urdetail.okved" disabled>
                            <!--
                            --><span class="is-error" ng-show="upform23['urdetail.okved'].$error.notempty" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                    </div>

                </div>

                <!-- \\форма юр.лица -->
                <!-- HH -->


            </div>

        </form>
    </div>

    <div id="step2" class="container"  >

        <div class="container">
            <div id="form_with_map">
                <div id="KLADR_form" class="form_ex js-form-address-map">
                    <div class="form-header">
                        Адрес места жительства (регистрации)
                    </div>
                    <div id="div_cladr1" class="input_hold">
                        <label class="label">Область</label>
                        <div>
														<input class="form-control-sm" id="cladr_input_1" type="text" name="region">
														<span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                        <!-- скрытое поле для вывода результата -->
                        <div></div>
                    </div>

                    <div id="div_cladr2" class="input_hold">
                        <label class="label">Регион / район</label>
                        <div class="input">
														<input class="form-control-sm" id="cladr_input_2" type="text" name="district">
														<span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                        <div></div>
                    </div>

                    <div id="div_cladr3" class="input_hold">
                        <label class="label">Город / н. п.</label>
                        <div class="input">
														<input class="form-control-sm" id="cladr_input_3" type="text" name="city" value="">
														<span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                        <div></div>
                    </div>


                    <div id="div_cladr4" class="input_hold">
                        <label class="label">Улица</label>
                        <div class="input">
														<input class="form-control-sm" id="cladr_input_4" type="text" name="street" value="">
														<span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                        <div></div>
                    </div>

                    <div id="div_cladr5" class="input_hold">
                        <label class="label">Дом</label>
                        <div class="input input_small">
														<input class="form-control-sm" id="cladr_input_5" type="text" name="building" value="">
														<span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                        </div>
                        <div></div>
                    </div>

                    <div id="clear_button" class="input_hold" style="display: none">
                        <label class="label"></label>
                        <div class="input input_small">
                            <!--<a href="#" id="js-form-address-map-clear" >Сбросить форму</a> -->
                            <button type="button">Очистить форму</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container">
            <div>
                <span>Если Вы не находите в одном из выпадающих списков нужной записи, заполните ниже приведенную форму,
                    указав полный адрес (субъект РФ, Район/Город, населенный пункт, улица, дом, корпус,
                    квартира):</span>
                <br>
                <textarea class="form-control" style="min-width: 100%" name="address.other"></textarea>
                <!--
                        --><span style="display: none;">Максимальная длина поля симв.</span>
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Телефон мобильный: <s>*</s></span>
                <!--
                        --><input type="text" class="form-control-sm" name="address.phonemobile" ui-mask="'+7-999-999-99-99'">
                <!--
                        --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Телефон городской:</span>
                <!--
                        --><input type="text" class="form-control-sm" name="address.phone" ui-mask="'+7-999-999-99-99'">
                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            Адрес направления документов
        </div>

        <div class="container">
            <label class="input-checkbox">
                <input id="coincidence_with_reg_addr" type="checkbox">
                <span>Совпадает с адресом регистрации</span>
            </label>
        </div>

        <div id="KLADR_form2_wrapper" class="container">
            <div class="form-header">
							  Адрес направления документов
            </div>

            <div id="form_with_map">
                <div id="KLADR_form2">

                    <div id="div_cladr1" class="input_hold">
                        <label class="label">Область</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr2_input_1" type="text" name="region" >
                        </div>
                        <!-- скрытое поле для вывода результата -->
                        <div></div>
                    </div>

                    <div id="div_cladr2" class="input_hold">
                        <label class="label">Регион / район</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr2_input_2" type="text" name="district" >
                        </div>
                        <div></div>
                    </div>


                    <div id="div_cladr3" class="input_hold">
                        <label class="label">Город / н. п.</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr2_input_3" type="text" name="city" value="" >
                        </div>
                        <div></div>
                    </div>


                    <div id="div_cladr4" class="input_hold">
                        <label class="label">Улица</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr2_input_4" type="text" name="street" value="" >
                        </div>
                        <div></div>
                    </div>


                    <div id="div_cladr5" class="input_hold">
                        <label class="label">Дом</label>
                        <div class="input input_small">
                            <input class="form-control-sm" id="cladr2_input_5" type="text" name="building" value=""  >
                        </div>
                        <div></div>
                    </div>

                    <div id="clear_button" class="input_hold" style="display: none">
                        <label class="label"></label>
                        <div class="input input_small">
                            <!--<a href="#" id="js-form-address-map-clear" >Сбросить форму</a> -->
                            <button type="button">Очистить форму</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div id="step3" class="container" >


        <div class="container">
            <p>Информация по объекту присоединения</P>
        </div>

        <div class="container">
            <span>Причина обращения: <s>*</s></span>
            <select class="custom-select custom-select-sm" name="request.reason">
                <option value="">-- выберите из списка --</option>
                <!-- ngRepeat: i in list -->
                <option value="46473302">Временное присоединение</option>
                <option value="448191472">Новое технологическое присоединение посредством перераспределения
                    максимальной мощности
                </option>
                <option value="13177894">Новый потребитель (Новое присоединение)</option>
                <option value="13177895">Увеличение мощности</option>
                <option value="448191510">Увеличение мощности посредством перераспределения максимальной мощности
                </option>
            </select>
            <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
        </div>


        <div class="container">
            <div class="input-text">
                <span>Наименование объекта: <s>*</s></span>
                <br>
                <input type="text" class="form-control-sm" name="request.objectTitle">
                <span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
                <span class="is-error" style="display: none;">Максимальная длина поля симв.</span>
                <br>
                <div class="hint">Заполняется в соответствии с документом, подтверждающим право собственности</div>
            </div>
        </div>

        <div class="container">
            <div class="input-select">
                <span>Планируется заключить договор: <s>*</s></span>
                <!--
                    --><select class="custom-select custom-select-sm" name="request.contractType">
                    <option value="">-- выберите из списка --</option>
                    <option value="1">Энергоснабжения</option>
                    <option value="2">Купли-продажи (поставки) электроэнергии</option>
                </select>
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-select">
                <span>Наименование энергосбытовой организации: <s>*</s></span>
                <!--
                    --><select class="custom-select custom-select-sm" name="request.powerCompany">
                    <option value="">-- выберите из списка --</option>
                    <option value="46209926">ПАО " ТНС энерго Кубань"</option>
                    <option value="46209958">АО "НЭСК"</option>
                    <option value="162500352">иное</option>
                </select>
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Наименование энергосбытовой организации: <s>*</s></span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.powerCompanyCustom">
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
            <div class="hint">Заполняется в случае если необходимая энергосбытовая организация отсутсутвует в списке
            </div>
        </div>

        <div>
            Договор энергоснабжения (купли – продажи (поставки) электрической энергии) (указать при наличии)
        </div>

        <div class="container">
            <div class="input-text">
                <span>Номер:</span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.dogovorNomer">
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Дата:</span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.dogovorDate" readonly="" id="dp1573556522314">
            </div>
        </div>

        <div class="container">
            Адрес размещения объекта:
        </div>

        <div class="container">
            <div id="form_with_map">

                <div id="KLADR_form">

                    <div id="div_cladr1" class="input_hold">
                        <label class="label">Область</label>
                        <div>
                            <input class="form-control-sm" id="cladr_input_1" type="text" name="region">
                        </div>
                        <!-- скрытое поле для вывода результата -->
                        <div></div>
                    </div>

                    <div id="div_cladr2" class="input_hold">
                        <label class="label">Регион / район</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr_input_2" type="text" name="district">
                        </div>
                        <div></div>
                    </div>

                    <div id="div_cladr3" class="input_hold">
                        <label class="label">Город / н. п.</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr_input_3" type="text" name="city" value="">
                        </div>
                        <div></div>
                    </div>


                    <div id="div_cladr4" class="input_hold">
                        <label class="label">Улица</label>
                        <div class="input">
                            <input class="form-control-sm" id="cladr_input_4" type="text" name="street" value="">
                        </div>
                        <div></div>
                    </div>

                    <div id="div_cladr5" class="input_hold">
                        <label class="label">Дом</label>
                        <div class="input input_small">
                            <input class="form-control-sm" id="cladr_input_5" type="text" name="building" value="">
                        </div>
                        <div></div>
                    </div>

                    <div id="clear_button" class="input_hold" style="display: none">
                        <label class="label"></label>
                        <div class="input input_small">
                            <!--<a href="#" id="js-form-address-map-clear" >Сбросить форму</a> -->
                            <button type="button">Очистить форму</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="container">
            Параметры подключения
        </div>

        <div class="container">
            <div class="input-text">
                <span>Мощность по 1 категории, кВт: <s>*</s></span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.powerCat1">
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Мощность по 2 категории, кВт: <s>*</s></span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.powerCat2">
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-text">
                <span>Мощность по 3 категории, кВт: <s>*</s></span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.powerCat3">
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="il-item fst">
                <span>Максимальная мощность, кВт: <s>*</s></span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.maxPower.total" placeholder="например: 1234.56">
                <!--
                    --><span class="is-error">
                    <!--
                    --><span style="display: none;">Должна быть равна сумме мощностей при поэтапном подключении</span>
                    <!--
                    --><span style="display: none;">Должна быть не больше 150 кВт</span>
                    <!--
                    --><span style="display: none;">Должна быть равна сумме мощностей по трем категориям</span>
                    <!--
                    --><span style="display: none;">Формат: ####.##</span>
                    <!--
                    --><span style="display: none;">Поле обязательно для заполнения</span>
                </span>
            </div>
            <div class="il-item">
                <span>в том числе существующая:</span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.maxPower.exists" placeholder="например: 1234.56">
                <!--
                    --><span class="is-error" style="display: none;">Формат: ####.##</span>
            </div>
        </div>
        <div class="container">
            <div class="input-select">
                <span>Уровень напряжения, кВ: <s>*</s></span>
                <!--
                    --><select class="custom-select custom-select-sm" name="request.voltageLevel">
                    <option value="">-- выберите из списка --</option>
                    <option value="12572110">0,22</option>
                    <option value="12572109">0,4</option>
                    <option value="13155709">6-10</option>
                    <option value="20470694">27,5</option>
                    <option value="13155720">35</option>
                    <option value="13155710">110</option>
                </select>
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <div class="input-select">
                <span>Характер нагрузки: <s>*</s></span>
                <!--
                    --><select class="custom-select custom-select-sm" name="request.typeCapacity">
                    <option value="">-- выберите из списка --</option>
                    <option value="1">Бытовая</option>
                    <option value="2">Производственная</option>
                    <option value="3">Совмещенная</option>
                    <option value="4">Генерация</option>
                </select>
                <!--
                    --><span class="is-error" style="display: none;">Поле обязательно для заполнения</span>
            </div>
        </div>

        <div class="container">
            <span class="badge ">Вид экономической деятельности: <s class="okved-req">*</s></span>
            </br>
            <span class="badge "> Введите название экономич деятельности: </span>
            <input class="form-control-sm" id="input_okvedId1" type="text" placeholder="Введите не менее двух символов"><br>
            <select class="custom-select custom-select-sm" id="request_okvedId1" name="request.okvedId" size="10" aria-hidden='true' tabindex="-1" aria-hidden="true" style="display: none;">

            </select>
        </div>


        <div class="container" style="display: none;">
            <div class="input-text">
                <span>Вид экономической деятельности: </span>
                <!--
                    --><input type="text" class="form-control-sm" name="request.okvedIdCustom">
            </div>
            <div class="hint">Заполняется в случае если необходимый вид экономической деятельности отсутсутвует в списке
            </div>
        </div>

        <div class="container">
            <div class="form-header">
                Сроки поэтапного введения в эксплуатацию
            </div>

            <div class="form-row inputs-list">
                <div class="il-item fst">
                    <span>Первый этап: <s>*</s></span>
                    <!--
                    -->
                    <div class="double-select">
                        <!--
                    --><select class="custom-select custom-select-sm" name="request.stage.1.year">
                            <option value="">-- год --</option>
                            <!-- ngRepeat: i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027] -->
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2018" class="ng-scope ng-binding">2018
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2019" class="ng-scope ng-binding">2019
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2020" class="ng-scope ng-binding">2020
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2021" class="ng-scope ng-binding">2021
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2022" class="ng-scope ng-binding">2022
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2023" class="ng-scope ng-binding">2023
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2024" class="ng-scope ng-binding">2024
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2025" class="ng-scope ng-binding">2025
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2026" class="ng-scope ng-binding">2026
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2027" class="ng-scope ng-binding">2027
                            </option>
                        </select><select name="request.stage.1.month" class="custom-select custom-select-sm">
                            <option value="">-- месяц --</option>
                            <option value="1">Январь</option>
                            <option value="2">Февраль</option>
                            <option value="3">Март</option>
                            <option value="4">Апрель</option>
                            <option value="5">Май</option>
                            <option value="6">Июнь</option>
                            <option value="7">Июль</option>
                            <option value="8">Август</option>
                            <option value="9">Сентябрь</option>
                            <option value="10">Октябрь</option>
                            <option value="11">Ноябрь</option>
                            <option value="12">Декабрь</option>
                        </select></div>
                    <!--
                    --><span class="is-error" ng-show="upform4['request.stage.1.year'].$error.notempty || upform4['request.stage.1.year'].$error.stage1" style="display: none;">Поле обязательно для заполнения</span>
                </div>

                <div class="il-item">
                    <span>мощность:</span>
                    <!--
                    --><input type="text" class="form-control-sm" name="request.stage.1.power" ng-model="formData.request.stage.1.power" placeholder="например: 1234.56">
                    <!--
                    --><span class="is-error" ng-show="upform4['request.stage.1.power'].$error['float']" style="display: none;">Формат: ####.##</span>
                </div>
            </div>

            <div class="form-row inputs-list">
                <div class="il-item fst">
                    <span>Второй этап:</span>
                    <!--
                    -->
                    <div class="double-select">
                        <!--
                    --><select name="request.stage.2.year" class="custom-select custom-select-sm">
                            <option value="">-- год --</option>
                            <!-- ngRepeat: i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027] -->
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2018" class="ng-scope ng-binding">2018
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2019" class="ng-scope ng-binding">2019
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2020" class="ng-scope ng-binding">2020
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2021" class="ng-scope ng-binding">2021
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2022" class="ng-scope ng-binding">2022
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2023" class="ng-scope ng-binding">2023
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2024" class="ng-scope ng-binding">2024
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2025" class="ng-scope ng-binding">2025
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2026" class="ng-scope ng-binding">2026
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2027" class="ng-scope ng-binding">2027
                            </option>
                        </select>
                        <!--
                    --><select name="request.stage.2.month" class="custom-select custom-select-sm">
                            <option value="">-- месяц --</option>
                            <option value="1">Январь</option>
                            <option value="2">Февраль</option>
                            <option value="3">Март</option>
                            <option value="4">Апрель</option>
                            <option value="5">Май</option>
                            <option value="6">Июнь</option>
                            <option value="7">Июль</option>
                            <option value="8">Август</option>
                            <option value="9">Сентябрь</option>
                            <option value="10">Октябрь</option>
                            <option value="11">Ноябрь</option>
                            <option value="12">Декабрь</option>
                        </select></div>
                    <!--
                    --><span class="is-error">
                        <!--
                        --><span ng-show="upform4['request.stage.2.year'].$error.stage2" style="display: none;">Необходимо
                            заполнить все параметры</span>
                        <!--
                        --><span ng-show="upform4['request.stage.3.year'].$error.stage3prev" style="display: none;">Необходимо
                            заполнить второй этап перед третьим</span>
                        <!--
                    --></span>
                </div>

                <div class="il-item">
                    <span>мощность:</span>
                    <!--
                    --><input type="text" class="form-control-sm" name="request.stage.2.power" ng-model="formData.request.stage.2.power" placeholder="например: 1234.56">
                    <!--
                    --><span class="is-error" ng-show="upform4['request.stage.2.power'].$error['float']" style="display: none;">Формат: ####.##</span>
                </div>
            </div>

            <div class="form-row inputs-list">
                <div class="il-item fst">
                    <span>Третий этап:</span>
                    <!--
                    -->
                    <div class="double-select">
                        <!--
                    --><select name="request.stage.3.year" class="custom-select custom-select-sm">
                            <option value="">-- год --</option>
                            <!-- ngRepeat: i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027] -->
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2018" class="ng-scope ng-binding">2018
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2019" class="ng-scope ng-binding">2019
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2020" class="ng-scope ng-binding">2020
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2021" class="ng-scope ng-binding">2021
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2022" class="ng-scope ng-binding">2022
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2023" class="ng-scope ng-binding">2023Вид экономической деятельности:
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2024" class="ng-scope ng-binding">2024
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2025" class="ng-scope ng-binding">2025
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2026" class="ng-scope ng-binding">2026
                            </option>
                            <option ng-repeat="i in [2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027]" value="2027" class="ng-scope ng-binding">2027
                            </option>
                        </select>
                        <!--
                    --><select name="request.stage.3.month" class="custom-select custom-select-sm">
                            <option value="">-- месяц --</option>
                            <option value="1">Январь</option>
                            <option value="2">Февраль</option>
                            <option value="3">Март</option>
                            <option value="4">Апрель</option>
                            <option value="5">Май</option>
                            <option value="6">Июнь</option>
                            <option value="7">Июль</option>
                            <option value="8">Август</option>
                            <option value="9">Сентябрь</option>
                            <option value="10">Октябрь</option>
                            <option value="11">Ноябрь</option>
                            <option value="12">Декабрь</option>
                        </select></div>
                    <!--
                    --><span class="is-error" ng-show="upform4['request.stage.3.year'].$error.stage3" style="display: none;">Необходимо заполнить все параметры</span>
                </div>

                <div class="il-item">
                    <span>мощность:</span>
                    <!--
                    --><input type="text" class="form-control-sm" name="request.stage.3.power" placeholder="например: 1234.56">
                    <!--
                    --><span class="is-error" style="display: none;">Формат: ####.##</span>
                </div>
            </div>
        </div>
    </div>


    <div id="step4" class="container" >
        <div class="form-header">
            Пожалуйста, загрузите отсканированные копии документов в формате JPG, TIFF или PDF
        </div>

        <div class="form-row">
            <p>Для одного типа документа следует загружать только 1 файл. В случае если документ содержит
                несколько страниц, следует сканировать их одним файлом и загрузить его</p>
        </div>

        <!-- физ.лицо  -->
        <div class="container">
            <p><a>Тут сслыка на загрузку сформированного документа по заявлению</a></p>

            <form id="testsendfileform">
                <div class="form-group">
                    <label for="SWFUpload_1">Паспорт (не более 8Мб):</label>
                    <input id='SWFUpload_1' name="SWFUpload_1" type="file" class="form-control-file">

                    <label for="SWFUpload_2">План расположения ЭУ (не более 8Мб):</label>
                    <input id='SWFUpload_2' type="file" name="SWFUpload_2" accept="text/*">

                    <label for="SWFUpload_3">Свидетельство о государственной регистрации права собственности (не более
                        8Мб):</label>
                    <input type="file" name="SWFUpload_3" accept="text/*">

                    <label for="SWFUpload_3">Свидетельство о государственной регистрации права собственности (не более
                        8Мб):</label>
                    <input id='SWFUpload_3' type="file" name="SWFUpload_3" accept="text/*">

                    <label for="SWFUpload_4">Свидетельство о государственной регистрации права собственности на земельный
                        участок (не более 8Мб):</label>
                    <input id='SWFUpload_4' type="file" name="SWFUpload_4" accept="text/*">

                    <label for="SWFUpload_5">Выписка из Единого государственного реестра прав (ЕГРП) (не более 8Мб):</label>
                    <input id='SWFUpload_5' type="file" name="SWFUpload_5" accept="text/*">

                    <label for="SWFUpload_6"> Выписка из Единого государственного реестра прав (ЕГРП) (не более 8Мб):</label>
                    <input id='SWFUpload_6' type="file" name="SWFUpload_6" accept="text/*">

                    <label for="SWFUpload_7"> Свидетельство о государственной регистрации права долевой собственности (не более
                        8Мб):</label>
                    <input id='SWFUpload_7' type="file" name="SWFUpload_7" accept="text/*">

                    <label for="SWFUpload_8">Свидетельство о государственной регистрации права долевой собственности на
                        земельный участок (не более 8Мб):</label>
                    <input id='SWFUpload_8' type="file" name="SWFUpload_8" accept="text/*">

                    <label for="SWFUpload_9">Свидетельство о государственной регистрации права оперативного управления (не более
                        8Мб):</label>
                    <input id='SWFUpload_9' type="file" name="SWFUpload_9" accept="text/*">

                    <label for="SWFUpload_10">Свидетельство о государственной регистрации права оперативного управления на
                        земельный участок (не более 8Мб):</label>
                    <input id='SWFUpload_10' type="file" name="SWFUpload_10" accept="text/*">

                    <label for="SWFUpload_11">Свидетельство о государственной регистрации права хозяйственного ведения (не более
                        8Мб):</label>
                    <input id='SWFUpload_11' type="file" name="SWFUpload_11" accept="text/*">

                    <label for="SWFUpload_12">Свидетельство о государственной регистрации права хозяйственного ведения на
                        земельный участок (не более 8Мб): </label>
                    <input id='SWFUpload_12' type="file" name="SWFUpload_12" accept="text/*">

                    <label for="SWFUpload_13">Договор аренды, субаренды (срок 1г. и более) с отметкой о гос. регистрации (не
                        более 8Мб): </label>
                    <input id='SWFUpload_13' type="file" name="SWFUpload_13" accept="text/*">

                    <label for="SWFUpload_14">Договор аренды, субаренды (срок менее 1г. , без отметки о гос. регистрации) (не
                        более 8Мб):</label>
                    <input id='SWFUpload_14' type="file" name="SWFUpload_14" accept="text/*">

                    <label for="SWFUpload_15">Договор аренды, субаренды земельного участка (срок 1г. и более) (не более
                        8Мб):</label>
                    <input id='SWFUpload_15' type="file" name="SWFUpload_15" accept="text/*">

                    <label for="SWFUpload_16">Договор аренды, субаренды земельного участка (срок 1г. и более) с отметкой о гос.
                        регистрации (не более 8Мб): </label>
                    <input id='SWFUpload_16' type="file" name="SWFUpload_16" accept="text/*">

                    <label for="SWFUpload_17">Договор аренды, субаренды земельного участка (срок менее 1г. и без отметки о
                        гос.регистрации) (не более 8Мб):</label>
                    <input id='SWFUpload_17' type="file" name="SWFUpload_17" accept="text/*">

                    <label for="SWFUpload_18">Свидетельство о государственной регистрации договора аренды, субаренды (срок 1г. и
                        более) (не более 8Мб):</label>
                    <input id='SWFUpload_18' type="file" name="SWFUpload_18" accept="text/*">

                    <label for="SWFUpload_19">Свидетельство о государственной регистрации права общей совместной собственности
                        (не более 8Мб):</label>
                    <input id='SWFUpload_19' type="file" name="SWFUpload_19" accept="text/*">

                    <label for="SWFUpload_20">Свидетельство о государственной регистрации права общей совместной собственности
                        на земельный участок (не более 8Мб):</label>
                    <input id='SWFUpload_20' type="file" name="SWFUpload_20" accept="text/*">

                    <label for="SWFUpload_21">Акты органов исполнительной власти субъекта РФ, местного самоуправления. (не более
                        8Мб): </label>
                    <input id='SWFUpload_21' type="file" name="SWFUpload_21" accept="text/*">

                    <label for="SWFUpload_22"> Акты органов исполнительной власти субъекта РФ, местного самоуправления. (не
                        более 8Мб):</label>
                    <input id='SWFUpload_22' type="file" name="SWFUpload_22" accept="text/*">

                    <label for="SWFUpload_23"> Государственная регистрации права собственности (с 01.11.97г. до 31.01.98г.) в
                        учреждении БТИ (не более 8Мб):</label>
                    <input id='SWFUpload_23' type="file" name="SWFUpload_23" accept="text/*">

                    <label for="SWFUpload_24">Договор купли-продажи земельного участка (с отметкой о гос. регистрации) (не более
                        8Мб): </label>
                    <input id='SWFUpload_24' type="file" name="SWFUpload_24" accept="text/*">

                    <label for="SWFUpload_25">Решение суда (с отметкой о вступлении в законную силу) (не более 8Мб):</label>
                    <input id='SWFUpload_25' type="file" name="SWFUpload_25" accept="text/*">

                    <label for="SWFUpload_26">Решение суда (с отметкой о вступлении в законную силу) (не более 8Мб):</label>
                    <input id='SWFUpload_26' type="file" name="SWFUpload_26" accept="text/*">

                    <label for="SWFUpload_27">Свидетельство о государственной регистрации договора аренды, субаренды земельного
                        участка (срок 1г. и более) (не более 8Мб:</label>
                    <input id='SWFUpload_27' type="file" name="SWFUpload_27" accept="text/*">

                    <label for="SWFUpload_28">Государственный акт на права собственности, бессрочного (постоянного) пользоваия
                        землей (Форма№2 утв. Пост. Мин. РСФСР №493 от 17.09.91г.) (не более 8Мб):</label>
                    <input id='SWFUpload_28' type="file" name="SWFUpload_28" accept="text/*">

                    <label for="SWFUpload_29">Предварительное согласование органов гос. власти на строительство объекта
                        генерации на земельном участке, не принадлежащего Заявителю на праве собственности или на ином
                        предсмотренном Ф.З. основании (не более 8Мб):</label>
                    <input id='SWFUpload_29' type="file" name="SWFUpload_29" accept="text/*">

                    <label for="SWFUpload_30">Свидетельство о государственной регистрации права полного (бессрочного)
                        пользования (не более 8Мб):</label>
                    <input id='SWFUpload_30' type="file" name="SWFUpload_30" accept="text/*">

                    <label for="SWFUpload_31">Свидетельство о гос. регистрации права собственности на земельный участок ( утв.
                        Указом Президента РФ от 27 октября 1993 г. №1767 ) (не более 8Мб):</label>
                    <input id='SWFUpload_31' type="file" name="SWFUpload_31" accept="text/*">

                    <label for="SWFUpload_32">Свидетельство о гос. регистрации права собственности на змельный участок (утв.
                        Указом Президента РФ от 27.12.1991 г. №323 , форма утв. от 19 марта 1992 г. №177) (не более
                        8Мб):</label>
                    <input id='SWFUpload_32' type="file" name="SWFUpload_32" accept="text/*">

                    <label for="SWFUpload_33">Договор купли-продажи(с отметкой о гос. регистрации) (не более 8Мб):</label>
                    <input id='SWFUpload_33' type="file" name="SWFUpload_33" accept="text/*">

                    <label for="SWFUpload_34">Свидетельство о государственной регистрации права собственности,бессрочного
                        (постоянного) пользования земельным участком (Форма №2, утв.Пост.Мин. РСФСР №493 от 17.09.91г.) (не
                        более 8Мб):</label>
                    <input id='SWFUpload_34' type="file" name="SWFUpload_34" accept="text/*">

                    <label for="SWFUpload_35">Свидетельство о государственной регистрации права полного бессрочного пользования
                        на земельный участок (не более 8Мб):</label>
                    <input id='SWFUpload_35' type="file" name="SWFUpload_35" accept="text/*">

                    <label for="SWFUpload_36">Государственный акт на право собственности, бессрочного (постоянного) пользования
                        недвижимым объектом до 31.01.98г. (не более 8Мб):</label>
                    <input id='SWFUpload_36' type="file" name="SWFUpload_36" accept="text/*">

                    <label for="SWFUpload_37">Свидетельство о государственной регистрации права собственности, бессрочного
                        (постоянного) пользования недвижимых объектом до 31.01.98г. (не более 8Мб):</label>
                    <input id='SWFUpload_37' type="file" name="SWFUpload_37" accept="text/*">

                    <label for="SWFUpload_38">Свидетельство о праве собственности на зем. участок (утв. Указом Президента РФ от
                        27 декабря 1991 года №323, форма которого утв. Пост Правит. РФ от 19 марта 1992 г. №177 ) (не более
                        8Мб): </label>
                    <input id='SWFUpload_38' type="file" name="SWFUpload_38" accept="text/*">

                    <label for="SWFUpload_39">Прочее (не более 8Мб):</label>
                    <input id='SWFUpload_39' type="file" name="SWFUpload_39" accept="text/*">

                    <input type="submit">
                </div>
            </form>

        </div>
        <!--//физ.лицо -->

        <!-- юр.лицо -->
        <div class="container">
            <p><a>Тут сслыка на загрузку сформированного документа по заявлению</a></p>



        </div>
        <!--//юр.лицо -->

        <!-- для ИП -->
        <div class="container">
            <p><a>Тут сслыка на загрузку сформированного документа по заявлению</a></p>



        </div>
        <!--// ИП -->
    </div>


    <button id="test_steps" value="Шаги">Шаги</button>

</div>
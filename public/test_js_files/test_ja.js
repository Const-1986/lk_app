(function () {
  let elem = document.getElementById('ownerType');
  let form_representative = document.getElementById('form_representative');

  elem.addEventListener('change', () => {
    hideForms(elem, form_representative);
  });


  function hideForms(elem1, elem2) {
    let data = elem.value;
    if (data == 1) {
      // $(elem2).hide(800);
      $(elem2).slideDown(800)
      //$(elem2).find('div').hide(800);

    } else if (data == 2) {
      // $(elem2).show(800, function(){
      //     $(this).find('div').css('border', '2px solid red');
      //
      // });

      $(elem2).slideUp(800)
    }
  }

  let elem_button = document.getElementById('my_button');

  elem_button.addEventListener('click', function () {
    console.log('я делаю редирект');
    document.location.replace('/personal-account');
  });

  (function () {

    $('#my_button_2').click(() => {

      // let prom = new Promise((res, rej) => {
      //   $('#test_div').find('div').toggle(400, () => {
      //     return res();
      //   })
      // });
      // prom
      //   .then(() => {
      //     console.log('Промис!');
      //   });

      const d = $.Deferred();
      const d1 = $.Deferred();

      $('#test_div').hide('500', d.resolve);

      d.done(() => {
        $('#test_div').hide('500', d1.resolve);
      })
      //ожидает выполнения всех прмисов аналог нативного promise.all
      //$.when()

    });

  })();

  //привер jquery Deferred
  (function () {

    const d = $.Deferred();

    setTimeout(() => {
      if (false) {
        d.resolve({'data': 123456});
      } else {
        d.reject();
      }
    }, 1000)

    d
      .done((data) => {
        console.log(data);
        return data
      })
      .then((data) => {
        console.log(data);
      }, () => {
        console.log('Неудача1!')
      })
      .fail(() => {
        console.log('Неудача2!');
      })

  })()

})();



// $('form_step_1').submit(
//   function (e) {
//     //let msg   = $(this).serialize();
//
//     $.ajax({
//       type: 'post',
//       url: '/personal-account/application',
//       data: 'dsdfgdgdfgdfg'
//     }).done(function () {
//       console.log('success');
//     }).fail(function () {
//       console.log('fail');
//     });
//     //отмена действия по умолчанию для кнопки submit
//     e.preventDefault();
//   });
//



// //последовательно открывающиеся/закрывающиеся абзацы
// (function () {
//
//   $('#my_button_2').click(() => {
//
//     let prom = new Promise((res, rej) => {
//       $('#t1').slideUp(800, () => {
//         return res({'1': 1});
//       })
//     });
//
//     prom
//       .then(() => {
//         return new Promise((resolve, reject) => {
//           $('#t2').slideUp(800, () => {
//             resolve();
//           })
//
//         });
//       })
//       .then(() => {
//         return new Promise((resolve, reject) => {
//           $('#t3').slideUp(800, () => {
//             resolve();
//           })
//         });
//
//       })
//       .then(() => {
//
//         return new Promise((resolve, reject) => {
//           $('#test_div').slideUp(800, () => {
//             resolve();
//           })
//         });
//
//       })
//       .catch(() => {
//         alert('Ошибка')
//       });
//   });
//
// })();
//
// (function () {
//
//   $('#my_button_3').click(() => {
//
//     let prom = new Promise((res, rej) => {
//       $('#test_div').slideDown(800, () => {
//         return res({'1': 1});
//       })
//     });
//
//     prom
//       .then(() => {
//         return new Promise((resolve, reject) => {
//           $('#t1').slideDown(800, () => {
//             resolve();
//           })
//
//         });
//       })
//       .then(() => {
//         return new Promise((resolve, reject) => {
//           $('#t2').slideDown(800, () => {
//             resolve();
//           })
//         });
//
//       })
//       .then(() => {
//
//         return new Promise((resolve, reject) => {
//           $('#t3').slideDown(800, () => {
//             resolve();
//           })
//         });
//
//       })
//       .catch(() => {
//         alert('Ошибка')
//       });
//   });
//
// })();

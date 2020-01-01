(function () {

  let form = document.getElementById('testsendfileform');
  

  form.onsubmit = async (e) => {

    console.log('Событие обрпботчика загрузки фала');
    e.preventDefault();
    let formData = new FormData(form);
    
    let response = await fetch('/test/testsendfile', {
      method: 'POST',
      body: formData
    });

    let result = await response.text();

    console.log(result);
  };

  form.onsubmit.catch(err=>console.log(err));

})()


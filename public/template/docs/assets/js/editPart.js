document.addEventListener("DOMContentLoaded", function () {

     const part = document.querySelectorAll('.tampilPart');

     part.forEach((a) => {
          a.addEventListener('click', function (e) {

               const modalTitle = document.querySelector('.modal-title');
               modalTitle.innerHTML = 'Edit Data Part';

               const modalFooter = document.querySelector('.modal-footer button[type=submit]');
               modalFooter.innerHTML = 'Update Data';
               document.querySelector('.modal-body form').setAttribute('action', 'http://localhost:8080/master/editPart');

               console.log(a);

               const id = a.attributes['data-bs-id'].value;
               console.log(id);

               (async () => {
                    const result = await fetch('http://localhost:8080/master/getUbahPart', {
                         method: 'POST', // or 'PUT'
                         headers: {
                              'Accept': 'application/json',
                              'Content-Type': 'application/json'
                         },
                         body: JSON.stringify({ id: id, toJSON() { return this.id; } })
                    });

                    const content = await result.text();

                    let jueson = JSON.parse(content);
                    console.log(jueson);
                    document.querySelector('#kdPart').value = jueson.kd_part;
                    document.querySelector('#namePart').value = jueson.name_part;
                    document.querySelector('#hrPart').value = jueson.hr_part;
                    document.querySelector('#tPart').value = jueson.t_part;

               })();

     });

     });

});

$(document).ready(function(){
  var form = new FormData();
  form.append("type", "string");

  var settings = {
    "url": "https://layananupik.jogjakota.go.id/lumen/public/api/filter-poi-category",
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Content-Type": "multipart/form-data; boundary=--------------------------994038657288750660738180"
    },
    "processData": false,
    "mimeType": "multipart/form-data",
    "contentType": false,
    "data": form
  };

  $.ajax(settings).done(function (response) {
    if(response.status == "true"){
      let hasil = response.data[0];

      $.each(hasil, function(i, data){
        $('.isi-tempat').append(`
          <div class="col-4">
          Nama Tempat <br>
          Alamat <br>
          No Telepon 
          </div>

          <div class="col-8">
          : `+ data.title +` <br>   
          : `+ data.address +` <br>
          : `+ data.no_telp +` 
          </div>
          `); 
      });
    }else
    {
      $('.isi-tempat').html(`
        <h3 class="text-center">` + response.msg +`</h3>
        `);
    }
    
  });
});

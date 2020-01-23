$(document).ready(function()
{
     $('#hiburan-list').html('');
        
     var settings = 
     {
       "url": "https://layananupik.jogjakota.go.id/lumen/public/api/filter-poi-category?type=string",
       "method": "POST",
       "timeout": 0,
     };

     $.ajax(settings).done(function (response)
     {
         let hasil = this.data;

         $.each(hasil, function(i, n)
         {
             $('#hiburan-list').append(`
             <div class="col-sm-4 mb-3">
                 <div class="card border-dark rounded">
                 <div class="card-body">
                   <h5 class="card-title">`+ this.title +`</h5>
                   <h6 class="card-subtitle mb-2 text-muted">`+ this.no_telp +`</h6>
                   <p class="card-text">`+ this.address +`</p>
                 </div>
               </div>
             </div>
             `);
         });
     });     
});
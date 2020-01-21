$(document).ready(function(){

    $('#search-button').on('click', function(){
        searchHiburan();
    });

    $('#search-input').on('keyup', function(e){
        if(e.keyCode === 13){
            searchHiburan();
        }
    });

    function searchHiburan(){
        $('#hiburan-list').html('');
        $.ajax({
            url: 'https://layananupik.jogjakota.go.id/lumen/public/api/filter-poi-category?type=string',
            type: 'post',
            dataType: 'json',
            data: {
                's': $('#search-input').val()
            },
            success: function(result){
                if(result.Response == 'True'){
                    let hiburan = result.Search;
                    $.each(hiburan, function(i, data){
                        $('#hiburan-list').append(`
                            <div class="col-md-3">
                            <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">`+ data.title +`</h5>
                            <h6 class="card-subtitle mb-2 text-muted">`+ data.address +`</h6>
                            <h6 class="card-subtitle mb-2 text-muted">`+ data.no_telp +`</h6>
                            </div>
                            </div>
                            </div>
                            `);
                    });
                    $('#search-input').val('');
                }else {
                    $('#hiburan-list').html('<h2 class="text-center">'+ result.Error +'</h2>');
                }
            }
        })
    }

})
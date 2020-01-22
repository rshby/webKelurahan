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
            success: function(result)
            {
                if(result.status == "true")
                {
                    let hiburan = result.data;

                    $.each(hiburan, function(i, data)
                    {
                        $('#hiburan-list').append(`
                            <div class="col-sm-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">`+ this.title +`</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">`+ this.address +`</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">`+ this.no_telp +`</h6>
                                    </div>
                                </div>
                            </div>
                            `);
                    });
                    $('#search-input').val('');
                }else 
                {
                    $('#hiburan-list').html('<h2 class="text-center">'+ result.Error +'</h2>');
                }
            }
        })
    }

})
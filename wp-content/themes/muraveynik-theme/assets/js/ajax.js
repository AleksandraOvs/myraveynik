jQuery( function ($) {

    $( 'input[ name = "s" ]' ).autocomplete({
        source: function( request, response ) {
                $.ajax ( {
                    url: searching.ajax_url,
                    data: {
                        action: 'sitesearch',
                        term: request.term
                    },
                success: function( data ){
                        // console.log( data );
                    response(data);
                        $(data).each(function(index, item) {
                        $('#result').append('<li class="search__item text_big text__mobile_medium"><a class="search__href" href=" '+ item.url + '"> ' + item.value + '</li>');
                        });
                    }
                });
               
            },
            minLength: 2
            // select: function( event, ui){
            //     window.location = ui.item.url;
            // }
      });
});

var button = $('#loadmore');

button.click( function( event){
    event.preventDefault();


    $.ajax ( {
        type: 'POST',
        url: searching.ajax_url,
        data: {
            paged: button.data('paged'),
            action: 'loadmore'
        },
        beforeSend : function (xhr) {
            button.text ('Загружаем...');
        },
        success: function( data ){

            button.parent().before( data );
            button.text ('Смотреть ещё');
        }
    });

    //alert ('test');


});
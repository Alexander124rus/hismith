

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(document).ready(function(){

    /*$('#filer_input').filer({
        limit: 3,
        maxSize: 3,
        extensions: ["jpg", "png", "gif"],
        showThumbs: true
    });*/

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }


    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.5,
        placeholder: 'ui-state-default',
        //containment: '.block',
        stop: function(){
            var arr = $('#sortable').sortable("toArray");
            //alert(arr);
            $.ajax({
                type: 'GET',
                url: 'http://hronycom.perensona23.ru:8081/index.php/Saves/save',
                data: {masiv:arr}
            })
            //Тут надо сказать, чтобы происходило обновление номеров после перемещения
            /*$('tbody td:first-child').each(function (i) {
                $(this).html(i+1);
            });
            
            //alert('Добрый день');*/
        }
    });

    $('.sortable_cat').sortable({
        axis: 'y',
        opacity: 0.5,
        placeholder: 'ui-state-default',
        //containment: '.block',
        stop: function(){
            var arr = $('.sortable_cat').sortable("toArray");
            //alert(arr);
            $.ajax({
                type:'GET',
                url: 'http://hronycom.perensona23.ru:8081/index.php/Saves/save_cat',
                data: {masiv_cat:arr}
            })
            //alert('Добрый день');
        }
    });

    /*jQuery(".tm-input").tagsManager({
        hiddenTagListName: 'hiddenTagListA',
        hiddenTagListId: '1',
    });*/

    $('.tokenfield').tokenfield({
        showAutocompleteOnFocus: true
    });

});

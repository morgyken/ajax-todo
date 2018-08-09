$(document).ready(function(){
    $('.myitem').each(function(){
        $(this).click(function(event)
        {
            var text = $(this).text();
            $('#add-item').val(text);
            $('.modal-title').text('Edit Item');
            $('#delete').show('300');
            $('#save').show('300');
            $('#add').hide('300');
            console.log(text);
        });
    });

    $('#add-new').click(function(event)
        {
            $('#add-item').val("");
            $('.modal-title').text('Add New Item');
            $('#delete').hide('300');
            $('#save').hide('300');
            $('#add').show('300');
        });

        $('#add').click(function(event)
        {
            var text = $('#add-item').val();

            $.post('/', {'text': text, '_token': $('input[name=_token]').val()}, function(data){
                console.log(data);
            });
        
        });


});
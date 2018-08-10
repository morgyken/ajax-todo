$(document).ready(function(){
    $(document).on('click','.myitem', function(event)
    {
            var text = $(this).text();
            var id = $(this).find('#item-id').val();
            $('#add-item').val(text);
            $('.modal-title').text('Edit Item');
            $('#delete').show('300');
            $('#save').show('300');
            $('#id').val(id);
            $('#add').hide('300');
           // console.log(text);
       
    });
    $(document).on('click','#add-new', function(event)
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

            $.post('list', {'item': text, '_token': $('input[name=_token]').val()}, function(data){
              //  console.log(data);
                $('.panel-body').load(location.href + ' .panel-body') //div refresh 
            });
        
        });

        $('#delete').click(function(event)
        {
            var id = $('#id').val();

            $.post('delete', {'id': id, '_token': $('input[name=_token]').val()}, function(data){
               $('.panel-body').load(location.href + ' .panel-body') //div refresh 
              });
        });

        $('#save').click(function(event)
        {
            var id = $('#id').val();
            var text = $('#add-item').val();

            $.post('update', {'id': id,'item': text ,'_token': $('input[name=_token]').val()}, function(data){
             $('.panel-body').load(location.href + ' .panel-body') //div refresh 
                //console.log(data);
              });
        });
        


});
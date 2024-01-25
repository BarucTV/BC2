$(function(){


    $('body').on('submit', '#input_group', function(){
        
        let form =  $(this)

        $.ajax({

            beforeSend: function(){
                console.log('vou enviar!')
            },
            url:'form.php',
            dataType: 'json',
            data: form.serialize(),
            method: 'post',

        }).done(function(data){
            
            if(data.su){
                
            }
        })
        return false;
        
    })

})
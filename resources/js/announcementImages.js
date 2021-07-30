$(function() {

    if($('#drophere').length > 0){

        let csrfToken = $('[name="_token"]').attr('value');
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value');
        let myDropzone = new Dropzone('#drophere', {
            url: '/announcement/images/upload',

            params: {
                _token: csrfToken,
                uniqueSecret: uniqueSecret
            }

        });
    }
})
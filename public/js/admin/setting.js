$(function () {
    if ($('#page_content').length) {
        CKEDITOR.replace('page_content', {
            height: '410px',
            'extraPlugins': 'imgbrowse',
	    'filebrowserImageBrowseUrl': base_url + '/public/plugins/ckeditor/plugins/imgbrowse/imgbrowse.html?imgroot=etaindiavisa/uploads/ck_editor_files/',
	    "filebrowserImageUploadUrl": base_url + "/public/plugins/ckeditor/plugins/imgupload/iaupload.php?imgroot=etaindiavisa/uploads/ck_editor_files/"
        });
          
    }



    $("#banner_aeFrm").validate({
    });

    $("#pageForm").validate({
        ignore: [],
        rules: {
            page_content: {
                required: function () {
                    CKEDITOR.instances.page_content.updateElement();
                }
            }
        },
        messages: {
            page_content: {required: "Please enter Page Content"}
        }
    });
    
    $("#applicatin_typeForm").validate({
        rules: {
            amount: {required:true,currency: 'amount'}
        }
    });
    
    $("#arrivalPortForm").validate({});
    
    
    
    
    


});
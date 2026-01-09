$(document).ready(function () {
    $('.summernote').each(function () {
        let placeholder = $(this).data('placeholder');
        let editor = $(this);

        $(this).summernote({
            placeholder: placeholder,
            height: 200,
            callbacks: {
                onChange: function(contents) {
                    if (editor.hasClass('qualification-editor')) {
                        $('#qualification').val(contents);
                    }
                    if (editor.hasClass('jobdesc-editor')) {
                        $('#jobdesc').val(contents);
                    }
                }
            }
        });
    });

});

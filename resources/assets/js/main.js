$('.confirm').click(function(e) {
    e.preventDefault();
    return(confirm('Anda yakin?'));
});

$('.summernote').summernote();

$('#delete-single').on('click', function(e) {
    e.preventDefault();
    if (confirm("Are you sure?")) {
        $('#single-delete-form').submit()
    }
})

$('#bulk-delete').on('click', function(e) {
    e.preventDefault();
    if (confirm("Are you sure?")) {
        $('#bulk-delete-form').submit()
    }
})
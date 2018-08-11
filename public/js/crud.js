$(document).on('click', '.anchor_delete', function(e) {
    e.preventDefault();
    var $this = $(this);
    if(confirm('Are you sure you want to delete this item?')) {
        $.ajax({
            type: $this.data('method'),
            url: $this.attr('href'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                if (result == 'success'){
                    location.reload();
                }else{
                    location.href=$this.attr('redirectHref');
                }
            }
        })
    } else {
        return;
    }    
});
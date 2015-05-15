/*
 <a href="posts/2" data-method="delete"> <---- We want to send an HTTP DELETE request

 - Or, request confirmation in the process -

 <a href="posts/2" data-method="delete" data-confirm="Are you sure?">
 
 Add this to your view:
  <script>
		window.csrfToken = '<?php echo csrf_token(); ?>';
  </script>
  <script src="/js/deleteHandler.js"></script>
 */
 
(function() {
 
    var laravel = {
        initialize: function() {
            this.registerEvents();
        },
 
        registerEvents: function() {
            $('body').on('click', 'a[data-method]', this.handleMethod);
        },
 
        handleMethod: function(e) {
            var link = $(this);
            var httpMethod = link.data('method').toUpperCase();
            var form;
 
            // If the data-method attribute is not PUT or DELETE,
            // then we don't know what to do. Just ignore.
            if ( $.inArray(httpMethod, ['PUT', 'PATCH', 'DELETE']) === - 1 ) {
                return;
            }
            
            form = laravel.createForm(link);
 
            // Allow user to optionally provide data-confirm="Are you sure?"
            if ( link.data('confirm') ) {
                $.confirm({
                    title: link.data('title'),
                    content: link.data('confirm'),
                    confirm: function(){
                        laravel.confirmAction(form);
                       
                    },
                    cancel: function(){
                        return false;
                    }
                });
            }else
            {
                laravel.confirmAction(form);
            }
            e.preventDefault();
        },
 
        confirmAction: function(form) {
            form.submit();
        },
 
        createForm: function(link) {
            var form =
                $('<form>', {
                    'method': 'POST',
                    'action': link.attr('href')
                });
 
            var token =
                $('<input>', {
                    'name': '_token',
                    'type': 'hidden',
                    'value': window.csrfToken
                });
 
            var hiddenInput =
                $('<input>', {
                    'name': '_method',
                    'type': 'hidden',
                    'value': link.data('method')
                });
 
            return form.append(token, hiddenInput)
                .appendTo('body');
        }
    };
 
    laravel.initialize();
 
})();
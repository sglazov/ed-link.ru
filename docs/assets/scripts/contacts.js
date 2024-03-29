if ($) $(function () {

  var form              = $('.contact-form');
  var allformInput      = form.find('.form-input');

  function clear_form() {
    allformInput.val('');
  }

  form.submit(function(e) {
    e.preventDefault();
    var form        = $(this);
    var formInput   = form.find('.form-input');

    var name  = form.find('input[name="name"]').val();
    var mail  = form.find('input[name="mail"]').val();
    var message  = form.find('textarea[name="message"]').val();


    if ( formInput.val().length > 0 ) {

      $.ajax({
        type: "POST",
        url: "/php/contact.php",
        data: {
          'name':    name,
          'mail':    mail,
          'message': message,
        },

        success: function() {

          console.log('success');

          clear_form();

          $('#status-message').text('Сообщение отправлено!');

        },
        error: function() {

          console.log('error');

          $('#status-message').text('Сообщение не отправлено!');

        }
      });

    } else {
      $('#status-message').text('Не все поля заполнены!');
    }

    return false;
  });

});

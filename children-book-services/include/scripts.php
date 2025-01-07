
<script>
    setTimeout(function () {
        $('.lazy').each(function () {
            var data = $(this).attr('data-src');
            $(this).attr('src', data);
        });
    }, 1000);
</script>    
<script type="text/javascript" src="assets/js/libs.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script>
    $('input[name="phone"]').on('keypress', function(event) {
        var keyCode = event.keyCode || event.which;
        var keyValue = String.fromCharCode(keyCode);
        var isValid = /^\d+$/.test(keyValue);
        
        if (!isValid) {
            $('#phone-error').show();
            event.preventDefault();
        } else {
            $('#phone-error').hide();
        }
    });
</script>
    <!-- Start of designneshelp Zendesk Widget script -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
    <!-- End of designneshelp Zendesk Widget script -->

<script>
$('.livechat, .live_chatt, .chatt, #flashing').click(function () {
        $zopim.livechat.window.toggle();
        return false;
      }
      );
      $(window).on('load', function() {
            $zopim.livechat.window.show();
      });
zE(function() {
        zE.activate();
    });
    zE(function() {
        $zopim(function() {
          $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
            if (number>=1)
            {
                $zopim.livechat.window.toggle();
                $zopim.livechat.window.show();
            }
            }
        });
    });
</script>

<script>
    $(".portfolio-toggle, .testimonials-toggle, .faq-toggle").click(function(){
        $('#menu-list').css('left','150%');
        $('#cross').css('display', 'none');
        $('#list-btn').css('display', 'block');
    })
</script>

<script>
    function popupappear() {
      $('#get-started-btn').click();
    }
    setTimeout(popupappear, 15000);
</script>

</body>

</html>

<script src="../uygulama/kaynak/yonetici/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/off-canvas.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/hoverable-collapse.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/misc.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/ozeljqueryvalidate.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>-->

<script>
    anadizintam = "http://localhost/php_learn/turkish/suleymantalip_blog/";
    $(document).ready(function () {

        $('#giris_form').validate({ // initialize the plugin
            rules: {
                kuladi: {
                    required: true,
                    minlength: 5,
                    maxlength: 15,
                },
                sifre: {
                    required: true,
                    minlength: 5,
                    maxlength: 15,
                }
            },
            submitHandler: function (form) { // for demo
                kuladi = "1";
                sifre = "2";

                $.post(anadizintam + "postlar/giris_yap",{phpkuladi:kuladi, phpsifre:sifre}, function (data) {
                    alert(data);
                });
            }
        });

    });
</script>

</body>
</html>
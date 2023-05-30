
<script src="../uygulama/kaynak/yonetici/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/off-canvas.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/hoverable-collapse.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/misc.js"></script>
<script src="../uygulama/kaynak/yonetici/assets/js/ozeljqueryvalidate.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>-->

<script>
    anadizintam = "http://localhost/php_learn/turkish/suleymantalip_blog/";
    $(document).ready(function () {

        //
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
                var formcu = ($("#giris_form").serialize());
                $.post(anadizintam + "postlar/giris_yap",{form_veri: formcu}, function (data) {
                   if(data.islem == "kul_yok"){
                        alert("Kullanici olmadigi icin giris yapilamaz");
                   }else if(data.islem == "sifre"){
                       alert("Sifreniz dogru deyil");
                   }else if(data.islem == "giris"){
                       alert("Giris basarili. Yonlendiriliyorsunuz ... ");
                       location.reload();
                   }
                }, "json");
            }
        });

        $('#blog_yeni_yazi').validate({// initialize the plugin
            rules: {
                baslik: {
                    required: true,
                },
                k_baslik: {
                    required: true,
                },
                kategori: {
                    required: true,
                },
                durum: {
                    required: true,
                },
                icerik: {
                    required: true,
                }
            },
            submitHandler: function (form) { // for demo


                var formData = new FormData();
                $.each($(".dosyaci"), function (i) {
                    formData.append('files[]', $(".dosyaci")[i].files[0]);
                });
                var formcu = ($("#blog_yeni_yazi").serialize());
                formData.append('formcu', formcu);
                $.ajax({
                    url: anadizintam + "postlar/yeni_blog_ekle", // point to server-side PHP script
                    dataType: 'text', // what to expect back from the PHP script
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        if (data.islem == "basarili")
                        {
                            location.href = anadizintam + "yonetici/yazilarim/" + data.id;
                        }

                    },
                    error: function (data) {
                        alert("Hata");
                        console.log(data);
                    }
                });





            }
        });



    });
</script>

</body>
</html>
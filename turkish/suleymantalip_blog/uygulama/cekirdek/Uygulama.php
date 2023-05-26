<?php

class Uygulamalar
{
    /*  call_user_func_array metodununun islemesi ucun deyisenler teyin eidlir */
    protected $kontroller = 'misafir';
    protected $metod = 'index';
    protected $parametre = [];

    public function __construct()
    {
        /*  burada parseUrl metodundan array formasinda aldigimiz url-ni $url deyisenine assign eidrik  */
        $url = $this->parseUrl();

        /*
         * isset() ile $url arrayinde olan 0-ci indexin olub olmadigini yoxlayiriq
         * file_exists ile kontroller papkasinda olan kontroller faylimizin olub olmadigini yoxlayiriq
         * if-e daxil olduqdan sonra kontrollerimize $url[0] da olan stringi assign edirik
         * unset metodu ile $url[0]-in icini bosaldiriq
        */
        if (isset($url[0])) {
            if (file_exists('uygulama/kontroller/' . $url[0] . '.php')) {
                $this->kontroller = $url[0];
                unset($url[0]);
            }
        }
        // burada $this->kontroller-imizi yazdiraraq faylimizi daxil edirik

        require_once 'uygulama/kontroller/' . $this->kontroller . '.php';
        //daha sonra bu adda yeni class yarat ve eyni deyisene assign et
        $this->kontroller = new $this->kontroller;

        /*
         * isset() ile $url arrayinde olan 1-ci indexin olub olmadigini yoxlayiriq
         * method_exists ile yuxarida qeyd etdiyimiz kontroller faylinda olan $url[1]-de yazilan metodun olub olmadigini yoxlayiriq
         * if-e daxil olduqdan sonra kontrollerimizde olan metoda $url[1]-de olan stringi assign edirik
         * unset metodu ile $url[1]-in icini bosaldiriq
        */
        if (isset($url[1])) {
            if (method_exists($this->kontroller, $url[1])) {
                $this->metod = $url[1];
                unset($url[1]);
            }
        }

        //parametre yaradiriq url varsa arrayformasinda deyerleri gotur yxosa bos array et
        $this->parametre = $url ? array_values($url) : [];
        //                     Control            Metod          Parametr
        call_user_func_array([$this->kontroller, $this->metod], $this->parametre);
    }

    /*
     *  parseUrl funksiyasi vasitesile get hissesinde olan url alinir,
     * slash-lere gore bolunub array formatina getirilir
    */
    public function parseUrl()
    {
        // isset böyle bir nesne varmı ? diye kontrol eder
        if (isset($_GET["url"])) {
            return $url = explode('/', filter_var(rtrim($_GET["url"], '/'), FILTER_SANITIZE_URL));
        }
    }

}

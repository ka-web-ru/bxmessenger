<?
IncludeModuleLangFile(__FILE__);
class Messenger extends CBitrixComponent
{
    private $hello = 'y';
    private $active = 'n';
    private $autor = '';
    private $login = '';
    private $reg_start = 'n';
    private $reg_end = 'n';
//    public static function getInstance()
//    {
//        if (!isset(self::$instance))
//            self::$instance = new Messenger;
//
//        return self::$instance;
//    }
    private function rus2translit($text)
    {
        // Русский алфавит
        $rus_alphabet = array(
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
            'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
            'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
            'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
            'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
            'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
        );

        // Английская транслитерация
        $rus_alphabet_translit = array(
            'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
            'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
            'H', 'C', 'CH', 'SH', 'SH', '', 'Y', '', 'E', 'YU', 'YA',
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
            'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
            'h', 'c', 'ch', 'sh', 'sh', '', 'y', '', 'e', 'yu', 'ya'
        );

        return str_replace($rus_alphabet, $rus_alphabet_translit, $text);
    }
    public function isHello()
    {
        return $this->hello;
    }
    public function setHello($hlo)
    {
            $this->hello = $hlo;
    }
    public function isActive()
    {
        return $this->active;
    }
    public function setActive($act)
    {
            $this->active = $act;
    }
    public function isRegStart()
    {
        return $this->reg_start;
    }
    public function setRegStart($rs)
    {
        $this->reg_start = $rs;
    }
    public function isRegEnd()
    {
        return $this->reg_end;
    }
    public function setRegEnd($re)
    {
        $this->reg_end = $re;
    }
    public function setLogin($lg)
    {
        $this->login = self::rus2translit($lg);
    }
    public function isLogin()
    {
        return $this->login;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($nick)
    {
        if($nick != ''){
            $this->autor = $nick;
        }
    }
}

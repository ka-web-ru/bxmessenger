<?
IncludeModuleLangFile(__FILE__);
class Messenger extends CBitrixComponent
{
    private $autor = '';
//    public static function getInstance()
//    {
//        if (!isset(self::$instance))
//            self::$instance = new Messenger;
//
//        return self::$instance;
//    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($nick)
    {
        $this->autor = $nick;
    }
}

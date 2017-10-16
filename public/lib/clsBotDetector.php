<?PHP
/**
 * Easy Bot Detection
 *
 * @author      Muneeb <m4munib@hotmail.com>
 * @copyright   Muneeb <m4munib@hotmail.com>
 * @twitter     http://twitter.com/#!/muhammadmunib
 */
class clsBotDetector
{
    protected $_user_agent = '';
    protected $_bots =  array
    (
        "008","ABACHOBot","Accoona-AI-Agent","AddSugarSpiderBot","AnyApexBot","Arachmo","B-l-i-t-z-B-O-T","Baiduspider","BecomeBot",
        "BeslistBot","BillyBobBot","Bimbot","Bingbot","BlitzBOT","boitho.com-dc","boitho.com-robot","btbot","CatchBot","Cerberian Drtrs",
        "Charlotte","ConveraCrawler","cosmos","Covario IDS","DataparkSearch","DiamondBot","Discobot","Dotbot","EARTHCOM.info","EmeraldShield.com WebBot",
        "envolk[ITS]spider","EsperanzaBot","Exabot","FAST Enterprise Crawler","FAST-WebCrawler","FDSE robot","FindLinks","FurlBot","FyberSpider",
        "g2crawler","Gaisbot","GalaxyBot","genieBot","Gigabot","Girafabot","Googlebot-Image","Googlebot","GurujiBot","HappyFunBot","hl_ftien_spider",
        "Holmes","htdig","iaskspider","ia_archiver","iCCrawler","ichiro","igdeSpyder","IRLbot","IssueCrawler","Jaxified Bot","Jyxobot","KoepaBot",
        "L.webis","LapozzBot","Larbin","LDSpider","LexxeBot","Linguee Bot","LinkWalker","lmspider","lwp-trivial","mabontland","magpie-crawler",
        "Mediapartners-Google","MJ12bot","MLBot","Mnogosearch","mogimogi","MojeekBot","Moreoverbot","Morning Paper","msnbot","MSRBot","MVAClient",
        "mxbot","NetResearchServer","NetSeer Crawler","NewsGator","NG-Search","nicebot","noxtrumbot","Nusearch Spider","NutchCVS","Nymesis","obot",
        "oegp","omgilibot","OmniExplorer_Bot","OOZBOT","Orbiter","PageBitesHyperBot","Peew","polybot","Pompos","PostPost","Psbot","PycURL","Qseero",
        "Radian6","RAMPyBot","RufusBot","SandCrawler","SBIder","ScoutJet","Scrubby","SearchSight","Seekbot","semanticdiscovery","Sensis Web Crawler",
        "SEOChat::Bot","SeznamBot","Shim-Crawler","ShopWiki","Shoula robot","silk","Sitebot","Snappy","sogou spider","Sosospider","Speedy Spider",
        "Sqworm","StackRambler","suggybot","SurveyBot","SynooBot","Teoma","TerrawizBot","TheSuBot","Thumbnail.CZ robot","TinEye","truwoGPS","TurnitinBot",
        "TweetedTimes Bot","TwengaBot","updated","Urlfilebot","Vagabondo","VoilaBot","Vortex","voyager","VYU2","webcollage","Websquash.com","wf84",
        "WoFindeIch Robot","WomlpeFactory","Xaldon_WebSpider","yacy","Yahoo! Slurp","Yahoo! Slurp China","YahooSeeker","YahooSeeker-Testing","YandexBot",
        "YandexImages","YandexMetrika","Yasaklibot","Yeti","YodaoBot","yoogliFetchAgent","YoudaoBot","Zao","Zealbot","zspider","ZyBorg", "teoma" ,"bot", "spieder", "crawler", "walker"
   );
    
    protected $_black_list = array(); //lowercase values
    protected $_notification_list = array(); //lowercase values
    
    protected $_is_detected = false;

    protected $_detected_value = '';
 
    protected $_is_init = false;
    
    
    /**
     * Constructor - User agent will be fetched from Globals if not provided
     * @param type $user_agent 
     */
    public function __construct($user_agent='')
    {
        if($user_agent == '')
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
        
        $this->_user_agent = strtolower($user_agent);
        
    }
    
    public function setBots($bots)
    {
        $this->_bots = array_merge($this->_bots, (array)$bots);
    }
    
    public function setBlackList($black_list)
    {
        $this->_black_list = (array)$black_list;
    }
    
    
    public function setNotificationList($notification_list)
    {
        $this->_notification_list = (array)$notification_list;
    }
    
    /**
     *
     * @param type $type
     * @example $oDetect = new clsDetect();
     * try{
     *  if($oDetect->Detect()->isDetected())
        {
            echo "Detected";
        }
        else
        {
            echo "Not Detected";
        }
     * }catch(Exception $ex){ echo $ex->getMessage(); }
     * @return $this 
     */
    public final function Detect()
    {
  
        $this->_init();
        
        return $this; // for Method Chaining :)
    }
    

    public function getDetectedValue()
    {
        return $this->_detected_value;
    }
    
    public function isDetected()
    {
        return $this->_is_detected;
    }
    
    /**
     * Wrapper method to support this class naming conventions
     * @return string
     */
    public function getBot()
    {
        return $this->getDetectedValue();
    }
    
     /**
     *
     * @param type $method
     * @param type $args
     * @return bool
     * @usage isIE() or isChrome or isFirefox  
     */
    public function __call($method, $args)
    {
        $method = strtolower($method);
        
        $this->_is_valid = (strpos($method, 'is') !== false) && (substr($method, 0, 2) == 'is');
         
        if($this->_is_valid == false)
        {
            throw new Exception("Invalid operation - Method ".$method." doesn't exist");
        }
        
    
        $this->_init();
        
        $explode = explode('is', $method);
        $bot = strtolower($explode[1]);
        
        return ($this->_detected_value == $bot);
    }
    
    private function _init()
    {
        if($this->_is_init == false)
        {
            $this->_is_detected = false;
            $this->_is_init = true;

            $this->_Detect();
        }
    }
    
    public function isBlackListed()
    {
        if(count($this->_black_list) == 0)
            return false; // nothing to check
     
        $this->_init();
        
        if(in_array($this->_detected_value, $this->_black_list))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    

    protected function _Detect()
    {
        foreach($this->_bots as $key => $bot)
        {
            if (preg_match("#($bot)[/ ]?([0-9.]*)#", $this->_user_agent, $match))
            {
                $this->_is_detected = true;
                $this->_detected_value = $match[1];
                break ;
            }
        }
    }
}
<?
declare(encoding='UTF-8');
/**
 * The c overflow Plugin uses c to identify some overflow risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */
namespace Yasca\Plugins\BuiltIn\Overflow\C_OVERFLOW;

trait Base {
	use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult(){
    	return (new \Yasca\Result)->setOptions([
			'severity' => 1,
	        'category' => 'C_OVERFLOW Overflow',
	        'references' => [
    			'https://www.fortify.com/vulncat/en/vulncat/c/OVERFLOW.html' =>
    				'Fortify: VulnCat OVERFLOW ',
	        	'http://en.wikipedia.org/wiki/COMMAND_injection' => 'Wikipedia: OVERFLOW',
	        ],
	        'description' => <<<'EOT'
		unknown
EOT
,		]);
    }
}
<?
declare(encoding='UTF-8');
namespace Yasca\Plugins\BuiltIn\Injection\COMMAND;

trait Base {
	use \Yasca\Plugins\BuiltIn\Base;

    protected function newResult(){
    	return (new \Yasca\Result)->setOptions([
			'severity' => 1,
	        'category' => 'COMMAND Injection',
	        'references' => [
    			'https://www.fortify.com/vulncat/en/vulncat/java/COMMAND_injection.html' =>
    				'Fortify: VulnCat COMMAND Injection',
	        	'http://en.wikipedia.org/wiki/COMMAND_injection' => 'Wikipedia: COMMAND Injection',
	        ],
	        'description' => <<<'EOT'
COMMAND injection is a code injection technique that exploits a security vulnerability
occurring in the system layer of an application. The vulnerability is present when
user input is either incorrectly filtered for string literal escape characters
embedded in shell code statements. It is an instance of a more general class of vulnerabilities that can occur
whenever one programming or scripting language is execute system command.
EOT
,		]);
    }
}
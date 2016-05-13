<?
declare(encoding='UTF-8');
/**
 * The c overflow Plugin uses c to identify some overflow risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */

namespace Yasca\Plugins\BuiltIn\Overflow\C_OVERFLOW;

final class C extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['C' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		\s{1,}strcpy\(\S*				|
		\s{1,}memcpy\(\S*			    |
		\s{1,}realloc\(\S*		        |
		\s{1,}sprintf\(\S*				|
		\s{1,}scanf\(\S*				|
		\s{1,}gets\(\S*					
		
`u
EOT;
    }

}
<?
declare(encoding='UTF-8');
/**
 * The c sql injection Plugin uses c to identify some sql injection risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */
namespace Yasca\Plugins\BuiltIn\Injection\SQL;

final class C extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['C' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		\"select\s.*\sfrom\s.*	        |
	    \"delete\s.from\s.              |
		\"insert\s+into\.*\s.*			|
		\"update\s+.*\sset\s.*	        |
		\"SELECT\s.*\sFROM\s.*	        |
	    \"DELETE\s.FROM\s.              |
		\"INSERT\s+INTO\.*\s.*			|
		\"UPDATE\s+.*\sSET\s.*	
`u
EOT;
    }

}
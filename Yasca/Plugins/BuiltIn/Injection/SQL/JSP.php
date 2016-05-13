<?
declare(encoding='UTF-8');
/**
 * The jsp sql injection Plugin uses jsp to identify some sql injection risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */

namespace Yasca\Plugins\BuiltIn\Injection\SQL;
use \Yasca\Plugins\BuiltIn\Injection\SourceSink;

final class JSP extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['JSP' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		select\s\S.*\s.from\s.*  	|
	    delete\sfrom\s.*  	        |
		insert\s+into\.*\s.*	    |
		\"update\s+.*\sset\s.*	        |
		\"SELECT\s.*\sFROM\s.*	        |
	    \"DELETE\s.FROM\s.              |
		\"INSERT\s+INTO\.*\s.*			|
		\"UPDATE\s+.*\sSET\s.*	
`u
EOT;
    }

}
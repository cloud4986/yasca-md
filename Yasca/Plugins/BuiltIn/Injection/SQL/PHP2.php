<?
declare(encoding='UTF-8');
/**
 * The javascript sql injection Plugin uses javascript to identify some sql injection risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */

namespace Yasca\Plugins\BuiltIn\Injection\SQL;
use \Yasca\Plugins\BuiltIn\Injection\SourceSink;

final class PHP2 extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['PHP' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		select\s\S.*\s.from\s.*  	|
	    delete\sfrom\s.*  	        |
		insert\s+into\.*\s.*	    |
		update\s+.*\sset\s.*		|
	    SELECT\s\S.*\sFROM\s        |
	    DELETE\s.FROM\s.            |
	    INSERT\s+INTO\.*\s.*	    |
		UPDATE\s+.*\sSET\s.*				
`u
EOT;
    }

}

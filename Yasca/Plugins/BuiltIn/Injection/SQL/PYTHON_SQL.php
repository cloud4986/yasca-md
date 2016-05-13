<?
declare(encoding='UTF-8');
namespace Yasca\Plugins\BuiltIn\Injection\SQL;

final class PYTHON_SQL extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['PYTHON' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		\"select\s.\S*\sfrom\s.         |
	    \"delete\s.from\s.*	            |
		\"insert\s+into\.*\s.*			|
		\"update\s+.*\sset\s.*			|
		\.execute\(								
`u
EOT;
    }

}
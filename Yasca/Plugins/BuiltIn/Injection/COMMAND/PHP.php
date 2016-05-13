<?
declare(encoding='UTF-8');

namespace Yasca\Plugins\BuiltIn\Injection\COMMAND;
use \Yasca\Plugins\BuiltIn\Injection\SourceSink;
use \Yasca\Plugins\BuiltIn\Injection\SourceRegexPhp;

final class PHP extends \Yasca\Plugin {
	use Base, SourceSink, SourceRegexPhp {
		SourceRegexPhp::getIdentifierRegexFragment insteadof SourceSink;
	}
	protected function getSinkRegexFragment(){return <<<'EOT'
((?xi)
	\b
	(
		exec\(			|
		system\(		|
		passthru\(		|
		shell_exec\(	|
		\`				|
		popen\(
	)
)
EOT;
	}
}
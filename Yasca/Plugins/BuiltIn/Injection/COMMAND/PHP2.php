<?
declare(encoding='UTF-8');
/**
 * The python command injection Plugin uses php to identify some command injection risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */
namespace Yasca\Plugins\BuiltIn\Injection\COMMAND;

final class PHP2 extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['PHP' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		exec\(			|
		system\(		|
		passthru\(		|
		shell_exec\(	|
		popen\(
`u
EOT;
    }

}
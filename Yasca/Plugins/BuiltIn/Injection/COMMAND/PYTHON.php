<?
declare(encoding='UTF-8');
/**
 * The python command injection Plugin uses python to identify some command injection risks in the application.
 *
 * Plugin by Yingjun Yang, 3/20/2016.
 * @author Yingjun Yang <cloud4986.163.com> (version 1)
 */
namespace Yasca\Plugins\BuiltIn\Injection\COMMAND;

final class PYTHON extends \Yasca\Plugin {
    use Base, \Yasca\Plugins\BuiltIn\SimpleFileContentsRegex;

    protected function getSupportedFileClasses(){return ['PYTHON' ];}

    protected function getRegex(){return <<<'EOT'
`(?ix)
		os.system\(						|
		os.popen\(						|
		commands\.getstatusoutput\(		|
		commands\.output\(				|
		subprocess\.popen\(				|
		subprocess\.call\(				|
		subprocess\.check_call\(		|
		subprocess\.check_out\(
`u
EOT;
    }

}
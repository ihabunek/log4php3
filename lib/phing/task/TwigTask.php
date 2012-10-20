<?php

/**
 * Renders the log4php manual using Twig with a Textile filter.
 */
class TwigTask extends Task
{
    /** Location of page templates. */
    private $templateDir;

    /** Location to which the pages are rendered. */
    private $targetDir;

    /** Sets of files to render. */
    private $filesets;

    public function setTemplates($dir)
    {
        $this->templateDir = rtrim($dir, '/');
    }

    public function setTarget($dir)
    {
        $this->targetDir = rtrim($dir, '/');
    }

    public function addFileSet(FileSet $fs)
    {
        $this->filesets[] = $fs;
    }

    public function main()
    {
        $project = $this->getProject();

        foreach ($this->filesets as $fs) {
            $ds = $fs->getDirectoryScanner($project);
            $dir  = $fs->getDir($project)->getPath();

            $this->log("Processing source directory: $dir");
            $this->log("Rendering to target directory: " . $this->targetDir);

            $loader = new Twig_Loader_Filesystem(array($this->templateDir, $dir));
            $twig = new Twig_Environment($loader);

            $function = new Twig_Filter_Function('TwigTask::textile', array('is_safe' => array('html')));
            $twig->addFilter('textile', $function);

            $files = $ds->getIncludedFiles();
            foreach ($files as $file) {
                $template = $twig->loadTemplate($file);
                $content = $template->render(array());

                $targetFile = preg_replace('/\\.twig$/', '.html', $file);
                $targetPath = $this->targetDir . DIRECTORY_SEPARATOR . $targetFile;
                $targetDir = dirname($targetPath);

                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                if (false !== file_put_contents($targetPath, $content)) {
                    $this->log("Rendered: $targetFile");
                } else {
                    throw new \Exception("Failed rendering template.");
                }
            }
        }
    }

    public static function textile($input)
    {
        $textile = new Textile('html5');
        return $textile->TextileThis($input);
    }
}

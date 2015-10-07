<?php

namespace NielsHoppe\Goodies\Filesystem;

class Util {

    public static function ls($dir, $pattern = "/.*/") {
        $files = array();
        $it = new DirectoryIterator($dir);
        foreach ($it as $f) {
            if ($f->isFile()) {
                $files[] = $dir . DIRECTORY_SEPARATOR . $f->getFilename();
            }
        }
    	return preg_grep($pattern, $files);
    }
}

<?php
/*
    PHP Live Transcode -- HTML5 and Flash streaming with live transcoding.
    Copyright (C) 2010  Matthias -apoc- Hecker <http://apoc.cc>

	Forked by firefly2442
	8/31/11
	https://github.com/firefly2442/php-live-transcode

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/



/* you may want to specify absolute paths */
define('FFMPEG', 'ffmpeg'); /* used for transcoding*/
define('MPLAYER', 'mplayer'); /* used to gather file information */

define('FFMPEG_MAX_INSTANCES', '3'); /* how many ffmpeg instances are allowed to run (thats x concurrent viewers) */

//This doesn't work for some codecs
//define('FFMPEG_THREADS', 0); /* how many threads should ffmpeg use? 0 means that it will select the optimal number of threads */

define('FFMPEG_PRIORITY', '15'); /* man nice */

define('CHUNKSIZE', 500*1024); /* how many bytes should fread() read from stdout of FFmpeg? */

define('DEBUG_LOG', '/srv/media/streamer.log'); /* very useful debug information. logs stderr of ffmpeg! */

define('MEDIA_PATH', '/srv/media'); /* the folder is accessible by create.php/<filename> subfolders are not supported! */
/* make sure php can read it (openbasedir etc.) */
$mediatypes = array(".mkv", ".avi", ".mov");	/* This will limit the displaying and linking to files with these extensions on the index.php page. */
define("MEDIATYPES", serialize($mediatypes));


// php-live-transcode version (you don't need to change this)
$version = "0.1";

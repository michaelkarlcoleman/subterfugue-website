<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0 Level 2//EN">
<html>
  <head>
    <title>SUBTERFUGUE</title>
  </head>

  <body bgcolor="#FFFFFF" text="#000000">
    <img src="subterfugue.png" alt="SUBTERFUGUE">
    <hr noshade>
    <em>Latest Version: 0.2.1 ("phantom")</em>
    <hr noshade>

    <p>
      SUBTERFUGUE is a framework for observing and playing with the reality of
      software; it's a foundation for building tools to do tracing,
      sandboxing, and many other things.  You could think of it as
      "<em>strace</em> meets <em>expect</em>."

      <hr>
      <b>
[2002-04-06] Update:
<p>
Regrettably, the SUBTERFUGUE project has been nearly dormant for over a year
now, with just minimal updates to catch up to Python 2.1 and fix a few bugs.
<p>
It's become clear that I'm not going to have the time needed to properly
maintain it and do the new development needed to turn it from an interesting
(IMO) prototype to a reliable tool.  Therefore, I'm writing this to announce
that I'm looking for one or more people to take it over.  If you're
interested, or think you might be, please subscribe to subterfugue-dev and
post a message indicating your interest (and maybe a bit about your skills
and/or where you'd like to see SUBTERFUGUE go).
<p>
I will gladly offer information, advice and a roadmap of what I believe are
the most important things that need to be fixed or implemented, but the future
direction of SUBTERFUGUE will be up to you who take it over.
<p>
(If you're wondering, I've taken a job as a scientific programmer at a
biomedical research facility, and learning bioinformatics and biology in
general is taking up all of my time.)
<p>
--Mike
      </b>
      <hr>

    <h2>Features</h2>
    <ul>
      <li>simple interface for writing tools
      <li>can follow, rewrite, and annul system calls
      <li>can follow, rewrite, and annul signals (with limits)
      <li>follows whole process (and thread) trees
      <li>can follow across fork, vfork, and clone
      <li>has a fairly good wait4 emulation
      <li>can follow job control (with limits)
    </ul>

    <h2>Documentation</h2>
    <ul>

      <li>a <em><a href="description.html">description</a></em> with more
	detail on SUBTERFUGUE's many features and <b>limitations</b>

      <li>the <em><a href="motivation.html">motivation</a></em> behind
	SUBTERFUGUE

      <li>some <em><a href="screenshot.html">screenshots</a></em>, giving
	concrete examples of what you can do with SUBTERFUGUE

      <li>a <em><a href="tutorial.html">tutorial</a></em>, which walks through
	the steps of using and writing new tricks for SUBTERFUGUE

      <li>a <em><a href="faq.html">FAQ</a></em> list

    </ul>


    <h2>Trying it out</h2>
    <p>
      SUBTERFUGUE runs under Linux 2.4.  It's implemented
      in <a href="http://www.python.org">Python</a>, including a few Python
      extension modules written in C.  Python 1.5.2 or later is required.

    <p>
      You can <b>download</b> the latest version of SUBTERFUGUE from the <a
      href="https://sourceforge.net/projects/subterfugue">SUBTERFUGUE project
      page</a> at SourceForge.  A <a href="http://www.debian.org">debian</a>
      package is now available, too.

    <h2>Mailing Lists</h2>

    <ul>
      <li><a href="http://lists.sourceforge.net/mailman/listinfo/subterfugue-announce">subterfugue-announce</a> 
	- new release and other important announcements
      <li><a href="http://lists.sourceforge.net/mailman/listinfo/subterfugue-dev">subterfugue-dev</a>
	- developer traffic
      <li><a href="http://lists.sourceforge.net/mailman/listinfo/subterfugue-cvs-commits">subterfugue-cvs-commits</a>
	- voluminous cvs commit logs
    </ul>

    <p>
      Please send bug reports, comments and patches to subterfugue-dev.

    <h2>License</h2>
    <p>
      SUBTERFUGUE is <a href="http://www.gnu.org/philosophy/free-sw.html">free
      software</a>, and may be redistributed and used under the terms of the 
      <a href="http://www.gnu.org/copyleft/gpl.html#SEC1">GNU Public License</a>.

    <hr noshade>
      Thanks to <a
      href="https://sourceforge.net">SourceForge</a> for providing their
      &uuml;ber-cool hosting environment.

    <hr noshade>

    <A href="https://sourceforge.net">
      <IMG src="http://sourceforge.net/sflogo.php?group_id=1951&type=1"
      width="88" height="31" border="0" ALT="SourceForge" align="left"></A>

<?
$cf = "/home/groups/s/su/subterfugue/log/count";
$f = fopen($cf, "a");
fwrite($f, '.');
fclose($f);
$count = filesize($cf);
?>
<font size=-3>Copyright 2000, 2001  <a href="mailto:mkc-at-mathdogs.com">Mike Coleman</a>.
This page has been visited <? echo $count ?> times.</font><br>

    <em><font size="-6" color="#FFFFFF">

	       So, so you think you can tell, heaven from hell,
			    blue skies from pain.
	      Can you tell a green field from a cold steel rail?
			     A smile from a veil,
			  Do you think you can tell?

	                                    --Pink Floyd, "Wish you were here"

    </font></em>
  </body>
</html>

<!-- 
Local variables:
mode: sgml
End:
-->
